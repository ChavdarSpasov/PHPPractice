<form method="get">
    <textarea name="input" cols="120" rows="5"></textarea>   
    <input type="submit" name="sub" value="submit">
</form>


<?php

function clearWord( $string){
    for ($i=0; $i < strlen($string); $i++) { 
    
        $currSimbol = $string[$i];

        $bigSimbols = (ord($currSimbol) >= 64 && ord($currSimbol) <= 90);
        $smallSimbols = (ord($currSimbol) >= 97 && ord($currSimbol) <= 122);
       
        if($bigSimbols == false && $smallSimbols == false){
            $string = str_replace("$string[$i]", ' ', $string);
        }
    }
    
    return trim($string); 
}

$text = explode(' ', $_GET['input']);

for ($i=0; $i < count($text); $i++) { 
    
    $word = clearWord($text[$i]);

    if(!isset($result[$word])){
        $result[$word] = 0;
    }

    $result[$word] ++;
}

?> 

<table border=1>
    <?php foreach ($result as $key => $value):?>
    <tbody>
        <tr>
            <td><?= $key ?></td>
            <td><?= $value ?></td>
        </tr>
    </tbody>
    <?php endforeach; ?>
</table>