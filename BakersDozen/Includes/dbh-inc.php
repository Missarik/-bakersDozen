<?php
    //Database Handler

    $serverName = "localhost";
    $dbUsername = "root";
    $dbpassword = "root";
    $dbName = "bakersDozen";
    
    $conn = mysqli_connect($serverName, $dbUsername, $dbpassword, $dbName);

    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }

    ?>