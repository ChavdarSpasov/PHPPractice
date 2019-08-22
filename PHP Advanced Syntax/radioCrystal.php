<?php
function CutOre($item){
    return $item * 0.25;
}
function LapOre($item){
    return $item * 0.80;
}

function GrindOre($item){
    return $item - 20;
}

function EtchOre($item){
    return $item - 2;
}

function X_RayOre($item){
    return $item + 1;
}

function WashAndTraansportOre($item){
    return floor($item);
}

$input = explode(', ',trim(fgets(STDIN)));
$finalThicknes = $input[0];
$crystalsThickness = array_slice($input,1);

foreach ($crystalsThickness as $crystal){
    print "Processing chunk $crystal microns\r\n";

    $currThickness = $crystal;
    $procedures = 0;

    if ($currThickness == $finalThicknes - 1){
        print 'X-ray x1' . "\r\n";
        print "Finished crystal $finalThicknes microns\r\n";
        continue;

    }

    while(1){
        $afterProcesThickness = CutOre($currThickness);
        if ($afterProcesThickness >= $finalThicknes) {
            $currThickness = $afterProcesThickness;
            $procedures++;
        }else{
            break;
        }
    }

    if ($procedures !=0) {
        print "Cut x$procedures\r\n";
        $procedures = 0;
        $currThickness = WashAndTraansportOre($currThickness);
        print 'Transporting and washing' . "\r\n";
    }

    if ($currThickness == $finalThicknes){
        print "Finished crystal $finalThicknes microns\r\n";
        continue;
    }

    while(1){
        $afterProcesThickness = LapOre($currThickness);
        if ($afterProcesThickness >= $finalThicknes) {
            $currThickness = $afterProcesThickness;
            $procedures++;
        }else{
            break;
        }
    }

    if ($procedures != 0) {
        print "Lap x$procedures\r\n";
        $procedures = 0;
        $currThickness = WashAndTraansportOre($currThickness);
        print 'Transporting and washing' . "\r\n";
    }

    if ($currThickness == $finalThicknes){
        print "Finished crystal $finalThicknes microns\r\n";
        continue;
    }

    while(1){
        $afterProcesThickness = GrindOre($currThickness);
        if ($afterProcesThickness >= $finalThicknes) {
            $currThickness = $afterProcesThickness;
            $procedures++;
        }else{
            break;
        }
    }

    if ($procedures != 0) {
        print "Grind x$procedures\r\n";
        $procedures = 0;
        $currThickness = WashAndTraansportOre($currThickness);
        print 'Transporting and washing' . "\r\n";
    }

    if ($currThickness == $finalThicknes){
        print "Finished crystal $finalThicknes microns\r\n";
        continue;
    }

    while(1){
        $afterProcesThickness = EtchOre($currThickness);
        if ($afterProcesThickness >= $finalThicknes) {
            $currThickness = $afterProcesThickness;
            $procedures++;
        }else{
            break;
        }
    }

    if (($currThickness - 1) == $finalThicknes){
        $procedures ++;
        $currThickness = X_RayOre($currThickness);
        $currThickness = EtchOre($currThickness);
        print "Etch x$procedures\r\n";
        print 'Transporting and washing' . "\r\n";
        print 'X-ray x1' . "\r\n";
    }else{
        print "Etch x$procedures\r\n";
        print 'Transporting and washing' . "\r\n";
        $currThickness = WashAndTraansportOre($currThickness);
    }

    if ($currThickness == $finalThicknes){
        print "Finished crystal $finalThicknes microns\r\n";
        continue;
    }
}
