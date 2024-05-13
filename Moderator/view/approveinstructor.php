<?php
    session_start();
    include "../model/users.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($_POST as $key => $value) {
            if (substr($key, 0, 7) === 'delete_') {
                $id = substr($key, 7);
                $deleted = movetoDeclined($id, $_POST["fdback"]); 
                break;
            }
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["reqlist"])) {
            $_SESSION["flag"]=true;
    }
}
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["declist"])) {
                $_SESSION["flag"]=false;
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($_POST as $key => $value) {
            if (substr($key, 0, 8) === 'details_') {
                $_SESSION["flag"]=true;
            }
        }
    }

?>


<!DOCTYPE html>

<html>
    <head>
        <title>Dashboard</title>
        <header>
        <center>
        <img src="../view/logo.png" alt="Logo">
        <h3>
            Account Request
        </h3>

        </center>
        <link rel="stylesheet" href="../css/DashB.css">
        <h5>
        <a href="../control/Logout.php"> Logout</a> &nbsp &nbsp &nbsp &nbsp
        <a href="../view/view&updateprofile.php">    Update Profile </a>
        
        </h5>

        </header>     
        <script src="js/validateForm.js"></script>      

    </head>

    <body>
    <?php include "navbar.php";?>
        <div class="container" >
        <form id="PaymentRequestForm" action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST" novalidate>
        <div style="overflow: auto; height: 100px;">
            <button name = "reqlist" style="float: left; margin-left: 10px; margin-bottom: 10px; background-color: #007bff; color: white; border: none; padding: 8px 16px; border-radius: 4px;">Request list</button>
            <button name = "declist" style="float: left; margin-left: 10px; background-color: #007bff; color: white; border: none; padding: 8px 16px; border-radius: 4px;">Declined list</button>
        </div>
</form>


        <div class="Dash" style="overflow: auto; height: 480px;">
    <h2>Approval Request</h2>
    <form id="PaymentRequestForm" action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST" novalidate>
        <table id="paymentTable">
            <tr>
                <th>Instructor ID</th>
                <th>Instructor Name</th>
                <th>Email</th>
                <th>Bio</th>
                <th>Website</th>
                
            
            <?php  
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if((isset($_POST["reqlist"])) || ($_SESSION['flag'])){
            echo "<th>Action</th></tr>";
            $keys = getKeysInstructor();
            foreach ($keys as $k) {
                $id = $k; 
                $row = getRequestedInstructor($id); 
                echo "<tr>";
                echo "<td>" . $row['user_id'] . "</td>";
                echo "<td>" . $row['user_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['bio'] . "</td>";
                echo "<td><a href='" . $row['website'] . "' target='_blank'>Open website</a></td>";
                echo "<td>";
                echo "<input type='submit' id='approve' name='approve_$id' value='Approve'><input type='submit' id='details' name='details_$id' value='Details'>";
                echo "</td>";
                echo "</tr>";
            }
        }       
    }
    if(isset($_POST["declist"])){
        echo "<th>Feedback</th></tr>";
            $keys = getKeysDeclinedInstructor();
            foreach ($keys as $k) {
                $id = $k; 
                $row = getDeclinedInstructor($id); 
                echo "<tr>";
                echo "<td>" . $row['user_id'] . "</td>";
                echo "<td>" . $row['user_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['bio'] . "</td>";
                echo "<td><a href='" . $row['website'] . "' target='_blank'>Open website</a></td>";
                echo "<td>" . $row['feedback'] . "</td>";
                echo "</tr>";
            }
        }       
             ?>
        </table>
    </form>
</div>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($_POST as $key => $value) {
            if (substr($key, 0, 8) === 'details_') {
                $id = substr($key, 8);
                $_SESSION['flag']=true;
                $row = getRequestedInstructor($id); 
                echo '<div class="instructor-info">';
                echo '<h2>' . $row['user_name'] . '</h2>';
                echo "<p>" ."User ID: </p> <p style='color: black; font-weight: normal;'>" . $row['user_id'] . "</p>";
                echo "<p>"."Bio: </p> <p style='color: black; font-weight: normal;'>" . $row['bio'] . "</p>";
                echo "<p>"."Website: </p> <p style='color: black; font-weight: normal;'>" . $row['website'] . "</p>";

echo '<form action="'; echo $_SERVER["PHP_SELF"]; echo '" method="post" onsubmit= "return feedback()">';
                echo "<p>Feedback: </p>";
               echo "<textarea  id='fdback' name='fdback' rows='7' cols='30'></textarea>";
               echo '<p id="errorfdback" class="error" style ="color:red;"></p>';
               echo "<input type='submit' id='delete' name='delete_$id' value='Delete'>";
                echo "</form> ";
                
            }
        }
    }
echo '</div>';
?>
</div>


    </body>
</html>