<?php

include "Family.php";
include_once "Person.php";

$numberOfFamilyMembers = trim(fgets(STDIN));

$family = new Family();

for ($i=0; $i<$numberOfFamilyMembers; $i++){
   $currentMember = explode(" ",trim(fgets(STDIN)));

   $memberName = $currentMember[0];
   $memberAge = $currentMember[1];

   $person = new Person($memberName,$memberAge);


   $family->AddMember($person);

}

print $family->OldestMember($family->familyMembers);
