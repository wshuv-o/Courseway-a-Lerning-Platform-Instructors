<?php
session_start();
include "../model/users.php";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_POST["submitt"])){
        $_SESSION['OTPCODE']=$_POST['OTPCODE'];

            if(OTPCode($_POST['OTPCODE']))
            {
                header ("Location: ../view/forgotpassRetrieved.php");
                exit;
            }
    }    
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <center>
        <img src="../view/logo.png" alt="Logo">
        <h3>Welcome to Forgot Password page of CourseWay</h3>
    </center>
    <link rel="stylesheet" href="../css/viewStyle.css">
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <center>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" novalidate onsubmit="return forgetpassValidateJS()">
            <div class="div3">
                <table>
                    <tr>
                        <td>OTP code</td>
                        <td>:</td>
                        <td><input type="text" name="OTPCODE"></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <center>
                                <input type="submit" id="OTPmatch" name="submitt" value="Submit">
                                <br>
                            </center>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </center>
</body>
</html>
