<?php

session_start();

error_reporting(0);

if (!isset($_SESSION['username'])) {
    header('location:login.php');
} elseif ($_SESSION['usertype'] == "admin") {
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

$student_name = $_SESSION['username'];

$sql = "SELECT * FROM users WHERE username = '$student_name' ";

$result = mysqli_query($connection, $sql);

$info = mysqli_fetch_assoc($result);

if (isset($_POST['update_profile'])) {
    $updated_name = $_POST['username'];
    $updated_phone = $_POST['phone'];
    $updated_email = $_POST['email'];
    $updated_password = $_POST['password'];

    $sql_update = "UPDATE users SET
    username = '$updated_name', 
    email = '$updated_email', 
    phone = '$updated_phone', 
    password = '$updated_password'
    WHERE username = '$student_name'
    ";

    $result_update = mysqli_query($connection, $sql_update);

    if ($result_update) {
        echo " <script type='text/javascript'> alert('Profile Updated')  </script>";
        header("location:student_profile.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Student Dashboard</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">

    <script src="https://cdn.tailwindcss.com"></script>
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

        include('./student-sidebar.php');

        ?>

        <!-- Main -->
        <main class="main-container">
            <div class="text-center">
                <h2 class="text-center text-2xl underline font-semibold">Update Your Profile</h2>
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
                        <input type="submit" name="update_profile" value="Update Profile">
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