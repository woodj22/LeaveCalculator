<?php

/**
 * Created by PhpStorm.
 * User: JoeWood
 * Date: 02/10/2016
 * Time: 18:36
 */
class LeaveCalculator
{


    public function getWeekNumber($datetime)
    {

        $formatDate = new DateTime($datetime);
        $weekNumberArray = array_merge(range(40, 53), range(0, 39));
        $week = intval($formatDate->format("W")+1);
       // echo $week;
        return $weekNumberArray[$week];
    }

    public function holidayEntitlement($weekNumber)
    {
       // echo $weekNumber;
        $seq = [0.5, 1, 1.5, 2, 2.5, 3, 3.5, 4, 4.5, 5, 5.5, 6, 6.6, 7, 7.5, 8, 8.5, 9, 9.5, 10, 10.5, 11, 11, 11.5, 12, 12.5, 13, 13.5, 14, 14.5, 15, 15.5, 16, 16.5, 17, 17.5, 18, 18.5, 19, 19.5, 20, 20.5, 21, 21.5, 22, 22.5, 23, 23, 23.5, 24, 24.5, 25];
        echo 25- $seq[$weekNumber];
        return 25 - $seq[$weekNumber];
    }

}

$lC = new LeaveCalculator();
$date = $_GET['input'];
$weekNumberKey = $lC->getWeekNumber($date);
$lC->holidayEntitlement($weekNumberKey);

