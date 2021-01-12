<!-- header part start  -->
<?php
session_start();
if(!isset($_SESSION["a_login"])){
    header("location: index.php");
}
include("header.php");
include("../config.php");

if(isset($_REQUEST["submitbtn"])){
    if(($_REQUEST["stu_name"] == "") ||
       ($_REQUEST["stu_email"] == "") ||
       ($_REQUEST["stu_password"] == "")){

        $msg ="<div class='alert alert-warning' role='alert'>all fields are reduired</div>";

    }else{
        $stu_name = $_REQUEST["stu_name"];
        $stu_email = $_REQUEST["stu_email"];
        $stu_pass = $_REQUEST["stu_password"];
        
       $sql = "INSERT INTO student (stu_name,stu_email,stu_pass) VALUES ('{$stu_name}','$stu_email','$stu_pass')";
        $result = mysqli_query($connect,$sql) or die("Query failed.");
        if($result == true){
            $msg="<div class='alert alert-success' role='alert'>Registered successfully</div>";
        }else{
            $msg="<div class='alert alert-danger' role='alert'>unable to insert course</div>";
        }



       

        


    }
  

}



?>
<!-- header part end -->
    <!-- heading section start  -->
  <!--  dashboard start  -->
  <section>
      <div class="container-fluid">
          <div class="row">
              <!-- side bar collum  -->
             <?php
             include("sidebar.php");
             ?>
              <!-- side bar collum end  -->

              <div class="col-md-10 content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 m-auto ">
                            <div class="jumbotron mt-4 shadow">
                                <h2 class="text-center font-weight-bold">Add new Student</h2>
                                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="">Student Name</label>
                                        <input type="text" name="stu_name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Student Email</label>
                                        <input type="email" name="stu_email" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label for="">password</label>
                                        <input type="password" name="stu_password" id="course_author" class="form-control">
                                    </div>
                                    
                                    <div class="form-group text-center">
                                        <input type="submit" name="submitbtn" value="register" class="btn btn-info">
                                       <a href="students.php" class="btn btn-secondary">close</a>
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
  </section>
  <!-- dashboard end  -->
<?php
include("footer.php");
?>