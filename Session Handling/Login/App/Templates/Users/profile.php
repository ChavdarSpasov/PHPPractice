<?php 
/**@var \App\Data\UserDTO $data */ 
?>

<h1>Your profile</h1>
<form action="" method="post">
    <div>
        <label for="">
            Username: <input type="text" value="<?= $data->getUserName() ?>" name="username">
        </label> 
    </div>
    <div>
        <label for="">
            Password: <input type="text" name="password">
        </label>
    </div>
    <div>
        <label for="">
            First Name: <input type="text" value="<?= $data->getFirstName() ?>" name="first_name">
        </label>
    </div>
    <div>
        <label for="">
            Last Name: <input type="text" value="<?= $data->getLastName() ?>" name="last_name">
        </label>
    </div>
    <div>
        <label for="">
            Birthday: <input type="text" value="<?= $data->getBornOn() ?>" name="born_on">
        </label>
    </div>
    <div>
        <input type="submit" name="edit" value="Edit Profile!">
    </div>
</form>

You can <a href="logout.php">logout</a> or see <a href="all.php">all users</a>.