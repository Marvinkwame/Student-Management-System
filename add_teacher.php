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

if (isset($_POST['create_teacher'])) {
    $teacher_name = $_POST['username'];
    $teacher_desc = $_POST['description'];
    $teacher_image = $_FILES['image']['name'];
    $dst = "./image/".$teacher_image;
    $dst_db = "image/".$teacher_image;

    move_uploaded_file($_FILES['image']['tmp_name'], $dst);

    //check if there is a teacher with the same name in the db
    $check_db = "SELECT * from teachers WHERE name = '$teacher_name' ";

    $db_check = mysqli_query($connection, $check_db);

    $row_count = mysqli_num_rows($db_check);

    if ($row_count == 1) {
        echo " <script type='text/javascript'> alert('Teacher Already Exists')  </script>";
    } else {
        $sql = "INSERT INTO teachers (name, description, image) VALUES(
            '$teacher_name',
            '$teacher_desc',
            '$dst_db'
        )";

        $result = mysqli_query($connection, $sql);
    }

    if ($result) {
        echo " <script type='text/javascript'> alert('Teacher Added Successfully')</script>";
        header('location:add_teacher.php');
    } else {
        echo 'Teacher Added Unsuccessful';
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
            <div class="text-center text-2xl">
                <h2>ADD TEACHER</h2>
            </div>

            <div class="flex flex-col items-center h-screen justify-center">
                <form action="#" class="grid gap-8 place-items-center" enctype="multipart/form-data" method="POST">

                    <div class="grid">
                        <label for="username" class="font-semibold">Username</label>
                        <input type="text" class="p-[10px] text-xl text-black" name="username" id="">
                    </div>

                    <div class="grid">
                        <label for="phone" class="font-semibold">Description</label>
                        <input type="text" class="p-[10px] text-xl text-black" name="description" id="">
                    </div>

                    <div class="grid place-items-center border-2">
                        <label for="email" class="font-semibold">Image</label>
                        <input type="file" class="p-[10px]" f name="image" alt="">
                    </div>

                    <div class="bg-orange-400 p-2 w-3rem] text-center cursor rounded-[.5rem]">
                        <input type="submit" name="create_teacher" value="Create Teacher">
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