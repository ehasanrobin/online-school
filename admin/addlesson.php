<!-- header part start  -->
<?php
session_start();
if(!isset($_SESSION["a_login"])){
    header("location: index.php");
}
include("header.php");
include("../config.php");

if(isset($_REQUEST["submitbtn"])){
    if(($_REQUEST["course_id"] == "") ||
       ($_REQUEST["course_name"] == "") ||
       ($_REQUEST["lesson_name"] == "") ||
       ($_REQUEST["lesson_desc"] == "") ||
       ($_FILES["lesson_link"] == "")){

        $msg ="<div class='alert alert-warning' role='alert'>all fields are reduired</div>";

    }else{
        $course_id = $_REQUEST["course_id"];
        $course_name = $_REQUEST["course_name"];
        $lessons_name = $_REQUEST["lesson_name"];
        $lesson_desc = $_REQUEST["lesson_desc"];
        $lesson_name = $_FILES["lesson_link"]["name"];
        $lesson_name_tmp = $_FILES["lesson_link"]["tmp_name"];
        $lesson_folder = '../videos/lesson-videos/'.$lesson_name;
        move_uploaded_file($lesson_name_tmp,$lesson_folder);


        

        $sql="INSERT INTO lessons (lesson_name,lesson_desc,lesson_link,course_id,course_name)
               VALUES ('{$lessons_name}','{$lesson_desc}','{$lesson_folder}','{$course_id}','{$course_name}')";
        $result = mysqli_query($connect,$sql) or die("Query failed.");
        if($result == true){
            $msg="<div class='alert alert-success' role='alert'>lesson added successfully</div>";
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
                                        <label for="">Course Id</label>
                                        <input type="text" value="<?php echo $_SESSION["course_id"]?>" name="course_id" class="form-control" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Course name</label>
                                       <input type="text" value="<?php echo $_SESSION["course_name"]?>" name="course_name" class="form-control" readonly>

                                    </div>
                                    <div class="form-group">
                                        <label for="">Lesson name</label>
                                        <input type="text" name="lesson_name" id="course_author" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">lesson description</label>
                                        <textarea name="lesson_desc" id="" cols="2" rows="2" class="form-control"></textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Lesso videos link</label><br>
                                        <input type="file" class="" name="lesson_link" id="course_img" class="form-control-file">
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="submit" name="submitbtn" class="btn btn-info">
                                       <a href="lessons.php" class="btn btn-secondary">close</a>
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