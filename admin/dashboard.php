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
                 <div class="container-fluid">
                 <!-- dash board content start  -->
                      <div class="dashboard-content px-4 mt-5">
                          <div class="row">
                              <!-- col start  -->
                          <div class="col-md-4">
                              <div class="card bg-primary mt-3">
                                  <div class="card-header"><h4 class="text-center">Cources</h4> </div>
                                  <div class="card-body text-center">
                                        <div class="h1">5</div>
                                        <div class="btn">view</div>
                                  </div>
                              </div>
                          </div>
                          <!-- col end  -->
                          <!-- col start  -->
                          <div class="col-md-4">
                              <div class="card bg-warning mt-3">
                                  <div class="card-header"><h4 class="text-center">Student</h4> </div>
                                  <div class="card-body text-center">
                                        <div class="h1">5</div>
                                        <div class="btn">view</div>
                                  </div>
                              </div>
                          </div>
                          <!-- col end  -->
                          <!-- col start  -->
                          <div class="col-md-4">
                              <div class="card bg-success mt-3">
                                  <div class="card-header"><h4 class="text-center">Sold</h4> </div>
                                  <div class="card-body text-center">
                                        <div class="h1">5</div>
                                        <div class="btn">view</div>
                                  </div>
                              </div>
                          </div>
                          <!-- col end  -->
                          </div>
                          
                      </div>
                 </div>
                 <!-- end dashboard row  -->
                 <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                           <p class="bg-dark text-center mt-5 p-2 text-white">cources ordered</p>
                            <table class="table table-bordered table-striped table-hover">
                                <thead class="bg-dark text-white">
                                <tr class="">
                                    <th>Order Id</th>
                                    <th>Cource Id</th>
                                    <th>student Email</th>
                                    <th>order date</th>
                                    <th>amout</th>
                                    <th>action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>12 </td>
                                        <td>ehasanrobin44@gmail.com</td>
                                        <td>12/12/2020</td>
                                        <td>2000</td>
                                        <td><div class="btn btn-secondary"><i class="fas fa-trash-alt    "></i></div></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>12 </td>
                                        <td>ehasanrobin44@gmail.com</td>
                                        <td>12/12/2020</td>
                                        <td>2000</td>
                                        <td><div class="btn btn-secondary"><i class="fas fa-trash-alt    "></i></div></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>12 </td>
                                        <td>ehasanrobin44@gmail.com</td>
                                        <td>12/12/2020</td>
                                        <td>2000</td>
                                        <td><div class="btn btn-secondary"><i class="fas fa-trash-alt    "></i></div></td>
                                    </tr>
                                </tbody>
                            </table>
                        
                        </div>
                    </div>
                 </div>
              </div>
          </div>
      </div>
  </section>
  <!-- dashboard end  -->
<!-- footer start  -->
<?php
include("footer.php");
?>
<!-- footer end  -->