<?php
include("header.php");

if(!isset($_SESSION["is_login"])){
  header("location: index.php");
}
if(isset($_REQUEST["updatebtn"])){
  
  
    $stu_id = $_REQUEST["stu_id"];
    $stu_email = $_REQUEST["stu_email"];
      $stu_name = $_REQUEST["stu_name"];
     $stu_img_name = $_FILES["profile"]["name"];
     $stu_tmp_name = $_FILES["profile"]["tmp_name"];
    $stu_folder_name =  "../images/stu_img/".$stu_img_name;
    move_uploaded_file($stu_tmp_name,$stu_folder_name);
   $sql1 = "UPDATE student SET stu_name='{$stu_name}', stu_email='{$stu_email}', stu_img='{$stu_folder_name}' WHERE stu_id='{$stu_id}'";
    $result1 = mysqli_query($connect,$sql1) or die("Query failed.");
    if($result1 == true){
      $msg ="<div class='alert alert-success' role='alert'>update successfully</div>";
    }else{
      $msg="<div class='alert alert-success' role='alert'>unable to update</div>";
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
                   
                   <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
                   <div class="form-group">
                     <label for="">Student Id</label>
                     <input type="text" value="<?php echo $row["stu_id"] ?>" name="stu_id" class="form-control" readonly>
                   </div>
                   <div class="form-group">
                     <label for=""> Email</label>
                     <input type="text" name="stu_email" value="<?php echo $row["stu_email"] ?>" class="form-control">
                   </div>
                   <div class="form-group">
                     <label for="">Name</label>
                     <input type="text" name="stu_name" value="<?php echo $row["stu_name"] ?>" class="form-control">
                   </div>
                   <div class="form-group">
                     <label for="">Upload</label>
                     <input type="file" name="profile" class="form" value="<?php echo $row["stu_img"] ?>">
                   </div>
                   <div class="form-group">
                    <input type="submit" value="update" name="updatebtn" class="btn btn-primary">
                   </form>
                   <?php if(isset($msg)){echo $msg;}?>
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