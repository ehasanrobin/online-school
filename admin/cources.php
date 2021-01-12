<!-- header part start  -->
<?php
session_start();
if(!isset($_SESSION["a_login"])){
    header("location: index.php");
}
include("header.php");
include("../config.php");

if(isset($_REQUEST["dltbtn"])){
    
    $c_id = $_REQUEST["c_id"];

    $sql1 ="DELETE FROM course WHERE course_id = '{$c_id}'";
    $result1 = mysqli_query($connect,$sql1)or die("Query failed");
    if($result1 == true){
        header("location: http://localhost/onlineschool/admin/cources.php");
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
                <div class="container-fluid courses">  
                  <div class="row"> 
                    <div class="col-12">
                    <h4 class="text-center mt-4 bg-dark text-white">List of Courses</h4>
                </div>
                 <div class="table-responsive">     
                    <table class="table table-bordered">
                        <thead> 
                            <tr>
                                <th>Course Id</th>
                                <th>Name</th>
                                <th>Author</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                            $sql="SELECT * FROM course";
                            $result = mysqli_query($connect,$sql) or die("Query failed.");
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){

                              
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row["course_id"];?></td>
                                <td><?php echo $row["course_name"];?></td>
                                <td><?php echo $row["course_author"];?></td>
                                <td>
                                   <form action="editcourse.php" class="d-inline">
                                       <input type="hidden" value="<?php echo $row["course_id"];?>" name="c_id">
                                    <button type="submit" name="updatebtn" class="btn btn-primary"><i class="fas fa-pen "></i></button>
        
                                   </form> 
                                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" class="d-inline">
                                       <input type="hidden" value="<?php echo $row["course_id"];?>" name="c_id">
                                   
                                       <button class="btn btn-secondary" type="submit" name="dltbtn" ><i class="fas fa-trash    "></i></button>
                                   </form> 
                                
                        
                        
                        </td>
                            </tr>
                        </tbody>
                        <?php
                          }
                        }else{
                            echo "<h4>no courses</h4>";
                        }
                        
                        
                        ?>
                    </table>
                    <a href="addcourse.php" class="btn btn-danger addbtn"><i class="fas fa-plus    "></i> </a>
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