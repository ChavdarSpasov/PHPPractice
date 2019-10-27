<?php

include "db_config.php";

$myDb= new PDO("mysql:host=$bd_host;dbname=$db_name",$db_user,$db_password);