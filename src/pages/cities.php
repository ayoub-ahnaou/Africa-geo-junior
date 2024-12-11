<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Africa</title>
    <link rel="stylesheet" href="../assets/css/input.css">
    <link rel="stylesheet" href="../assets/css/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>
<body class="font-[Oswald]">
    <div id="background" class="flex flex-col min-h-[100vh]">
        <?php 
            include "../config/connection.php";
            include "../assets/components/navigation.php";
        ?>
    
        <div class="flex-grow py-4 px-10 max-sm:px-2">
            <section class="flex flex-col gap-4">
                <div class="flex justify-between items-center relative">
                    <h1 class="text-2xl font-bold">Cities</h1>
                    <img src="../assets/images/icons/filter.svg" class="size-5 cursor-pointer" id="filter-city-icon" alt="">
                    <div class="absolute right-0 top-[100%] bg-white shadow-xl hidden flex-col" id="filter-city-items">
                        <p class="hover:bg-gray-100 pr-24 pl-2">All</p>
                        <p class="hover:bg-gray-100 pr-24 pl-2">Capitals</p>
                        <p class="hover:bg-gray-100 pr-24 pl-2">Importants</p>
                        <p class="hover:bg-gray-100 pr-24 pl-2">Normals</p>
                    </div>
                </div>
                
                <div class="flex gap-4 flex-wrap justify-start flex-grow max-h-[76vh] overflow-auto [&::-webkit-scrollbar]:hidden">
                </div>
            </section>
        </div>
    
        <?php include "../assets/components/footer.php"; ?>
    </div>
    
</body>
</html>