<?php
include("header.php");

if(isset($_REQUEST["submit-btn"])){

    $new_pass = md5(sha1($_REQUEST["new_pass"]));
    $stu_email = $_SESSION["stu_email"];

    $sql1 = "UPDATE student SET stu_pass='{$new_pass}' WHERE stu_email='{$stu_email}'";
    $result1 = mysqli_query($connect,$sql1) or die("Query failed.");
    if($result1 == true){
        $msg = "<div class='alert alert-success mt-3'>password changed successfully</div>";
    }
}

?>
<div class="container-fluid">
    <div class="row">
    <!-- //side bar php  -->
    <?php 
                   $stu_email = $_SESSION["stu_email"];
                   $sql = "SELECT * FROM student WHERE stu_email = '{$stu_email}'";
                   $result = mysqli_query($connect,$sql) or die("Query faild.");
                   if($result == true){
                       $row = mysqli_fetch_array($result);
                   }
                   
                   ?>
        <?php include("sidebar.php"); ?>
        <!-- side bar end php  -->

        <div class="col-md-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 m-auto">
                   <div class="jumbotron mt-3">
                   
                   <form action="">
                   <div class="form-group">
                     <label for="">Student Id</label>
                     <input type="text" value="<?php echo $row["stu_id"] ?>" class="form-control" readonly>
                   </div>
                   <div class="form-group">
                   <label for="">new password</label>
                   <input type="password" name="new_pass" class="form-control">
                   </div>
                   <div class="form-grou">
                        <input type="submit" name="submit-btn" class="btn btn-primary" > 
                   </div>
                   <?php if(isset($msg)){echo $msg;}?>
                   </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>













<?php
include("footer.php");
?>