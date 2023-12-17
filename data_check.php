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
echo "Connected successfully";
echo "<br>";


//when the button is clicked
if (isset($_POST['apply'])) {
    $input_name = $_POST['name'];
    $input_email = $_POST['email'];
    $input_phone = $_POST['phone'];
    $input_message = $_POST['message'];

    $sql = "INSERT INTO admission(name, email, phone, message) VALUES(
        '$input_name',
        '$input_email',
        '$input_phone',
        '$input_message'
    )";

    $result = mysqli_query($connection, $sql); //performs a query against the database.


    if($result) {
        $_SESSION['admission-message'] = 'Application Successful';
        header("location:index.php");
    } else {
        $_SESSION['admission-message'] = 'Application Unsuccessful';
    }
}
