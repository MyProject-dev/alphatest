<?php
/**
 * Created by PhpStorm.
 * User: Jesus
 * Date: 10/17/2015
 * Time: 3:22 PM
 */

namespace App;

class Invited {

    private $table = 'fs_invited';
    private $db = '';
    function __construct($db) {
        $this->db = $db;
    }

    /**
     * reset all the data
     * @param int $version
     * @return mixed
     */
    public function resetData($version=1) {
        // reset code here
        return  $this->db->update($this->table,
            array('invited_status'=>0,
                'signup_status'=>0, 'temail_sent'=>0
            ),
            ' scrape_version > ' . -1
        );
    }

    /**
     * Delete all invalid emails
     * @return bool
     */
    public function removeInvalidEmail() {
        $invited = $this->db->selectV1($this->table, '*', 'invited_id > 0');
        for($i=0; $i<count($invited); $i++) {
            $email = $invited[$i]['invited_email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                echo("$email is a valid email address\n<br>");
            } else {
                echo("$email is not a valid email address");
                if($this->db->delete('fs_invited', 'invited_id = ' . $invited[$i]['invited_id'])){
                    echo "successfully deleted \n <br>";
                } else {
                    echo "failed to delete \n<br>";
                }
                echo "\n<br>";
            }
        }
        return true;
    }

    public function getAllInvited()
    {
        return 'getAllInvited()';
    }

    public function getInvitedReferred($invited_id)
    {
        return 'getInvitedReferred($invited_id)';
    }
}