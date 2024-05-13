<?php 
        include "../controller/validation.php";
        include "../model/db_connect.php";
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(updateprofileValidate()){
        updateAdmin($_POST["upemail"],$_POST["upfullname"],$_POST["upphone"],$_POST["upaddress"],$_SESSION["username"]);
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Admin Profile</title>
    <link rel="stylesheet" href="../styles/style.css">

</head>
<body>
    <h2>Profile</h2>
    <div>
        <form action='<?php $_SERVER["PHP_SELF"]?>' method="post" onsubmit="return updateprofileValidate()">
        
        <?php

            if (!isset($_POST["update"])) {        
                $adminProfile = getAdminProfile($_SESSION["username"]);

                if ($adminProfile) {
                    echo '<img src="../assets/logo1.png" alt="" width=100>';
                    echo '<table>';
                    echo '<tr><td><strong>Email:</strong></td><td> ' . $adminProfile['email'] . '</td></tr>';
                    echo '<tr><td><strong>Full Name:</strong> </td><td>' . $adminProfile['fullname'] . '</td></tr>';
                    echo '<tr><td><strong>Phone Number:</strong></td><td> ' . $adminProfile['phone'] . '</td></tr>';
                    echo '<tr><td><strong>Address:</strong> </td><td>' . $adminProfile['address'] . '</td></tr>';
                    echo '<tr><td><strong>Username:</strong> </td><td>' . $_SESSION["username"] . '</td></tr>';
                    echo '</table>';
                }
                echo '<input type="submit" name="update" value="Update Profile">';

            }

            if (isset($_POST["update"])) {
                $adminProfile = getAdminProfile($_SESSION["username"]);

                if ($adminProfile) {
                    echo '<img src="../assets/logo1.png" alt="" width=100>';
                    echo '<table>';
                    echo '<tr><td><strong>Email:</strong></td><td><input type="text"  name="upemail" value= "' . $adminProfile['email'] . '"></td></tr>';
                    echo '<tr><td><strong>Full Name:</strong> </td><td><input type="text"  name="upfullname" value= "' . $adminProfile['fullname'] . '"</td></tr>';
                    echo '<tr><td><strong>Phone Number:</strong></td><td> <input type="text"  name="upphone" value= "' . $adminProfile['phone'] . '"</td></tr>';
                    echo '<tr><td><strong>Address:</strong> </td><td><input type="text"  name="upaddress" value= "' . $adminProfile['address'] . '"</td></tr>';
                    echo '<tr><td><strong>Username:</strong> </td><td>' . $_SESSION["username"] . '</td></tr>';
                    echo '</table>';
                } 
                echo '<input type="submit" name="save" value="Save Profile">';
            }
        ?>
        </form>

    </div>
</body>
</html>
