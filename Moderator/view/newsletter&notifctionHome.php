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
            Welcome to Newsletter & Notification Management Dashboard
        </h3>

        </center>
        <link rel="stylesheet" href="../css/DashB.css">
        
        <h5>
        <a href="../control/Logout.php"> Logout</a> &nbsp &nbsp &nbsp &nbsp
        <a href="../view/view&updateprofile.php">    Update Profile </a>
        
        </h5>

        </header>
        <script src="js/sendMail.js"></script>      
        <script>
        function validateForm() {
            var newsletter = document.getElementById("newsletter").value.trim();
            var subscriberType = document.getElementById("subscriberType").value;
            if (newsletter === "") {
                alert("Please enter your newsletter message.");
                return false;
            }
            if (subscriberType === "") {
                alert("Please select the subscriber type.");
                return false;
            }
            sendMail();
            return true;
        }
        </script>
      

    </head>

    <body>
    <?php include "navbar.php";?>        
<div class="Dash">
            <h2>          Newsletter</h2>
            <form id="newsletterForm" action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST"  onsubmit="return validateForm()">
                <p>Mail Body:</p>
                <textarea  id="newsletter" name="newsletter" rows="14" cols="80"></textarea><br><br>

                <label for="subscriberType">Send this Message to:</label>
                <select id="subscriberType" name="subscriberType">
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                </select><br><br>

                <button type="submit" name="submitnewsletter">Send</button>
            </form>
        </div>
    </body>
</html>      