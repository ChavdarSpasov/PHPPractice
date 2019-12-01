<?php
include "myPDO.php";

class Student
{
    private $db;

    public function __construct()
    {
        $this->db = new myPDO();
        $this->db->setErrorExeption();
    }

    public function studentsData()
    {
        $dataSt = $this->db->query('CALL students_data',PDO::FETCH_ASSOC);

       foreach ($dataSt as $value){
           print $value['student_data'];
           print PHP_EOL;
       }

    }

    public function addStudent(string $fName,string $lName,string $courseName,int $stNumber)
    {
        $this->checkStNumber($stNumber);

        $insertStudent = $this->db->prepare('INSERT INTO students (first_name, last_name, student_number) VALUES (?,?,?)');
        $insertStudent->execute([$fName,$lName,$stNumber]);

        $courseId = $this->checkCourseName($courseName);

        $stId = $this->db->prepare('SELECT student_id FROM students WHERE student_number = ?');
        $stId->execute([$stNumber]);
        $stNum = $stId->fetch(PDO::FETCH_ASSOC);


        $subscriptStudent = $this->db->prepare('INSERT INTO student_subscriptions VALUES (?,?)');
        $subscriptStudent->execute([$courseId,$stNum['student_id']]);

    }

    private function checkStNumber(int $student_number): void
    {
        $db_stm = $this->db->prepare('SELECT COUNT(*) as number_students FROM students WHERE student_number = ?');
        $db_stm->execute([$student_number]);
        $result = $db_stm->fetch(PDO::FETCH_ASSOC);

        if ($result['number_students'] > 0){
            throw new Exception('This student exist!');

        }
    }

    private function checkCourseName(string $courseName)
    {
        $db_stm = $this->db->prepare('SELECT * FROM courses WHERE course_name = ? ' );
        $db_stm->execute([$courseName]);
        $result = $db_stm ->fetch(PDO::FETCH_ASSOC);

        if ($result['course_name'] = $courseName){
            return $result['course_id'];
        }else{
            throw new Exception('There is no such course!');
        }
    }
}