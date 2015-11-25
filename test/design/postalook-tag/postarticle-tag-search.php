<?php
require ('../../../fs_folders/php_functions/Database/Database.php');
$database = new Database();
$database->connect();

$rowName = (!empty($_GET['rowName'])) ? $_GET['rowName'] : '';
$keyword = (!empty($_GET['keyword'])) ? $_GET['keyword'] : '';
$tagNum  = (!empty($_GET['tagNum']))  ?  $_GET['tagNum'] : '';




//    echo "keyword $keyword 1 searching article details $rowName <br>";



// echo " tagNum = $tagNum  <BR>";

if($rowName == 'topic-category') {

    $tableName = 'fs_tag_topic_category';
    $keyName = 'name';
    $keyId = 'id';
    $rowName = 'topic_category';

} else if($rowName == 'topic-item') {

    $tableName = 'fs_tag_topic';
    $keyName = 'name';
    $keyId   = 'id';
    $rowName = 'topic';

} else if($rowName == 'article-tag') {
    $tableName = 'fs_tag';
    $keyName = 'name';
    $keyId   = 'id';
    $rowName = 'tag';
}

// echo " select * from $tableName where $keyName LIKE '%$keyword%' order by $keyId desc limit 25";


if(empty($keyword)) {
    $database->select($tableName, '*', null,  " $keyId > 0",  " $keyId desc",  25);
} else {
    $database->select($tableName, '*', null,  " $keyName LIKE '%$keyword%'",  " $keyId desc",  25);
}


$response = $database->getResult();

if(!$response) {
    ?>

    Please click
    <em style='color:black; cursor: pointer' onclick="tag_select_item('<?php echo $rowName ?>', '<?php echo $keyword; ?>',  '0', '<?php echo $tagNum; ?>')" >
        <?php echo $keyword; ?>
    </em>
    If you think this <?php echo $rowName; ?> is <br> for this tag.
<?php
}
$response_total = count($response);
?>
    <ul>
        <?php for($k=0; $k<$response_total; $k++) { ?>
            <?php $name = $response[$k][$keyName];  ?>
            <?php $id = $response[$k][$keyId];  ?>
            <li> <span  onmouseover=" mouseOverImagePreview('<?php echo $rowName; ?>', '<?php echo  $id; ?>', '<?php echo $tagNum; ?>')" onclick="tag_select_item('<?php echo $rowName ?>', '<?php echo $name; ?>',  '<?php echo $id; ?>', '<?php echo $tagNum; ?>')" > <?php echo $name; ?> </span> </li>

        <?php } ?>
    </ul>