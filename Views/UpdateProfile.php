<?php 
session_start();       
 include "../Controller/Validate.php";
 include "../Model/Users.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["update"])){

        if(isset($_POST["update"])){
            if(UpdateUser($_POST["id"], $_POST["fullname"],$_POST["username"],$_POST["usertype"],$_POST["phone"],$_POST["bloodgroup"],$_POST["email"],$_POST["password"] )){
                header("Location: Dashboard.php");
				exit();
            }
		}

    }
}

//$key=PrimaryKey($_SESSION["username"],$_SESSION["password"]);
	//$userData = Userr($key); 

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update Profile | Course Way</title>
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
                           <?php include "Template\Sidebar.php";?>
                           </td>
                           <td style="width: 100%;">
                            <div style="text-align: center !important">
                            <h2 style="text-align: center;"><b> Update User Information </b></h2>
                            <fieldset style="display: inline;background-color: white; color: black;" >
                                
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
                                                <td style="text-align: center">
                                                    <input style=" height: 30px;"  type="submit" name="update" value="Update Profile">
                                                </td>
                                                
                                                <td style="text-align: center">
                                                        <a href="../Views/ChangePassword.php">
                                                            <button type="button"style="height: 30px;">Change Password</button>
                                                        </a>
                                                </td>
                                            </tr>
                                        </table>
                                     
                                    </div>
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