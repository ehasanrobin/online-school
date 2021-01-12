<?php 
                   $stu_email = $_SESSION["stu_email"];
                   $sql = "SELECT * FROM student WHERE stu_email = '{$stu_email}'";
                   $result = mysqli_query($connect,$sql) or die("Query faild.");
                   if($result == true){
                       $row = mysqli_fetch_array($result);
                       $stu_img = $row["stu_img"];
                   }
                   
                   ?>
<div class="col-md-2 bg-dark">
                  <nav class=" side-menu">
                       <div class="side-bar-sticky">
                       <h5 class="font-weight-bold">Name : <?php echo $row["stu_name"];?></h5>

                       <center><img src="<?php if(isset($stu_img)){echo $stu_img;}else{ echo "../images/avatar1.png"; } ?>" alt="" class="profile-img"></center>
                       <ul class="nav flex-column mt-3">
                           <li class="nav-item"><a href="studentprofile.php" class="nav-link"><span><i class="fas fa-user-alt    "></i></span> profile</a></li>
                           <li class="nav-item"><a href="mysourses.php" class="nav-link"><span><i class="fas fa-user-astronaut    "></i> </span> mycourses</a></li>
                           <li class="nav-item"><a href="feedback.php" class="nav-link"><span><i class="fab fa-fantasy-flight-games    "></i> </span> feedback</a></li>
                           <li class="nav-item"><a href="changepwd.php" class="nav-link"><span><i class="fas fa-key    "></i> </span> change password</a></li>
                           <li class="nav-item"><a href="../logout.php" class="nav-link"><i class="fas fa-sign-out-alt    "></i> </span> Logout</a></li>
                       
                       </ul>
                       </div>
                  </nav>
 </div>