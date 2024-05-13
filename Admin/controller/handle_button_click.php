<?php

include "../model/db_connect.php";
function GridView($table){
  $data=fetchAllDataFromTable($table);
  if (!empty($data)) {
    echo "<table class='table1' border='1'>";
    
    echo "<tr>";
    echo "<th>Email</th>";
    echo "<th>Full Name</th>";
    echo "<th>Phone</th>";
    echo "<th>Address</th>";
    echo "<th>Username</th>";
    echo "</tr>";

    foreach ($data as $row) {
        echo "<tr>";
        echo "<td>{$row['email']}</td>";
        echo "<td>{$row['fullname']}</td>";
        echo "<td>{$row['phone']}</td>";
        echo "<td>{$row['address']}</td>";
        echo "<td>{$row['username']}</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No data available.";
} 
}
function GridViewInstructor($table){
    $data=fetchAllDataFromTable($table);
    if (!empty($data)) {
      echo "<table class='table1' border='1'>";
      
      echo "<tr>";
      echo "<th>User ID</th>";
      echo "<th>User Name</th>";
      echo "<th>User Pass</th>";
      echo "<th>Email</th>";
      echo "<th>Bio</th>";
      echo "<th>Website</th>";
      echo "</tr>";
  
      foreach ($data as $row) {
          echo "<tr>";
          echo "<td>{$row['user_id']}</td>";
          echo "<td>{$row['user_name']}</td>";
          echo "<td>{$row['user_pass']}</td>";
          echo "<td>{$row['email']}</td>";
          echo "<td>{$row['bio']}</td>";
          echo "<td>{$row['website']}</td>";
          echo "</tr>";
      }
  
      echo "</table>";
    } else {
      echo "No data available.";
    } 
  }
  function GridViewStudent($table){
    $data = fetchAllDataFromTable($table);
    if (!empty($data)) {
        echo "<table class='table1' border='1'>";
        
        echo "<tr>";
        echo "<th>Student ID</th>";
        echo "<th>Student Name</th>";
        echo "<th>Username</th>";
        echo "<th>Date of Birth</th>";
        echo "<th>Address</th>";
        echo "<th>Email</th>";
        echo "<th>Phone</th>";
        echo "<th>Institute</th>";
        echo "</tr>";

        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>{$row['student_id']}</td>";
            echo "<td>{$row['student_name']}</td>";
            echo "<td>{$row['username']}</td>";
            echo "<td>{$row['date_of_birth']}</td>";
            echo "<td>{$row['address']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "<td>{$row['phone_number']}</td>";
            echo "<td>{$row['institute']}</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No data available.";
    } 
}
function GridViewModerator($table){
    $data = fetchAllDataFromTable($table);
    if (!empty($data)) {
        echo "<table class='table1' border='1'>";
        
        echo "<tr>";
        echo "<th>Moderator ID</th>";
        echo "<th>Moderator Name</th>";
        echo "<th>Username</th>";
        echo "<th>Phone</th>";
        echo "<th>Bloodgroup</th>";
        echo "<th>Email</th>";
        echo "<th>Password</th>";
        echo "</tr>";

        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['fullname']}</td>";
            echo "<td>{$row['username']}</td>";
            echo "<td>{$row['phone']}</td>";
            echo "<td>{$row['bloodgroup']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "<td>{$row['password']}</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No data available.";
    } 
}


if(isset($_POST['view_all'])) {
    GridView("admin");
    GridView("m_user");
    GridView("student");
 
} elseif(isset($_POST['view_learners'])) {
    GridViewStudent("student");

} elseif(isset($_POST['view_instructors'])) {
    GridViewInstructor("instructor");
} elseif(isset($_POST['view_employees'])) {
    GridViewModerator("m_user");
}elseif(isset($_POST['coursepayment'])) {
    GridViewModerator("m_user");
}elseif(isset($_POST['payout'])) {
    GridViewModerator("m_user");
}
?>
