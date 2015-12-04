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
    $database->select($tableName, '*', null,  " $keyId > 0",  " $keyName asc",  24);
} else {
    $database->select($tableName, '*', null,  " $keyName LIKE '%$keyword%'",  " $keyName asc",  24);
}
$response = $database->getResult();




if($rowName != 'topic-category' and !$response) {
    echo "No result for <em style='color:black; cursor: pointer'> $keyword</em> please try another.";
} else if(!$response) { ?>

    Please click
    <em style='color:black; cursor: pointer' onclick="tag_select_item('<?php echo $rowName ?>', '<?php echo $keyword; ?>',  '0', '<?php echo $tagNum; ?>')" >
        <?php echo $keyword; ?>
    </em>
    If you think this <?php echo $rowName; ?> is <br> for this tag.
    <?php
}


$response_total = count($response);
?>

<!--prepare for sorting top to bottom-->
<?php
    $response_total = count($response)/3;
    if(is_float ($response_total)){
        $add = 1;
        $response_total = intval($response_total);
    } else{
        $add = 0;
    }
?>





<ul>
    <?php for($j=0; $j<3; $j++) { ?>
        <li>
            <table>
                <?php
                if($j == 0) {
                    $len = $response_total + $add;
                    $from = 0;
                } else if($j == 1) {
                    $len = $response_total + $response_total;
                    $from = $response_total;
                } else if($j == 2) {
                    $len = $response_total + $response_total + $response_total;
                    $from = $response_total + $response_total;
                }
                ?>
                <?php  for($k=$from; $k<$len; $k++):  ?>
                <tr>
                    <td>
                        <?php $name = $response[$k][$keyName];  ?>
                        <?php $id = $response[$k][$keyId];  ?>
                        <li> <span  onmouseover=" mouseOverImagePreview('<?php echo $rowName; ?>', '<?php echo  $id; ?>', '<?php echo $tagNum; ?>')" onclick="tag_select_item('<?php echo $rowName ?>', '<?php echo $name; ?>',  '<?php echo $id; ?>', '<?php echo $tagNum; ?>')" > <?php echo $name; ?> </span> </li>
                    </td>
                    <?php endfor; ?>
            </table>
        </li>
    <?php } ?>
</ul>
