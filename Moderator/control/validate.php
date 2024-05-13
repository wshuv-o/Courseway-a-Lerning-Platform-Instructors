<?php
$emailErr = $fullnameErr = $phoneErr = $bloodgroupErr = $usernameErr = $passwordErr =$usertypeErr= $confirmPasswordErr = '';
$valid=1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailErr = "Email address required!";
        $valid*=0;
    } else {
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format!";
            $valid*=0;
        }
    }

    if (empty($_POST["fullname"])) {
        $fullnameErr = "Full name required!";
        $valid*=0;
    }

    if (empty($_POST["phone"])) {
        $phoneErr = "Phone number required!";
        $valid*=0;
    } else {
        $phone = $_POST["phone"];
        if (!preg_match("/^[0-9]*$/", $phone)) {
            $phoneErr = "Only numbers are allowed!";
            $valid*=0;
        }
    }

    if (empty($_POST["bloodgroup"])) {
        $bloodgroupErr = "Address required!";
        $valid*=0;
    }

    if (empty($_POST["username"])) {
        $usernameErr = "Username required!";
        $valid*=0;
    }
    if (empty($_POST["usertype"])) {
        $usertypeErr = "Usertype required!";
        $valid*=0;
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password required!";
        $valid*=0;
    }

    if (empty($_POST["confirm_password"])) {
        $confirmPasswordErr = "Please confirm your password!";
        $valid*=0;
    } else {
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirm_password"];
        if ($password != $confirmPassword) {
            $confirmPasswordErr = "Passwords do not match!";
            $valid*=0;
        }
    }
}
    ?>