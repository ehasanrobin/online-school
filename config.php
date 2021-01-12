<?php
    $db_host = "localhost";
    $db_user= "root";
    $db_password = "";
    $db_name = "online_school_db";
    
    // data baase connection 

    $connect = mysqli_connect($db_host,$db_user,$db_password,$db_name) or die("connection failed");

?>