<?php 
session_start();
include '..\model\db_connect.php';
$emailErr = $fullnameErr = $phoneErr = $addressErr = $usernameErr = $passwordErr = $confirmPasswordErr = '';
$valid=1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if(validateSignup()){
        InsertAdmin($_POST['email'],
        $_POST['fullname'],
        $_POST['phone'],
        $_POST['address'],
        $_POST['username'],
        $_POST['password']);
        
        header("Location: login.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Admin Sign Up</title>
    <link rel="stylesheet" href="../styles/style.css">

</head>
<body>
    <h2>Sign Up</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" novalidate onsubmit="return validateSignup()">
            <table>
            
            <tr >
                <td><label for="email">Email:</label></td>
                <td><input type="text" name="email" id="email"></td>
                <td class="error"><?php echo $emailErr ?? ''; ?></td>

            </tr>
            <tr >
                <td><label for="fullname">Full Name:</label></td>
                <td><input type="text" name="fullname" id="fullname"></td>
                <td class="error"><?php echo $fullnameErr ?? ''; ?></td>
            </tr>
            <tr >
                <td><label for="phone">Phone Number:</label></td>
                <td><input type="text" name="phone" id="phone"></td>
                <td class="error"><?php echo $phoneErr ?? ''; ?></td>
            </tr>
            <tr >
                <td><label for="address">Address:</label></td>
                <td><input type="text" name="address" id="address"></td>
                <td class="error"><?php echo $addressErr ?? ''; ?></td>
            </tr>
            <tr >
                <td><label for="username">Username:</label></td>
                <td><input type="text" name="username" id="username"></td>
                <td class="error"><?php echo $usernameErr ?? ''; ?></td>
            </tr>
            <tr >
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password" id="password"></td>
                <td class="error"><?php echo $passwordErr ?? ''; ?></td>
            </tr>
            <tr >
                <td><label for="confirm_password">Confirm Password:</label></td>
                <td><input type="password" name="confirm_password" id="confirm_password"></td>
                <td class="error"><?php echo $confirmPasswordErr ?? ''; ?></td>
            </tr>
            <tr >
                <td><input type="submit" name="submit" value="Submit"></td>
                <td><input type="submit" name="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
    <script src="../js/script.js"></script>

</body>
</html>
