<?php
    $host="localhost";
    $user="root";
    $password="";
    $dbname="medicare_db";

    $link = mysqli_connect($host, $user, $password, $dbname);
    if($link==false){
        die("Error:Could not connect ." . mysqli_connect_error());
    }

?>