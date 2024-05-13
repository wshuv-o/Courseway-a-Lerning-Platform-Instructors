<?php
    session_start();
    include "../model/users.php";
    $flag=false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($_POST as $key => $value) {
            if (substr($key, 0, 8) === 'approve_') {
                $id = substr($key, 8);
                echo $id;
                $deleted = statusCourseById($id, "Approved"); 
                break;
            }
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($_POST as $key => $value) {
            if (substr($key, 0, 8) === 'decline_') {
                $id = substr($key, 8);
                echo $id;
                $deleted = statusCourseById($id, "Declined"); 
                break;
            }
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($_POST as $key => $value) {
            if (substr($key, 0, 8) === 'details_') {
                $id = substr($key, 8);
                $flag=true;
                $course1 = getCourseById($id); 
                break;
            }
        }
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Dashboard</title>

        <header>
        <center>
        <img src="../view/logo.png" alt="Logo">
        <h3>
            Content Review Dashboard
        </h3>

        </center>
        <link rel="stylesheet" href="../css/DashB.css">
        
        <h5>
        <a href="../control/Logout.php"> Logout</a> &nbsp &nbsp &nbsp &nbsp
        <a href="../view/view&updateprofile.php">    Update Profile </a>
        
        </h5>

        </header>
        <script src="js/sendMail.js"></script>     
        <style>
            .container {
            width: 80%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
        }
        .left-side, .right-side {
            width: 48%;
        }
        .right-side1 {
            background-color:ivory;
            border-radius: 10px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group1 {
            width: 200px;
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type="text"], input[type="number"], select, textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="file"] {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
                        table {
            border-collapse: collapse;
            width: 100%;
            }

            th, td {
            border: 1px solid #ddd;
            padding: 4px;
            }

            th {
            background-color: #f2f2f2;
            font-size: 12px;
            }

            tr:nth-child(even) {
            background-color: lavender;
            }

            tbody tr:hover {
            background-color: #f5f5f5;
            }
            
            .file-button {
  display: block;
  margin-bottom: 10px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  border: 2px solid #007bff;
  color: #007bff;
  border-radius: 5px;
  transition: background-color 0.3s, color 0.3s;
}

.file-button:hover {
  background-color: #007bff;
  color: #fff;
}
        </style> 
        <script src="js/course.js"></script>   
    </head>

    <body>
    <?php include "navbar.php";?>        
    <div class="Dash">
  <h2>Report Management</h2>
  <table>
    <thead>
      <tr>
        <th>Report Against</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Provide Feedback</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Course XYZ</td>
        <td>Lorem ipsum dolor sit amet</td>
        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
        <td>
          <form action="provide_feedback.php" method="post">
            <textarea name="feedback" required></textarea>
            <br>
            <input type="submit" value="Submit Feedback">
          </form>
        </td>
      </tr>
      <tr>
        <td>Instructor ABC</td>
        <td>Lorem ipsum dolor sit amet</td>
        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
        <td>
          <form action="provide_feedback.php" method="post">
            <textarea name="feedback" required></textarea>
            <br>
            <input type="submit" value="Submit Feedback">
          </form>
        </td>
      </tr>
    </tbody>
  </table>
</div>
    </body>
</html>      
