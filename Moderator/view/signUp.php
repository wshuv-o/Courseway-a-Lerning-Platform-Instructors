<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["register"])){
        include "../control/validate.php";
        include "../model/users.php";
        if($valid){
            if(AddUser($_POST["fullname"],$_POST["username"],$_POST["usertype"],$_POST["phone"],$_POST["bloodgroup"],$_POST["email"],$_POST["password"] )){
                header("Location: login.php");
            }
        }
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Sign Up
        </title>
    </head>
    <center>
        <img src="../view/logo.png" alt="Logo">
        <h3>
                Welcome to Sign Up page of CourseWay
        </h3>
        </center>
        <link rel="stylesheet" href="../css/viewStyle.css">

    <body>

            <form action=<?php echo $_SERVER["PHP_SELF"] ?> method="post" novalidate> 
            <div class="div2">
                <table>
                    <tr>
                        <td>
                            Full Name
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <input type="text" name="fullname">
                           
                        </td>
                        <td><?php echo isset($fullnameErr) ? $fullnameErr: ''; ?></td>
                    </tr>
                    <tr>
                        <td>
                            Username
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <input type="text" name="username">
                        </td>
                        <td><?php echo isset($usernameErr) ? $usernameErr: ''; ?></td>
                    </tr>
                    <tr>
                        <td>
                            User Type
                        </td>
                        <td>
                            :
                        </td>
                            <td>
                                <select id="usertype" name="usertype">
                                    <option value="student">Student</option>
                                    <option value="instructor">Instructor</option>
                                    <option value="admin">Admin</option>
                                    <option value="Support">Support</option>
                                </select>
                            </td>
                            <td><?php echo isset($usertypeErr) ? $usertypeErr: ''; ?></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="phone">Phone number</label>
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <input type="tel" id="phone" name="phone">
                        </td>
                        <td><?php echo isset($phoneErr) ? $phoneErr: ''; ?></td>

                    </tr>
                    <tr>
                        <td>
                            Blood Group
                        </td>
                        <td>
                            :
                        </td>
                            <td>
                                <select id="bloodgroup" name="bloodgroup">
                                    <option value="b+">B+</option>
                                    <option value="b-">B-</option>
                                    <option value="o+">O+</option>
                                    <option value="a+">A+</option>
                                    <option value="ab+">AB+</option>
                                </select>
                            </td>
                            <td><?php echo isset($bloodgroupErr) ? $bloodgroupErr: ''; ?></td>
                    </tr>
                    <tr>
                        <td>
                            Email
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <input type="text" name="email">
                        </td>
                        <td><?php echo isset($emailErr) ? $emailErr: ''; ?></td>

                    </tr>
                    <tr>
                    <tr>
                        <td>
                            Password
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <input type="password" name="password">
                        </td>
                        <td><?php echo isset($passwordErr) ? $passwordErr: ''; ?></td>

                    </tr>
                    <tr>
                        <td>
                            Confirm Password
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <input type="text" name="confirm_password">
                        </td>
                        <td><?php echo isset($confirmPasswordErr) ? $confirmPasswordErr: ''; ?></td>

                    </tr>              
                    <tr>
                    </tr>

                </table>
                <center>
                <table>
                <tr>
                        <td>
                            <input type="submit" id=register name="register" value="Register">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Already a registered user? <a href="login.php">Login</a>
                        </td>

                    </tr>

                </table>
                </center>

            </form>
            </div>
        
    </body>
</html>