<?php
$db_host     = "localhost";
$db_name     = "carshop";
$db_user     = "root";
$db_password = 'rootpass';

// Methods
$db = new PDO( "mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);