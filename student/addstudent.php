<?php
include("../config.php");

$stu_name = $_REQUEST["stuname"];
$stu_email = $_REQUEST["stuemail"];
$stu_pass = md5(sha1($_REQUEST["stupassword"]));

$sql1 = "SELECT * FROM student WHERE stu_email ='{$stu_email}'";
$result1 = mysqli_query($connect,$sql1);

if(mysqli_num_rows($result1) > 0){
    echo "<div class='alert alert-warning mt-2' role='alert'>Your email address is already taken</div>";

}else{
    $sql = "INSERT INTO student (stu_name, stu_email,stu_pass) VALUES ('{$stu_name}','{$stu_email}','{$stu_pass}')";
    $result = mysqli_query($connect,$sql) or die("Query failed.");
    if($result == true){
        echo "<div class='alert alert-success mt-2' role='alert'>registered successfully</div>";
    }else{
        echo "<div class='alert alert-danger mt-2' role='alert'>can't registered</div>";
    }
}






 

?>