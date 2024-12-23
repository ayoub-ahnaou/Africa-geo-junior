<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin Page - Create Continent</title>
    <link rel="stylesheet" href="../../assets/css/input.css">
    <link rel="stylesheet" href="../../assets/css/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>

<body class="font-[Oswald] flex flex-col h-[100vh]">
    <?php include "../../config/connection.php"; ?>

    <div class="bg-gray-50 p-4 w-full flex items-center gap-2">
        <img src="../../assets/images/icons/arrow-left.svg" class="size-5" alt="">
        <a href="../../pages/dashboard.php" class="hover:underline">Back to Admin Dashboard</a>
    </div>

    <?php 
        $sql = "SELECT * FROM continent";
        $result = mysqli_query($conn, $sql);

        $continent_name = "";
        $continent_name_err = "";
        $query_err = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $continent_name = $_POST["continent-name"];
            if(empty($continent_name)) $continent_name_err = "This field is Required...";
            else{
                $isExist = false;
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        if($row["nom"] == $continent_name){
                            $continent_name_err = "Continent name already Exist, Could you choose another one !";
                            $isExist = true;
                        }
                    }
                }
                if(!$isExist){
                    $insertion_query = "INSERT INTO continent VALUES ( ". mysqli_num_rows($result) + 1 .", '". $continent_name ."')";
                    $insertion_result = $conn -> query($insertion_query);

                    if(!$insertion_result){
                        $query_err = "Something Went Wrong When Insertion";
                    }
                    else {
                        $continent_name = "";
                        $continent_name_err = "";
                        $query_err = "";
                        header("location: /Africa-geo-junior/src/pages/dashboard.php");
                    }
                }
            }
        }
    ?>
    <div class="flex flex-col justify-center items-center flex-grow">

        <form method="POST" dmx-on:success="notifies1.success('Success!')" dmx-on:error="notifies1.warning('Failed!')" class="bg-white min-h-[400px] w-1/2 max-md:h-auto max-lg:w-3/5 max-md:w-4/5 max-sm:w-full max-sm:h-[98%] max-sm:m-2 shadow-lg flex flex-col p-4 gap-2">
            <div class="flex flex-col py-4">
                <h1 class="text-xl font-medium">Continent Informations</h1>
                <p class="text-gray-400 text-sm">Fill the inputs with a Valid data to create a new record in your Database</p>
                <p class="bg-red-50 text-red-600">
                    <?php if(!empty($query_err)) echo $query_err; ?>
                </p>
            </div>

            <div class="flex-grow flex flex-col text-sm gap-1 mb-4">
                <label for="continent-name" class="text-gray-600">Continent name</label>
                <input value="<?php echo $continent_name; ?>" name="continent-name" id="continent-name" type="text" class="bg-gray-100 p-1" placeholder="eg: Africa, Europe...">
                <p id="continent-name-errMssg" class="text-red-600 bg-red-50 px-1 text-sm">
                    <?php if (!empty($continent_name_err)) echo $continent_name_err; ?>
                </p>
            </div>

            <div class="flex gap-1 flex-wrap-reverse">
                <input id="cancel_add_continent" type="reset" class="bg-white cursor-pointer border border-black px-4" value="Cancel and CLose" />
                <input id="create_continent_btn" type="submit" class="bg-black text-white cursor-pointer px-8" value="Create" />
            </div>
        </form>
    </div>
    <?php include "../../assets/components/footer.php"; ?>
</body>

</html>