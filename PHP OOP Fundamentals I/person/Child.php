<?php
class Child extends FamilyMember
{
    function __construct(int $age, string $name)
    {
        parent::__construct($age,$name);

    }

    public function setAge(int $age)
    {
        if ($age > 16){
            throw new Exception('Child’s age must be less than 16!');
        }else{
            parent::setAge($age);
        }
    }



}