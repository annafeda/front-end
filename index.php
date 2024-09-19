<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio van Anna Fedarchuk.">
    <style>
        html{
            scroll-behavior:smooth;
        }
    </style>

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="container min-h-screen bg-zinc-300 bg-center bg-cover pb-5 relative ">
        <!-- Navbar -->
        <nav class="flex items-center bg-fuchsia-300 relative h-16 justify-between px-28 ">
            <ul>
                <li class="list-none inline-block px-5"><a href="#about" class="no-underline  hover:text-zinc-300 text-slate-800 px-2">About Me</a></li>
                <li class="list-none inline-block px-5"><a href="#study" class="no-underline  hover:text-zinc-300 text-slate-800 px-2">Study&Work experience</a></li>
                <li class="list-none inline-block px-5"><a href="#knowledge" class="no-underline  hover:text-zinc-300 text-slate-800 px-2">Knowledge</a></li>
            </ul>    
        </nav>
        <!-- About Me -->
        <div id="about" class="text-slate-800 mt-36 max-w-lg pl-28 pb-20">
            <h1 class="text-6xl font-semibold leading-normal">About Me</h1>
            <p>My name is Anna, I am 19 years old and currently I'm studying Software Development at Techniek College Rotterdam. I have already developed strong skills in HTML/CSS, TailwindCSS, JavaScript, PHP, and databases. My passion for coding and learning new skills helps me devise creative and unique solutions to technical challenges.</p>
        <div class="mt-10 pb-10">
            <a href="AnnaFedarchukCV.docx" class="bg-fuchsia-300 rounded-3xl py-3 px-8 font-medium inline-block hover:bg-transparent hover:border-gray-800 hover:text-fuchsia-300 duration-300 hover:border border border-transparent">Download mijn CV</a>
        </div>
        </div>
        <img src="img/edin.webp" alt="edinburgh castle" width="180" height="120" class=" xl:absolute lg:w-1/5 md:w-14 bottom-0 right-16 top-72">
        <img src="img/restaurant.webp" alt="girl in a restaurant" width="180" height="120" class=" xl:absolute lg:w-1/5 md:w-14 bottom-0 right-80 top-52">
        <img src="img/stage.webp" alt="Anna behind a desk" width="180" height="120" class=" xl:absolute lg:w-1/5 md:w-14 bottom-0 right-32 top-24">
    </section>
    <!-- Work&Study experience -->
    <section id="study" class="container min-h-screen bg-zinc-300 grid-cols-3 pl-20 pt-20">
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
        <img src="img/stage2.webp" width="180" height="100" alt="Anna calling with a client" class="xl:absolute lg:w-1/4 md:w-14">
    </section>

    <!-- Third column: Text -->
<section class="col-span-1 max-w-xs">
    <h2 class="text-3xl font-semibold leading-normal ">Work</h2>
    <p class="mt-8"><span class="font-medium">De Werkende Website</span> </p>
    <p class="text-sm">Bij De Werkende Website heb ik stage gelopen. 
    Mijn taken waren: migreren van de websites met wordpress, klantencontact en werken met Mach lll.</p>
    <p class="mt-8"><span class="font-medium">Pepperminds, sales</span></p>
    <p class="text-sm">Ik was een succesvolle verkoper. Binnen een maand had ik de functie ‘promotor’. Mijn taken waren: gesprekken aangaan met mensen, inschrijven voor goede doelen zoals Rode Kruis en Leger des Heils.</p>
    </section>
        </div>
</section>
<!-- Knowledge -->
<div id="knowledge" class="grid grid-cols-2 gap-4 bg-zinc-300">
    <!-- First column -->
    <div class="p-4">
    <img src="img/hackathon.webp" width="100" height="60" alt="edinburgh castle" class=" w-full max-w-sm pl-12 mt-24">
    <img src="img/jagmeet.webp" width="100" height="60" alt="edinburgh castle" class="w-full max-w-lg pl-40 -mt-6">
    <p class="max-w-lg text-xs py-6 pl-12">Op de foto's hierboven heb ik samen met mijn klasgenoot de eerste plek voor de hackathon gekregen. Bij deze hackathon hebben we onze "klant" een uitgebreide SEO advies gegeven voor zijn website.</p>
    </div>

    <!-- Second column -->
<section class="max-w-lg pb-16">
    <h2 class="text-3xl font-semibold leading-normal pt-14">Knowledge</h2>
        <p class="max-w-sm pt-8 pb-2 font-semibold">HTML/CSS</p>
        <p> Met behulp van HTML en CSS heb ik een aantal websites met meerdere pagina’s en goede functionaliteit gemaakt.</p>
        <p class="max-w-sm pt-4 pb-2 font-semibold">JavaScript</p>
        <p> Met JavaScript hebben mijn team en ik een game ontworpen. De game leek op dino run met puntentelling en andere leuke functies zoals verschillende levels.</p>
        <p class="max-w-sm pt-4 pb-2 font-semibold">PHP en databases</p>
        <p> Met PHP en databases heb ik een functionele replica van Twitter gebouwd.</p>
        <p class="max-w-sm pt-4 pb-2 font-semibold">WordPress</p>
        <p> Met WordPress hebben we een professionele website opgebouwd.</p>
        <p class="max-w-sm pt-4 pb-2 font-semibold">Tailwind</p>
        <p> Met Tailwind CSS heb ik mijn eigen website gemaakt waarin alle informatie over mijn werkervaring in staat.</p>
        <p class="max-w-sm pt-4 pb-2 font-semibold">Laravel</p>
        <p> Met Laravel en PHP hebben mijn teamgenoten en ik een website gemodificeerd en responsive gemaakt.</p>
</section>
</div>
<!-- footer -->
    <footer class="text-center py-4 bg-fuchsia-300">
        <div class="flex justify-center space-x-4">
            <!-- LinkedIn -->
            <a href="https://www.linkedin.com/in/anna-fedarchuk-07b816267/" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline">
                <i class="fa fa-linkedin"></i>
            </a>
            <!-- Instagram -->
            <a href="https://www.instagram.com/an__feda/" target="_blank" rel="noopener noreferrer" class="text-pink-500 hover:underline">
                <i class="fa fa-instagram"></i>
            </a>
            <!-- Email -->
            <a href="mailto:fedarchukanna@gmail.com" class="text-gray-600 hover:underline">Email: fedarchukanna@gmail.com</a>
        </div>
        <p class="mt-2 text-sm text-gray-500">© 2024 Anna Fedarchuk.</p>
    </footer>
</body>
</html>