<?php 
include("mainclude/header.php");
include("./config.php");
?>
<!-- start image banner  -->
 <div class="container-fluid">
    <div class="row">
    
            <div class="banner-img">
                <img src="images/old-books-436498_1920.jpg" alt="">
            </div>
        
    </div>

 </div>
   <!-- end image banner  -->
    
        <!-- start cource details  -->
        <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">  
                <?php
                $course_id = $_REQUEST["course_id"];

                $sql = "SELECT * FROM course WHERE course_id = '{$course_id}'";
                $result= mysqli_query($connect,$sql) or die("Query failed.");
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){

                  
                
                
                ?>
                    <img  class="card-img-top" src="images/<?php echo $row["course_img"];?>" alt="">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Cource Name: <?php echo $row["course_name"];?></h5>
                        <p class="card-text"><?php echo $row["course_desc"];?>
                        </p>
                        <form action="">
                        <p class="card-text"> Duration : <?php echo $row["course_duration"];?></p>
                        <p>Price: <del><i class="fas fa-dollar-sign    "> </i> <?php echo $row["course_or_price"];?></del> <i class="fas fa-dollar-sign    "></i><?php echo $row["course_price"];?></p>
                        <a href="" class="float-right btn btn-primary">Buy Now</a>
                        
                        </form>
                    </div>
                
                </div>
            </div>
        <?php
        }
    }
        
        ?>
        </div>
        <div class="container mt-4 ">
            <div class="row">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>name</th>
                        <th>Lesson Name</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>introduction</td>
                        </tr>
                    
                    </tbody>
                </table>
            
            </div>
        
        </div>

        </section>
        <!-- end cource details  -->
  
      <!-- start footer section  -->
   <?php 

   include("mainclude/footer.php");
   
   ?>
   <!-- end footer section  -->