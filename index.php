<?php

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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <title>Student Management System</title>
    <style type="text/tailwindcss">
        @layer utilities {
      .container {
        max-width: 1240px;
        padding: 1rem;
        margin-inline: auto;
      }

      .padding-block {
        padding-block: 3rem;
      }

      .button {
        cursor: pointer;
        text-decoration: none;
        border: 0;
        border-radius:  100vmax;
        padding: 1em 3em;
        font-weight: 800;
        background-color: green;
        color: wheat;
       }
    }
  </style>
</head>

<body class="font-[Poppins] h-screen">
    <header class="bg-white">
        <nav class="flex justify-between items-center container">
            <div>
                <h1 class="">LearnLogix System</h1>
            </div>
            <div class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li>
                        <a class="hover:text-gray-500" href="#">Home</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#">Contact</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="admission_page.php">Admission</a>
                    </li>

                </ul>
            </div>
            <div class="flex items-center gap-6">
                <a href="login.php" class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Sign in</a>
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
    </header>

    <main>

        <section class="padding-block">
            <div class="container">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="grid gap-2">
                        <h1 class="text-2xl font-bold">Take Your Time and learn from anywhere</h1>
                        <p class="">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Aut adipisci tenetur eaque fugiat <br> voluptatum eveniet similique!
                            Illo, esse quibusdam! Tenetur laudantium numquam magnam ut velit.
                        </p>
                        <p class="bg-blue-400">Get Started</p>
                    </div>

                    <div>
                        <img src="https://media.istockphoto.com/id/1588289996/photo/happy-female-students-using-wireless-technology-in-lecture-hall.webp?b=1&s=170667a&w=0&k=20&c=6uJolYRPymPV0jJrSOd6WobAhZlH215LHTpS9Snwzss=" alt="">
                    </div>

                </div>
            </div>
        </section>


        <section class="padding-block">
            <div class="container">
                <div class="flex flex-col md:flex-row gap-8">
                    <div>
                        <img src="https://media.istockphoto.com/id/1588289996/photo/happy-female-students-using-wireless-technology-in-lecture-hall.webp?b=1&s=170667a&w=0&k=20&c=6uJolYRPymPV0jJrSOd6WobAhZlH215LHTpS9Snwzss=" alt="">
                    </div>

                    <div class="grid gap-2">
                        <h1 class="text-2xl font-bold">About LearnLogix System</h1>
                        <p class="">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Aut adipisci tenetur eaque fugiat <br> voluptatum eveniet similique!
                            Illo, esse quibusdam! Tenetur laudantium numquam magnam ut velit.
                        </p>
                        <button class="bg-blue-500 w-[50%] rounded-sm px-2 py-2">Get Started</button>
                    </div>
                </div>
            </div>
        </section>

        <!--Our Courses -->
        <section class="padding-block">
            <div class="container">
                <div class="text-center">
                    <h1 class="font-bold text-3xl ">Courses We Offer</h1>

                    <div class="flex flex-col lg:flex-row items-center gap-16 justify-center mt-8">
                        <div>
                            <img class="h-[240px] w-[200px] bg-contain" src="https://images.unsplash.com/photo-1618477247222-acbdb0e159b3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGZyb250JTIwZW5kJTIwZGV2ZWxvcGVyfGVufDB8fDB8fHww" alt="">
                            <p>Front End Development</p>
                        </div>

                        <div>
                            <img class="h-[240px] w-[200px] bg-contain" src="https://images.unsplash.com/photo-1613068687893-5e85b4638b56?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8YmFjayUyMGVuZCUyMGRldmVsb3BlcnxlbnwwfHwwfHx8MA%3D%3D" alt="">
                            <p>Back end Development</p>
                        </div>

                        <div>
                            <img class="h-[240px] w-[200px] bg-contain" src="https://media.istockphoto.com/id/1488294044/photo/businessman-works-on-laptop-showing-business-analytics-dashboard-with-charts-metrics-and-kpi.webp?b=1&s=170667a&w=0&k=20&c=BNF7gZ3XmCEf0_H8bUb6TLOvrDPVOmrEzbuu8FZrOao=" alt="">
                            <p>Data Analysis</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Our Tutors -->
        <section class="padding-block">
            <div class="container">
                <div class="text-center">
                    <h1 class="font-bold text-3xl ">Our Distinguished Tutors</h1>

                    <div class="flex flex-col lg:flex-row items-center gap-16 justify-center mt-8">
                        <?php

                        while ($info = $result->fetch_assoc()) {
                        ?>


                            <div>
                                <img class="h-[240px] w-[260px] bg-contain" src="<?php echo "{$info['image']}"  ?>" alt="">
                                <p><?php echo "{$info['name']}"  ?></p>
                                <p><?php echo "{$info['description']}"  ?></p>
                            </div>
                        <?php

                        }
                        ?>

                    </div>
                </div>
            </div>
        </section>
    </main>


    <footer></footer>



    <script>
        const navLinks = document.querySelector('.nav-links')

        function onToggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>
</body>

</html>