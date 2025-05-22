<?php

$host = "localhost";
$user = "root";
$pass = "";


try{
    $conn = new PDO("mysql:host=$host;", $user, $pass);

    $sql = "CREATE DATABASE filandb";

    $conn->exec($sql);

    echo "Database is created";

    echo "Connected!";
}catch (Exception $e){
    echo $e;
}