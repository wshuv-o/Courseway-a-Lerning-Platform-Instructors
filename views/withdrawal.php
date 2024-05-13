<?php
session_start();
require "parts.php";
require "../model/users.php"; 

if(!isset($_SESSION['hasLoggedIn'])){
    header("Location: login.php");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error_message="Requested";
}

$instructor_id = $_SESSION['userid'];

$user_courses = getCoursesByUserId($instructor_id);

$user_balance=getUserBalanceByInstructorId($instructor_id);
function filterCourses($courses, $searchQuery) {
    $filteredCourses = array();

    foreach ($courses as $course) {
        if (strpos(strtolower($course['course_title']), strtolower($searchQuery)) !== false ||
            strpos(strtolower($course['course_status']), strtolower($searchQuery)) !== false ||
            strpos(strtolower($course['price']), strtolower($searchQuery)) !== false) {
            $filteredCourses[] = $course;
        }
    }

    return $filteredCourses;
}

if (isset($_GET['searchCourses'])) {
    $searchQuery = $_GET['searchCourses'];
    $user_courses = filterCourses($user_courses, $searchQuery);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Courseway</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="sidebar.css">
    <script src="https://kit.fontawesome.com/aedd1f342b.js" crossorigin="anonymous"></script>
    
</head>
<body>

<?php 
    header_show(); 
    side_bar_show();
?>
<div class="dashboard-container">
    <br>
    <div class="contentDiv">
    <strong><?php echo "Balance: " . $user_balance; ?></strong>

        <br>
        <div class="payment-form">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" onsubmit="return validateForm()">
                <label for="accountName">Account Name:</label>
                <input type="text" id="accountName" name="accountName"><br><br>
                
                <label for="accountId">Account ID:</label>
                <input type="text" id="accountId" name="accountId"><br><br>
                
                <label for="amount">Amount:</label>
                <input type="number" id="amount" name="amount"><br><br>
                
                <button type="submit" name="submitPayment">Request Money</button>
                <div class="error-message" style="color:green;">
                <br>
                    <?php if(isset($error_message))echo $error_message; ?>
                </div>
            </form>
        </div>

        <br>
        <br>
        <br>
        <h2>Your Revenue From Courses</h2>
    </div>
    <div class="course_list">
        <div class="course-cards">
            <?php foreach($user_courses as $course): ?>
                <div class="course-card">
                    <div class="course-thumbnail">
                        <?php
                            $base64_thumbnail = base64_encode($course['thumbnail']);
                            echo '<img src="data:image/jpeg;base64,' . $base64_thumbnail . '" alt="Course Thumbnail">';
                        ?>
                    </div>
                    <div class="course-details">
                        <h3><?php echo $course['course_title']; ?></h3>
                        <p class="course-status"><?php echo $course['course_status']; ?></p>
                    </div>
                    <div class="course-price">
                        <p>$<?php echo $course['revenue']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php footer_show(); ?>

</body>

<script>
        function validateForm() {
            var accountName = document.getElementById("accountName").value;
            var accountId = document.getElementById("accountId").value;
            var amount = document.getElementById("amount").value;

            if (accountName.trim() == "" || accountId.trim() == "" || amount.trim() == "") {
                alert("Please fill in all fields.");
                return false;
            }

            if (isNaN(amount)) {
                alert("Amount must be a number.");
                return false;
            }

            return true;
        }
    </script>
</html>
