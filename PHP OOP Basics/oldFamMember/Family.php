<?php

class Family
{
    public $familyMembers;

    function __construct()
    {
        $this->familyMembers = [];
    }

    function AddMember(Person $member){
        $this->familyMembers[] = $member;
    }

    function OldestMember($members){
        $oldestMemberAge = 0;
        $oldestMemberName = " ";
        foreach ($members as $member){
            if ($member->age > $oldestMemberAge){

                $oldestMemberAge = $member->age;
                $oldestMemberName = $member->name;
            }
        }

        return "$oldestMemberName $oldestMemberAge";
    }

}