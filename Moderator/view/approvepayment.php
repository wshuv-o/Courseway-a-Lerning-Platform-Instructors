<?php
    session_start();
    include "../model/users.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($_POST as $key => $value) {
            if (substr($key, 0, 7) === 'delete_') {
                $id = substr($key, 7);
                $deleted = deleteRowById($id); 
                break;
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($_POST as $key => $value) {
            if (substr($key, 0, 8) === 'approve_') {
                $id = substr($key, 8);
                $deleted = deleteRowById($id); 
                break;
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
            Welcome to Approve Payment Dashboard
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
        <div class="container">
        <div class="Dash">
    <h2>Payment Request</h2>
    <form id="PaymentRequestForm" action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
        <table id="paymentTable">
            <tr>
                <th>Request ID</th>
                <th>Instructor Name</th>
                <th>Date</th>
                <th>Amount</th>
                <th>Balance</th>
                <th>Action</th>
            </tr>
            <?php  
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $keys = getKeysPayment();
            foreach ($keys as $k) {
                $id = $k; 
                $row = getInstructor($id); 
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['instructor_name'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
                echo "<td>" . $row['balance'] . "</td>";
                echo "<td>";
                echo "<input type='submit' id='approve' name='approve_$id' value='Approve'><input type='submit' id='details' name='details_$id' value='Details'><input type='submit' id='delete' name='delete_$id' value='Delete'>";
                echo "</td>";
                echo "</tr>";
            }
        }            ?>
        </table>
    </form>
</div>
<?php
$course_names = array("Course 1", "Course 2", "Course 3"); 
$course_sales = 10; 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($_POST as $key => $value) {
            if (substr($key, 0, 8) === 'details_') {
                $id = substr($key, 8);
                $row = getInstructor($id); 
                echo '<div class="instructor-info">';
                echo '<h2>' . $row['instructor_name'] . '</h2>';
                echo '<p>Number of course sales: ' . $course_sales . '</p>';
                echo "<p>" ."Request ID: ". $row['id'] . "</p>";
                echo "<p>"."Request Date: " . $row['date'] . "</p>";
                echo "<p>"."Request Amount: " . $row['amount'] . "</p>";
                echo "<p>"."Current Balance: " . $row['balance'] . "</p>";
            }
        }
    }
echo '<p>All course names:</p>';
echo '<ul>';
foreach ($course_names as $course_name) {
    echo '<li>' . $course_name . '</li>';
}
echo '</ul>';
echo '</div>';
?>
</div>


    </body>
</html>