<?php
    session_start();
    
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Dashboard</title>
        <header>
        <center>
        <img src="../view/logo.png" alt="Logo">
        <h3>
            Welcome to Content Review Management Dashboard
        </h3>

        </center>
        <link rel="stylesheet" href="../css/DashB.css">
        <h5>
        <a href="../control/Logout.php"> Logout</a> &nbsp &nbsp &nbsp &nbsp
        <a href="../view/view&updateprofile.php">    Update Profile </a>
        
        </h5>

        </header>            

    </head>

    <body>
    <?php include "navbar.php";?>
        <div class="topDash">
        <input type="submit" id="featurebutton2" value="Newsletter and Notification Management  ">
        <input type="submit" id="featurebutton3" value="Approve payment">
        <input type="submit" id="featurebutton4" value="  Content Review and Moderation Tools  ">

        </div>
        <div class="bottomDash">
        <input type="submit" id="featurebutton5" value="Report review log/feedback">
        <input type="submit" id="featurebutton6" value="Course Management">
        <input type="submit" id="featurebutton7" value="Approve instructor account">
        </div>

    </body>
</html>