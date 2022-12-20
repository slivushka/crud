<?php

$servername = "localhost";
$username = "crud_user"; 
$password = "password"; 
$dbname = "register_bd"; 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} 
?>