<!-- header part start  -->
<?php
session_start();
if(!isset($_SESSION["a_login"])){
    header("location: index.php");
}
include("header.php");
include("../config.php");

if(isset($_REQUEST["updatebtn1"])){
    if(($_REQUEST["lesson_id"] == "") ||
       ($_REQUEST["lesson_name"] == "") ||
       ($_FILES["lesson_link"] == "") ||
       ($_REQUEST["lesson_desc"] == "")){

        $msg ="<div class='alert alert-warning' role='alert'>all fields are reduired</div>";

    }else{
        $lesson_id = $_REQUEST["lesson_id"];
        $lesson_name = $_REQUEST["lesson_name"];
        $lesson_desc = $_REQUEST["lesson_desc"];
        $lesson_vdo_name = $_FILES["lesson_link"]["name"];
        $c_vdo_tmp = $_FILES["lesson_link"]["tmp_name"];
        $vdo_upload_folder =  '../videos/lesson-videos/'.$lesson_vdo_name;
        move_uploaded_file($c_vdo_tmp,$vdo_upload_folder);

        $sql="UPDATE `lessons` SET `lesson_name`='{$lesson_name}',
        `lesson_desc`='{$lesson_desc}',`lesson_link`='{$vdo_upload_folder}'
         WHERE lesson_id ='{$lesson_id}'";
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
                                <h2 class="text-center font-weight-bold">Edit Course</h2>
                                    <?php
                                    if(isset($_REQUEST["updatebtn"])){
                                        
                                        $id = $_REQUEST["lesson_id"];
                                        $sql1 = "SELECT * FROM lessons WHERE lesson_id ='{$id}'";
                                        $result1 = mysqli_query($connect,$sql1) or die("Query failed.");
                                        if(mysqli_num_rows($result1)> 0){
                                            while($row = mysqli_fetch_array($result1)){

                                         
                                    
                                    
                                    ?>
                                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="">lesson name</label>
                                        <input type="hidden"  value="<?php if(isset($row["lesson_id"])){echo $row["lesson_id"];}?>" name="lesson_id">
                                        <input type="text" value="<?php if(isset($row["lesson_name"])){echo $row["lesson_name"];}?>" name="lesson_name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">lesson description</label>
                                        <textarea name="lesson_desc"  class="form-control" id="course_desc" cols="10" rows=""><?php if(isset($row["lesson_desc"])){echo $row["lesson_desc"];}?></textarea>

                                    </div>
                                    <div class="form-group">
                                        <label for="">lesson link</label>
                                        <input type="file" class="form-control-file" name="lesson_link" value="<?php if(isset($row["lesson_link"])){echo $row["lesson_link"];}?>">
                                      <div class=" embed-responsive embed-responsive-16by9">
                                      <iframe class="embed-responsive-item"  src="<?php if(isset($row["lesson_link"])){echo $row["lesson_link"];}?>" ></iframe>
                                      </div>
                                    
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="submit" name="updatebtn1" class="btn btn-info">
                                       <a href="lessons.php" class="btn btn-secondary">close</a>
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