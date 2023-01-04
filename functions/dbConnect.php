<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "employee";

// creating connection
$conn = mysqli_connect($servername, $username, $password, $database);

// checking connection
if (!$conn) {
    die();
}
