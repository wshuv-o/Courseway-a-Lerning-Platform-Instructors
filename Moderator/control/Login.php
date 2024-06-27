<?php

session_start();

require "../model/users.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
	$username = sanitize($_POST['username']);
	$password = sanitize($_POST['password']);

	if (empty($username)) {
		$_SESSION['error1'] = "Please fill up the username.";
	}
	if (empty($password)) {
		$_SESSION['error2'] = "Please fill up the password.";
	}
	else {
		$isValid = credentials($username, $password);
		if ($isValid) {
			$_SESSION['hasLoggedIn'] = $username;
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			$_SESSION['id'] = PrimaryKey($username, $password);
			header("Location: ../view/dashboard.php");
			exit();
		}
		else {
			$_SESSION['error'] = "Username or password incorrect.";
		}
	}

	header("Location: ../view/login.php");
}

function sanitize($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}