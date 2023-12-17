<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="flex flex-col w-full lg:flex-row items-center bg-blue-400 h-screen">
    <div class="w-full lg:w-1/2 h-full flex flex-col items-center justify-center">

        <form action="login_check.php" method="POST" class="grid place-items-center mx-auto overflow-hidden w-[90%] lg:w-[60%] gap-4" method="post">

            <h2 class="text-3xl font-semibold ">Log Into Your Account</h2>

            <div class="grid gap-4 ">
                <label for="username">Username</label>
                <input type="text" name="username" id="">
            </div>

            <div class="grid gap-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="">
            </div>

            <div>
                <input class="bg-orange-400 cursor px-8 py-4 rounded-sm text-white" type="submit" value="Login">
            </div>

            <p class="text-xl font-semibold">
                <?php
                session_start();
                error_reporting(0);
                session_destroy();
                echo $_SESSION['message'];

                ?>
            </p>
        </form>

    </div>


    <div class="relative w-1/2 h-full hidden lg:flex">
        <img src="logn.webp" alt="" class="w-full h-full object-cover">
    </div>

</body>

</html>