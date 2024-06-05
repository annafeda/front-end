<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <?php
$servername = "localhost"; // Change this if your MySQL server is running on a different host
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "front-end"; // Replace with your actual database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <section class="container min-h-screen bg-zinc-300 bg-center bg-cover pb-5 relative ">
        <!-- Navbar -->
        <nav class="flex items-center bg-fuchsia-300 relative flex h-16 items-center justify-between px-28 ">
            <ul>
                <li class="list-none inline-block px-5 "><a href="" class="no-underline hover:text-slate-800 text-white px-2">Start</a></li>
                <li class="list-none inline-block px-5"><a href="" class="no-underline  hover:text-slate-800 text-white px-2">About Me</a></li>
                <li class="list-none inline-block px-5"><a href="" class="no-underline  hover:text-slate-800 text-white px-2">Study&Work experience</a></li>
                <li class="list-none inline-block px-5"><a href="" class="no-underline  hover:text-slate-800 text-white px-2">Knowledge</a></li>
            </ul>    
        </nav>
        <!-- About Me -->
        <div class="text-slate-800 mt-48 max-w-lg pl-28">
            <h1 class="text-6xl font-semibold leading-normal">About Me</h1>
            <p>My name is Anna, I am 18 years old and currently im studying Software Development at Techniek College Rotterdam.</p>
        <div class="mt-10">
            <a href="cv.docx" class="bg-fuchsia-300 rounded-3xl py-3 px-8 font-medium inline-block hover:bg-transparent hover:border-gray-800 hover:text-fuchsia-300 duration-300 hover:border border border-transparent">Mijn CV</a>
        </div>
        </div>
        <img src="img/me-edin.jpg" alt="edinburgh castle" class="w-full xl:w-1/5 xl:absolute bottom-0 right-16 top-72">
        <img src="img/me-cafe.jpg" alt="girl in a restaurant" class="w-full xl:w-1/5 xl:absolute bottom-0 right-80 top-52">
        <img src="img/me-desktop.jpg" alt="girl behind a desk" class="w-full xl:w-1/6 xl:absolute bottom-0 right-32 top-24">
    </section>
    <!-- Work&Study experience -->
    <section class="container min-h-screen bg-zinc-300 grid-cols-3 pl-20 pt-40">
        <div class="grid grid-cols-3 gap-4">

    <!-- First column: Text -->
    <section class="col-span-1 max-w-xs">
        <h2 class="text-3xl font-semibold leading-normal ">Study</h2>
        <aside>
        <p class="mt-8"><span class="font-medium">VMBO-tl, Willem de Zwijger, Schoonhoven</span> 09-2017 – 07-2021</p>
        <p class="mt-8"><span class="font-medium">Software Development, Techniek College Rotterdam</span> 08-2022 – 07-2025</p>
        </aside>
    </section>

    <!-- Second column: Photo -->
    <section class="col-span-1 w-full  max-w-xs">
        <img src="img/column.jpg" alt="Anna calling with a client">
    </section>

    <!-- Third column: Text -->
    <section class="col-span-1 max-w-xs">
    <h2 class="text-3xl font-semibold leading-normal ">Work</h2>
        <p class="mt-8"><span class="font-medium">De Werkende Website</span> 
</p>
<p class="text-sm">Bij De Werkende Website heb ik stage gelopen. 
Mijn taken waren: migreren van de websites met wordpress, klantencontact en werken met Mach lll.</p>
<p class="mt-8"><span class="font-medium">Pepperminds, sales</span> 
</p>
<p class="text-sm">Ik was een succesvolle verkoper. Binnen een maand had ik de functie ‘promotor’. Mijn taken waren: gesprekken aangaan met mensen, inschrijven voor goede doelen zoals Rode Kruis en Leger des Heils.</p>
    </section>
        </div>
</section>
<!-- Knowledge -->
<div class="grid grid-cols-2 gap-4 bg-zinc-300">
    <!-- First column -->
    <div class="p-4">
    <img src="img/hackathon.jpg" alt="edinburgh castle" class="w-full max-w-sm pl-12 py-28">
    </div>

    <!-- Second column -->
    <div class="p-4 ">
    <h2 class="text-3xl font-semibold leading-normal pt-28">Knowledge</h2>
        <p class="max-w-sm py-8">Your second column content goes here.</p>
    </div>
</div>

</body>
</html>