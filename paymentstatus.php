<?php 
include("mainclude/header.php");
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
        <!-- start payment status -->
        <!-- payment status start  -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class=" font-weight-bold">payment stauts</h1>
                    <form action="" method="post" class="mt-3">
                        <div class="form-group row">
                        <label class="offset-sm-4 " for="">Order Id:</label>
                    <input type="text" class="form-control col-2 mx-3" >
                    <input type="submit" name="submit" value="view" class="btn btn-primary">
                        
                        </div>
                    
                    </form>
                </div>
            </div>
        
        </div>
        <!-- payment status end  -->
    <!-- contact form start  -->
    <?php
        include("contact.php");
    
    ?>
    <!-- contact form end  -->
        <!-- start payment end -->
       
  
      <!-- start footer section  -->
   <?php 

   include("mainclude/footer.php");
   
   ?>
   <!-- end footer section  -->