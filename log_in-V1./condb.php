<?php
    $hostName = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "log_in";
    $connect = mysqli_connect($hostName, $user, $pass, $dbName) or die("Error");
    mysqli_query($connect, "SET NAMES 'utf8' ");
?>
