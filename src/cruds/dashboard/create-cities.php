<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin Page - Create City</title>
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
        $query = "SELECT * FROM pays";
        $result = mysqli_query($conn, $query);

        $city_name = "";
        $city_type = "";
        $city_country = "";

        $city_name_err = "";
        $city_type_err = "";
        $city_country_err = "";

        $query_err = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $city_name = $_POST["city-name"];
            $city_type = isset($_POST["city-type"]) ? $_POST["city-type"] : "";
            $city_country = isset($_POST["city-country"]) ? $_POST["city-country"] : "";

            if(empty($city_name)) $city_name_err = "This field is Required...";
            if(empty($city_type)) $city_type_err = "This field is Required...";
            if(empty($city_country)) $city_country_err = "This field is Required...";

            if(!empty($city_name) && !empty($city_type) && !empty($city_country)){
                $all_cities_query = "SELECT * FROM ville";
                $all_cities_result = mysqli_query($conn, $all_cities_query);

                $isExist = false;
                if(mysqli_num_rows($all_cities_result) > 0){
                    while($row = mysqli_fetch_assoc($all_cities_result)){
                        if($row["nom"] == $city_name){
                            $city_name_err = "City name already exist, Could you choose another one.";
                            $isExist = true;
                        }
                    }
                }
                if(!$isExist){
                    $insertion_query = "INSERT INTO ville (nom, type, id_pays) VALUES ('$city_name', '$city_type', $city_country)";
                    $insertion_result = mysqli_query($conn, $insertion_query);
                    if(!$insertion_result){
                        $query_err = "Something Went Wrong When Insertion. Please try again";
                    }
                    else{
                        $city_name = "";
                        $city_type = "";
                        $city_country = "";

                        $city_name_err = "";
                        $city_type_err = "";
                        $city_country_err = "";

                        $query_err = "";
                        header("location: /Africa-geo-junior/src/pages/dashboard.php");
                    }
                }
            }
        }
    ?>
    <div class="flex flex-col justify-center items-center flex-grow">

    <form method="POST" class="bg-white min-h-[400px] w-1/2 max-md:h-auto max-lg:w-3/5 max-md:w-4/5 max-sm:w-full max-sm:h-[98%] max-sm:m-2 shadow-lg flex flex-col p-4 gap-2">
        <div class="flex flex-col py-4">
            <h1 class="text-xl font-medium">City Informations</h1>
            <p class="text-gray-400 text-sm">Fill the inputs with a Valid data to create a new record in your Database</p>
        </div>

        <div class="flex-grow flex flex-col text-sm gap-1 mb-4">
            <label for="city-name" class="text-gray-600">city name</label>
            <input value="<?php echo $city_name; ?>" name="city-name" id="city-name" type="text" class="bg-gray-100 p-1" placeholder="eg: Meknes, Fes">
            <p class="text-red-600 bg-red-50 px-1 text-sm">
                <?php if (!empty($city_name_err)) echo $city_name_err; ?>
            </p>
            
            <label for="city-type" class="text-gray-600">city Type</label>
            <select name="city-type" id="city-type" class="bg-gray-100 p-1">
                <option value="" selected disabled>Select a Type of your City</option>
                <option value="Capital">Capital</option>
                <option value="Important">Important</option>
                <option value="Normal">Normal</option>
            </select>
            <p class="text-red-600 bg-red-50 px-1 text-sm">
                <?php if (!empty($city_type_err)) echo $city_type_err; ?>
            </p>
            
            <label for="city-country" class="text-gray-600">Country of the City</label>
            <select class="bg-gray-100 p-1" name="city-country" id="city-country">
                <option value="" disabled selected>Select a country</option>
                <?php
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<option value='". $row["id_pays"] . "'>" . $row['nom'] . "</option>";
                        }
                    }
                ?>
            </select>
            <p class="text-red-600 bg-red-50 px-1 text-sm">
                <?php if (!empty($city_country_err)) echo $city_country_err; ?>
            </p>
        </div>

        <div class="flex gap-1 flex-wrap-reverse">
            <input id="cancel_add_country" type="reset" class="bg-white cursor-pointer border border-black px-4" value="Cancel and CLose" />
            <input type="submit" class="bg-black text-white cursor-pointer px-8" value="Create"/>
        </div>
    </form>

    </div>
    <?php include "../../assets/components/footer.php"; ?>
</body>

</html>