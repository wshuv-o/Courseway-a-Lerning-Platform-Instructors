<?php
session_start();
include "../model/users.php";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_POST["submitt"])){
        $_SESSION['OTPCODE']=$_POST['OTPCODE'];

        if(empty($_POST['OTPCODE']))
        {
            echo "Please enter the OTP Code for verification";
            header ("Location: ../view/forgotpassOTP.php");
            exit;
        }
        else
        {
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
        <title>Forgot Password | Course Way</title>
        <link  rel="icon" href="icon.png">
        <link rel="stylesheet" href="Styles.css">
    </head>
    <body>
        <fieldset>
            <table>
                <tr>
                <fieldset>
                        <center>
                            <img id="i1" src="../Views/logo.png"
                        </center>
                    </fieldset>
                </tr>
                <tr>
                    <table>
                        <tr>
                           <td>
                            
                           </td>
                           <td style="width: 100%;">
                            <div style="text-align: center !important">
                            <h2 style="text-align: center;"><b> Forget Password </b></h2>
                            <fieldset style="display: inline;background-color: white; color: black; width: 40%;" >
                                
                                <br>
                                    <img src="../Assets/ProfilePic.jpg"><br><br><br>
                                    <label for="username">Enter Username :</label>
                                    <input style="height: 20px;" type="text" name="username" id="username"><br><br><br>
                                   <input style="height: 25px; width: 25%;" type="submit">
                            </fieldset>
                            <br>
                        <br>
                        <br>
                        </div>
                           </td></tr>
                    </table>
                </tr>
                <tr>
                    <fieldset >
                        <br>
                        <br>
                        <br>
                    </fieldset>
                </tr>
            </table>
           </fieldset>
    </body>
</html>