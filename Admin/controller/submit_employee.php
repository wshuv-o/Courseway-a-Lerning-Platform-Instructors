<?php
include '../model/db_connect.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $bloodgroup = $_POST['bloodgroup'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (addEmployee($email, $fullname, $phone, $bloodgroup, $username, $password)) {
        echo "<script> alert('Employee added successfully!');</script>";
        header("Location: ../views/addashboard.php?window=window2");
    } else {
        echo "Failed to add employee!";
    }
}
?>
