<?php
if(!isset($_SESSION["a_login"])){
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <!-- bootsrap link  -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- font awesome link  -->
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <!-- google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
     <!-- custom style link  -->
     <link rel="stylesheet" href="../css/adminstyle.css">
</head>
<body>
    <!-- heading section start  -->
    <nav class="navbar p-1 shadow custom-nav"> 
        <a href="" class="navbar-brand pl-2 text-white font-weight-bold"><h2 style="display:inline-block">Elearning</h2> <small class="navbar-text">admin area</small></a>
        

    </nav>