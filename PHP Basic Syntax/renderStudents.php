<?php
$namesStr= $_GET["names"];
$ageStr= $_GET["ages"];

$names = explode($_GET["delimeter"],$_GET["names"]);
$ages = explode($_GET["delimeter"],$_GET["ages"]);
?>

<form action="" method="get">
<div>
    Delimeter:
    <select name="delimeter">
        <option value=",">,</option>
        <option value="|">|</option>
        <option value="&">&</option>
    </select>
</div>
<div>
    Names:
    <input type="text" name="names">
</div>
<div>
    Ages:
    <input type="text" name="ages">
</div>
<div>
    <input type="submit" name="filter" value="Filter">
</div>
</form>

<?php
$namesStr= $_GET["names"];
$ageStr= $_GET["ages"];

$names = explode($_GET["delimeter"],$_GET["names"]);
$ages = explode($_GET["delimeter"],$_GET["ages"]);
?>


<?php if(isset($namesStr,$ageStr)) :?>
<table>
    <thead>
        <tr>
            <th>Names</th>
            <th>Ages</th>
        </tr>
    </thead>
    <tbody>
        <?php for($i=0;$i< count($names);$i++) :?>
            <tr>
                <td><?= $names[$i]; ?></td>
                <td><?= $ages[$i]; ?></td>
            </tr>
        <?php endfor;?>    
    </tbody>
</table>
<?php  endif; ?>
