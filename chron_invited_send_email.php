<?php
session_start();
$_SESSION['db'] = 'db';
$_SESSION['time'] = 'class';
$_SESSION['Message'] = 'class';
$_SESSION['Admin']   = 'class';
$_SESSION['Email']  = 'class';
$_SESSION['sendTotalEmailNow'] = 1;
require ('fs_folders/modals/Server/sendingNewInviteFromQueue.php');