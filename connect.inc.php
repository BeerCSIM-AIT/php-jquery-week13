<?php
    $host = "localhost:3306";
    $username = "root";
    $password = "12345678";
    $dbname = "usedcar";

    $conn = new mysqli($host, $username, $password, $dbname);

    if(!$conn){
        echo "Connected failed";
    }
?>