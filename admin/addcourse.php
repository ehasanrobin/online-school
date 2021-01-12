<!-- header part start  -->
<?php
session_start();
if(!isset($_SESSION["a_login"])){
    header("location: index.php");
}
include("header.php");
include("../config.php");

if(isset($_REQUEST["submitbtn"])){
    if(($_REQUEST["course_name"] == "") ||
       ($_REQUEST["course_desc"] == "") ||
       ($_REQUEST["course_author"] == "") ||
       ($_REQUEST["course_duration"] == "") ||
       ($_REQUEST["selling_or_price"] == "") ||
       ($_REQUEST["selling_price"] == "") ||
       ($_FILES["course_img"] == "")){

        $msg ="<div class='alert alert-warning' role='alert'>all fields are reduired</div>";

    }else{
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

        $sql="INSERT INTO course (course_name,course_desc,course_author,course_img,course_duration,course_price,course_or_price)
               VALUES ('{$c_name}','{$c_desc}','{$c_author}','{$img_upload_folder}','{$c_duration}','{$c_price}','{$c_or_price}')";
        $result = mysqli_query($connect,$sql) or die("Query failed.");
        if($result == true){
            $msg="<div class='alert alert-success' role='alert'>course inserted successfully</div>";
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
                                <h2 class="text-center font-weight-bold">Add new Course</h2>
                                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="">Course Name</label>
                                        <input type="text" name="course_name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Course Description</label>
                                        <textarea name="course_desc" class="form-control" id="course_desc" cols="10" rows=""></textarea>

                                    </div>
                                    <div class="form-group">
                                        <label for="">Author</label>
                                        <input type="text" name="course_author" id="course_author" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Course Duration</label>
                                        <input type="text" name="course_duration" id="course_duration" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Course Orginal price</label>
                                        <input type="text" name="selling_or_price" id="selling_or_price" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Course Selling Price</label>
                                        <input type="text" name="selling_price" id="selling_price" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Course Image</label><br>
                                        <input type="file" class="" name="course_img" id="course_img">
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="submit" name="submitbtn" class="btn btn-info">
                                       <a href="cources.php" class="btn btn-secondary">close</a>
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