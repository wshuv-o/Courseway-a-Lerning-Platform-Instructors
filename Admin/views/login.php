<?php   
    session_start();
    include '..\controller\validation.php';
    setcookie("name", "token",time()+86640, "/");
    if(isset($_POST["signup"])){
        header('Location: signup.php');
    }    
    if(isset($_POST["signin"])){
        if(check($_POST["username"], $_POST["password"])){
            $_SESSION["password"]=$_POST["password"];
            header('Location: addashboard.php');
            $_SESSION["username"]=$_POST["username"];
        }
    }
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>

<div>
    <div class="div-center">
        <img src="..\assets\logo1.png" alt="hello" width="200" height="100" >
        <form method="post" onsubmit="return validateLogin()" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="uname">Username</label>
            <input type="text" name="username" value="<?php echo isset($_COOKIE['un']) ? $_COOKIE['un'] : '';?>">
            <p class="error"><?php if(!empty($errorMessage)) echo $errorMessage; ?></p>
            <label for="pass">Password</label>
            <input type="password" name="password">
            <p class="error"><?php if(!empty($errorMessage2)) echo $errorMessage2; ?></p>
            <input type="checkbox" id="savepass" name="savepass" value="no">
            <label for="savepass"> Save Account</label>
            <input type="submit" id="signin" name="signin" value="Sign in">
            
            <a href="forgotpass.php">Password forgotten?</a>
            <p>Don't have an account?</p>
            <input type="submit" id="signup" name="signup" value="Sign up">
        </form>
        <script src="../js/script.js"></script>
    </div>
</div>

</body>
</html>
