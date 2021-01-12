<?php

include("mainclude/header.php");
include("./config.php");

?>
    <!-- start video banner  -->
    <div class="container-fluid vid-container">
        <div class="video_banner">
            <video autoplay muted loop playsinline>
                <source src="videos/Keyboard - 1046.mp4">
            </video>
            <div class="vid-overlay"></div>
        </div>
        <div class="banner-content">
            <h1 class="banner-heading hide-content">welcome to online school</h1>
            <small class="hide-content">Learn and impliment</small><br>
            <?php
            if(isset($_SESSION["is_login"])){
                echo ' <a href="student/studentprofile.php" class="btn btn-primary btnlinear">myprofile</a>';
            }else{
                echo '<a href="#" class="btn btn-primary  btnlinear" data-toggle="modal" data-target="#user_registration">Get Started</a>';
            }
            
            ?>
           
        </div>
    </div>
    <!-- end video banner  -->
    <!-- start text banner   -->
    <div class="container-fluid bg-warning">
        <div class="row text-center custom-banner">
            <div class="col-sm-3">
                <h5><i class="fas fa-book-open    "></i> 100+ online courses</h5>
            </div>
            <div class="col-sm-3">
                <h5><i class="fas fa-users    "></i> Expert instructions</h5>
            </div>
            <div class="col-sm-3">
                <h5><i class="fas fa-keyboard    "></i> Lifetime access</h5>
            </div>
            <div class="col-sm-3">
                <h5><i class="fas fa-dollar-sign    "></i> Moneyback</h5>
            </div>
        </div>
    </div>
    <!-- end text banner   -->
    <!-- start source section  -->
    <section id="courses">
        <div class="container mt-5">
            <div class="row">
            <h1 class="text-center m-auto">popular Cource</h1>
               <div class="card-deck mt-5 ">
               <?php

               $sql = "SELECT * FROM  course LIMIT 3 ";
               $result= mysqli_query($connect,$sql) or die("Query failed.");
               if(mysqli_num_rows($result) > 0){
                   while($row = mysqli_fetch_array($result)){

                 

               
               ?>
                   <a href="courcedetails.php?course_id=<?php echo $row["course_id"];?>">
                      <div class="card ">
                      <img src="./images/<?php echo $row["course_img"];?>" alt="puthon" class="card-img-top">
                       <div class="card-body">
                           <h5 class="card-title"><?php echo $row["course_name"];?></h5>
                           <p class="card-text"><?php echo $row["course_desc"];?></p>
                                 <div class="card-footer"><p>price: <small><del><?php echo $row["course_or_price"];?></del></small>
                                  <span class="font-weight-bold "><i class="fas fa-dollar-sign    "></i> <?php echo $row["course_price"];?></span>
                                  <a href="courcedetails.php?course_id=<?php echo $row["course_id"];?>" class="btn btn-primary float-right">enroll</a>
                              </p></a>
      
                               <a href="courcedetails.php?course_id=<?php echo $row["course_id"];?>" class="text-center d-inline">
                           </div>
                           </div>
                          
                      </div>
                   </a>
                   <?php
                     }
                    }
                   
                   ?>
                   
                  
                   
                   
               </div><div class="card-deck mt-5 ">
               <?php

               $sql = "SELECT * FROM course LIMIT 3,3";
               $result= mysqli_query($connect,$sql) or die("Query failed.");
               if(mysqli_num_rows($result) > 0){
                   while($row = mysqli_fetch_array($result)){

                 

               
               ?>
                   <a href="courcedetails.php?course_id=<?php echo $row["course_id"];?>">
                      <div class="card ">
                      <img src="./images/<?php echo $row["course_img"];?>" alt="puthon" class="card-img-top">
                       <div class="card-body">
                           <h5 class="card-title"><?php echo $row["course_name"];?></h5>
                           <p class="card-text"><?php echo $row["course_desc"];?></p>
                                 <div class="card-footer"><p>price: <small><del><?php echo $row["course_or_price"];?></del></small>
                                  <span class="font-weight-bold "><i class="fas fa-dollar-sign    "></i> <?php echo $row["course_price"];?></span>
                                  <a href="courcedetails.php?course_id=<?php echo $row["course_id"];?>" class="btn btn-primary float-right">enroll</a>
                              </p></a>
      
                               <a href="courcedetails.php?course_id=<?php echo $row["course_id"];?>" class="text-center d-inline">
                           </div>
                           </div>
                          
                      </div>
                   </a>
                   <?php
                     }
                    }
                   
                   ?>
                   
                  
                   
                   
               </div>
               <a href="" class=" btn btn-primary m-auto">View all course</a>
            </div>
               
          </div>

    </section>
    <!-- end source section  -->
    <!-- contact form start  -->
    <?php
    include("contact.php");
    ?>
    <!-- contact form end  -->
    <!-- tiny carousel start  -->
  <section id="feedback">
      
   <div class="container-fluid mt-3 feedback-container py-5">
    <div class="row">
        <div class="row m-auto">
            <div class="col-12">
                <h3 class="mt-3 font-weight-bold">students feedback</h3>
            </div>
        </div>
        <div class="col-md-12">
            <div class="slider my-slider mt-4">
            <?php
            $sql2 ="SELECT s.stu_img,f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id = f.stu_id";
            $result2 = mysqli_query($connect,$sql2) or die("Query failed.");
            if(mysqli_num_rows($result2) > 0){
                while($row = mysqli_fetch_array($result2)){

              
            
            ?>
                <div class="slider-item">
                    <div class="cmt-desc">
                        <p><?php echo $row["f_content"];?></p><br>
                    </div>
                    <div class="pic">
                    <img src="<?php echo $row["course_img"]?>" alt="" class="slider-img">
                    </div>
                </div>
                <?php
  }
}
                
                ?>
                <div class="slider-item">
                    <div class="cmt-desc">
                        <p>Lorem ipsum dolor sit
                         amet consectetur adipi
                         sicing elit. Nesciunt,
                          impedit.</p><br>
                    </div>
                    <div class="pic">
                    <img src="images/download (1).jpg" alt="" class="slider-img">
                    </div>
                </div>
                <div class="slider-item">
                    <div class="cmt-desc">
                        <p>Lorem ipsum dolor sit
                         amet consectetur adipi
                         sicing elit. Nesciunt,
                          impedit.</p><br>
                    </div>
                    <div class="pic">
                    <img src="images/download (1).jpg" alt="" class="slider-img">
                    </div>
                </div>
                <div class="slider-item">
                    <div class="cmt-desc">
                        <p>Lorem ipsum dolor sit
                         amet consectetur adipi
                         sicing elit. Nesciunt,
                          impedit.</p><br>
                    </div>
                    <div class="pic">
                    <img src="images/download (1).jpg" alt="" class="slider-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  </section>
  <!-- tiny carousel end  -->

    <!-- social links menu start  -->
   <section id="social">
    <div class="container-fluid bg-warning  social-container">
        <div class="row text-center">
            <div class="col-sm-3">
               <div class="social-box">
                    <h5><i class="fab fa-facebook    "></i> facebook</h5>
               </div>
            </div>
            <div class="col-sm-3">
               <div class="social-box">
                    <h5> <i class="fab fa-twitter-square    "></i> twitter</h5>
               </div>
            </div>
            <div class="col-sm-3">
               <div class="social-box">
                    <h5><i class="fab fa-linkedin-in    "></i> linked in</h5>
               </div>
            </div>
            <div class="col-sm-3">
               <div class="social-box">
                    <h5><i class="fab fa-instagram    "></i> instagram</h5>
               </div>
            </div>
        </div>
    </div>

   </section>
    <!-- social links menu end  -->
   <!-- start footer section  -->
   <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <h4 class=" font-weight-bold mt-3 ">about us</h4>
                    <p>online school provides service around the world and has the abiliy to edicate people
                        and partnering with top university around the world and organisations around the world.containe.
                    </p>
                </div>
                <div class="col-md-4 text-center category-box">
                    <h4 class=" font-weight-bold mt-3 ">Category</h4>
                    <ul class="">
                        <li><a href="">web development</a></li>
                        <li><a href="">web designing</a></li>
                        <li><a href="">android app development</a></li>
                        <li><a href="">ios development</a></li>
                        <li><a href="">data analysis</a></li>
                    </ul>
                </div>
                <div class="col-md-4 text-center">
                    <h4 class=" font-weight-bold mt-3 ">contact us</h4>
                    <p>i school PVT LTD <br>
                    textail gait,nasirabad <br>
                    chittaging,bangladesh</p>
                </div>


            </div>
            
        </div>
        
    </section>

   <?php include("mainclude/footer.php");?>
   <!-- end footer section  -->

  