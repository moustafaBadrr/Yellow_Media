<?php
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $database_name = "yellow_pages";

    $connection = new mysqli($server_name, $username, $password, $database_name);

    if($connection->connect_error){
        die("Connection Faild: " . $connection->connect_error);
    }