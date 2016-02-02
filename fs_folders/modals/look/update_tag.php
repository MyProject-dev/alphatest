<?php
    require("../../../fs_folders/php_functions/connect.php");
    require("../../../fs_folders/php_functions/function.php");
    require("../../../fs_folders/php_functions/Database/Database.php");
    

    $db = new Database();
    $db->connect();
 
 
 
    $pltno = intval($_REQUEST['pltno']);
    $x = intval($_REQUEST['x']);
    $y = intval( $_REQUEST['y']);


    echo " pltno = $pltno x = $x y = $y<br>";


    if( $db->update(
            'fs_pltag',array('plt_x' => $x , 'plt_y'=> $y),
            " pltgno = " . $pltno)

         ) {
     
        echo "successfully updated <br>";
    } else {
        echo "failed to update <br>";
    }

