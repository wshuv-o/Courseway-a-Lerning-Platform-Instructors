<?php
    session_start();
    include "../model/users.php"; 
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        if(isset($_POST["submit1"])){
            if(forgetpassRetrievedValidateJS()==true)
            {
                echo "pass matcjnhybvtgcfd";
                
                $email=$_SESSION['email'];
                updatePass($_POST['conpass'],$email);
                header("Location: login.php");
                
            }

        }
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
         <script type="text/javascript" src="js/script.js"></script>

    </head>

    <body>

    <form action="forgotpassRetrieved.php" method="post" novalidate onsubmit="return forgetpassRetrievedValidateJS()">
        <div class="div3">
                <fieldset>
                <table>
                    <tr>
                        <td>
                            New password
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <input type="text" name="newpass">
                        </td>
                        <td>
                        <?php
                        if(isset($errorpass1))
                        {
                            echo $errorpass1;
                        }
                        ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Confirm password
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <input type="text" name="conpass">
                        </td>
                        <td>
                            <?php
                            if(isset($errorpass))
                            {
                                echo $errorpass;
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                             <center>
                               <input type="submit" name="submit1" id=changepassForgot value="Submit" >
                               <br>
                            </center>

                        </td>
                        <td>
                            <?php
                            if(isset($errormatch))
                            {
                                echo $errormatch;
                            }
                            ?>
                        </td>
                    </tr>

                </table>

                </fieldset>
                </div>
            </form>
        </center>
    </body>
</html>


