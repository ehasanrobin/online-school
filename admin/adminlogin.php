<?php
include("../config.php");

if(!isset($_SESSION["a_login"])){
    $a_email = $_REQUEST["a_email"];
    $a_pass = $_REQUEST["a_pass"];
   
    $sql = "SELECT * FROM admin WHERE admin_email = '{$a_email}' AND admin_pass = '{$a_pass}'";
    $result = mysqli_query($connect,$sql) or die("Query failed.");
    if($result == true){
        if(mysqli_num_rows($result) > 0){
           echo 1;
           while($row = mysqli_fetch_array($result)){
               session_start();
           $_SESSION["a_login"] = true;
           $_SESSION["a_name"] = $row["admin_name"];
           $_SESSION["a_email"] = $row["admin_email"];
           }
        }else{
           echo 0;
           
       }
   }else{
       echo "something wrong";
   }
}



?>