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
    <style>
    .section2 {
        display: flex;
        justify-content: space-between; /* Align items to the right */
        padding-left:15px;
        padding-right:15px;
        margin:0px;
    }

    /* Optional: Style the input and button */
    #search {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-right: 5px; /* Add some space between input and button */
    }

    #searchb {
        padding: 5px 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
</style>
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
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] . "?window=window3"; ?>">
                <button type="submit" name="coursepayment">Course Payment</button>
                <button type="submit" name="payout">Instructor Payout</button>
            </form>
        </div>
        <div class="section2">
            <input type="text" id="search" ><button id="searchb">search</button>
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
