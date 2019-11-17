<?php

class Employee
{
    private $firstName;
    private $middleName;
    private $lastName;
    private $department;
    private $position;
    private $passportId;

    public function __construct($firstName,$middleName,$lastName,$department = null,$position=null,$passportId=null)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setMiddleName($middleName);
        $this->setDepartment($department);
        $this->setPosition($position);
        $this->setPassportId($passportId);
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
      $this->firstName = $firstName;
    }

    public function getMiddleName()
    {
        return $this->middleName;
    }

    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getDepartment()
    {
        return $this->department;
    }

    public function setDepartment($department)
    {
        $this->department = $department;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function getPassportId()
    {
        return $this->passportId;
    }

    public function setPassportId($passportId)
    {
        $this->passportId = $passportId;
    }

    public function insertEmployee($db)
    {
        $db_stm = $db->prepare("INSERT INTO employee (first_name,middle_name,last_name,department,position,passport_id)
                                VALUES (?,?,?,?,?,?)");
    
        $db_stm->execute([$this->getFirstName(),$this->getMiddleName(),$this->getLastName(),$this->getDepartment(),$this->getPosition(),$this->getPassportId()]);
        
    }

    static public function employesId($db,$firstName,$middleName,$lastName){
        $db_stm = $db->prepare("SELECT id FROM employee 
                                WHERE first_name = ? 
                                AND middle_name = ?
                                AND last_name = ?");
    
        $db_stm->execute([$firstName,$middleName,$lastName]);
    
        $numEmployes = $db_stm->fetchAll(PDO::FETCH_ASSOC);

        $result = [];

        foreach ($numEmployes as $emp){
            $result[] = $emp['id'];
        }

        return $result;        
    }

    public function insertEmails($db,$id,$email1,$email2,$email3)
    {
        $db_stm = $db->prepare("INSERT INTO employee_emails (employee_id, personal_email, work_email_1, work_email_2)
                                VALUES (?,?,?,?)");
                                
        $db_stm->execute([$id,$email1,$email2,$email3]);                        
    }

    public function insertPhones($db,$id,$phone1,$phone2,$phone3)
    {
        $db_stm = $db->prepare("INSERT INTO employee_phones (employee_id, personal_phone, work_phone_1, work_phone_2)
                                VALUES (?,?,?,?)");
                                
        $db_stm->execute([$id,$phone1,$phone2,$phone3]);                        
    }

    static public function getEmails($db,$firstName,$lastName)
    {
        $db_stm = $db->prepare("SELECT * FROM employee 
                                INNER JOIN employee_emails ON employee.id = employee_emails.employee_id
                                WHERE employee.first_name = ? AND employee.last_name = ?");

        $db_stm->execute([$firstName,$lastName]);

        return $db_stm->fetchAll(PDO::FETCH_ASSOC);
    }
}

