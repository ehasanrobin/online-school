<!-- header part start  -->
<?php
session_start();
if(!isset($_SESSION["a_login"])){
    header("location: index.php");
}
include("header.php");
include("../config.php");

$a_email = $_SESSION["a_email"];
if(isset($_REQUEST["updatebtn"])){

    if(($_REQUEST["newpwd"] == "")){
        $msg = "<div class='alert alert-warning' role='alert'>fill password field</div>";
    }else{
        $_newpass= $_REQUEST["newpwd"];
        $a_email = $_SESSION["a_email"];
    
        $sql=" UPDATE admin SET admin_pass='{$_newpass}' WHERE admin_email='{$a_email}'";
        $result = mysqli_query($connect,$sql) or die("Query failed.");
        if($result == true){
            $msg = "<div class='alert alert-success' role='alert'>update successfully</div>";
        }
    
    }

  
}

?>
<!-- header part end -->
    <!-- heading section start  -->
  <!--  change password start  -->
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
                    <div class="row mt-3">
                        <div class="jumbotron m-auto">
                            <form action="<?php echo $_SERVER["PHP_SELF"];?>">

                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" value="<?php echo $a_email;?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="text" name="newpwd" class="form-control">
                                </div>
                                <div class="form-group">
                                   <input type="submit" value="update " name="updatebtn" class="btn btn-primary">
                                </div>
                                <?php if(isset($msg)){echo $msg;}?>
                            </form>
                        </div>
                    </div>
                 </div>
                 
                     
                 
              </div>
          </div>
      </div>
  </section>
  <!-- change password end  -->
<?php
include("footer.php");
?>