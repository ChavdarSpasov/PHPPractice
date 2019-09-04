<?php

$result = function ($a,$b){
    $out = [];
    for ($i=0; $i< count($a); $i++){
       $out[] = $a[$i] * $b[$i];
    }
    return $out;
};


$matrix= function ($a,$i=0,$out=[]) use (&$matrix,$result){
    if($i == count($a) -1){
      return $out;
  }
  else{
      $core = $a;
      $new = [];
      if ($i == 0){
          $new = $result($a,$a);
      }else{
        $new = $result($out,$a);
      };
  }
        foreach ($new as $value){
        print $value . " ";
        }

        print "\r\n";

    return ($matrix($a,$i+1,$out[]= $new));
};

$a = [1.3, 2.4];

foreach ($a as $value){
    print $value . " ";
}
print "\r\n";

$output = $matrix($a,$i = 0,$out = []);
