<?php
    session_start();
    require ('../../../fs_folders/php_functions/Database/Database.php'); 
    $database = new Database();
    $database->connect();
    $rowName = (!empty($_GET['rowName'])) ? $_GET['rowName'] : '';
    $keyword = (!empty($_GET['keyword'])) ? $_GET['keyword'] : ''; 
    $tagNum  = (!empty($_GET['tagNum']))  ?  $_GET['tagNum'] : '';

    // echo " tagNum = $tagNum  <BR>";
    if($rowName == 'brand') {
        $tableName = 'fs_brands';
        $keyName = 'bname';
        $keyId   = 'bno';
    } else {
        $tableName = 'fs_tag_' . $rowName;
        $keyName = 'name';
        $keyId   = 'id';
    }
     // echo " select * from $tableName where $keyName LIKE '%$keyword%' order by $keyId desc limit 25";
    if(empty($keyword)) { 
        $database->select($tableName, '*', null,  " $keyId > 0",  " $keyName asc",  24);
    } else {
        $database->select($tableName, '*', null,  " $keyName LIKE '%$keyword%'",  " $keyName asc",  24);
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

<?php if($rowName == 'garment1') {  $j = 0; ?>

    <div  class="clear" > Clothing </div>
    <ul>
        <?php for($k=0; $k<rand(0,5); $k++) { ?>
            <li> <span onclick="tag_select_item('<?php echo $rowName ?>', '<?php echo $rowName . " name $k" ?>',  '<?php echo rand(767,780); ?>', '<?php echo $_GET['tagNum']  ?>')" > <?php echo $rowName; ?> name  <?php echo $k; ?> </span> </li>
        <?php } ?>
    </ul>

    <div class="clear" >  Shoes  </div>

    <ul>
        <?php for($k=6; $k<rand(6,10); $k++) { ?>
            <li> <span onclick="tag_select_item('<?php echo $_GET['rowName'] ?>', '<?php echo $_GET['rowName'] . " name $k" ?>',  '<?php echo rand(767,780); ?>', '<?php echo $_GET['tagNum']  ?>')" > <?php echo $_GET['rowName']; ?> name  <?php echo $k; ?> </span> </li>
        <?php } ?>
    </ul>

    <div class="clear" >  Accessories  </div>
    <ul>
        <?php for($k=11; $k<rand(11,15); $k++) { ?>
            <li> <span onclick="tag_select_item('<?php echo $_GET['rowName'] ?>', '<?php echo $_GET['rowName'] . " name $k" ?>',  '<?php echo rand(767,780); ?>', '<?php echo $_GET['tagNum']  ?>')" > <?php echo $_GET['rowName']; ?> name  <?php echo $k; ?> </span> </li>
        <?php } ?>
    </ul>

    <div class="clear" >  Bags  </div>
    <ul>
        <?php for($k=16; $k<rand(16,20); $k++) { ?>
            <li> <span onclick="tag_select_item('<?php echo $_GET['rowName'] ?>', '<?php echo $_GET['rowName'] . " name $k" ?>',  '<?php echo rand(767,780); ?>', '<?php echo $_GET['tagNum']  ?>')" > <?php echo $_GET['rowName']; ?> name  <?php echo $k; ?> </span> </li>
        <?php } ?>
    </ul>


    <div class="clear" >  Jewelry  </div>
    <ul>
        <?php for($k=21; $k<rand(21,25); $k++) { ?>
            <li> <span onclick="tag_select_item('<?php echo $_GET['rowName'] ?>', '<?php echo $_GET['rowName'] . " name $k" ?>',  '<?php echo rand(767,780); ?>', '<?php echo $_GET['tagNum']  ?>')" > <?php echo $_GET['rowName']; ?> name  <?php echo $k; ?> </span> </li>
        <?php } ?>
    </ul>
<?php } else { ?> 
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
                        $len = $response_total + $response_total + $response_total ;
                        $from = $response_total + $response_total;
                    }
                ?>



                <?php  for($k=$from; $k<$len; $k++):  ?>
                    <tr>
                        <td>
                            <?php $name = $response[$k][$keyName];  ?>
                            <?php $id = $response[$k][$keyId];  ?>
                            <span  onmouseover=" mouseOverImagePreview('<?php echo $rowName; ?>', '<?php echo  $id; ?>', '<?php echo $tagNum; ?>')" onclick="tag_select_item('<?php echo $rowName ?>', '<?php echo $name; ?>',  '<?php echo $id; ?>', '<?php echo $tagNum; ?>')" > <?php echo $name; ?> </span>
                        </td>
                <?php endfor; ?>
            </table>
        </li>
    <?php } ?>
</ul>

<?php } ?>