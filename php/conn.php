<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "id21434995_pomarrososdb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die("". mysqli_connect_error());
    }
?>