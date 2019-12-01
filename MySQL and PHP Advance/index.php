<?php

include "student.php";


$input = explode(' ',trim(fgets(STDIN)));
$student = new Student();

while ($input[0] != 'end'){

    list($firstName,$lastName,$studentCourse,$studentNumber) = $input;

    try{

        $student->addStudent($firstName,
            $lastName,
            $studentCourse,
            (int)$studentNumber);

    }catch (Exception $e){
        $e->getMessage();
        print PHP_EOL;
    }
    $input = explode('',trim(fgets(STDIN)));
}

$student->studentsData();