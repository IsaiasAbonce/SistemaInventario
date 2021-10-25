<?php
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $dbname = "project";
    $port = "3306";
    $conn = new mysqli($host , $user, $pass, $dbname, $port);
    mysqli_query($conn , "SET character_set_result=utf8");
    if($conn->connect_error){
        die("Database Error : " . $conn->connect_error);
    }
?>
