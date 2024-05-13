
<?php

function updatePass($pass,$email){	
	$servername="localhost";
	$dbname="my_app";
	$dbpassword="";
	$dbusername="root";

	$conn= new mysqli($servername,$dbusername,$dbpassword,$dbname);
	if($conn->connect_error)
	{
		die("Connection error".$conn->connect_error);
	}

	$stmt=$conn->prepare("UPDATE m_user SET password=? WHERE email=?");
	$stmt->bind_param("ss",$password,$email);
	$password=$pass;
	$email=$email;
	$stmt->execute();

}
function forgotpass($email){
	$servername ="localhost";
	$dbusername ="root";
	$dbpassword="";
	$dbname ="my_app";

	$conn= new mysqli($servername,$dbusername,$dbpassword,$dbname);
	
		if($conn->connect_error)
		{
			die("Connection Error".$conn->connect_error);
		}
		$stmt=$conn->prepare("SELECT * FROM m_user WHERE email=?");
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
		$dbname = "my_app";
	
		$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
	
		$stmt = $conn->prepare("SELECT id, username, password FROM m_user WHERE username = ? and password = ?");
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
	$dbname = "my_app";

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	$stmt = $conn->prepare("SELECT * FROM m_user WHERE id=?");
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
    $dbname = "my_app";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $stmt = $conn->prepare("SELECT id FROM m_user WHERE username=? AND password=?");
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
	$dbname = "my_app";

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	$stmt = $conn->prepare("SELECT id, username, password FROM Users ");
	
	$stmt->execute();
	$result=$stmt->get_result();

	return $result;
}
function Remove($delete_id){
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "my_app";

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
function Update($id, $fullname, $username, $usertype, $phone, $bloodgroup, $email, $password){
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "my_app";

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	$stmt = $conn->prepare("UPDATE m_user set fullname=?, username=?,usertype=?,phone=?, bloodgroup=?, email=?, password=? WHERE id=?");
	$stmt->bind_param("ssssssss", $fullname, $username, $usertype, $phone, $bloodgroup, $email, $password, $id);
;
	$fullname=$fullname;
	$usertype=$usertype;
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
function AddUser($fullname, $username, $usertype, $phone, $bloodgroup, $email, $password){
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "my_app";

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	$stmt = $conn->prepare("INSERT INTO `m_user`( `fullname`, `username`, `usertype`, `phone`, `bloodgroup`, `email`, `password`) VALUES (?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssss",$fullname, $username, $usertype, $phone, $bloodgroup, $email, $password);

	$fullname=$fullname;
	$usertype=$usertype;
	$phone=$phone;
	$bloodgroup=$bloodgroup;
	$email=$email;
	$username=$username;
	$password=$password;
	return $stmt->execute();
}
function getKeysPayment() {
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "my_app";

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT id FROM paymentrequest";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Error in preparing statement: " . $conn->error);
    }
    if (!$stmt->execute()) {
        die("Error in executing statement: " . $stmt->error);
    }

    $stmt->bind_result($id);
    $keys = array();
    while ($stmt->fetch()) {
        $keys[] = $id;
    }
    $stmt->close();
    $conn->close();
    return $keys;
}
function getKeysInstructor() {
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "my_app";

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT user_id FROM instructor";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Error in preparing statement: " . $conn->error);
    }
    if (!$stmt->execute()) {
        die("Error in executing statement: " . $stmt->error);
    }

    $stmt->bind_result($id);
    $keys = array();
    while ($stmt->fetch()) {
        $keys[] = $id;
    }
    $stmt->close();
    $conn->close();
    return $keys;
}
function getKeysDeclinedInstructor() {
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "my_app";

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT user_id FROM declined_instructor";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Error in preparing statement: " . $conn->error);
    }
    if (!$stmt->execute()) {
        die("Error in executing statement: " . $stmt->error);
    }

    $stmt->bind_result($id);
    $keys = array();
    while ($stmt->fetch()) {
        $keys[] = $id;
    }
    $stmt->close();
    $conn->close();
    return $keys;
}

function getInstructor($id) {
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "my_app";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM paymentrequest WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    if (!$stmt->execute()) {
        die("Error in executing statement: " . $stmt->error);
    }
    $result = $stmt->get_result();
    $instructor = $result->fetch_assoc();
    $stmt->close();
    $conn->close();
    return $instructor;
}
function getRequestedInstructor($id) {
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "my_app";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM instructor WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    if (!$stmt->execute()) {
        die("Error in executing statement: " . $stmt->error);
    }
    $result = $stmt->get_result();
    $instructor = $result->fetch_assoc();
    $stmt->close();
    $conn->close();
    return $instructor;
}
function getDeclinedInstructor($id) {
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "my_app";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM declined_instructor WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    if (!$stmt->execute()) {
        die("Error in executing statement: " . $stmt->error);
    }
    $result = $stmt->get_result();
    $instructor = $result->fetch_assoc();
    $stmt->close();
    $conn->close();
    return $instructor;
}

function deleteRowById($id){
	$servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "my_app";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "DELETE FROM paymentrequest WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    if (!$stmt->execute()) {
        die("Error in executing statement: " . $stmt->error);
    }
}
function deleteInstructorById($id){
	$servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "my_app";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "DELETE FROM instructor WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    if (!$stmt->execute()) {
        die("Error in executing statement: " . $stmt->error);
    }
}
function movetoDeclined($id, $feedback){
	$row=getRequestedInstructor($id);

	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "my_app";

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	$stmt = $conn->prepare("INSERT INTO `declined_instructor`( `user_id`, `user_name`, `email`, `bio`, `website`, `feedback`, `user_pass`) VALUES (?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssss",$row['user_id'], $row['user_name'], $row['email'], $row['bio'], $row['website'], $feedback, $row['user_pass']);

	$stmt->execute();

	deleteInstructorById($id);
}
function getCourseById($course_id) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "my_app";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT `course_id`, `course_title`, `description`, `category`, `sub_category`, `published_date`, `price`, `revenue`, `thumbnail`, `course_status`, `students_count`, `instructor_id`, `status` FROM `courses` WHERE `course_id` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $course_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $course = $result->fetch_assoc();
        return $course;
    } else {
        return null;
    }
    $stmt->close();
    $conn->close();
}

function getCourseKeys() {
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "my_app";

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT course_id FROM courses";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Error in preparing statement: " . $conn->error);
    }
    if (!$stmt->execute()) {
        die("Error in executing statement: " . $stmt->error);
    }

    $stmt->bind_result($id);
    $keys = array();
    while ($stmt->fetch()) {
        $keys[] = $id;
    }
    $stmt->close();
    $conn->close();
    return $keys;
}
function statusCourseById($id, $status){	
	$servername="localhost";
	$dbname="my_app";
	$dbpassword="";
	$dbusername="root";

	$conn= new mysqli($servername,$dbusername,$dbpassword,$dbname);
	if($conn->connect_error)
	{
		die("Connection error".$conn->connect_error);
	}
	$stmt=$conn->prepare("UPDATE courses SET status=? WHERE course_id=?");
	$stmt->bind_param("ss",$status,$id);
	return $stmt->execute();
}

?>
