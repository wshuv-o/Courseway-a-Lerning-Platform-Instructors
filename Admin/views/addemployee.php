<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" href="../styles/employee.css">
</head>
<body>
    <form action="../controller/submit_employee.php" method="post" onsubmit="return validateForm()">
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" >
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" >
        
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" >
        
        <label for="bloodgroup">Address:</label>
        <input type="text" id="bloodgroup" name="bloodgroup" ></input>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" >
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" >
        
        <input type="submit" value="Add Employee">
    </form>
    <script src="../js/script.js"></script>
</body>
</html>
