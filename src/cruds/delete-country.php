<?php
    include "../config/connection.php";
    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $sql = "DELETE FROM pays WHERE id_pays = $id";
        $result = mysqli_query($conn, $sql);
    }

    header("location: /Africa-geo-junior/src/pages/dashboard.php");
    exit;
?>