<?php
    $host = "localhost";
    $user = "root";
    $pw = "root";
    $db = "sample";
    $connect = new mysqli($host,$user,$pw,$db);
    $connect -> set_charset("utf-8");
    if(mysqli_connect_errno()){
        echo "Database connect False";
    } else {
        // echo "Database connect Ture";
    }
?>