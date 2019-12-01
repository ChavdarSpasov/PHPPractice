<?php


$db = new PDO("mysql:host=localhost;dbname=test",'root','',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

$db->beginTransaction();

$db_stm = $db->prepare('INSERT INTO users (user_name) value(:user_name)');

$user_name = 'Ivan';
$db_stm->bindParam('user_name',$user_name);

try {
    $db_stm->execute();

    $user_name = 'tosho';
    $db_stm->execute();

    $db->commit();

}catch (Exception $e){
    $db->rollBack();
    print $e->getMessage();

}
print $db->lastInsertId();

