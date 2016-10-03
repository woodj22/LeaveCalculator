<?php
/**
 * Created by PhpStorm.
 * User: JoeWood
 * Date: 02/10/2016
 * Time: 18:36
 */


class LeaveCalculator {


public function getWeekNumber($datetime){


    $year = new DateTime($datetime);
    $year = $year->format('Y');

    $nextYear = $year +1;

    $begin = new DateTime( $year.'-04-01' );
    $end = new DateTime( $nextYear.'-03-31' );

    $interval = DateInterval::createFromDateString('1 week');
    $period = new DatePeriod($begin, $interval, $end);
    $weekNumberArray = array();

    foreach ( $period as $key=>$dt ) {
    array_push($weekNumberArray,$dt->format("W"));

    }

   // var_dump($weekNumberArray);

      // echo " ".$key;
    $date = new DateTime($datetime);
    $week = $date->format("W");

    $returnKey = array_search($week,$weekNumberArray);

       // echo $returnKey+1;

    return $returnKey;
    //  return $key +1;


}

    public function daysHoliday($weekNumber,$totalHoliday){
        $seq = array(0.5,1,1.5,2,2.5,3,3.5,4,4.5,5,5.5,6,6.6,7,7.5,8,8.5,9,9.5,10,10.5,11,11,11.5,12,12.5,13,13.5,14,14.5,15,15.5,16,16.5,17,17.5,18,18.5,19,19.5,20,20.5,21.5,22,22.5,23,23,23.5,24,24.5,25);
   //   $seqSort =  $seq[$weekNumber-1];
     //  $daysHoliday = 25 - $seqSort;
         // echo $daysHoliday;
           echo  $totalHoliday- $seq[$weekNumber];
            return $totalHoliday- $seq[$weekNumber];
    }

}



$lC = new LeaveCalculator();


$date = new DateTime();

$weekNumberKey = $lC->getWeekNumber($datetime = '2016/04/03');
$lC->daysHoliday($weekNumberKey,25);