<?php
    $server = "localhost";
    $db_user = "root";
    $db_pass ="";
    $db_name ="19BCE2569";

    $conn = mysqli_connect($server, $db_user, $db_pass, $db_name);

    if(!$conn){
        echo "<script>alert('Not Connected');</script>";
    }
    else{
        echo "<script>alert('Connected');</script>";
    }
 ?>

