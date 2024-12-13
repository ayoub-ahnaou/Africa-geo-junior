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

    <script src="../assets/js/dashboard.js" defer></script>
</head>
<body class="font-[Oswald]">
    <?php include"../config/connection.php"; ?>
    
    <div id="background" class="flex flex-col min-h-[100vh]">
        <?php include"../assets/components/navigation.php"; ?>

        <div class="flex-grow flex max-md:flex-col">
            <section class="w-1/5 bg-gray-100 flex flex-col max-md:w-full">
                <div class="flex py-6 px-2 items-center gap-1">
                    <img src="../assets/images/icons/dashboard.svg" class="size-6" alt="">
                    <h1 class="text-xl">Dashboard</h1>
                </div>
                <ul class="flex flex-col">
                    <li id="continents_choice" onclick="setChoice('continents')" class="p-2 hover:bg-white bg-white transition-all delay-75 ease-linear cursor-pointer flex items-center gap-2">
                        <img src="../assets/images/icons/continent.svg" class="size-5" alt="">
                        <p>Continents</p>
                    </li>
                    <li id="countries_choice" onclick="setChoice('countries')" class="p-2 hover:bg-white transition-all delay-75 ease-linear cursor-pointer flex items-center gap-2">
                        <img src="../assets/images/icons/countries.svg" class="size-5" alt="">
                        <p>Country</p>
                    </li>
                    <li id="cities_choice" onclick="setChoice('cities')" class="p-2 hover:bg-white transition-all delay-75 ease-linear cursor-pointer flex items-center gap-2">
                        <img src="../assets/images/icons/cities.svg" class="size-5" alt="">
                        <p>Cities</p>
                    </li>
                </ul>
            </section>

            <?php include"../assets/components/continents.php"; ?>
            <?php include"../assets/components/countries.php"; ?>
            <?php include"../assets/components/cities.php"; ?>
        </div>
        
        <?php include"../assets/components/footer.php"; ?> 
    </div>

    <!-- form to add new continent -->
    <div id="continent-form" class="absolute top-0 bottom-0 w-full hidden justify-center items-center">
        <?php include"../cruds/create-continent.php"; ?>
    </div>

    <!-- form to add new country -->
    <div id="country-form" class="absolute top-0 bottom-0 w-full hidden justify-center items-center">
        <?php include"../cruds/create-country.php"; ?>
    </div>

    <!-- form to add new city -->
    <div id="city-form" class="absolute top-0 bottom-0 w-full hidden justify-center items-center">
        <?php include"../cruds/create-city.php"; ?>
    </div>

</body>
</html>