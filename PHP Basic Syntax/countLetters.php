<?php

$word= trim(fgets(STDIN));

$letters = [];

for ($i=0; $i < strlen($word); $i++)  { 
    
    if(!array_key_exists($word[$i],$letters)){
        $letters[$word[$i]] = 0;
    
    };

    $letters[$word[$i]] ++;
}

foreach ($letters as $key => $value) {
    print $key . "->" . $value . PHP_EOL;
    
}

for ($i=0; $i<= 10; $i ++) {
    print "*";   
}

print  PHP_EOL; 

arsort($letters);

foreach ($letters as $key => $value) {
    print $key . "->" . $value . PHP_EOL;
    
}


