<?php 
session_start();
if($_SERVER["REQUEST_METHOD"]==="POST"){
    if(isset($_POST['login']))
    {
        include "../control/Login.php";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <center>
        <img src="../view/logo.png" alt="Logo">
        <h3>Welcome to Login page of CourseWay</h3>
    </center>
    <link rel="stylesheet" href="../css/viewStyle.css">
    <script type="text/javascript" src="js/loginValidate.js"></script>
</head>
<body>
    <center>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] )?>" method="post" novalidate onsubmit="return validate()">
            <div class="div1">
                <table>
                    <tr>
                        <td>Username:</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" id="usnameLogin" name="username">
                            <span id="error1" class="error"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" id="PASSLogin" name="password">
                            <span id="error2" class="error"></span>
                        </td>
                    </tr>
                    <tr>
                        <td><span id="error3" class="error"></span></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" id="Login" name="login" value="Login"><br>
                            <span>
                                Not a registered user yet? <a href="signup.php">Register</a><br>
                                <center><a href="forgotPassword.php">Forgot Password ?</a> <br></center>
                            </span>
                        </td>
                    </tr>
                    <tr></tr>
                </table>
            </div>
        </form>
    </center>
</body>
</html>
