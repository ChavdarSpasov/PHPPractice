<?php

class Employee
{
    public $name;
    public $salary;
    public $position;
    public $department;
    public $email;
    public $age;

    function __construct($name,$salary,$position,$department,$email,$age){
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->department = $department;
        $this->email = $email;
        $this->age = $age;
    }
}

$output = [];

$line = trim(fgets(STDIN));
for ($i=0; $i<$line; $i++){
   $employee_data = explode(' ',trim(fgets(STDIN)));

    $name = $employee_data[0];
    $salary = $employee_data[1];
    $position = $employee_data[2];
    $department = $employee_data[3];

    if (isset($employee_data[4])){
        $email = $employee_data[4];
    }else{
        $email = "n/a";
    }

    if (isset($employee_data[5])){
        $age = $employee_data[5];
    }else{
        $age = "-1";
    }

    $output[] = new Employee($name,$salary,$position,$department,$email,$age);

}

$department_info = [];

foreach ($output as $employee_info){
        $key=$employee_info->department;
        $value = $employee_info->salary;

        if (!array_key_exists($key,$department_info)){
            $department_info[$key] = 0;
        }

        $department_info[$key] += $value;
}

$highest_average_salary_development = array_keys($department_info,max($department_info));

$highest_average_salary_development_members = array_filter($output,function ($data)
                                          use ($highest_average_salary_development){
    return $data->department == $highest_average_salary_development[0];
});

usort($highest_average_salary_development_members,
    function ($a,$b){
        return strcmp($b->salary,$a->salary);
});



print "Highest Average Salary: $highest_average_salary_development[0] \r\n";

foreach ($highest_average_salary_development_members as $member){
  print "$member->name $member->salary $member->email $member->age \r\n";

};

