<?php if($_GET['rowName'] == 'garment') {  $j = 0; ?>

    <div  class="clear" > Clothing </div>
    <ul>
        <?php for($k=0; $k<rand(0,5); $k++) { ?>
            <li> <span onclick="tag_select_item('<?php echo $_GET['rowName'] ?>', '<?php echo $_GET['rowName'] . " name $k" ?>',  '<?php echo rand(767,780); ?>', '<?php echo $_GET['tagNum']  ?>')" > <?php echo $_GET['rowName']; ?> name  <?php echo $k; ?> </span> </li>
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
    <?php for($k=0; $k<rand(30,50); $k++) { ?>
        <li> <span onclick="tag_select_item('<?php echo $_GET['rowName'] ?>', '<?php echo $_GET['rowName'] . " name $k" ?>',  '<?php echo rand(767,780); ?>', '<?php echo $_GET['tagNum']  ?>')" > <?php echo $_GET['rowName']; ?> name  <?php echo $k; ?> </span> </li>
    <?php } ?>
</ul>

<?php } ?>