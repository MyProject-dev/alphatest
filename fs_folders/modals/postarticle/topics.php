<?php
    require("../../../fs_folders/php_functions/connect.php");
    require("../../../fs_folders/php_functions/function.php");
    require("../../../fs_folders/php_functions/Database/Database.php");
    require("../../../fs_folders/php_functions/Class/Article.php");
    require("../../../fs_folders/php_functions/Class/Reset.php");
    require("../../../fs_folders/php_functions/Class/Topic.php");
    require("../../../fs_folders/php_functions/Class/Category.php");
    require("../../../fs_folders/php_functions/Class/TopicCategory.php");

    use App\Topic;
    use App\TopicCategory;
    use App\Category;

    $db = new Database();
    $db->connect();
    $mno = 1021;
    $topic = new Topic( $db, $mno);
    $category1 = new Category($db, $mno);
    $topicCategory = new TopicCategory($db, $mno);

    //    echo "testing <br>";

    /**
    * just add space after '<?php echo $val; ?> ', like that instead of  '<?php echo $val; ?>' to add new line of topics.
    */
    $category = (!empty($_GET['category']))? $_GET['category'] : '';
    $page = (!empty($_GET['page']))? $_GET['page'] : '';
    $search = (!empty($_GET['search']))? $_GET['search'] : '';
    // echo "search for  $search  <br>";
    // echo  ' category = ' . $category . '<br><br>';
    $response = TRUE;

    /**
     * This function covers only for read article drop down
     * Get id of the category selected
     * @return $id
     */
    $id = $topicCategory->getIdByName($category);

    /**
     * Get all the topic by the category id
     * @return array()
     */
    $topicsArray = $topic->getTopicsByCategoryId($id);

    /**
     * Flatten array
     */
    for ($i = 0; $i < count($topicsArray); $i++) {
        $topics[] = $topicsArray[$i]['name'];
    }
?>
    <?php if($page == 'rate-article') { ?>
        <option>Select Topic</option>
        <?php for ($i=0; $i < count($topics); $i++) {  ?>
            <?php $val = $topics[$i];  ?>
            <?php $id  =  $i; ?> 
            <option><?php echo $val; ?></option>
        <?php } ?>
    <?php } else if(!empty($search)) {  ?> 
        <table border="0" cellpadding="0" cellspacing="0" style="margin-left: -16px;width: 280px !important;" >
            <tbody>
            <?php  
            $response = $topic->getByNameSearchWithInCategory($search, $category1->getIdByName($category));



            for ($i=0; $i < count($response); $i++) {  ?>
            <?php $val = $response[$i]['name'];  ?>
            <?php $id  =  $i; ?>
            </tr><tr> <td onclick="modal( 'get-value-selected' , '' , '' , '' , 'autocomplete-dropdown-container-occasion' , occasion , '<?php echo $val; ?>'  , '1' )"><?php echo $val; ?></td>
                <?php }  ?>
                <?php if(count($topics) == 1): ?>
            </tr><tr> <td onclick="modal( 'get-value-selected' , '' , '' , '' , 'autocomplete-dropdown-container-occasion' , occasion , '' , '1' )">Please select category first..</td>
                <?php endif;?>
            </tbody>
        </table> 
    <?php } else { ?>


        <table border="0" cellpadding="0" cellspacing="0" style="margin-left: -16px;width: 280px !important;" >
            <tbody>
            <?php for ($i=0; $i < count($topics); $i++) {  ?>
            <?php $val = $topics[$i];  ?>
            <?php $id  =  $i; ?>
            <?php  $topic->addIfNotExist($val, $category);   ?>
                </tr><tr> <td onclick="modal( 'get-value-selected' , '' , '' , '' , 'autocomplete-dropdown-container-occasion' , occasion , '<?php echo $val; ?>'  , '1' )"><?php echo $val; ?></td>
            <?php }  ?>
            <?php if(count($topics) == 1): ?>
                </tr><tr> <td onclick="modal( 'get-value-selected' , '' , '' , '' , 'autocomplete-dropdown-container-occasion' , occasion , '' , '1' )">Please select category first..</td>
            <?php endif;?>
            </tbody>
        </table>
    <?php } ?>
