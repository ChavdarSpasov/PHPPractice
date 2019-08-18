<?php

if (isset($_GET["calc"])) {
    $a = $_GET["num1"];
    $b = $_GET["num2"];
    $operation = $_GET["operation"];        

    switch ($_GET["operation"]) {
        case 'sum': echo ($a + $b); break;
        case 'subtract': print ($a - $b); break;
        default: print 'Invalid operation!'; break;
    }
}

?>


<form method="get">
<div>
    Operation:
    <select name="operation" id="">
        <option value="sum">Sum</option>
        <option value="subtract">Subtract</option>
    </select>
</div> 
<div>   
    Number1:
    <input type="text" name="num1" value="<?php if(isset($a)) echo $a; ?>">
</div>
<div>
    Number2:
    <input type="text" name="num2" value="<?php if(isset($b)) echo $b; ?>">
</div>
<div>
    Submit:
    <input type="submit" name="calc" value="Calculate!">
</div>
</form>

