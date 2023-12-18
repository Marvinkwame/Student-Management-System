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




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

    $password = $_POST['password'];

    $sql = "select * from users where username='" . $name . "' and password='" . $password . "' ";

    $result = mysqli_query($connection, $sql); //performs a query against the database.

    $row = mysqli_fetch_array($result);

    if (isset($row["usertype"]) && $row["usertype"] === "student") {
        $_SESSION['username'] = $name;
        $_SESSION['usertype'] = "student";
        header("location:studenthome.php");
    } else if (isset($row["usertype"]) && $row["usertype"] === "admin") {
        $_SESSION['username'] = $name;
        $_SESSION['usertype'] = "admin";
        header("location:adminhome.php");
    } else {
        $error_message =  "Username or password do not match";
        $_SESSION['message'] = $error_message;
        header("location:login.php");
    }
}
