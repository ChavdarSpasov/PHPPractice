<form method="get">
<textarea name="input" cols="30" rows="10"></textarea><br/>
<input type="submit" name="sub" value="submit">
</form>

<?php 
 $input = $_GET['input'];

 for ($i=0; $i < strlen($input); $i++) { 
    if (ord($input[$i]) % 2 == 0) {
        echo  "<span style=color:blue> " . $input[$i]  . "</span>" ;
    }else{
        echo  "<span style=color:red> " . $input[$i]  . "</span>" ;

    }
 }