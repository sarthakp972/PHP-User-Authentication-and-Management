<?php

$servername = "localhost";
$username = "root";
$password = "";



$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Connection failed 1: " . $conn->connect_error);
}


$sql = "CREATE DATABASE clothing";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}


$conn->select_db("clothing");


$sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50)


    )";


if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>
