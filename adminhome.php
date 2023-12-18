<?php

session_start();

if (!isset($_SESSION['username'])) {
  header('location:login.php');
} elseif ($_SESSION['usertype'] == "student") {
  header("location:login.php");
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
      <div class="main-title">
        <h2>ADMIN DASHBOARD</h2>
      </div>


      <div class="p-5 h-screen">
        <h1 class="text-xl mb-2">Your orders</h1>

        <div class="overflow-auto rounded-lg shadow hidden md:block">
          <table class="w-full">
            <thead class=" border-b-2 border-gray-200">
              <tr>
              <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left">Name</th>
                <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left">Email</th>
                <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left">Phone</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left">Details</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
              <tr class="bg-white">
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                  <a href="#" class="font-bold text-blue-500 hover:underline">10001</a>
                </td>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                  Kring New Fit office chair, mesh + PU, black
                </td>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                  <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-green-800 bg-green-200 rounded-lg bg-opacity-50">Delivered</span>
                </td>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">16/10/2021</td>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">$200.00</td>
              </tr>

              <tr class="bg-gray-50">
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                  <a href="#" class="font-bold text-blue-500 hover:underline">10002</a>
                </td>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Kring New Fit office chair, mesh + PU, black</td>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                  <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-yellow-800 bg-yellow-200 rounded-lg bg-opacity-50">Shipped</span>
                </td>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">16/10/2021</td>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">$200.00</td>
              </tr>

              <tr class="bg-white">
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                  <a href="#" class="font-bold text-blue-500 hover:underline">10002</a>
                </td>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Kring New Fit office chair, mesh + PU, black</td>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                  <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50">Cancelled</span>
                </td>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">16/10/2021</td>
                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">$200.00</td>
              </tr>

            </tbody>
          </table>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:hidden">
          <div class="bg-white space-y-3 p-4 rounded-lg shadow">
            <div class="flex items-center space-x-2 text-sm">
              <div>
                <a href="#" class="text-blue-500 font-bold hover:underline">#1000</a>
              </div>
              <div class="text-gray-500">10/10/2021</div>
              <div>
                <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-green-800 bg-green-200 rounded-lg bg-opacity-50">Delivered</span>
              </div>
            </div>
            <div class="text-sm text-gray-700">
              Kring New Fit office chair, mesh + PU, black
            </div>
            <div class="text-sm font-medium text-black">
              $200.00
            </div>
          </div>
          <div class="bg-white space-y-3 p-4 rounded-lg shadow">
            <div class="flex items-center space-x-2 text-sm">
              <div>
                <a href="#" class="text-blue-500 font-bold hover:underline">#1001</a>
              </div>
              <div class="text-gray-500">10/10/2021</div>
              <div>
                <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-yellow-800 bg-yellow-200 rounded-lg bg-opacity-50">Shipped</span>
              </div>
            </div>
            <div class="text-sm text-gray-700">
              Kring New Fit office chair, mesh + PU, black
            </div>
            <div class="text-sm font-medium text-black">
              $200.00
            </div>
          </div>
          <div class="bg-white space-y-3 p-4 rounded-lg shadow">
            <div class="flex items-center space-x-2 text-sm">
              <div>
                <a href="#" class="text-blue-500 font-bold hover:underline">#1002</a>
              </div>
              <div class="text-gray-500">10/10/2021</div>
              <div>
                <span class="p-1.5 text-xs font-medium uppercase tracking-wider text-gray-800 bg-gray-200 rounded-lg bg-opacity-50">Canceled</span>
              </div>
            </div>
            <div class="text-sm text-gray-700">
              Kring New Fit office chair, mesh + PU, black
            </div>
            <div class="text-sm font-medium text-black">
              $200.00
            </div>
          </div>
        </div>
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