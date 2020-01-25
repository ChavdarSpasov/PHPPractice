<h1>Add Project</h1>
<form method="POST" action="<?=$params['action']; ?>">
    Name: <input type="text" name="name" >
    <br>
    Description: <input type="text" name="description">
    <br>
    End Date: <input type="text" name="end_date">
    <br>
    <input type="submit" name="save" value="save">
    <input type="submit" name="cancel" value="cancel">
</form>