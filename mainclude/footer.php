 <!-- footer section start  -->
 <section>
        <div class="container-fluid">
            <div class="row">
            <div class="col-12 text-center">
                <div class="col-12 bg-secondary px-4">
                    <h5>@copy rights <a href="" data-toggle="modal" data-target="#admin_login" class="text-white">admin login</a> </h5>
                    
                </div>
            </div>
    
        </div>
        
    </section>

    <!-- footer section end  -->

    <!-- start student registration  -->
    <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade " id="user_registration" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-secondary">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"> Student Registration</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form  id="registerform">
                <div class="form-group">
                    <label for=""> <i class="fas fa-user    "></i> Name</label>
                    <input type="name" name="stuname" id="stuname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for=""> <i class="fas fa-envelope    "></i> Email</label>
                    <input type="email" name="stuemail" id="stuemail" class="form-control">
                </div>
                <div class="form-group">
                    <label for=""> <i class="fas fa-key    "></i> New Password</label>
                    <input type="password" name="stupassword" id="stupassword" class="form-control">
                </div>
                <div class="response float-left"></div>
                <div class="form-group float-right">
                
                    <input type="submit"  name="stusubmit" id="stusubmit" value="register" class="btn btn-primary">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                </div>

            </form>
        </div>
        
      </div>
    </div>
  </div>
    <!-- end student registration  -->
      <!-- start student login  -->
    <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade " id="user_login" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-secondary">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">student Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="loginform">
                <div class="form-group">
                    <label for=""> <i class="fas fa-envelope    "></i> Email </label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for=""> <i class="fas fa-key    "></i> New Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" id="stulogin" name="submit" value="login" class="btn btn-primary">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <div class="lresponse"></div>
                </div>

            </form>
        </div>
        <div class="modal-footer">
          
          
        </div>
      </div>
    </div>
  </div>
    <!-- end student login  -->

      <!-- start admin login  -->
    <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade " id="admin_login" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-secondary">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Admin Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for=""> <i class="fas fa-envelope    "></i> Email </label>
                    <input type="email" id="a_email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for=""> <i class="fas fa-key    "></i> Password</label>
                    <input type="password" id="a_pass" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" id="adminlgbtn" name="submit" value="login" class="btn btn-primary">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <div class="aresponse"></div>

                </div>

            </form>
        </div>
        <div class="modal-footer">
          
          
        </div>
      </div>
    </div>
  </div>
    <!-- end admin login  -->
    
<!-- javascript link groups  -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <!-- tiny carousel js link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/ajaxrequest.js"></script>
    <!-- admin ajax script  -->
    <script src="js/admin_ajax.js"></script>
    
    <script>
    // tiny slider script 
        var slider = tns({
    container: '.my-slider',
    items: 3,
    slideBy: 'page',
    autoplay: true,
    controls: false
  });
    </script>
</body>
</html>