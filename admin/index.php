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


        <div class="card">
          <h5 class="card-header">Featured</h5>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
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
