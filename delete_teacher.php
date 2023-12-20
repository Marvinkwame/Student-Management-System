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

if($_GET['teacher_id']) {
    $teacher_id = $_GET['teacher_id'];

    $sql = "DELETE FROM teachers WHERE id = '$teacher_id' ";

    $result = mysqli_query($connection, $sql);

    if($result) {
        $_SESSION['student_message'] = "Teacher Deleted Successfully";
        header("location:view_teacher.php");
    }
}




?>