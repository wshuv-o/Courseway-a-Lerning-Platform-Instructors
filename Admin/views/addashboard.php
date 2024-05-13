<?php
$sidebarState = 'normal';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../styles/style.css">

</head>
<body>
    <div class="sidebar" id="sidebar">        
        <a class="button" href="?window=window1">Dashboard</a>
        <a class="button" href="?window=window2">Users</a>
        <a class="button" href="?window=window3">Transactions</a>
        <a class="button" href="?window=window4">Employee</a>
        <a class="button" href="?window=window5">Course Recommendation</a>
        <a class="button" href="?window=window6">Homepage</a>
        <a class="button" href="?window=window7">Profile</a>
        <a class="button" href="?window=window8">Change Password</a>
        <br>
        <br><br>
        <br>
        <br><br>
        <a class="button" href="../controller/Logout.php">Logout</a>
    </div>
    <div class="content">
        <?php
        if (isset($_GET['window'])) {
            $window = $_GET['window'];
            switch ($window) {
                case 'window1':
                    include 'dashboard.php';
                    break;
                case 'window2':
                    include 'users.php';
                    break;
                case 'window3':
                    include 'transaction.php';
                    break;
                case 'window4':
                    include 'employee.php';
                    break;
                case 'window5':
                    include 'courserec.php';
                    break;
                case 'window6':
                    include 'homemodd.php';
                    break;                
                case 'window7':
                    include 'profile.php';
                    break;               
                case 'window8':
                    include 'passchange.php';
                    break;               
                case 'window9':
                    include 'addemployee.php';
                    break;
                default:
                    include 'dashboard.php';
                    break;
            }
        } else {
            include 'dashboard.php';
        }
        ?>
    </div>
</body>
</html>
