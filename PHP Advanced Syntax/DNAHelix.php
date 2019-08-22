<?php

function PrintFullDNA($num){
    $countCharSets = 0;
    $countDNALine = 0;

    for ($i=0; $i<(int)$num; $i++){
        if ($countCharSets == 5){
            $countCharSets = 0;
        }

        $charSets = ['AT','CG','TT','AG','GG'];
        $currentSet = $charSets[$countCharSets];
        $letterOne = $currentSet[0];
        $letterTwo = $currentSet[1];

        $helix_DNA = ['**ch1ch2**','*ch1--ch2*','ch1----ch2','*ch1--ch2*'];
        if ($countDNALine == 4){
            $countDNALine = 0;
        }

        $currentDNALine = $helix_DNA[$countDNALine];
        $output = str_replace('ch1',$letterOne,$currentDNALine);
        $output = str_replace('ch2',$letterTwo,$output);

        print "$output \r\n";

        $countCharSets++;
        $countDNALine++;

    }
}

$input = trim(fgets(STDIN));

PrintFullDNA($input);

