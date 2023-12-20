<?php

session_start();

error_reporting(0);

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


$sql = "SELECT * FROM teachers";

$result = mysqli_query($connection, $sql);


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
            <div class="main-title">
            </div>

            <div class="p-5 h-screen text-center">
                <h1 class="text-xl text-center mb-2">View Teachers</h1>

                <?php
                
                if($_SESSION['student_message']) {
                    echo $_SESSION['student_message'];
                }

                unset($_SESSION['student_message']);

                ?>

                <div class="overflow-auto rounded-lg shadow hidden md:block">
                    <table class="w-full">
                        <thead class=" border-b-2 border-gray-200">
                            <tr>
                                <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left">Name</th>
                                <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left">Description</th>
                                <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left">Image</th>
                            </tr>
                        </thead>

                        <?php

                        while ($info = $result->fetch_assoc()) {

                        ?>
                            <tbody class="divide-y divide-gray-100">
                                <tr class="bg-white">
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                        <a href="#" class="font-bold text-blue-500 hover:underline">
                                            <?php echo "{$info['name']}"; ?>
                                        </a>
                                    </td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                        <?php
                                        echo "{$info['description']}";

                                        ?>
                                    </td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                        <img class="h-[54px] w-[56px] bg-contain" src="<?php echo "{$info['image']}"  ?>" alt="">
                                    </td>
                                    

                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                        <?php
                                        echo "<a onClick=\" javascript:return confirm('Are You Sure You Want To Perform This Action'); \" 
                                         href='delete_teacher.php?teacher_id={$info['id']}'>Delete Teacher</a>"

                                        ?>
                                    </td>

                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                        <?php
                                        echo "<a  
                                         href='update_teacher.php?teacher_id={$info['id']}'>Update</a>"

                                        ?>
                                    </td>

                                </tr>
                            </tbody>
                        <?php

                        }

                        ?>
                    </table>
                </div>


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