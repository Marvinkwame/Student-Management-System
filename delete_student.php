<?php

session_start();

error_reporting(0);

$host = 'localhost';

$user = 'root';

$passdb = '';

$db = 'school_project';

$connection = mysqli_connect($host, $user, $passdb, $db);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if($_GET['student_id']) {
    $user_id = $_GET['student_id'];

    $sql = "DELETE FROM users WHERE id = '$user_id' ";

    $result = mysqli_query($connection, $sql);

    if($result) {
        $_SESSION['student_message'] = "Student Deleted Successfully";
        header("location:view_student.php");
    }
}




?>