<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online School</title>
    <!-- bootsrap links  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <!-- font awesome links  -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- google font links  -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <!-- tiny carousel css link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
    <!-- custom css link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- start navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <a class="navbar-brand pl-3" href="index.php">Online School</a>
  <span class="navbar-text">learn and impliment</span>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse ml-5" id="navbarNav">
    <ul class="navbar-nav custom-navbar">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="courses.php">Courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="paymentstatus.php">Payment status</a>
      </li>
      
      <?php
      session_start();
      if(isset($_SESSION["is_login"])){
        echo '
        <li class="nav-item">
        <a class="nav-link" href="student/studentprofile.php" tabindex="-1" aria-disabled="true">myprofile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">Logout</a>
      </li>
     
      ';
      }else{
        echo '<li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#user_registration" tabindex="-1" aria-disabled="true">Signup</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#" id="loginbtn" data-toggle="modal" data-target="#user_login"  tabindex="-1" aria-disabled="true">Log in</a>
    </li>
      
      ';
      }
      
      ?>
     
      
      <li class="nav-item">
        <a class="nav-link" href="#feedback" tabindex="-1" aria-disabled="true">Feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact-form" tabindex="-1" aria-disabled="true">Contact</a>
      </li>
    </ul>
  </div>
</nav>
    <!-- end navbar  -->