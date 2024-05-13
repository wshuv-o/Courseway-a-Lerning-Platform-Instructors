<?php 
function InsertAdmin( $email, $fullname, $phone, $address,$username, $password) {
    $servername="localhost";
    $db_username="root"; 
    $db_password=""; 
    $database="my_app"; 

    $conn=new mysqli($servername, $db_username, $db_password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt=$conn->prepare("INSERT INTO `admin`(`email`, `fullname`, `phone`, `address`, `username`, `password`) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param("ssssss", $email, $fullname, $phone, $address, $username, $password);


    $email=$email;
    $fullname=$fullname;
    $phone=$phone;
    $address=$address;
	$username=$username;
	$password=$password;

	if ($stmt->execute()) {
		return true;
	}
    return false;
}
function getAdminProfile($username){
    $servername="localhost";
    $db_username="root"; 
    $db_password=""; 
    $database="my_app"; 

    $conn=new mysqli($servername, $db_username, $db_password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt=$conn->prepare("SELECT email, password, fullname, phone, address FROM admin WHERE username=?");
    $stmt->bind_param("s", $username);

    $stmt->execute();
    $stmt->bind_result($email, $password, $fullname, $phone, $address);
    
    $adminInfo=null;

    if ($stmt->fetch()) {
        $adminInfo=array(
            'email'=>$email,
            'password'=>$password,
            'fullname'=>$fullname,
            'phone'=>$phone,
            'address'=>$address
        );
    }

    $stmt->close();
    $conn->close();

    return $adminInfo;
}
    
function updateAdmin( $email, $fullname, $phone, $address,$username) {
    $servername="localhost";
    $db_username="root"; 
    $db_password=""; 
    $database="my_app"; 

    $conn=new mysqli($servername, $db_username, $db_password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt=$conn->prepare("UPDATE `admin` SET `email`=?, `fullname`=?, `phone`=?, `address`=? WHERE `username`=?");
    $stmt->bind_param("sssss", $email, $fullname, $phone, $address, $username);


    $email=$email;
    $fullname=$fullname;
    $phone=$phone;
    $address=$address;
	$username=$username;

	if ($stmt->execute()) {
		return true;
	}
    return false;
}
function CheckMail($email) {
    $servername = "localhost";
    $db_username = "root"; 
    $db_password = ""; 
    $database = "my_app"; 

    $conn = new mysqli($servername, $db_username, $db_password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt =$conn->prepare ("SELECT * FROM Admin WHERE email = ?");
    $stmt->bind_param("s", $email);

	$email=$email;
    $stmt->execute();
    $result=$stmt->get_result();
    if ($result->num_rows >= 1) {
        $conn->close();
        return true;
    } else {
        $conn->close();
        return false;
    }
}
function UpdatePassword($email, $password) {
    $servername = "localhost";
    $db_username = "root"; 
    $db_password = ""; 
    $database = "my_app"; 

    $conn = new mysqli($servername, $db_username, $db_password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $stmt = $conn->prepare("UPDATE `admin` SET `password` = ? WHERE `email` = ?");
    $stmt->bind_param("ss", $password, $email); 

    $password=$password;
    $email=$email;
    if ($stmt->execute()) {
        return true;
    }
    return false;
}
function UpdatePasswordByUsername($password, $username) {
    $servername = "localhost";
    $db_username = "root"; 
    $db_password = ""; 
    $database = "my_app"; 

    $conn = new mysqli($servername, $db_username, $db_password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $stmt = $conn->prepare("UPDATE `admin` SET `password` = ? WHERE `username` = ?");
    $stmt->bind_param("ss", $password, $username); 

    $password=$password;
    $username=$username;
    if ($stmt->execute()) {
        return true;
    }
    return false;
}

function addEmployee($email, $fullname, $phone, $bloodgroup, $username1, $password1) {
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "my_app";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $stmt = $conn->prepare("INSERT INTO m_user (email, fullname, phone, bloodgroup, username, password) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $email, $fullname, $phone, $bloodgroup, $username1, $password1);
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        return true; 
    } else {
        return false; 
    }
    $stmt->close();
}
function fetchAllDataFromTable($tableName) {
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "my_app"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM $tableName";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = array();

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        $conn->close();

        return $data;
    } else {
        $conn->close();
        return false;
    }
}



?>
