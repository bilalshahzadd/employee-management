<?php
include('./dbConnect.php');

// checking if the form method is post or not
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // selecting html inputs
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $designation = $_POST['designation'];

    // sql query to be executed 
    $sql = "INSERT INTO `employee-list` (`name`, `email`, `phone`, `age`, `designation`) VALUES ('$name', '$email', '$phone', '$age', '$designation')";
    $result = mysqli_query($conn, $sql);

    if ($result == true) {
        header("location: employeeList.php");
    }
}
