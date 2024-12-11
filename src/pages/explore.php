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
    
        <div class="flex-grow py-4 px-10 max-md:px-2">
            <section class="flex flex-col gap-4">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-bold">Countries</h1>
                    <img src="../assets/images/icons/filter.svg" class="size-5" alt="">
                </div>
                <div class="flex gap-4 flex-wrap justify-start flex-grow max-h-[76vh] overflow-auto [&::-webkit-scrollbar]:hidden">
                    <?php 
                        for($i = 0; $i < 7; $i++){
                            echo "<div class='w-[24%] max-xl:w-[32%] max-lg:w-[32%] max-[868px]:w-[48.5%] max-md:w-[100%]'>
                                <img src='https://www.andbeyond.com/wp-content/uploads/sites/5/ngala-private-game-reserve-fandam-elephant-herd3.jpg'>
                                <div class='flex items-center justify-between'>
                                    <p class='text-xl font-bold'>Morocco</p>
                                    <p class='text-gray-400 text-sm'>35.000.000 peoples</p>
                                </div>
                                <p class='text-gray-600 text-xs'>Langues: Arabic, French</p>
                                <p class='text-gray-600 text-xs'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam corrupti error deserunt. Quis modi sapiente voluptatum adipisci omnis rem culpa veniam, itaque nulla officia nisi?</p>
                            </div>";
                        }
                    ?>
                </div>
            </section>
        </div>
    
        <?php include "../assets/components/footer.php"; ?>
    </div>
    
</body>
</html>