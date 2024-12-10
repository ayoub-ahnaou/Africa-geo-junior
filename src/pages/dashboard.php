<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin Page</title>
    <link rel="stylesheet" href="../assets/css/input.css">
    <link rel="stylesheet" href="../assets/css/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>
<body class="font-[Oswald]">
    
    <div class="flex flex-col min-h-[100vh]">
        <?php include"../assets/components/navigation.php"; ?>

        <div class="flex-grow flex">
            <section class="w-1/5 bg-gray-100 flex flex-col">
                <div class="flex py-6 px-2 items-center gap-1">
                    <img src="../assets/images/icons/dashboard.svg" class="size-6" alt="">
                    <h1 class="text-xl">Dashboard</h1>
                </div>
                <ul class="flex flex-col">
                    <li class="p-2 hover:bg-white bg-white transition-all delay-75 ease-linear cursor-pointer flex items-center gap-2">
                        <img src="../assets/images/icons/continent.svg" class="size-5" alt="">
                        <p>Continents</p>
                    </li>
                    <li class="p-2 hover:bg-white transition-all delay-75 ease-linear cursor-pointer flex items-center gap-2">
                        <img src="../assets/images/icons/countries.svg" class="size-5" alt="">
                        <p>Country</p>
                    </li>
                    <li class="p-2 hover:bg-white transition-all delay-75 ease-linear cursor-pointer flex items-center gap-2">
                        <img src="../assets/images/icons/cities.svg" class="size-5" alt="">
                        <p>Cities</p>
                    </li>
                </ul>
            </section>
            <section class="w-4/5"></section>
        </div>
        
        <?php include"../assets/components/footer.php"; ?> 
    </div>

</body>
</html>