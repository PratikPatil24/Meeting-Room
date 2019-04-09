<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Meeting Room</title>
  
  
  
  	<link rel="stylesheet" href="css/user_menu.css">

 	<link rel="stylesheet" href="css/user_card.css">

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Main css -->
	<link rel="stylesheet" href="css/style.css">

  <script src="js/ajax_hall.js"></script>
	<!-- Google Font -->
	<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>

</head>

<body>


<?php

// Initialize the session

session_start();

 

// If session variable is not set it will redirect to login page

if(!isset($_SESSION['ID']) || empty($_SESSION['ID'])){

  header("location: login.php");

  exit;

}

  // echo $_SESSION['ID'];

?>



<div class="navbar navbar-fixed-top custom-navbar" role="navigation" >
  <div class="container" >

    <!-- navbar header -->
    <div class="navbar-header">
      <a href="#" class="navbar-brand"><img src="css/logo-v7.png" alt="Logo" class="main_logo"></a>
    </div>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="index.php" class="smoothScroll">Home</a></li>
        <li><a href="user_menu.php" class="smoothScroll">Admin Panel</a></li>
        <li><a href="user_menu.php" class="smoothScroll">User Panel</a></li>
      </ul>

  </div>
</div>


  <!-- Navigation -->
<div id="menu">
<nav id="slide-menu">
	<div id="profile">
		<img src="images/profile.png" alt="profile">
	</div>
	<ul>
		<li class="timeline"><a href="/Website/user_menu.php">Dashboard</a></li>
		<li class="events"><a href="project.php">Book Meeting Room</a></li>
		<li class="calendar">Show Status</li>
		<li class="logout"><a href="./Login_Stud/logout.php?hello=true" onclick="logout()">Logout</a></li>
	</ul>
</nav>
</div>
<!-- Content panel -->
<div id="content">
	<div class="menu-trigger"></div>
	<div class="User_Intro">
  <div class="intro">
    <p style="color:#000000">
      <?php include 'database.php'?>
      <?php


        if(!isset($_SESSION['ID']) || empty($_SESSION['ID'])){

        header("location: login.php");

        exit;

      }

      $sql = $connect->prepare("SELECT name from student_details where ID = ?");
      $sql->bind_param("s",$id);

      $id = $_SESSION['ID'];
      $sql->execute();

      $sql->bind_result($result);
      $sql->fetch();

      if($result)
      {
        
          echo "Welcome ".$result;
      }

      
      else
      {
        echo "Not Found";
      }

    ?>

    </p>
     
  </div>
</div>

<div class="card_main">
  <div class="grid_card">
  <div class="card">
  <img src="images/notify.png" alt="Avatar" style="width:100%" >
  <div class="container">
    <b><a href="/Website/Dashboard/notifications_stud.php" >Notifications</a></b> 
  </div>
</div>

<div class="card" style="border-color: #8BC34A;">
  <img src="images/notify2.png" alt="Avatar" style="width:100%">
  <div class="container">
    <b style="color: #8BC34A;"><a href="/Website/Dashboard/pending_stud.php" >Pending</a></b> 
  </div>
</div>

<div class="card" style="border-color: #FFC107;">
  <img src="images/notify3.png" alt="Avatar" style="width:100%">
  <div class="container">
    <b style="color: #FFC107;"><a href="/Website/Dashboard/status_stud.php" >Status</a></b> 
  </div>
</div>
</div>
</div>

</div>
  

<script src="js/menu.js"></script>

</body>
</html>
