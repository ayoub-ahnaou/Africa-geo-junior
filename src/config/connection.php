<?php 
    define("HOST", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "africa_geo_junior");

    try{
        $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
        echo "<p class='bg-green-50 text-green-600 px-2'>Connected to Database...</p>";
    }
    catch(Exception $err){
        echo "<p class='bg-red-50 text-red-600 px-2'>Failed to Cennect to the Database... <br>". $err ."</p>";
        die();
    }
?>