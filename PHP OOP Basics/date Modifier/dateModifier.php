<?php

include_once "DateModifier.php";


$dateOne = trim(fgets(STDIN));
$dateTwo = trim(fgets(STDIN));

$dateOne= str_replace(" ","-",$dateOne);
$dateTwo = str_replace(' ','-',$dateTwo);

$dateModifier= new DateModifier($dateOne,$dateTwo);

print $dateModifier->DateDiff();




