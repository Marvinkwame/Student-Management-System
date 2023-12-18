<?php

session_start();

error_reporting(0);

if($_SESSION['admission-message']) {
    $message = $_SESSION['admission-message'];

    echo "<script type='text/javascript'>
    alert('$messsage');
    </script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admission.css">
    <title>Admission Form</title>
</head>

<body>

    <header class="hero">
        <div class="container">
            <h1>Lorem ipsum dolor sit deserunt!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Laborum incidunt labore recusandae.
            </p>
        </div>
    </header>


    <div class="form-container">
        <form action="data_check.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="">
            </div>

            <div class="form-group">
                <label for="name">Email</label>
                <input type="email" name="email" id="">
            </div>

            <div class="form-group">
                <label for="name">Phone</label>
                <input type="text" name="phone" id="">
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" cols="30"  rows="10 " placeholder="Enter Message"></textarea>
            </div>

            <input type="submit" value="Submit" name="apply">

        </form>
    </div>
</body>

</html>