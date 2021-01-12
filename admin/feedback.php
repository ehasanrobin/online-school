<!-- header part start  -->
<?php
session_start();
if(!isset($_SESSION["a_login"])){
    header("location: index.php");
}
include("header.php");

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
                 
                 
                     
                 
              </div>
          </div>
      </div>
  </section>
  <!-- dashboard end  -->
<?php
include("footer.php");
?>