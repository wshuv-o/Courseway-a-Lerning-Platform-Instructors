<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>

    <script src="js/LogIn.js"></script>      
        <script>
        function ValidateLogin() {
            var username = document.getElementById("username").value.trim();
            var password = document.getElementById("password").value;
            if (newsletter === "") {
                alert("Please enter your username");
                return false;
            }
            if (subscriberType === "") {
                alert("Please enter your password");
                return false;
            }
        }
        </script>




        <title>Log In | Course Way</title>
        <link  rel="icon" href="icon.png">
        <link rel="stylesheet" href="Styles.css">
    </head>
    <body>
        <fieldset>
            <table>
                <tr>
                    <fieldset style="text-align: center;">
                        <img id="i1" src="../Views/logo.png">
                    </fieldset> 
                </tr>
                <tr>
                    <table>
                        <tr><br><br></tr>
                        <tr>
                            <h2 style="text-align: center;"><b>Log in</b></h2>
                             <center>
                                <fieldset style="width: 300px;">
                                    <form action="../Controller/Login.php" method="post" novalidate>
                                        <br><br>
                                        <label for="username">Username : </label>
                                        <input style="height: 20px;" type="text" name="username" id="username">
                                        <br><br>
                                        <label for="password">Password :</label>
                                        <input style="height: 20px;" type="text" name="password" id="password">
                                        <br><br><br>
        
                                        <center>
                                            <input  type="submit" style="width: 50%; height: 30px;"> 
                                            <br><br>

                                            <a href="../Views/SignUp.php">
                                            <button type="button"style="width: 50%; height: 30px;">Sign Up</button>
                                            </a><br><br>

                                            <a href="../Views/ForgotPass.php">
                                            <button type="button"style="width: 50%; height: 30px;">Forgot Password</button>
                                            </a>
                                        </center>
                                        <br>
                                    </form>
                                </fieldset>
                            </center>
                        </tr>
                        <tr><br><br></tr>
                        <tr>
                    </table>
                </tr>
                <tr>
                    <fieldset>
                        <br>
                        <br>
                        <br>
                    </fieldset>
                </tr>
            </table>
           </fieldset>
    </body>
</html>

<?php
echo isset($_SESSION['error']) ? $_SESSION['error'] : "";
?>