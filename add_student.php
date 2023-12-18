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

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['add_student'])) {
    // Get values from form
    $student_name = $_POST['username'];
    $student_phone = $_POST['phone'];
    $student_email = $_POST['email'];
    $student_password = $_POST['password'];
    $student_role = "student";

    $check_db = "SELECT * from users WHERE username = '$student_name' ";

    $db_check = mysqli_query($connection, $check_db);

    $row_count = mysqli_num_rows($db_check);

    if ($row_count == 1) {
        echo " <script type='text/javascript'> alert('Student Already Exists')  </script>";
    } else {
        $sql = "INSERT INTO users(username, phone, email, usertype, password) VALUES(
            '$student_name',
            '$student_phone',
            '$student_email',
            '$student_role',
            '$student_password'
        ) ";

        $result = mysqli_query($connection, $sql);



        if ($result) {
            echo " <script type='text/javascript'> alert('Student Added Successfully')  </script>";
            header('location:add_student.php');
        } else {
            echo 'Student Added Unsuccessful';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

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
            <div class="main-title text-center text-2xl">
                <h2>ADD STUDENT</h2>
            </div>

            <div class="flex flex-col items-center h-screen justify-center">
                <form action="#" class="grid gap-8 place-items-center" method="POST">

                    <div class="grid">
                        <label for="username" class="font-semibold">Username</label>
                        <input type="text" class="p-[10px] text-xl text-black" name="username" id="">
                    </div>

                    <div class="grid">
                        <label for="phone" class="font-semibold">Phone</label>
                        <input type="text" class="p-[10px] text-xl text-black" name="phone" id="">
                    </div>

                    <div class="grid">
                        <label for="email" class="font-semibold">Email</label>
                        <input type="email" class="p-[10px] text-xl text-black" name="email" id="">
                    </div>

                    <div class="grid">
                        <label for="password" class="font-semibold">Password</label>
                        <input type="text" class="p-[10px] text-xl text-black" name="password" id="">
                    </div>

                    <div class="bg-orange-400 p-2 w-3rem] text-center cursor rounded-[.5rem]">
                        <input type="submit" name="add_student" value="Submit">
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
    <script src="/js/script.js"></script>
</body>

</html>