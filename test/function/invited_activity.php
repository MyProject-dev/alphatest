<?php


require('../../fs_folders/php_functions/database/Database.php');
require('../../fs_folders/php_functions/database/InvitedActivity.php');


$db = new Database();


$db->select('fs_invited_queue q',
    'i.status',
    'fs_invited i on i.invited_id = q.fs_invited_id_fk',
    "q.fs_invited_queue_id_pk = 3"
);
print_r($db->getResult());



