<?php

$host_name = 'localhost';
$db_name = 'geography';
$user = 'root';
$pass = 'rootpass';


$db = new PDO("mysql:host=$host_name;dbname=$db_name",$user,$pass);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
