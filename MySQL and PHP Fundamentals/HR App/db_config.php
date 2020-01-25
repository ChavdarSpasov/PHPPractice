<?php

$host_name = '';
$db_name = '';
$user = '';
$pass = '';


$db = new PDO("mysql:host=$host_name;dbname=$db_name",$user,$pass);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
