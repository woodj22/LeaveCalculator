<?php
/**
 * Created by PhpStorm.
 * User: JoeWood
 * Date: 02/10/2016
 * Time: 18:36
 */





class LeaveCalculator {


 function __construct($params){
        echo $params;


    }

public function getWeekNumber($datetime){


    $formatDate = new DateTime($datetime);
//    $year = $formatDate->format('Y');
//
//    $nextYear = $year +1;
//
//    $begin = new DateTime( $year.'-04-01' );
//    $end = new DateTime( $nextYear.'-03-31' );
//
//    $interval = DateInterval::createFromDateString('1 week');
//    $period = new DatePeriod($begin, $interval, $end);
//    $weekNumberArray = array();

//    foreach ( $period as $key=>$dt ) {
//    array_push($weekNumberArray,$dt->format("W"));
//
//    }

   $weekNumberArray = array_merge(range(40,52), range(1,39));
    
        //var_dump($weekNumberArray);

    $week = intval($formatDate->format("W"));
    $returnKey = $weekNumberArray[$week-1];

        echo $returnKey;
       // return $returnKey;
}

    public function daysHoliday($weekNumber,$totalHoliday){
        $seq = [0.5,1,1.5,2,2.5,3,3.5,4,4.5,5,5.5,6,6.6,7,7.5,8,8.5,9,9.5,10,10.5,11,11,11.5,12,12.5,13,13.5,14,14.5,15,15.5,16,16.5,17,17.5,18,18.5,19,19.5,20,20.5,21,21.5,22,22.5,23,23,23.5,24,24.5,25];
       // echo  $totalHoliday- $seq[$weekNumber];
       // echo  $seq[$weekNumber];
        return $totalHoliday- $seq[$weekNumber];
    }

}
$dfg =2016/04/01;

$date = $_GET['input'];


$lC = new LeaveCalculator($params);

$date = "2016/01/01";

$weekNumberKey = $lC->getWeekNumber($date);
$lC->daysHoliday($weekNumberKey,25);