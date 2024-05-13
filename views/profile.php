<?php
session_start();
if(!isset($_SESSION['hasLoggedIn'])){
    header("Location: login.php");
    exit();
}

include '../model/users.php';
include 'parts.php';

$userData = getValById($_SESSION['userid']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update_username'])) {
        $newUsername = $_POST['new_username'];
        updateName($_SESSION['userid'], $newUsername);
    }
    if (isset($_POST['update_email'])) {
        $newEmail = $_POST['new_email'];
        updateEmail($_SESSION['userid'], $newEmail);
    }
    if (isset($_POST['update_bio'])) {
        $newBio = $_POST['new_bio'];
        updateBio($_SESSION['userid'], $newBio);
    }
    if (isset($_POST['update_website'])) {
        $newWebsite = $_POST['new_website'];
        updateWebsite($_SESSION['userid'], $newWebsite);
    }

    $userData = getValById($_SESSION['userid']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Courseway</title>
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="style1.css">
    <style>
     

.dashboard-container {
    margin: 20px auto;
    width: 80%;
    max-width: 800px;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 8px 16px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

    </style>
    <script src="https://kit.fontawesome.com/aedd1f342b.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
        header_show(); 
        side_bar_show();
    ?>
    <div class="dashboard-container">
        <br>
        <fieldset>
            <table width="100%"> 
                <tr>                
                    <td align="center">
                        <h2>User Profile</h2>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" novalidate>
                            <p>User ID: <?php echo $userData['instructor_id']; ?></p>

                            <div class="form-group">
                                <label for="new_username">Username:</label>
                                <input type="text" id="new_username" name="new_username" value="<?php echo $userData['instructor_name']; ?>">
                                <button type="submit" name="update_username">Update</button>
                            </div>

                            <div class="form-group">
                                <label for="new_email">Email:</label>
                                <input type="email" id="new_email" name="new_email" value="<?php echo $userData['email']; ?>">
                                <button type="submit" name="update_email">Update</button>
                            </div>

                            <div class="form-group">
                                <label for="new_bio">Bio:</label>
                                <textarea id="new_bio" name="new_bio"><?php echo $userData['bio']; ?></textarea>
                                <button type="submit" name="update_bio">Update</button>
                            </div>

                            <div class="form-group">
                                <label for="new_website">Website:</label>
                                <input type="text" id="new_website" name="new_website" value="<?php echo $userData['website']; ?>">
                                <button type="submit" name="update_website">Update</button>
                            </div>
                        </form>
                    </td>
                </tr>
            </table>
        </fieldset>
    </div>
    <?php 
        footer_show();
    ?>
</body>
</html>
