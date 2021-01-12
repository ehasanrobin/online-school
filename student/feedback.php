<?php
include("header.php");
include("../config.php");

$stu_email = $_SESSION["stu_email"];
$sql = "SELECT * FROM student WHERE stu_email = '{$stu_email}'";
$result = mysqli_query($connect,$sql) or die("Query faild.");
if($result == true){
    $row = mysqli_fetch_array($result);
    $stu_id = $row["stu_id"];
}

 

if(isset($_REQUEST["submitbtn"])){


  $f_content = $_REQUEST["f_content"];
  $stu_id = $row["stu_id"];
  $sql1 = "INSERT INTO feedback (f_content,stu_id) VALUES ('{$f_content}','{$stu_id}')";
  $result1 = mysqli_query($connect,$sql1) or die("Query failed.");
    if($result1 == true){
        $msg = "<div class='alert alert-success mt-3' role='alert'>Thank You for your feedback</div>";
    }
}
?>
<div class="container-fluid">
    <div class="row">
    <!-- //side bar php  -->
    
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
                   <label for="">Feedback</label>
                   <textarea name="f_content" class="form-control" id="" cols="30" rows="2"></textarea>
                   </div>
                   <div class="form-grou">
                        <input type="submit" class="btn btn-primary" name="submitbtn"> 
                   </div>

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