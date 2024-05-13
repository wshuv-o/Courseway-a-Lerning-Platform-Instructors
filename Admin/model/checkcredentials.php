<?php
//session_start();
function check($user, $pass){
    return authenticateUser($user, $pass);
}

function authenticateUser($username, $password) {
    $servername = "localhost";
    $db_username = "root"; 
    $db_password = ""; 
    $database = "my_app"; 

    $conn = new mysqli($servername, $db_username, $db_password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt =$conn->prepare ("SELECT * FROM Admin WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);

	$username=$username;
	$password=$password;
    $stmt->execute();
    $result=$stmt->get_result();
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc(); 
        $_SESSION["row"]=$row;
        $conn->close();
        return true;
    } else {
        $conn->close();
        return false;
    }
}

?>