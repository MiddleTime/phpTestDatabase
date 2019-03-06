<?php

$db = new PDO("mysql:host=localhost;dbname=test1000", "root", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



function addData($db){
    $queryStr = "INSERT INTO users (name, password, email) VALUES ('admin', MD5('admin'), 'sergei@domain.com')";
    $db->query($queryStr);
    
}

try {
    addData($db);
    addData($db);
    
} catch (PDOException $e) {
    echo $e->getMessage();
}