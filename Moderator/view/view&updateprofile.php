<?php 
session_start();       
 include "../control/validate.php";
        include "../model/users.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["update"])){

        if(isset($_POST["update"])){
            if(Update($_POST["id"], $_POST["fullname"],$_POST["username"],$_POST["usertype"],$_POST["phone"],$_POST["bloodgroup"],$_POST["email"],$_POST["password"] )){
                header("Location: login.php");
				exit();
            }
		}

    }
}

	$key=PrimaryKey($_SESSION["username"],$_SESSION["password"]);
	$userData = Userr($key); 

?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Profile</title>
    <center>
        <img src="../view/logo.png" alt="Logo">
        <h3>
                Welcome to Profile Update Page of CourseWay
        </h3>
        </center>
        <link rel="stylesheet" href="../css/viewStyle.css">
        <script type="text/javascript" src="js/script.js"></script>

</head>
<body>

    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" onsubmit="return updateprofileJS()" novalidate>
        <div class="div2">
        <table>
                <tr>
                    <td>Full Name</td>
                    <td>:</td>
                    <td><input type="text" name="fullname" value="<?php echo $userData['fullname']; ?>"></td>
                    <td><input type="hidden" name="id" value="<?php echo $userData['id']; ?>"></td>
                    <td><?php echo isset($fullnameErr) ? $fullnameErr: ''; ?></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username" value="<?php echo $userData['username']; ?>"></td>
                    <td><?php echo isset($usernameErr) ? $usernameErr: ''; ?></td>
                </tr>
                <tr>
                    <td>User Type</td>
                    <td>:</td>
                    <td>
                        <select id="usertype" name="usertype">
                            <option value="student" <?php echo ($userData['usertype'] == 'student') ? 'selected' : ''; ?>>Student</option>
                            <option value="instructor" <?php echo ($userData['usertype'] == 'instructor') ? 'selected' : ''; ?>>Instructor</option>
                            <option value="admin" <?php echo ($userData['usertype'] == 'admin') ? 'selected' : ''; ?>>Admin</option>
                            <option value="support" <?php echo ($userData['usertype'] == 'support') ? 'selected' : ''; ?>>Support</option>
                        </select>
                    </td>
                    <td><?php echo isset($usertypeErr) ? $usertypeErr: ''; ?></td>
                </tr>
                <tr>
                    <td>Phone number</td>
                    <td>:</td>
                    <td><input type="tel" name="phone" value="<?php echo $userData['phone']; ?>"></td>
                    <td><?php echo isset($phoneErr) ? $phoneErr: ''; ?></td>
                </tr>
                <tr>
                    <td>Blood Group</td>
                    <td>:</td>
                    <td>
                        <select id="bloodgroup" name="bloodgroup">
                            <option value="b+" <?php echo ($userData['bloodgroup'] == 'b+') ? 'selected' : ''; ?>>B+</option>
                            <option value="b-" <?php echo ($userData['bloodgroup'] == 'b-') ? 'selected' : ''; ?>>B-</option>
                            <option value="o+" <?php echo ($userData['bloodgroup'] == 'o+') ? 'selected' : ''; ?>>O+</option>
                            <option value="a+" <?php echo ($userData['bloodgroup'] == 'a+') ? 'selected' : ''; ?>>A+</option>
                            <option value="ab+" <?php echo ($userData['bloodgroup'] == 'ab+') ? 'selected' : ''; ?>>AB+</option>
                        </select>
                    </td>
                    <td><?php echo isset($bloodgroupErr) ? $bloodgroupErr: ''; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="text" name="email" value="<?php echo $userData['email']; ?>"></td>
                    <td><?php echo isset($emailErr) ? $emailErr: ''; ?></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" value="<?php echo $userData['password']; ?>"></td>
                    <td><?php echo isset($passwordErr) ? $passwordErr: ''; ?></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td>:</td>
                    <td><input type="password" name="confirm_password"></td>
                    <td><?php echo isset($confirmPasswordErr) ? $confirmPasswordErr: ''; ?></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </table>
            <table>
            <tr>
                <input type="submit" id=updateProf name="update" value="Update">
               
                </tr>
            </table>
            </div>
    </form>
</body>
</html>
