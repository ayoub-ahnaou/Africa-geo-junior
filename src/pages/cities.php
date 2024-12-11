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
            $country = $_GET["country"];
            $sql = "SELECT * FROM pays WHERE nom LIKE '$country'";
            $country_result = mysqli_query($conn, $sql);
        ?>
    
        <div class="flex-grow py-4 px-10 max-sm:px-2">
            <?php 
                if(mysqli_num_rows($country_result) > 0){
                    $row = mysqli_fetch_assoc($country_result);
                    echo "
                        <div class='flex gap-1 max-sm:flex-col' style='margin-bottom: 20px;'>
                            <img src='https://www.andbeyond.com/wp-content/uploads/sites/5/ngala-private-game-reserve-fandam-elephant-herd3.jpg' alt='' class='h-[120px] max-sm:object-cover'>
                            <div class='flex flex-col'>
                                <p class='text-gray-900 font-bold text-xl'>". $row["nom"] ."</p>
                                <p class='text-xs text-gray-500'>Langues: ".$row["langues"]."</p>
                                <p class='text-xs text-gray-500'>".$row["population"]." People</p>
                                <p class='text-sm text-gray-700 w-1/2 max-lg:w-full'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit possimus perferendis, repellat, voluptatum itaque blanditiis expedita deserunt laborum sint maiores voluptatem non, recusandae dolorem minima!</p>
                            </div>
                        </div>
                    ";
                }
            ?>
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
                    <?php

                        if($country != ""){
                            $sql = "SELECT *, pays.nom as country, ville.nom as city FROM ville, pays WHERE pays.nom LIKE '$country' AND pays.id_pays = ville.id_pays";
                            $result = mysqli_query($conn, $sql);

                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){

                                    echo "<div class='w-[24.2%] max-xl:w-[31.6%] max-lg:w-[32%] max-[868px]:w-[48.5%] max-md:w-[100%]'>
                                        <img src='https://cdn.cfr.org/sites/default/files/styles/open_graph_article/public/image/2019/08/Nigeria-Lagos-Victoria-Island-Urbanization.jpg'>
                                        <div class='flex items-center justify-between'>
                                            <p class='text-lg font-bold'>". $row["city"] ."</p>
                                            <p class='text-gray-400 text-sm'>". $row["type"] ."</p>
                                        </div>
                                        <p class='text-gray-700 text-sm'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam corrupti error deserunt. Quis modi sapiente voluptatum adipisci omnis rem culpa veniam, itaque nulla officia nisi?</p>
                                    </div>";
                                }
                            }
                            else echo "<p class='bg-red-50 text-red-600 w-full p-2'>'". $country ."' Country Not Found in the Database, Please verify and Try Again !</p>";
                        }
                        else {
                            echo "<p class='bg-red-50 text-red-600 w-full p-2'>Sorry, Something Went Wrong !</p>";
                        }
                    ?>
                </div>
            </section>
        </div>
    
        <?php include "../assets/components/footer.php"; ?>
    </div>
    
</body>
</html>