<?php
session_start();
$_SESSION['time'] = 'class';
$_SESSION['db'] = 'db';
$_SESSION['totalGetInQueue'] = 1;
require ('fs_folders/modals/Server/addingNewQue.php');
