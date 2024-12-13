<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "africa_geo_junior";

    try{
        $conn = new mysqli($host, $username, $password, $database);
    }
    catch(Exception $err){
        echo "<p class='bg-red-50 text-red-600 px-2'>Failed to Cennect to the Database... <br>". $err ."</p>";
        die();
    }
?>