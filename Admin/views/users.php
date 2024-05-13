<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../styles/style2.css">
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <div class="container">
        <div class="section">
            <label>User</label>
            <div class="buttons">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] . "?window=window9"; ?>">
                <button>Export CSV</button>
                <button type="submit" name="addemployee" >+ Add Moderator</button>
            </form>
            </div>
        </div>
        <div class="section">
            <div class="info">
                <div class="item">
                    <label>Learners</label>
                    <span id="learnerCount">0</span>
                </div>
                <div class="item">
                    <label>Instructors</label>
                    <span id="instructorCount">0</span>
                </div>
                <div class="item">
                    <label>Moderators</label>
                    <span id="employeeCount">0</span>
                </div>
            </div>
        </div>
        <div class="section">
    <div>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] . "?window=window2"; ?>">
            <button type="submit" name="view_all">View All</button>
            <button type="submit" name="view_learners">View Learners</button>
            <button type="submit" name="view_instructors">View Instructors</button>
            <button type="submit" name="view_employees">View Moderator</button>
        </form>
    </div>
</div>
<div class="section1">
    <div class="content" id="dynamicContent">
        <?php if($_SERVER["REQUEST_METHOD"]==="POST"){
            include '../controller/handle_button_click.php';
        }
          ?>
    </div>
</div>


    </div>
    <!-- <script src="scripts.js"></script> -->
</body>
</html>
