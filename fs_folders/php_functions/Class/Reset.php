<?php
/**
 * Created by PhpStorm.
 * User: Jesus
 * Date: 10/9/2015
 * Time: 6:45 PM
 */

namespace App;

class Reset {

    private $table = 'reset';
    private $next_reset = '';
    public $dateNow =  '';
    private $what = 'look';
    private $time = '00:00';
    private $date = '';

    function __construct(){
        if($this->resetDateNow('look', ' +1 day')) {
            // echo "Posting access reseted <br>";
        } else {
            // echo "Posting access not reseted <br>";
        }
    }

    /**
     * Next day reset temporarily removed the time and set to 12 am
     * @param string $interval
     * @return bool|string
     */
    public function nextResetDate($interval='+ 1 day') {
        // $nextReset = date('Y-m-d H:i:s', strtotime( $this->getResetDate() . " $interval"));
        $nextReset = date('Y-m-d', strtotime( $this->getResetDate() . " $interval"));
       // echo "next reset  $nextReset <br> ";
        return $nextReset . ' 00:00';
    }


    /**
     * Reset is temporarily set to 12:00 am in any country timezone variable holding the date is @var $resetNow
     * @param $what
     * @param string $interval
     * @return bool
     */
    public function resetDateNow($what, $interval=' +1 day') {

        $this->dateNow = date("Y-m-d h:i:s");
        $resetNow = date("Y-m-d") . ' 00:00';

        // echo " reset now = $resetNow <br>";
        // echo "$this->dateNow >= " . $this->nextResetDate($interval) . "\n";

        if($this->dateNow >= $this->nextResetDate($interval)) {
            // if(mysql_query("update reset set time_reset = '".$this->nextResetDate($interval)."' where what = '$what' ")){
            // if(mysql_query("update reset set time_reset = '$this->dateNow' where what = '$what' ")){
            if(mysql_query("update reset set time_reset = '$resetNow' where what = '$what' ")) {
                //echo "time reset updated \n";
                return true;
            } else {
                //echo "time reset not updated \n";
                return false;
            }
        } else {
           // echo "Time not come, come not time, reset \n";
            return false;
        }
    }

    public function getResetDate($what='look') {
        $response = select_v3($this->table, '*', " what = '$what' order by id desc limit 1");
        return $response[0]['time_reset'];
    }

    /**
     * Not functional correctly yet.
     * @param string $interval
     * @return bool|\DateInterval
     */
    public function getRemainingTimeToResetAgain($interval=" +1 day") {
        //        $date1 = new DateTime($this->nextResetDate($interval));
        //        $date2 = new DateTime($this->dateNow);
        //
        //        $diff = $date2->diff($date1);
        //
        //        $hours = $diff->h;
        //        $hours = $hours + ($diff->days*24);
        //
        //        echo $hours;
    }
}