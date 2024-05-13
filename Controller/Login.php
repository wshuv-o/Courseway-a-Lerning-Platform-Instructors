<?php

session_start();

require "../Model/Users.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") 
{
	$username = sanitize($_POST['username']);
	$password = sanitize($_POST['password']);

	if (empty($username) or empty($password)) {
		$_SESSION['error'] = "<br><center style= color:red;> <h3> Please fill up the form properly. </h3></center>";
	}
	else {
		$isValid = credentials($username, $password);
		if ($isValid) {
			$_SESSION['hasLoggedIn'] = $username;
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			header("Location: ../Views/Dashboard.php");
			exit();
		}
		else {
			$_SESSION['error'] = "<br><center style= color:red;> <h3> Username or password incorrect. </h3></center>";
		}
	}

	header("Location: ../Views/Login.php");
}

function sanitize($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>






