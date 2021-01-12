 <?php
 if(!isset($_SESSION["a_login"])){
     header("location: index.php");
 }
 
 ?>
 <!-- side bar collum  -->
 <div class="col-md-2 bg-dark">
                  <nav class=" side-menu">
                       <div class="side-bar-sticky">
                       <ul class="nav flex-column mt-3">
                           <li class="nav-item"><a href="dashboard.php" class="nav-link"><span><i class="fas fa-tachometer-alt"></i></span> dashboard</a></li>
                           <li class="nav-item"><a href="cources.php" class="nav-link"><span><i class="fab fa-accessible-icon"></i></span> cources</a></li>
                           <li class="nav-item"><a href="lessons.php" class="nav-link"> <span><i class="fab fa-discourse    "></i></span> Lessons</a></li>
                           <li class="nav-item"><a href="students.php" class="nav-link"> <span><i class="fas fa-users    "></i></span> Students</a></li>
                           <li class="nav-item"><a href="sellreport.php" class="nav-link"> <span><i class="fas fa-calendar    "></i></span> Sell report</a></li>
                           <li class="nav-item"><a href="paymentstatus.php" class="nav-link"> <span><i class="fas fa-calendar-alt    "></i></span> payment status</a></li>
                           <li class="nav-item"><a href="feedback.php" class="nav-link"> <span><i class="fab fa-freebsd    "></i></span> Feedback</a></li>
                           <li class="nav-item"><a href="changepwd.php" class="nav-link"> <span><i class="fas fa-key    "></i></span> change password</a></li>
                           <li class="nav-item"><a href="../logout.php" class="nav-link"> <span><i class="fas fa-sign-out-alt    "></i></span> lOGOUT</a></li>
                       </ul>
                       </div>
                  </nav>
 </div>
              <!-- side bar collum end  -->