<?php
session_start();

spl_autoload_register(function($className){
    $className = str_replace('\\', DIRECTORY_SEPARATOR , $className);
    require_once $className . '.php';
});


$template = new Core\Template;
$dbInfo = parse_ini_file("Config/db.ini");
$pdo = new PDO($dbInfo['dsn'],$dbInfo['user'],$dbInfo['pass']);
$db = new Database\PDODatabase($pdo);