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

    $sql1 ="DELETE FROM student WHERE stu_id = '{$c_id}'";
    $result1 = mysqli_query($connect,$sql1)or die("Query failed");
    if($result1 == true){
        header("location: http://localhost/onlineschool/admin/students.php");
    }
}

?>
<!-- header part end -->
    <!-- heading section start  -->
  <!--  student start  -->
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
                    <h4 class="text-center mt-4 bg-dark text-white">List of Students</h4>
                </div>
                 <div class="table-responsive">     
                    <table class="table table-bordered">
                        <thead> 
                            <tr>
                                <th>student Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                            $sql="SELECT * FROM student";
                            $result = mysqli_query($connect,$sql) or die("Query failed.");
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){

                              
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row["stu_id"];?></td>
                                <td><?php echo $row["stu_name"];?></td>
                                <td><?php echo $row["stu_email"];?></td>
                                <td>
                                   <form action="editstudent.php" class="d-inline">
                                       <input type="hidden" value="<?php echo $row["stu_id"];?>" name="c_id">
                                    <button type="submit" name="updatebtn" class="btn btn-primary"><i class="fas fa-pen "></i></button>
        
                                   </form> 
                                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" class="d-inline">
                                       <input type="hidden" value="<?php echo $row["stu_id"];?>" name="c_id">
                                   
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
                    <a href="addstudent.php" class="btn btn-danger addbtn"><i class="fas fa-plus    "></i> </a>
                 </div>
                    </div>
                  </div>
                     
                 
              </div>
          </div>
      </div>
  </section>
  <!-- student end  -->
<?php
include("footer.php");
?>