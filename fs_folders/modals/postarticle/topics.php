<?php
    require("../../../fs_folders/php_functions/function.php");
    require("../../../fs_folders/php_functions/Database/Database.php");
    require("../../../fs_folders/php_functions/Class/Article.php");
    require("../../../fs_folders/php_functions/Class/Reset.php");
    require("../../../fs_folders/php_functions/Class/Topic.php");
    require("../../../fs_folders/php_functions/Class/Category.php"); 

    use App\Topic;
    use App\Category;
    $db = new Database();
    $db->connect();
    $mno = 1021;
    $topic = new Topic( $db, $mno);
    $category1 = new Category($db, $mno); 
    
    /**
    * just add space after '<?php echo $val; ?> ', like that instead of  '<?php echo $val; ?>' to add new line of topics. 
    */ 

    $category = (!empty($_GET['category']))? $_GET['category'] : '';
    $page = (!empty($_GET['page']))? $_GET['page'] : '';
    $search = (!empty($_GET['search']))? $_GET['search'] : '';
    // echo "search for  $search  <br>"; 
    // echo  ' category = ' . $category . '<br><br>'; 
    $response = TRUE;

    if($category == 'Beauty') {
        $topics = array('Beauty Book Review', 'Beauty Event', 'Beauty Workshop', 'Beauty Recipe', 'Celebrity Hair', 'Celebrity Makeup', 'Celebrity Nails', 'Celebrity Skin Care', 'Eye of the day', 'Face of The Day', 'Hair Tutorial', 'Hair Review', 'Nails Tutorial', 'Lip of the day', 'Makeup Haul', 'Makeup Review', 'Makeup Sale', 'Makeup Tool Review', 'Makeup Tutorial', 'Product Comparison ', 'Skincare Review', 'Hair', 'Nails', 'Make up', 'Skincare', 'Fragrance', 'Celebrity & Influencer  ', 'Fitness ', 'Diet & Nutrition', 'Cosmetic Treatment', 'Product Review', 'Product Haul', 'Make Sale', 'Beauty Event', 'Shopping Tips'); 
    } elseif($category == 'Entertainment') {
        $topics = array( 'Art ', 'Book', 'Celebrity Gossip', 'Concert', 'Festival', 'Movie ', 'Music', 'Television Show'); 
    } elseif($category == 'Fashion') {
        $topics = array('Celebrity ', 'Designer', 'DIY Fashion', 'Fashion Event', 'Fashion News', 'Fashion Photography', 'Mens Fashion', 'Product Review', 'OOTD ', 'Shopping', 'Store', 'Street Style', 'Styling Tip', 'Trends');
    } elseif($category == 'Lifestyle') {
        $topics = array('Automobile', 'Business', 'Cooking ', 'DIY & Crafts', 'Entertaining', 'Family & Friends', 'Food & Drinks', 'Health', 'Home', 'Money', 'Travel', 'Work'); 
    } else {
        $topics = array('');
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
