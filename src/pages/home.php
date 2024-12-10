<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Africa Géo-Junior</title>
    <link rel="stylesheet" href="../assets/css/input.css">
    <link rel="stylesheet" href="../assets/css/output.css">
    <link rel="stylesheet" href="../assets/css/africa.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <div class="flex flex-col min-h-[100vh]">
        <?php include"../assets/components/navigation.php"; ?>
        <div class="flex-grow flex flex-col">
            <section class="relative">
                <img class="h-[95vh] w-full object-cover" src="../assets/images/africa-wallpaper.jpeg" alt="">
                <div class="absolute top-0 bottom-0 w-full flex items-end justify-center">
                    <div class="flex justify-center items-center flex-col w-full pb-6 bg-gradient-to-b from-transparent to-black">
                        <p class="text-5xl text-white font-[Oswald] p-4">Africa's Time</p>
                        <p class="text-white text-2xl w-1/3 max-lg:w-full px-4 font-[Oswald] text-center">
                            Traveling gives you the time to stop and slow down. It is important that we truly let ourselves relax and sometimes let go of all of our responsibilities in life.
                        </p>
                    </div>
                </div>
            </section>
            
            <div class="p-6 flex justify-center items-center bg-gray-100">
                <a href="#" class="bg-black px-6 py-2 text-white rounded-md">Explore The Africa Country and cites !</a>
            </div>

            <div class="flex justify-center items-center bg-white p-6">
                <?php include"../assets/components/africa.php"; ?>
            </div>
        </div>
        <?php include"../assets/components/footer.php"; ?>
    </div>

</body>
</html>