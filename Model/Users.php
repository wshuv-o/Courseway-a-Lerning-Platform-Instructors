<?php
function updatePass($pass,$email){	
	$servername="localhost";
	$dbname="course_way";
	$dbpassword="";
	$dbusername="root";

	$conn= new mysqli($servername,$dbusername,$dbpassword,$dbname);
	if($conn->connect_error)
	{
		die("Connection error".$conn->connect_error);
	}

	$stmt=$conn->prepare("UPDATE users SET password=? WHERE email=?");
	$stmt->bind_param("ss",$password,$email);
	$password=$pass;
	$email=$email;
	$stmt->execute();

}
function forgotpass($email){
	$servername ="localhost";
	$dbusername ="root";
	$dbpassword="";
	$dbname ="users";

	$conn= new mysqli($servername,$dbusername,$dbpassword,$dbname);
	
		if($conn->connect_error)
		{
			die("Connection Error".$conn->connect_error);
		}
		$stmt=$conn->prepare("SELECT * FROM users WHERE email=?");
		$stmt->bind_param("s",$email);
		$email=$email;

		$stmt->execute();

		$result=$stmt->get_result();
		if($result->num_rows==1)
		{
			return true;
		}
		else{
			return false;
		}
		//return false;
	}

function OTPCode($OTPCODE)
{
	
	if($OTPCODE== 1234)
	{
		echo "OTP Code Matched !";
		return true;
	}
	else{
		echo "OTP Code doesnt match";
		return false;
	}

}
	function credentials($username, $password) {
		$servername = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname="course_way";
	
		$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
	
		$stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ? and password = ?");
		$stmt->bind_param("ss", $username, $password);
	
		$username=$username;
		$password=$password;
	
		$stmt->execute();
		$result=$stmt->get_result();
		if ($result->num_rows==1) {
			return true;
		}
		return false;
	}


function Userr($id){
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname="course_way";

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	$stmt = $conn->prepare("SELECT * FROM users WHERE id=?");
	$stmt->bind_param("s", $id);

	$id=$id;
	$stmt->execute();
	$result=$stmt->get_result();
    $u = $result->fetch_assoc();
	return $u;
}


function PrimaryKey($username, $password){
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname="course_way";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $stmt = $conn->prepare("SELECT id FROM users WHERE username=? AND password=?");
    if (!$stmt) {
        die("Error in preparing statement: " . $conn->error);
    }

    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    if ($stmt->error) {
        die("Error in executing statement: " . $stmt->error);
    }

    $stmt->bind_result($id);
    $primaryKey = "";
    if ($stmt->fetch()) {
        $primaryKey = $id;
    }

    $stmt->close();
    $conn->close();
    return $primaryKey;
}
function All(){
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname="course_way";

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	$stmt = $conn->prepare("SELECT id, username, password FROM Users ");
	
	$stmt->execute();
	$result=$stmt->get_result();

	return $result;
}
function RemoveUser($delete_id){
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname="course_way";

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
	$stmt->bind_param("s", $id);

	$id=$delete_id;
	if ($stmt->execute()) {
		return true;
	}
	return false;
}
function UpdateUser($id, $fullname, $username, $phone, $bloodgroup, $email, $password){
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname="course_way";

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	$stmt = $conn->prepare("UPDATE users set fullname=?, username=?,phone=?, bloodgroup=?, email=?, password=? WHERE id=?");
	$stmt->bind_param("sssssss", $fullname, $username,  $phone, $bloodgroup, $email, $password, $id);
;
	$fullname=$fullname;
	$phone=$phone;
	$bloodgroup=$bloodgroup;
	$email=$email;
	$id=$id;
	$username=$username;
	$password=$password;
	if($stmt->execute()){
		return true;
	}
	$stmt->close();
    $conn->close();
	return false;
}

function  AddUser($fullname, $username, $phone, $bloodgroup, $email, $password){
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname="course_way";

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	$stmt = $conn->prepare("INSERT INTO `users`( `fullname`, `username`, `phone`, `bloodgroup`, `email`, `password`) VALUES (?,?,?,?,?,?)");
	$stmt->bind_param("ssssss",$fullname, $username,  $phone, $bloodgroup, $email, $password);

	$fullname=$fullname;
	$phone=$phone;
	$bloodgroup=$bloodgroup;
	$email=$email;
	$username=$username;
	$password=$password;
	return $stmt->execute();
}
?>