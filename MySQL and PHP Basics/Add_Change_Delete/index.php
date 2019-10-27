<?php
ini_set('display_errors',1);

$db = new PDO('mysql:host=localhost;dbname=php_course','root','rootpass');

//add records


$students = readline();

for ($i=0; $i < $students; $i++) { 

    $studentsData = explode(' ',trim(fgets(STDIN)));

    $first_name = $studentsData[0];
    $last_name = $studentsData[1];
    $student_number = $studentsData[2];
    
    if(count($studentsData) == 4){

        $phone = $studentsData[3];
    }else{
        $phone = null;
    }


    $pdoStm = $db->prepare("INSERT INTO students (first_name,last_name,student_number,phone) 
                            VALUES (:first_name,:last_name,:student_number,:phone)");

    $pdoStm->bindParam('first_name',$first_name);
    $pdoStm->bindParam('last_name',$last_name);
    $pdoStm->bindParam('student_number',$student_number);
    $pdoStm->bindParam('phone',$phone);

    $pdoStm->execute();

    
}

$lastInsert = $db->lastInsertId();

$dataResults = $db->prepare('SELECT first_name,last_name,student_number,phone FROM students 
                             WHERE id = ?');

$dataResults->execute([$lastInsert]);


$result = $dataResults->fetch(PDO::FETCH_ASSOC);

print "First Name : $result[first_name]" . PHP_EOL;
print "Last Name : $result[last_name]" . PHP_EOL;
print "Student Number : $result[student_number]" . PHP_EOL;
print "Phone : $result[phone]" . PHP_EOL;

print "<hr>";


// change records

$changeStudentInfo = explode(' ',readline());

list($infoId,$infoName,$infoValue)= $changeStudentInfo;

$changeData = $db->prepare("UPDATE students SET $infoName = ? WHERE id = ?");

$changeData->execute([$infoValue,$infoId]);

$allData = $db->query("SELECT id,first_name,last_name,student_number,phone from students",PDO::FETCH_NUM);

foreach($allData as $row){
    print implode(" | ",$row) . PHP_EOL;
}

// delete records

$deleteId = trim(fgets(STDIN));

var_dump($deleteId);

$deleteData = $db->prepare("DELETE FROM students WHERE id = :id");

$deleteData->bindParam('id',$deleteId);

$deleteData->execute();


$allData = $db->query("SELECT id,first_name,last_name,student_number,phone from students",PDO::FETCH_NUM);

foreach($allData as $row){
    print implode(" | ",$row) . PHP_EOL;
}
