<?php
session_start();
include "../model/users.php";
if($_SERVER['REQUEST_METHOD']==="POST")
{
    $email=sanitize($_POST['email']);

    if(empty($_POST['email']))
    {
        echo "Please fill up the email";
    }
    else 
    {
        $isValidd=forgotpass($email);
        if($isValidd)
        {
            $_SESSION['email']=$email;
            header ("Location: ../view/forgotpassOTP.php");
        }
        else{
            $_SESSION['errorEmail'] = "Email is incorrect.";

        }
    }
}
function sanitize($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Forgot Password
        </title>
        <center>
        <img src="../view/logo.png" alt="Logo">


             <h3>         
                    Welcome to Forgot Password page of CourseWay  
            </h3>
        </center>

        <link rel="stylesheet" href="../css/viewStyle.css">
    </head>

    <body>
        

            <center>
            <form action='<?php echo $_SERVER["PHP_SELF"] ?>' method="post" novalidate >
           <div class="div3">
                <table>
                    <tr>
                        <td>
                            Email
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <input type="text" name="email"
                            <?php 
                    if(isset($_SESSION['errorEmail']))
                    {
                    echo $_SESSION['errorEmail'];
                    }        
                    ?> >
                           
                        </td>
                    </tr>
                    <tr>

                    </tr>
                    </table>
                    <table>
                    <tr>                        
                    <td>
                             <center>
                               <input type="submit" id=sendOTP name="submit" value="Send OTP" >
                               <br>
                            </center>
                        </td>
                    </tr>
                    </table>

                    </tr>
                    <tr>                       
                    </tr>
                
                </div>
            </form>
        </center>
        <p></p>
    </body>
</html>