<?php
session_start();
include "../model/db_connect.php";
include "../controller/validation.php";

$accdoesntexist = '';
$passmissmatch = '';
$state = 5;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit1"])) {
        if (!empty($_POST["email1"])) {
            $email = sanitize($_POST["email1"]);
            if (CheckMail($email)) {
                $_SESSION["forgotpassemail"] = $email;
                $state = 2;
            } else {
                $accdoesntexist = "Account Doesn't Exist!";
            }
        }
    } elseif (isset($_POST["submit2"])) {
        $newpass = $_POST["newpass"];
        $conpass = $_POST["conpass"];

        if (!empty($newpass) && !empty($conpass)) {
            if ($newpass === $conpass) {
                if (UpdatePassword($_SESSION["forgotpassemail"], $newpass)) {
                    $state = 5;
                    unset($_SESSION["forgotpassemail"]);
                    header("Location: login.php");
                    exit();
                }
            } else {
                $passmissmatch = "Passwords didn't match!";
            }
        } else {
            $passmissmatch = "Please fill up all fields!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
<form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method="post" novalidate>
    <center>
        <table>
            <tr>
                <td></td>
                <td>
                    <table>
                        <tr>
                            <?php if ($state == 5): ?>
                                <p>Enter your email and we'll send you a link to reset your password</p>
                                <label for="email1">Email</label>
                                <input type="email" name="email1">
                                <p class="error"><?php echo $accdoesntexist; ?></p>
                                <input type="submit" name="submit1" value="Proceed"  onclick="return validateForm1fp()">
                            <?php elseif ($state == 2): ?>
                                <label for="newpass">New Password</label>
                                <input type="password" name="newpass">
                                <label for="conpass">Confirm Password</label>
                                <input type="password" name="conpass">
                                <p class="error"><?php echo $passmissmatch; ?></p>
                                <input type="submit" name="submit2" value="Confirm"  onclick="return validateForm2fp()">
                            <?php endif; ?>
                        </tr>
                    </table>
                </td>
                <td></td>
            </tr>
        </table>
    </center>
</form>
<script src="../js/script.js"></script>
</body>
</html>
