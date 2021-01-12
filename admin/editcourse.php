<!-- header part start  -->
<?php
session_start();
if(!isset($_SESSION["a_login"])){
    header("location: index.php");
}
include("header.php");
include("../config.php");

if(isset($_REQUEST["updatebtn1"])){
    if(($_REQUEST["course_name"] == "") ||
       ($_REQUEST["course_desc"] == "") ||
       ($_REQUEST["course_author"] == "") ||
       ($_REQUEST["course_duration"] == "") ||
       ($_REQUEST["selling_or_price"] == "") ||
       ($_REQUEST["selling_price"] == "") ||
       ($_FILES["course_img"] == "")){

        $msg ="<div class='alert alert-warning' role='alert'>all fields are reduired</div>";

    }else{
        $c_id = $_REQUEST["course_id"];
        $c_name = $_REQUEST["course_name"];
        $c_desc = $_REQUEST["course_desc"];
        $c_author = $_REQUEST["course_author"];
        $c_duration = $_REQUEST["course_duration"];
        $c_or_price = $_REQUEST["selling_or_price"];
        $c_price = $_REQUEST["selling_price"];
        $c_img = $_FILES["course_img"]["name"];
        $c_img_tmp = $_FILES["course_img"]["tmp_name"];
        $img_upload_folder =  "../images/course-img/".$c_img;
        move_uploaded_file($c_img_tmp,$img_upload_folder);

        $sql="UPDATE `course` SET `course_name`='{$c_name}',
        `course_desc`='{$c_desc}',`course_author`='{$c_author}',`course_img`='{$img_upload_folder}',
        `course_duration`='{$c_duration}',`course_price`='{$c_price}',`course_or_price`='{$c_or_price}'
         WHERE course_id ='{$c_id}'";
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
                                        
                                        $id = $_REQUEST["c_id"];
                                        $sql1 = "SELECT * FROM course WHERE course_id = '{$id}'";
                                        $result1 = mysqli_query($connect,$sql1) or die("Query failed.");
                                        if(mysqli_num_rows($result1)> 0){
                                            while($row = mysqli_fetch_array($result1)){

                                         
                                    
                                    
                                    ?>
                                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="">Course Name</label>
                                        <input type="hidden"  value="<?php if(isset($row["course_id"])){echo $row["course_id"];}?>" name="course_id">
                                        <input type="text" value="<?php if(isset($row["course_name"])){echo $row["course_name"];}?>" name="course_name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Course Description</label>
                                        <textarea name="course_desc"  class="form-control" id="course_desc" cols="10" rows=""><?php if(isset($row["course_desc"])){echo $row["course_desc"];}?></textarea>

                                    </div>
                                    <div class="form-group">
                                        <label for="">Author</label>
                                        <input type="text" value="<?php if(isset($row["course_author"])){echo $row["course_author"];}?>" name="course_author" id="course_author" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Course Duration</label>
                                        <input type="text" value="<?php if(isset($row["course_duration"])){echo $row["course_duration"];}?>" name="course_duration" id="course_duration" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Course Orginal price</label>
                                        <input type="text" value="<?php if(isset($row["course_or_price"])){echo $row["course_or_price"];}?>" name="selling_or_price" id="selling_or_price" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Course Selling Price</label>
                                        <input type="text" value="<?php if(isset($row["course_price"])){echo $row["course_price"];}?>" name="selling_price" id="selling_price" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Course Image</label><br>
                                        <img style="width:200px" src="<?php if(isset($row["course_img"])){echo $row["course_img"];}?>" alt=""><br>
                                        <input type="file" value="<?php echo $row["course_img"];?>" class="" name="course_img" id="course_img">
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="submit" name="updatebtn1" class="btn btn-info">
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