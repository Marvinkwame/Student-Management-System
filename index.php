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
                        <div>
                            <img class="h-[240px] w-[260px] bg-contain" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSJS8f0JnKwHdXogN0ACXsv-cRtHSuuZ1Ohw&usqp=CAU" alt="">
                            <p>Cosmo Kramer</p>
                        </div>

                        <div>
                            <img class="h-[240px] w-[260px] bg-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuR7cOI2glUnxDxX4ykLtAF71WpXEiSNzXcA&usqp=CAU" alt="">
                            <p>George Costanza</p>
                        </div>

                        <div>
                            <img class="h-[240px] w-[260px] bg-cover" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgWFhUZGRgaHBwaGBocGBoaGBoaGhoaGhgaHBgcIS4lHCErIRgaJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISHjQhISE0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIALcBEwMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAACAAEDBAYFBwj/xAA9EAACAQIEAwUHAgQEBwEAAAABAgADEQQSITEFQVEGImFxgRMyUpGhscEHQmJy0fAUI6LhFTRDgpKy8TP/xAAYAQADAQEAAAAAAAAAAAAAAAAAAQIDBP/EACARAQEAAgIDAAMBAAAAAAAAAAABAhEDIRIxQSIyURP/2gAMAwEAAhEDEQA/AJnXWEu0N11iXYzkblEoiSEIEYCEyxRxABWOy3iO8IQgrD9qeHWOcCZaeqcTwodCLTzfiGFyOR4zfDLpOU+qyGSK0gBkyLzlWHjSaRFZfTD3Qt02HMyLPlFzboPO28JDtQGgRpLCYVd2ZR5n8D8ytVqs3e2IHzHhKzuTvK0ncdFqKDdx6a6QvbU9Bc2Hhb6zlh4BeGh5OzQdS2+nK9h/9k7UbG2h8RzmezywmKYDfy8PKK47Vjm6+JpkLynHqDWXqONuO9r9/GRVaYOo2+smTSrdxUaCYbpAMpnTLHaMsJoCGBjR7RoBINoMLlBIgKeAYYgtAVG0QJjiIGNJZjFCvFA3tltYBXUyVomXWcqkNMbxWhItjCIgewmOskyRikCA6xrSS0bLAI7TIdqeHfvAmyKyhxKkHUgjlKxujeYU6dzaTZCNtz9hLWKCox56znGv/tNp2V1ErYgpcc9tCJQZrx3a5vBtLRaRc2tIiZLaNkgSKM0m9mYLJAaRmINCyxrREnw1SxllKljbrOeDDDxWLxy0tVACNtZAwh0n3hut9fxBftXEJorRNBJo1o8cCAEIJhWjGBnEFoQjGARCPEI8aTRR7RQD29qqXteOaqfFPK8Txupnchv3G3zkZ41V+KY+FPcere0TfNGNVPinlX/GqnxRf8ZqfFD/ADo3HrHtl6wvbp1nk443V+KJuM1fih4U9x6mcUg5iVqmPQH3h855e/FanxSMY5z+4x/5luPTn4onxfWcniPGFF8pExAxLnmYqlQ23h4rliHE1izEmVzHMSLNZ0yt3SAl3h/C6lY2RSevlAwmGLsAOs9k7HcKSkgJAzHmZGefirHDfbC4bsNVHvkDy1lk9kQul7z0biLqNhOM9Sc2XJk6McIx7dlgJWfssOs2TveQARf6Zr8Mb8YHH9nyl7azg18OVOonq2JpaXmb4twoMLrv0mmHNfVRlwyzphssa0uYnDlTaVSJ0725bjq6JHsZcBuBKRk+HeKnjfgmEFpM4vInEUVUccGMY4EYGIxEQiMAV4xiMcwCMR4o8adBvFHiiGh1DqfOCWjs2pgExhcw+Hz6CBiEytlnR4CLv6SHjYtVPpImV8tNLjPHbnwhAvCDy2chmjoYDNGEAsI0kqv3bSujco9dtItHL0C8s0E36yvTFzJ1bWOljGq7JcPu4cjQa+Z5T0WnUygW/pM72bpZaY8QJpyqKuZ2A9ZyZXddOtTSjiahMos0PFcTp7Kwv5iUf8SDM7GkTs0SmV2qW1lKpxtUO1z9ITG30brVaZtzlKpTvBpcbdwQKf1A+8b/ABFzZlKHx2PkYXGw5WY4/hf3W85mXWeg4+gHUg85gsUmVyvQzp4ctzTn5sddqzQqe8Yx1E2c89rTNsRISbybIRygOPD5RNERiEJhGgR1iMZY5gDRGOIoAAj3iyxFIEb1iiyRQHaNm1MSmC+8Sxodvgj5XuekrcZqZqjGWeF07iQ8Vo2Mzn7Nr+rm5os0G0e00ZHzRZowEcCASKYTbQQskRLxKkAjQ0bUecjI1hCMR63hO5TQjXui3nYbzOcZ4khazNmPM3OUHwAljBcR9rRRFvcJd/lYAdRM8nDHd2ZhZRfU6A/PfynNjO+3Td63EaVQzaX/APID7mdrhdcuyqut/wAbzjYPBBcxcA2BtrqTytrYWnY7N4QmpTFjckkXAsRewv8AFa1/pKyk0Mcr9jtZ1KEhgeWhmU4piCrWUb7Nz9JruOcLDE5bhxfKx5nofOZ5sM5VWy5indOn0PQzLCza73OnEoYqoTdWc8tLchfbnsZ18BxlnGR7Ec9Lbc/OLAYIKxZUbNra7aKTvpaWxw5UUs/vt7qruT4j8zXLLFOMynsdTiNJRZqmu+xPlsJjOJVA1RiNr6aWm7o8NVQGYagaA8v95mO01Ae0BGlx9pPFlj5dFzY24uDaHTFpLWoZVBvvBQ2nRtzeOr2npJqNYVSieRuJGr9ZLTxI6RXa8bPqo662taBLuKAbvc+cqMISjKaMojxARo0laKKKAPeNeK0RgZs0UVvGKBICNY6iJt5JR3jRI0HAaGZ1WR9qqOSoF5WvIeFVz7QEHaSdojdwSdZhJfNvf0cOK0eK03YkIQjCEICDRZITYaQUEI7RLiELcwgsddIZeG06eg9nMIK2Gp8mTMAQbczpcTqOxVcmJRsg2cJe382XT1E5fYlyiOh5EMPJh/tNFiMbcWPynJldZV1SXTmUcDhm1pKaljvqF9SfxedDAUV/xIC2uqZjYaAsQAFHIAD6mcuu2S709DzX9p9ORlXB8UKB6jBizFQcvJRfaG9xXi2fFcKj0mdTdwbkdRMocPds6GxPvWO/psfWA3GGZQUzMeg3PzkuDrZwTlKkbg8j0md3FTHRPQUjVnBve4VQftFhcCiEubsx2Le9blLIqGA7RXKnMUNd5ku0iXdOW81rrpM5xajmYXGwP4l8d1Sym5pxeJ0wEsBsBre85aGdLimVQFA/r6zmCdmHpycns7PGU215RmaPl0EpntOW0kJMNmNrQCB6/SQ0pxGhcoF5SacCOViWNeBhIijmKBBsYoWkUAgO8dTOueHL1lbEYZU56xTKXoeFgcDmzaRcRqMW70tcEIzi+0HjuXP3beMW/wAlWfi5l495HeODLZbHeODAjrAbWFfSEHEhEMWA316RNNjt9YDmxI6Qi0B4Qq3PY/iCuVW/eCZCOZANwfGaCumpnnHZpiMTTIYLY3JOwFje/pPSarjec3LjrJ0ceW4gShmNp1bIqFbLbne1vM3nPFcIC3QTgY2pVrC2YIlzqx1Y+XOTjNrstXqj0c5daqi3IbeUu0MQrDukEeEyh4ag/wCoD9PzJcNgiCMjm/zEMsJ/VyNOTyhBZRwzOB3yD4gW+ksipMaIWIOky3G6zhwENiQzMbX0UXmjrvpMTx3F/wCcADoosfHnb7Tbhx3kjly1i47uSbk3MjLQnckkncm59YL+E7HESydFGgkCS3hnt0PnCjFbpYQHncfW0Ktw/Qle8PDf5RqOIYEa2vyO3zlinVyPm166H+7zO7bzWnMKrAKCX+JOjtmUWJOttpRtHKVgcoiyDrHIjEQLRxTHWN7LxhIIiIdnqfwPsfGKPFDdLU/hV8ac2m0rVqpY6yJt44MqSRjcrU9ByDGrvc3g04Lx6PfQQIQjR4EUJYJkiD6wOCWEF1kiLyhVVk7X4oSdYLmEBImjias8PxjUnDqbGxHXQggjXzm37P8AFBVpBSe+mjeI5GeeAyxhcU9NgyGxH18DJzw8oeGfjXpFVidI9VWcZQL+k4nBuN+0OUrZgL+B8poaOKW1wbTmuNx9uuZSzcVhwQjVso8OcnTD5RpCfiAPOAcUJF2rvQWXxglwJBVr9JXyM3OEx/o2mr1r6D5zDcT/AP1fzm9fCZE+8xHEcKxd2AuAdZtw2bZc0/FzW3gk2MmKyNhOlyWFeS0nkCiGum8BKvB9OvnGWr/d5WRpZy5luOW/9ZNjWUi14JEKku49YnES/iONHjGBCUxjFHtAwxQooE55iURyI6iaOcawXkiiCwgdRwoWWEBEIC0moaG8HLJ6C9IqePtKtukGo399JYWgYDYZzspPoZLWqxNpCwlmrSZdxaQWlRllUeWEElrC4VnYIouSbTccF7LqnefU8tNIWlIzPAMMyVUYjQ6ehmlqUSrleuo/M7J4ciupy6a6ehlfGUr2I3Go8pz8t7ldPFetOK5INj9o6KT1l2qOdokPhM7W8RrQ6y/g6Q3jUkvLaqBIypI8StxOfheGXps1tGc+vKdKqdDNRS4SEoU1O5Fz5nX8y+G6rLmy1HkfHuz7Jd1HdmbKT3PFcMDA5hodJhOP9kst3p+ZX+k6scnNe2FtrCOxFvKS1EsSOmkC0stgQ2lqjUte3MSBaRkwo9IqrHYqbagx38PWHQwrObARqVBmuANQZLSVFaMRLT4Vx+0wGwz/AAmBoRETCKHoYJXwgNmtFHigFIiOohEQkGs0c8EiwGXWdPh2GDuAdoXGsIqOAsnym9KuN8duWFhBY4WSKsaUYWdbgHB3xNVaVMXY6k8lUbsfCc9UnqP6X4LJQrVrd52FNT/Cou1vU/SLK9DbScD7CYahlZgajjm3u38F2lbtDwkoMqAZblrAAWJ5Xmxw40B8Jy+0jd0fM+QknuvBuPj/ADmFrW0t4zmrTnQ4pVz1Xfqx+V9JZ7PcIbE10or+46n4VGrH5S/iLd1qewnArIazrq+iXGy8yPM/abc4UaaeU7mE4UiKqjUIAF6AAW2k9XDAzO7W4mBwQZzddAp+0xRqZl8iQfQkfierU6ICmeLGoUq1FOgzt6d4zLkm424fdWKw0jUbQqpsJAsy+OqOghtJPaSlSfW0nqEyLCWsAhqVkT4mF/Ian6CelVKVx5bTEdhMKXrPUO1Nco/mbf6D6zfMJthjqOXmu8tfxy6mCvvKOP4aMvd3nafeI0wZe2T577U4PJiXUCwuDbzAM46ixmx/Uillxrj+FPtMnlm+PcRbqpMNhjUdUS5ZjZVtcknynovCv08UJeqXLnfIRZfTnI/0p4OHd8Qw93uJpzPvH7D1M9aUraTlfi5XifaLsw2GIdGYjexFmB8Le8Jx+HFQ1yQCd/Oe+Y/htOuhR0up16EHqDPK+2nY56F6qd5OelmHiRzEjtrjlPrhYmsAdwZAcWToQPlIcTgWyh7gdxW873t9BIV1W8dljbG434vistwco0j0UVtMgN5y/aESbC4hs1hFur8ca0lLswWAYINdd4pzW49UXu5zppFHuMvGsYRCWNDmzkWcLWym8DEVS7XMiAhgSdd7VcrrRKIarBWdbs/w04jEU6INs7WJ6Ddj8gY0J+zPAXxdZaaCy7u3JV5nz6T258ElCgtNFsiCw/r5mS8J4ZRwyZKKBR+4/uY9Secl4qt0kW7VE1B9B5D7TNdusTkoO/8ACQPM6D7zs8OrXUDmNJkf1XxAWhTTm739FH9SIp3Q8nAnrf6U8FyUmxLDvVO6nggOp9T9p5jwnANXqpST3nYL5X3PoLn0n0RhMMtNEpoLKihR5AWl5X4mRMIxEUV5Kzv7pnmHbbhuSoKqjR9G/mHP++k9MY30+c4navh3tcO9hqozL/26n6XmeS+PLWTzvDd9B1XSM1KwvLvDaYAPjOhSw2Yi4vOa3t2enDwuFa+Yiw5E85fakTZVF2YgAdSdAJ0sSvLpOv2Y4aGb2zDRbhPFuZ9ISeWRZ5eM26fZrhRw9EI3vElmPiZ1XMe8YredGnFbvtXbeSLHNIxgIaJ4v+qH/Pv/ACJ/6zH2mx/U9bY5/FEP+m34mPnRh+rPL29o/TynkwiW5gsfU3mrwbZgSdrzN9nv8vBU+uQfUTR4BMqKPAX/ADMr7q1v2guB1lfiCBlKkXGxB2IO8HN+7zt9IFJ7k3hcutB49234a+HqWF/Zstk8FH7fS8zGfpPcO1PAxisOyW763ZD/ABDl67Tw56YBIIII0I6EaERzuNcMqBWuZfTDMFzqCep5Cc4NN9wTG0Rg2pva+uvM3j00md0zC8HVu8amp1OsaHUqUwTFEvUZaEIopq4RqI4iiiCRBPUf007MOrDFVAApB9mLgkk6Em22n3iik5ehi3oJz2vv+IeKa6eUUUz+KczCMVeeffqjjM2JROSJ9WN/wI0UvH2MvTufpRwRbNimsSSUTwA94+fL5z0jSKKGXsT0VxGJiik0zrYRVaYKkHYgg+sUUXw3l5QozL8LEfI2nWw7WF4opyV3fACiWYKN2IA8zN1hqCoiouyi39TFFNeL6w5viUCORFFN4wK0jYR4oX0HkX6t0LYlG+OmP9LEfmYCKKa4fqzvt7XhmulBORCfIKDNW2igddPnFFMcva0VZtgNhI0GsUUQW76+c8e/Urgy0sT7RNBVBa3LMPf+dwfUx4pcOe2HB1tLC1Da14oo60wRXiiiktX/2Q==" alt="">
                            <p>Elaine Bennes</p>
                        </div>
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