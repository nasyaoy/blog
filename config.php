<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "project_blog";

$conn = new mysqli($host, $user, $password, $dbname);

if($conn->connect_error){
    die("Ошибка подключения: " . $conn->connect_error);
}