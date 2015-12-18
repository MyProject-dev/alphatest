<?php
    require("../../../fs_folders/php_functions/connect.php");
    require("../../../fs_folders/php_functions/function.php");
    require("../../../fs_folders/php_functions/myclass.php");
    require("../../../fs_folders/php_functions/library.php");
    require("../../../fs_folders/php_functions/source.php");  
 

    /**
     * Created by PhpStorm.
     * User: Jesus
     * Date: 9/8/2015
     * Time: 7:10 PM
     */


    $mc = new myclass();

    //echo "<pre>";
    echo "saved";
    echo "brand category name = " . $_POST['brand_category_name'];
    echo "brand_category_gender = " . $_POST['brand_category_gender'];
    echo "data= " . $_POST['data'];



    $gender            = strtolower($_POST['brand_category_gender']);
    $data              = strtolower($_POST['data']);
    $brand_show_page   = strtolower($_POST['brand_show_page']);
    $brand_type        = strtolower($_POST['brand_type']);
    $visible           =  ($brand_show_page == 'welcome') ? 2 : 1;
    if ( strtolower($_POST['brand_type']) == 'brand' ) {
        echo "brand <br>";
        $bc_name  =  strtolower($_POST['brand_category_name']);
    }  else {
        echo "topic <br>";
        $bc_name  =  strtolower($_POST['topic_category_name']);
    }



echo "<br>
    bc_name = $bc_name <br>
    gender = $gender <br>
    data = $data <br>
    brand_show_page = $brand_show_page <br>
    brand_type = $brand_type <br>
    visible  = $visible <br>
";



    //get category id using category name and gender

    $save = true;
    if($brand_show_page == 'any where') {
        $save = false;
    }



    if($save) {


        if ($brand_type == 'topic') {

//            $db->select('fs_brand_category', '*', '', "bc_name =  '$bc_name' and type  = 'topic' ");



            
            $db->select('fs_tag_topic_category', '*', '', "name =  '$bc_name'");
            $bcno = $db->getResult()[0]['id'];
            // change to fs_tag_brand_category 
            // return brand category id 
            

        } else {
            $db->select('fs_brand_category', '*', '', "bc_name =  '$bc_name' and  gender = '$gender' and type  = 'brand' ");
             $bcno = $db->getResult()[0]['bcno'];
             echo " brand category no = " . $bcno . '<br>';

        }

       
        // Explode string data
        // remove front and last spaces
        // insert each data with the specific category and gender


            //check if new topic is not with topic name and topic category id 
 
            //if not exist
               //then insert new topic with topic name and topic category id

            //else 
               //done insert
        if (!empty($bcno)) {

            $string = explode(',', $data);
            for ($i = 0; $i < count($string); $i++) {
                $bname = strtolower(trim($string[$i]));
                // Insert brand where brand name not exist
                // Print status of the brand
                // brand name "Success or failed to add add reason for failed."

                if($brand_type == 'topic') {

                    if (!empty($bname)) {

                        echo __LINE__ . "  topic name is  empty<br>";

                        $db->select('fs_tag_topic', '*', '', "name = '$bname' and topic_category_id = $bcno");

                        $id = $db->getResult()[0]['id'];

                        if (empty($id)) {

                            echo __LINE__ . " $bname added <br>";
                            $db->insert('fs_tag_topic', array(
                                'name' => $bname, 
                                'topic_category_id'=>$bcno, 
                                'visible' => $visible)
                            );

                        } else {

                            echo __LINE__ . "  topic  is exist <br>";

                        }

                    }
                } else if (!empty($bname)) {

                    echo "bname = $bname bcno = $bcno 1 <br>";

                    $b = $db->select('fs_brands', '*', '', "bname = '$bname' and  bcno = '$bcno' ");

                    $tres = $db->numRows();
                    echo "tres $tres <br>";
                    if ($tres > 0) {
                        echo "Failed inserted $bname $gender exist<br>";
                    } else {
                        $b = $db->insert(
                            'fs_brands',
                            array(
                                'bname' => $bname,
                                'visible' => $visible,
                                'bcno' => $bcno,
                                'page' => $brand_show_page
                            )
                        );
                        if ($b) {
                            echo "Successfully inserted $bname <br>";
                        } else {
                            echo "Failed inserted $bname <br>";
                        }
                    } 


                }
            }
            $_SESSION['error'] = "List successfully uploaded<br>";



            $redirect = 'http://' . subDomain . 'fashionsponge.com/admindashboard?p=uploadbrands';


        } else {
            echo " Category = $bc_name and gender = $gender not found <br>";
            $_SESSION['error'] = " Category = $bc_name and gender = $gender not found <br>";
            //$redirect = 'http://localhost/fs/new_fs/alphatest/admindashboard?p=uploadbrands';
            $redirect = 'http://' . subDomain . 'fashionsponge.com/admindashboard?p=uploadbrands';
        }
    } else {
        $_SESSION['error'] = "Please select where to display this $brand_type. <br>";
        //$redirect = 'http://localhost/fs/new_fs/alphatest/admindashboard?p=uploadbrands';
        $redirect = 'http://' . subDomain . ' fashionsponge.com/admindashboard?p=uploadbrands';

        
    }

exit;
    $mc->go($redirect) ;
?>
