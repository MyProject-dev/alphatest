<?php  
    require ('../../../fs_folders/php_functions/Database/Database.php'); 
    $database = new Database();
    $database->connect(); 

    $rowName = (!empty($_GET['rowName'])) ? $_GET['rowName'] : '';
    $keyword = (!empty($_GET['keyword'])) ? $_GET['keyword'] : ''; 
    $tagNum  = (!empty($_GET['tagNum']))  ?  $_GET['tagNum'] : ''; 


    

    echo " tagNum = $tagNum  <BR>";
  
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
    <?php for($k=0; $k<$response_total; $k++) { ?>

        <?php $name = $response[$k][$keyName];  ?> 
        <?php $id = $response[$k][$keyId];  ?>
        <li> <span  onmouseover=" mouseOverImagePreview('<?php echo $rowName; ?>', '<?php echo  $id; ?>', '<?php echo $tagNum; ?>')" onclick="tag_select_item('<?php echo $rowName ?>', '<?php echo $name; ?>',  '<?php echo $id; ?>', '<?php echo $tagNum; ?>')" > <?php echo $name; ?> </span> </li>

    <?php } ?>
</ul>

<?php } ?>