<?php 
    $dbUrl = "localhost";
    $dbUser = "root";
    $dbPass = "inside14";
    $dbName = "onesound";

    $con = mysqli_connect($dbUrl, $dbUser, $dbPass, $dbName);
    if(!$con) {
        die("Connection Failed : ".mysql_connect_error());
    }

?>