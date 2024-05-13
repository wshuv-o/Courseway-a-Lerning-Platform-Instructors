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
            Course Management Dashboard
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
        .form-group {
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
                        <th>Course ID</th>
                        <th>Course Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Sub-category</th>
                        <th>Published Date</th>
                        <th>Price</th>
                        <th>Revenue</th>
                        <th>Thumbnail</th>
                        <th>Course Status</th>
                        <th>Students Count</th>
                        <th>Instructor ID</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>";
                   
                    $keys=getCourseKeys();
                    foreach($keys as $id ){

                    $course=getCourseById($id);
                    $course_id = $course['course_id'];
                    $course_title = $course['course_title'];
                    $description = $course['description'];
                    $category = $course['category'];
                    $sub_category = $course['sub_category'];
                    $published_date = $course['published_date'];
                    $price = $course['price'];
                    $revenue = $course['revenue'];
                    $thumbnail = base64_encode($course['thumbnail']);
                    $course_status = $course['course_status'];
                    $students_count = $course['students_count'];
                    $instructor_id = $course['instructor_id'];

                    echo "<tr>";
                    echo "<td>$course_id</td>";
                    echo "<td>$course_title</td>";
                    echo "<td>$description</td>";
                    echo "<td>$category</td>";
                    echo "<td>$sub_category</td>";
                    echo "<td>$published_date</td>";
                    echo "<td>$price</td>";
                    echo "<td>$revenue</td>";
                    echo '<td><img src="data:image/jpeg;base64,' . $thumbnail . '" alt="Course Thumbnail" height=100 width=100></td>';
                    echo "<td>$course_status</td>";
                    echo "<td>$students_count</td>";
                    echo "<td>$instructor_id</td>";
                    echo "<td>".$course['status']."</td>";
                    echo "<td>";
                    echo "<input type='submit' id='approve' name='approve_$id' value='Approve'><input type='submit' id='delete' name='decline_$id' value='Decline'><input type='submit' id='details' name='details_$id' value='Details'>";
                    echo "</td>";
                    echo "</tr>";}
                echo "    
                </tbody>
            </table>";
            }
            else{
                echo
                '<form action="'.$_SERVER['PHP_SELF'].'" method="POST" novalidate onsubmit="return validate()">
        <div class="container">
            <div class="left-side">
                <div class="form-group">
                    <label for="course_title">Course Title:</label>
                    <input type="text" id="course_title" name="course_title" value="'.$course1['course_title'].'" >
                    <span id="error2" class="error"></span>
                </div>
                <div class="form-group">
                    <label for="category">Category:</label>
                    <input type="text" id="category" name="category" value="'.$course1['category'].'" >
                    <span id="error1" class="error"></span>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" id="price" name="price" value="'.$course1['price'].'">
                    <span id="error3" class="error"></span>
                </div>
                <div class="form-group">
                <label for="published_date">Published Date:</label>
                <input type="date" id="published_date" name="published_date">
            </div>
            
            </div>
            <div class="right-side">
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" rows="4" >'.$course1['description'].'</textarea>
                    <span id="error4" class="error"></span>
                </div>
                <div class="form-group">
                    <label for="sub_category">Sub-category:</label>
                    <input type="text" id="sub_category" name="sub_category" value="'.$course1['sub_category'].'">
                    <span id="error5" class="error"></span>
                    
                </div>
                <div class="form-group">
                    <label for="thumbnail">Thumbnail:</label>
                    <input type="file" id="thumbnail" name="thumbnail" accept="image/*" >
                </div>
            </div>
        </div>
        <input type="submit" name="approve2" value="Approve">
    </form>';

            }?>
        </form>
    </div>
    </body>
</html>      