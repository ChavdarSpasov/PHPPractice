<?php
ini_set("display_errors", 1);
session_start();

spl_autoload_register(function ($className) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    require_once $class . '.php';
});

$template = new Core\Template;
$dbInfo = parse_ini_file("Config/db.ini");
$pdo = new PDO($dbInfo['dsn'], $dbInfo['user'], $dbInfo['pass']);
$db = new Database\PDODatabase($pdo);

$userRepository = new App\Repository\UserRepository($db);
$userService = new App\Service\UserService($userRepository);

$userHttpHandler = new App\Http\UserHttpHandler($template);
$userHttpHandler->all($userService);