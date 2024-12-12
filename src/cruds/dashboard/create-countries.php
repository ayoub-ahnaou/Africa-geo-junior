<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin Page</title>
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
        $query = "SELECT * FROM continent";
        $result = mysqli_query($conn, $query);

        $country_name = "";
        $country_population = "";
        $country_langues = "";
        $country_continent = "";

        $country_name_err = "";
        $country_population_err = "";
        $country_langues_err = "";
        $country_continent_err = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $country_name = $_POST["country-name"];
            $country_population = $_POST["country-population"];
            $country_langues = $_POST["country-langues"];
            $country_continent = isset($_POST["country-content"]) || "";

            if(empty($country_name)) $country_name_err = "This field is Required...";
            if(empty($country_population)) $country_population_err = "This field is Required...";
            if(empty($country_langues)) $country_langues_err = "This field is Required...";
            if(empty($country_continent)) $country_continent_err = "This field is Required...";
        }
    ?>
    <div class="flex flex-col justify-center items-center flex-grow">

    <form method="POST" class="bg-white min-h-[400px] w-1/2 max-md:h-auto max-lg:w-3/5 max-md:w-4/5 max-sm:w-full max-sm:h-[98%] max-sm:m-2 shadow-lg flex flex-col p-4 gap-2">
        <div class="flex flex-col py-4">
            <h1 class="text-xl font-medium">Country Informations</h1>
            <p class="text-gray-400 text-sm">Fill the inputs with a Valid data to create a new record in your Database</p>
        </div>

        <div class="flex-grow flex flex-col text-sm gap-1 mb-4">
            <label for="country-name" class="text-gray-600">Country name</label>
            <input value="<?php echo $country_name; ?>" name="country-name" id="country-name" type="text" class="bg-gray-100 p-1" placeholder="eg: Morocco, Egypt...">
            <p class="text-red-600 bg-red-50 px-1 text-sm">
                <?php if (!empty($country_name_err)) echo $country_name_err; ?>
            </p>
            
            <label for="country-population" class="text-gray-600">Country Population</label>
            <input value="<?php echo $country_population; ?>" name="country-population" id="country-population" type="text" class="bg-gray-100 p-1" placeholder="eg: 1000300...">
            <p class="text-red-600 bg-red-50 px-1 text-sm">
                <?php if (!empty($country_population_err)) echo $country_population_err; ?>
            </p>

            <label for="country-langue" class="text-gray-600">Country Langues</label>
            <input value="<?php echo $country_langues; ?>" name="country-langues" id="country-langue" type="text" class="bg-gray-100 p-1" placeholder="eg: Arabic, french...">
            <p class="text-red-600 bg-red-50 px-1 text-sm">
                <?php if (!empty($country_langues_err)) echo $country_langues_err; ?>
            </p>
            
            <label for="country-continent" class="text-gray-600">Continent of the Country</label>
            <select class="bg-gray-100 p-1" name="country-continent" id="country-continent">
                <option value="" disabled selected>Select a Continent</option>
                <?php
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<option value='". $row["id_continent"] . "'>" . $row['nom'] . "</option>";
                        }
                    }
                ?>
            </select>
            <p class="text-red-600 bg-red-50 px-1 text-sm">
                <?php if (!empty($country_continent_err)) echo $country_continent_err; ?>
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