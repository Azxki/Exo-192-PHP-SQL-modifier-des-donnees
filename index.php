<?php

$username = 'root';
$password = '';

$file = file_get_contents('./classes/SQL/user.sql');

try {
    $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->lastInsertId();

    $result = $db->exec($file);
    if($result) {
        $id = $db->lastInsertId();
    }


    echo "requête validé !";
}
catch (PDOException $exception) {
    echo $exception->getMessage();
}