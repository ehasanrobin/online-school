<!-- header part start  -->
<?php
session_start();
if(!isset($_SESSION["a_login"])){
    header("location: index.php");
}
include("header.php");
include("../config.php");

if(isset($_REQUEST["dltbtn"])){
    
    $c_id = $_REQUEST["lesson_id"];

    $sql3 ="DELETE FROM lessons WHERE lesson_id = '{$c_id}'";
    $result3 = mysqli_query($connect,$sql3)or die("Query failed");
    if($result3 == true){
        header("location: http://localhost/onlineschool/admin/lessons.php");
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

              <div class="col-md-10 content ">
                 <form action="" class="mt-5">
                    <div class="form-group form-inline">
                        <label for="">Course Id:</label>
                        <input type="text" name="chekid" class="form-control ml-2">
                        <input type="submit" value="search" name="searchbtn" class="btn btn-danger ml-1" >
                    </div>
                 </form>
                 <?php
                 if(isset($_REQUEST["searchbtn"])){
                     
                    $sql="SELECT * FROM course";
                    $result = mysqli_query($connect,$sql) or die("Query failed.");
                    while($row = mysqli_fetch_array($result)){
                        if(isset($_REQUEST["chekid"]) && $_REQUEST["chekid"] == $row["course_id"]){
                            $sql1="SELECT * FROM course WHERE course_id = '{$_REQUEST["chekid"]}'";
                            $result1 = mysqli_query($connect,$sql1) or die("Qurey failed.");
                            if($row["course_id"] == $_REQUEST["chekid"]){
                                $_SESSION["course_id"] = $row["course_id"];
                                $_SESSION["course_name"] = $row["course_name"];


                        
                 
                 ?>
                     <h3 class="bg-dark text-white text-center">Course Id:<?php echo $_SESSION["course_id"]; ?>  Course Name : <?php echo  $_SESSION["course_name"];  ?></h3>
                     <?php
                     
                     $sql2 = "SELECT * FROM lessons WHERE course_id={$_REQUEST["chekid"]}";
                     $result2 = mysqli_query($connect,$sql2) or die("Query failed.");
                     
                        
                       
                     ?>
                     <table class="table " cellpadding="20px">
                        <thead>
                                <tr>
                                    <th scope="col">Lesson Id</th>
                                    <th scope="col">Lesson Name</th>
                                    <th scope="col">lesson link</th>
                                    <th scope="col">action</th>

                                </tr>
                              
                        </thead>
                        <tbody>
                        <?php 
                                if(mysqli_num_rows($result2) > 0){
                                while($row = mysqli_fetch_array($result2)){?>
                                <tr>
                                    <td><?php if(isset($row["lesson_id"])){echo $row["lesson_id"];}?></td>
                                    <td><?php if(isset($row["lesson_name"])){echo $row["lesson_name"];}?></td>
                                    <td><?php if(isset($row["lesson_link"])){echo $row["lesson_link"];}?></td>
                                    <td>
                                    <form action="editlesson.php" method="post" class="d-inline">
                                        <input type="hidden" name="lesson_id" value="<?php if(isset($row["lesson_id"])){echo $row["lesson_id"];}?>">
                                        <button class="btn btn-primary" name="updatebtn"><i class="fas fa-pen-alt    "></i></button>
                                    </form>
                                    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" class="d-inline">
                                    <input type="hidden"  name="lesson_id" value="<?php if(isset($row["lesson_id"])){echo $row["lesson_id"];}?>">
                                      <button class="btn btn-secondary" name="dltbtn"><i class="fas fa-trash    "></i></button>
                                    </form>
                                    </td>
                                </tr>
                                <?php
                    }
                                
                                
                                ?>
                        </tbody>
                     </table>
                     
                     

                 <?php
                       
                }
                
                 if(isset($_SESSION["course_id"])){
                    echo ' <a href="addlesson.php" class="btn btn-danger addbtn"><i class="fas fa-plus    "></i> </a>';
                }
                     }
                    }
                }
             }
             
                 
                 
                 ?>
              </div>
          </div>
      </div>
  </section>
  <!-- dashboard end  -->
<?php
include("footer.php");
?>