<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../styles/style.css">
    <script>
        function validateForm() {
            var currpass = document.getElementById("currpass").value;
            var newpass = document.getElementById("newpass").value;
            var conpass = document.getElementById("conpass").value;

            if (currpass.trim() === "") {
                alert("Please enter your current password");
                return false;
            }

            if (newpass.trim() === "") {
                alert("Please enter a new password");
                return false;
            }

            if (conpass.trim() === "") {
                alert("Please confirm your new password");
                return false;
            }

            if (newpass !== conpass) {
                alert("Passwords don't match");
                return false;
            }
            if (UpdatePasswordByUsername(newpass, "asdf")) {
                        header("Location: addashboard.php");
                        exit();
            }

            return true;
        }
    </script>
</head>
<body>
<form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method="post" novalidate onsubmit="return validateForm()">
    <center>
        <table>
            <tr>
                <td></td>
                <td>
                    <table>
                        <tr>
                            <?php 
                                echo 
                                '<label for="currpass">Current Password</label>
                                <input type="password" id="currpass" name="currpass" >
                                
                                <label for="newpass">New Password</label>
                                <input type="password" id="newpass" name="newpass" >

                                <label for="conpass">Confirm Password</label>
                                <input type="password" id="conpass" name="conpass" >
                                <p class="error">';
                                echo $passmissmatch .'</p> ';
                                echo '<input type="submit" name="submit3" value="Confirm">';
                             ?>
                        </tr>
                    </table>
                </td>
                <td></td>
            </tr>
        </table>
    </center>
</form>
</body>
</html>
