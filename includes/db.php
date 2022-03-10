<?php
// $con = mysqli_connect("localhost", "root", "") or die("Error");
// mysqli_select_db("$con", "ocrds") or die("Error in selecting database");

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ocrds";

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die("Error");
?>
