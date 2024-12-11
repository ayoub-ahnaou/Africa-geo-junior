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

            $sql = "SELECT id_pays, pays.nom as nom, population, langues, continent.nom as continent FROM pays, continent where pays.id_continent = continent.id_continent ORDER by id_pays ASC";
            $result = mysqli_query($conn, $sql);
        ?>
    
        <div class="flex-grow py-4 px-10 max-md:px-2">
            <section class="flex flex-col gap-4">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-bold">Countries</h1>
                    <img src="../assets/images/icons/filter.svg" class="size-5" alt="">
                </div>
                <div class="flex gap-4 flex-wrap justify-start flex-grow max-h-[76vh] overflow-auto [&::-webkit-scrollbar]:hidden">
                    <?php 
                        if(mysqli_num_rows($result) > 0){
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<div class='w-[24.2%] max-xl:w-[31.6%] max-lg:w-[32%] max-[868px]:w-[48.5%] max-md:w-[100%]'>
                                    <img src='https://www.andbeyond.com/wp-content/uploads/sites/5/ngala-private-game-reserve-fandam-elephant-herd3.jpg'>
                                    <div class='flex items-center justify-between'>
                                        <p class='text-lg font-bold'>". $row["nom"] .", ". $row["continent"] ."</p>
                                        <p class='text-gray-400 text-sm'>". $row["population"] ." people</p>
                                    </div>
                                    <p class='text-gray-500 text-xs'>Langues: ". $row["langues"] ."</p>
                                    <p class='text-gray-700 text-sm'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam corrupti error deserunt. Quis modi sapiente voluptatum adipisci omnis rem culpa veniam, itaque nulla officia nisi?</p>
                                </div>";
                            }
                        }
                        else {
                            echo "<p class='bg-red-50 w-full text-red-600'>No Countries available right now...</p>";
                        }
                    ?>
                </div>
            </section>
        </div>
    
        <?php include "../assets/components/footer.php"; ?>
    </div>
    
</body>
</html>