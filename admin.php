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


$sql = 'SELECT * FROM admission';

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
        <h2>DASHBOARD</h2>
      </div>

      <div class="p-5 h-screen">

        <div class="overflow-auto rounded-lg shadow hidden md:block">
          <table class="w-full">
            <thead class=" border-b-2 border-gray-200">
              <tr>
                <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left">Name</th>
                <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left">Email</th>
                <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left">Phone</th>
                <th class="p-3 w-24 text-sm font-semibold tracking-wide text-left">Message</th>
              </tr>
            </thead>

            <?php

            while ($info = $result->fetch_assoc()) {

            ?>
              <tbody class="divide-y divide-gray-100">
                <tr class="bg-white">
                  <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                    <a href="#" class="font-bold text-blue-500 hover:underline">
                      <?php  echo "{$info['name']}"; ?>
                    </a>
                  </td>
                  <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                    <?php
                    echo "{$info['email']}";

                    ?>
                  </td>
                  <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                    <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-green-800 bg-green-200 rounded-lg bg-opacity-50">
                      <?php
                      echo "{$info['phone']}";
                      ?>
                    </span>
                  </td>
                  <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                    <?php

                    echo "{$info['message']}";

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