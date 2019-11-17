<?php

include "db_config.php";
include "Employee.php";


$input = explode(', ',trim(fgets(STDIN)));

var_dump($input);

while($input[0] != 'end'){
    if (count($input) == 6) {
        
        list($firstName,$middleName,$lastName,$department,$possition,$passportId) = $input;

        $setEmployee = new Employee($firstName,$middleName,$lastName,$department,$possition,$passportId);
        $setEmployee->insertEmployee($db);

        print "New employee " . 
                $setEmployee->getFirstName() .', '. 
                $setEmployee->getMiddleName() .', '. 
                $setEmployee->getLastName(). ' '. 'saved.' . PHP_EOL;

    }elseif($input[0] == 'Info' and count($input) == 3){
        $getEmailInfo = Employee::getEmails($db,$input[1],$input[2]);
        
        foreach($getEmailInfo as $Info){
            print "$Info[id], $Info[first_name],$Info[middle_name],$Info[last_name],$Info[department],$Info[position]" . PHP_EOL .
                  "personalEmails: $Info[personal_email]" . PHP_EOL .
                  "workEmails: $Info[work_email_1],$Info[work_email_1]" . PHP_EOL ;

            print str_repeat("-",26);

        }
        
    }
    elseif ($input[3] == 'emails' ) {
        $empID = Employee::employesIds($db,$input[0],$input[1],$input[2]);

        if (count($empID) > 0) {
            print 'Employees with this name: ' . implode(', ', $empID) . PHP_EOL;

        }else{
            print "Error: Please, check your input syntax." . PHP_EOL;
        }
    }elseif($input[4] == 'emails'){
        $employeeId = (int)$input[0];
        $firstName = $input[1];
        $middleName = $input[2];
        $lastName = $input[3];

        $personalEmail = trim(str_replace('personal:',' ',$input[5]));
        $workEmailOne =  trim(str_replace('work:',' ',$input[6]));
        $workEmailTwo =  trim(str_replace('work:',' ',$input[7]));

        $setEmail = new Employee($firstName,$middleName,$lastName);

        $setEmail->insertEmails($db,$employeeId,$personalEmail,$workEmailOne,$workEmailTwo);


        print "Emails of $firstName $middleName $lastName saved." . PHP_EOL;


    }elseif ($input[3] == 'phones' ) {
        $empID = Employee::employesId($db,$input[0],$input[1],$input[2]);

        if (count($empID) > 0) {
            print 'Employees with this name: ' . implode(', ', $empID) . PHP_EOL;

        }else{
            print "Error: Please, check your input syntax." . PHP_EOL;
        }
    }elseif($input[4] == 'phones'){
        $employeeId = (int)$input[0];
        $firstName = $input[1];
        $middleName = $input[2];
        $lastName = $input[3];

        $personalPhone = trim(str_replace('personal:',' ',$input[5]));
        $workPhoneOne =  trim(str_replace('work:',' ',$input[6]));
        $workPhoneTwo =  trim(str_replace('work:',' ',$input[7]));

        $setEmail = new Employee($firstName,$middleName,$lastName);

        $setEmail->insertPhones($db,$employeeId,$personalPhone,$workPhoneOne,$workPhoneTwo);


        print "Phones of $firstName $middleName $lastName saved." . PHP_EOL;


    }else{

        print "Error: Please, check your input syntax." . PHP_EOL;
    }

    $input = explode(', ',trim(fgets(STDIN)));

}

