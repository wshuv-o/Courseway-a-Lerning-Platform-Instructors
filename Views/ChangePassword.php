<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Change Password | Course Way</title>
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
                           <?php include "Template\sidebar.php";?>
                            </fieldset>
                           </td>
                           <td style="width: 100%;">
                            <div style="text-align: center !important">
                            <h2 style="text-align: center;"><b> Change Password </b></h2>
                            <fieldset style="display: inline;background-color: white; color: black;" >
                                
                                <br>
                                    <label for="password">Set New Password :</label>
                                    <input style="height: 20px; width: fit-content" type="text" name="password" id="password">
                                    <br><br>
                                    <label for="Cpassword">Confirm Password :</label>
                                    <input style="height: 20px; width: fit-content" type="text" name="Cpassword" id="confirm_password">
                                        <br><br><br>
                                   <input style="height: 25px; width: 75%;" type="submit"><br>
                                   <a href="../Views/Dashboard.php">
                                   <br> <button  style="height: 25px; width: 75%;" type="button">Cancel</button>
                                    </a>
                            </fieldset>
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