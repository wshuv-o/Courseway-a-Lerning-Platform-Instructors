<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["register"])){
        include "../Controller/Validate.php";
        include "../Model/Users.php";
        if($valid){
            if( AddUser($_POST["fullname"],$_POST["username"],$_POST["phone"],$_POST["bloodgroup"],$_POST["email"],$_POST["password"] )){
                header("Location: Login.php");
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign up | Course Way</title>
        <link  rel="icon" href="icon.png">
        <link rel="stylesheet" href="Styles.css">
    </head>
    <body>
        <fieldset>
            <center>
                <table>
                    <tr>
                        <fieldset ><h1><b>
                        <img id="i1" src="../Views/logo.png">
                        </b></h1></fieldset> 
                    </tr><tr>
                        <table>
                            <tr> 
                                <h2 style="text-align: center;"> Sign Up Page </h2>
                                    <br>

                                    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" novalidate>
                                    <div>
                                        <table >
                                            <tr>
                                                <td>Full Name :</td>
                                                <td><input type="text" name="fullname"></td>
                                                <td><?php echo isset($fullnameErr) ? $fullnameErr: ''; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Phone Number :</td>
                                                <td><input type="text" name="phone"></td>
                                                <td><?php echo isset($phoneErr) ? $phoneErr: ''; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Blood Group :</td>
                                                <td>
                                                    <select style="width: 100%;" id="bloodgroup" name="bloodgroup">
                                                        <option value="a+">A+</option>
                                                        <option value="a-">A-</option>
                                                        <option value="b+">B+</option>
                                                        <option value="b-">B-</option>
                                                        <option value="o+">O+</option>
                                                        <option value="o-">O-</option>
                                                        <option value="ab+">AB+</option>
                                                        <option value="ab-">AB-</option>
                                                    </select>
                                                </td>
                                                <td><?php echo isset($bloodgroupErr) ? $bloodgroupErr: ''; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Email Address :</td>
                                                <td><input type="text" name="email"></td>
                                                <td><?php echo isset($emailErr) ? $emailErr: ''; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Username :</td>
                                                <td><input type="text" name="username"></td>
                                                <td><?php echo isset($usernameErr) ? $usernameErr: ''; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Password :</td>
                                                <td><input type="text" name="password"></td>
                                                <td><?php echo isset($passwordErr) ? $passwordErr: ''; ?></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Confirm Password :</td>
                                                <td><input type="text" name="confirm_password"></td>
                                                <td><?php echo isset($confirmPasswordErr) ? $confirmPasswordErr: ''; ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="text-align: center"><input style=" height: 30px;"  type="submit" name="Register" value="Register your account"></td>
                                            </tr>
                                            <tr>
                                                <td> <br>Already a registered user?</td>
                                                <td>
                                                    <br>
                                                    <center><br>
                                                        <a href="../Views/Login.php">
                                                            <button type="button"style="width: 50%; height: 30px;">Log In</button>
                                                        </a>
                                                    </center>
                                                </td>
                                            </tr>
                                        </table>
                                     
                                    </div>
                                    </form>
                                     <fieldset><br></fieldset>
                                </fieldset>
                            </tr>
                            <tr><br></tr>
                        </table>
                    </tr>
                </table>
            </center>
        </fieldset>
    </body>
</html>