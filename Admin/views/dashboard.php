<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <p>Welcome <?php echo $_SESSION["row"]["fullname"];?> </p>
    <table border="1" style="width: 100%;">
        <tr>
            <td><a href="#"><br><br><br><br><br><br> 56789+ Student<br><br><br><br><br><br></a></td>
            <td><a href="#"><br><br><br><br><br><br>370+ Instructor<br><br><br><br><br><br></a></td>
            <td><a href="#"><br><br><br><br><br><br>1000+ Courses<br><br><br><br><br><br></a></td>
        </tr>
        
        <tr>
            <td rowspan=2><a href="#"><br><br><br><br><br><br>Link 1<br><br><br><br><br><br></a></td>
            <td><a href="#"><br><br><br><br><br><br>Link 1<br><br><br><br><br><br></a></td>
        </tr>
    </table>
</body>
</html>
