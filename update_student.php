<?php

session_start();

if (!isset($_SESSION['username'])) {
    header('location:login.php');
} elseif ($_SESSION['usertype'] == "student") {
    header("location:login.php");
}

$host = 'localhost';

$user = 'root';

$passdb = '';

$db = 'school_project';

$connection = mysqli_connect($host, $user, $passdb, $db);

$id = $_GET['student_id'];

$sql = "SELECT * FROM users  WHERE id = '$id' ";

$result = mysqli_query($connection, $sql);

$info = $result->fetch_assoc(); //use it for the values for the forms $info['name']

if (isset($_POST['update_student'])) {
    $updated_name = $_POST['username'];
    $updated_email = $_POST['email'];
    $updated_phone = $_POST['phone'];
    $updated_password = $_POST['password'];

    $sql_update = "UPDATE users SET 
    username = '$updated_name', 
    email = '$updated_email', 
    phone = '$updated_phone', 
    password = '$updated_password'
    WHERE id = '$id' ";

    $result_update = mysqli_query($connection, $sql_update);

    if($result_update) {
        echo "<script>alert('Update Successful')</script>";
        header("location:view_student.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Update Student</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="grid-container">

        <!-- Header -->
        <header class="header">
            <div class="menu-icon" onclick="openSidebar()">
                <span class="material-icons-outlined">menu</span>
            </div>
            <div class="header-left">
                <span class="material-icons-outlined">search</span>
            </div>
            <div class="header-right">
                <span class="material-icons-outlined">notifications</span>
                <span class="material-icons-outlined">email</span>
                <span class="material-icons-outlined">account_circle</span>
            </div>
            <a href="logout.php">
                Logout
            </a>

        </header>
        <!-- End Header -->

        <?php
        include('./admin_sidebar.php')

        ?>


        <!-- Main -->
        <main class="main-container">
            <div class="main-title">
                <h2>Update Student</h2>
            </div>


            <div class="flex flex-col items-center h-screen justify-center">
                <form action="#" class="grid gap-8 place-items-center" method="POST">

                    <div class="grid">
                        <label for="username" class="font-semibold">Username</label>
                        <input type="text" value="<?php echo "{$info['username']}" ?>" class="p-[10px] text-xl text-black" name="username" id="">
                    </div>

                    <div class="grid">
                        <label for="phone" class="font-semibold">Phone</label>
                        <input type="text" value="<?php echo "{$info['phone']}" ?>" class="p-[10px] text-xl text-black" name="phone" id="">
                    </div>

                    <div class="grid">
                        <label for="email" class="font-semibold">Email</label>
                        <input type="email" value="<?php echo "{$info['email']}" ?>" class="p-[10px] text-xl text-black" name="email" id="">
                    </div>

                    <div class="grid">
                        <label for="password" class="font-semibold">Password</label>
                        <input type="text" value="<?php echo "{$info['password']}" ?>" class="p-[10px] text-xl text-black" name="password" id="">
                    </div>

                    <div class="bg-orange-400 p-2 w-3rem] text-center cursor rounded-[.5rem]">
                        <input type="submit" name="update_student" value="Submit">
                    </div>
                </form>
            </div>

        </main>
        <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>
</body>

</html>