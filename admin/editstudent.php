<!-- header part start  -->
<?php
session_start();
if(!isset($_SESSION["a_login"])){
    header("location: index.php");
}
include("header.php");
include("../config.php");

if(isset($_REQUEST["updatebtn1"])){
    if(($_REQUEST["stu_id"] == "") ||
       ($_REQUEST["stu_name"] == "") ||
       ($_REQUEST["stu_email"] == "") ||
       ($_REQUEST["stu_pass"] == "") ){

        $msg ="<div class='alert alert-warning' role='alert'>all fields are reduired</div>";

    }else{
        $stu_id = $_REQUEST["stu_id"];
        $stu_name = $_REQUEST["stu_name"];
        $stu_email = $_REQUEST["stu_email"];
        $stu_pass = $_REQUEST["stu_pass"];

        $sql="UPDATE student SET stu_name='{$stu_name}',stu_email='{$stu_email}',stu_pass='{$stu_pass}'  WHERE stu_id='{$stu_id}'  ";
         $result = mysqli_query($connect,$sql) or die("Query failed");
        if($result == true){
            $msg="<div class='alert alert-success' role='alert'>course updated successfully</div>";
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
                                <h2 class="text-center font-weight-bold">Edit student</h2>
                                    <?php
                                    if(isset($_REQUEST["c_id"])){
                                        
                                        $id = $_REQUEST["c_id"];
                                        $sql1 = "SELECT * FROM student WHERE stu_id = '{$id}'";
                                        $result1 = mysqli_query($connect,$sql1) or die("Query failed.");
                                        if($result1 == true){
                                            while($row = mysqli_fetch_array($result1)){

                                         
                                    
                                    
                                    ?>
                                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="">Student Name</label>
                                        <input type="hidden"  value="<?php if(isset($row["stu_id"])){echo $row["stu_id"];}?>" name="stu_id">
                                        <input type="text" value="<?php if(isset($row["stu_name"])){echo $row["stu_name"];}?>" name="stu_name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" value="<?php if(isset($row["stu_email"])){echo $row["stu_email"];}?>" name="stu_email" id="course_author" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for=""> password</label>
                                        <input type="text" value="<?php if(isset($row["stu_pass"])){echo $row["stu_pass"];}?>" name="stu_pass" id="course_duration" class="form-control">
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="submit" name="updatebtn1" value="update" class="btn btn-info">
                                       <a href="cources.php" class="btn btn-secondary">close</a>
                                    </div>
                                    <?php
                                       }
                                    }
                                    

                                }
                                    
                                    
                                    
                                    
                                    if(isset($msg)){echo $msg;}?>
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