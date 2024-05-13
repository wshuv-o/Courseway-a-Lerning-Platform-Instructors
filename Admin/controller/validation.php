<?php
//session_start();
include '..\model\checkcredentials.php';
$errorMessage = "";
$errorMessage2 = "";
function sanitize($data) {
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $flag=true;
    if (empty($_POST["username"])) {
        $errorMessage = "Username is required!";
        $flag=false;

    }
    if(empty($_POST["password"])){
        $errorMessage2 = "Password is required!";
        $flag=false;

    }
    if($flag)
    if(check($_POST["username"], $_POST["password"])) {
        $_SESSION["username"]=$_POST["username"];
        $_SESSION["password"]=$_POST["password"];
        header("Location: addashboard.php");
        exit;
    }
}
?>
