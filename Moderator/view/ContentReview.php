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
    <div class="Dashboard">
        <form id="coursemanagement" action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST"  onsubmit="return validate()">
        <!-- <div class="course-details"> -->
        <?php
        if(!$flag){
            echo "<table >
                <thead>
                    <tr>
                    <th>image</th>
                    <th>Course Title</th>
                    <th>Instructor ID</th>
                    <th>Pending Review </th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>";
                   
                    $keys=getCourseKeys();
                    foreach($keys as $id ){
                    $course=getCourseById($id);
                    $image = base64_encode($course['thumbnail']);
                    $course_title = $course['course_title'];
                    $instructor_id = $course['instructor_id'];
                    

                    echo "<tr>";
                    echo '<td><img src="data:image/jpeg;base64,' . $image . '" alt="Course Thumbnail" height=100 width=100></td>';
                    echo "<td>$course_title</td>";
                    echo "<td>$instructor_id</td>";
                    echo "<td>10</td>";
                    echo "<td>";
                    echo "<input type='submit' id='details' name='details_$id' value='Details'>";
                    echo "</td>";
                    echo "</tr>";}
                echo "    
                </tbody>
            </table>";
            }
            else{
                $instructor_=getRequestedInstructor($course1['instructor_id']);
                echo
                '<form action="'.$_SERVER['PHP_SELF'].'" method="POST" novalidate onsubmit="return validate()">
        <div class="container">
            <div class="left-side">
                <div class="form-group">
                    <p>Course Title: </p> <p style="color: black; font-weight: normal;">'.$course1['course_title'].'</p>
                </div>

                <div class="form-group">
                <p>Instructor: </p> <p style="color: black; font-weight: normal;">'.$instructor_["user_name"].'</p>
                </div>
                <div class="form-group">
                <p>Published Date: </p> <p style="color: black; font-weight: normal;">'.$course1['published_date'].'</p>
                </div>
                <div class="form-group">
                <p>Description: </p> <p style="color: black; font-weight: normal;">'.$course1['description'].'</p>
                </div>
            </div>
            <div class="right-side1">
            <div class="form-group1">
                <label for="course_title">Course Contents:</label>
                <a href="example.pdf" target="_blank" class="file-button">example.pdf</a>
                <a href="example.docx" target="_blank" class="file-button">example.docx</a>
                <a href="example.txt" target="_blank" class="file-button">example.txt</a>
                <a href="example.xlsx" target="_blank" class="file-button">example.xlsx</a>
                <a href="example.pptx" target="_blank" class="file-button">example.pptx</a>

            </div>
        </div>
        </div>
        <input type="submit" name="approve2" value="Approve"><input type="submit" name="back" value="Back">
    </form>';

            }?>
        </form>
    </div>
    </body>
</html>      
