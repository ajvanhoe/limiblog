<?php
  require_once('../core/start.php');
  $user = new User();
  $user->checkLogin();

  if(!$user->isLoggedIn()) {
    Session::set('error', 'You need to login!');
    Redirect::to('../public/login.php');
  }
  
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Metatags -->
  <?php include('includes/metatags.php') ?>  

  <title>LimiBlog Admin - Dashboard</title>

  <!-- Styles -->
  <?php include('includes/styles.php') ?>    

</head>

<body id="page-top">

  <!-- Navbar -->
   <?php include('includes/navbar.php') ?>
  

  <div id="wrapper">

    <!-- Sidebar -->
   <?php include('includes/sidebar.php') ?>

    <div id="content-wrapper">
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>


  <!-- Poruke -->
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <?php 
        include('../includes/messages.php');
      ?>
    </div>
  </div>






      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php include('includes/footer.php') ?>    
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Javascript -->
  <?php include('includes/javascript.php') ?>


</body>

</html>
