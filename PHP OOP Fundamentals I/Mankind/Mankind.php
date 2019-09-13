<?php

include_once "Human.php";
include_once "Student.php";
include_once "Worker.php";

try {
    $studentData = explode(' ', trim(fgets(STDIN)));
    $workerData = explode(' ', trim(fgets(STDIN)));

    $myStudent = new Student($studentData[0],
                             $studentData[1],
                             $studentData[2]);

    $myWorker = new Worker($workerData[0],
                           $workerData[1],
                           $workerData[2],
                           $workerData[3]);

    print $myStudent;
    print "\n---------\n";
    print $myWorker;

}catch (Exception $ex){
   print $ex->getMessage();
}
