<?php
  require_once('../core/start.php');
  $user = new User();
  $user->checkLogin();

  if(!$user->isLoggedIn()) {
    Session::set('error', 'You need to login!');
    Redirect::to('../public/login.php');
  }
  
  $db = Database::connect();
  $posts = $db->query("SELECT * FROM posts ORDER BY created_at DESC LIMIT 5")->results();


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

      <h2 class="mb-5">Latest posts</h2>

      <?php 
        include('../includes/messages.php');
      ?>
    </div>
  </div>




<?php 

if(isset($posts)) {
  foreach ($posts as $post) {

  $img = (isset($post->img)) ? '../public/img/uploads/'.$post->img : 'https://via.placeholder.com/150';

  $html = "";
  $html .=  '<div class="row justify-content-center my-2">';
  $html .= '<div class="col-md-6">';
  $html .= '<div class="card">';
  $html .= '<img src="'. $img .'" class="card-img-top" alt="not found">';
  $html .= '<div class="card-body">';
  $html .= '<h5 class="card-title">'.$post->title .'</h5>';
  $html .= '<p class="card-text">'.$post->body.'</p>';

  if($user->data()->id == (int)$post->user_id) {
    $html .= '<a href="edit.php?post='.(int)$post->id.'" class="btn btn-info mr-3">Edit</a>';
    $html .= '<a href="delete.php?post='.(int)$post->id.'" class="btn btn-danger">Delete</a>';   
  }
  $html .= '</div></div></div></div>';       
        
   echo $html;



    
  }
}
     


?>





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
