<?php
session_start();
if(!isset($_SESSION)){
    session_start();
}
include("../config.php");
if(!isset($_SESSION["is_login"])){
    $student_email = $_REQUEST["stuname"];
    $student_pass = md5(sha1($_REQUEST["stupass"]));
    
    $sql = "SELECT * FROM student WHERE stu_email = '{$student_email}' AND stu_pass='{$student_pass}'";
    $result = mysqli_query($connect,$sql) or die("Query failed.");
    if($result == TRUE){
        if(mysqli_num_rows($result) >0 ){
           
            while($row = mysqli_fetch_array($result)){
               $stu_name =  $row["stu_name"];
               $stu_email = $row ["stu_email"];
            $_SESSION["is_login"] = true;
            $_SESSION["stu_email"] = $stu_email;
            $_SESSION["stu_name"] = $stu_name;
            }
            echo 1;
    
    
        }else{
            echo "<div class='alert alert-danger mt-1' role='alert'>invalid informaiton</div>";
        }
    }else{
        echo "something wrong";
    }
}


?>