<?php
  require_once('../core/start.php');
  $user = new User();
  $user->checkLogin();

  if(!$user->isLoggedIn()) {
    Session::set('error', 'You need to login!');
    Redirect::to('../public/login.php');
  }

  $db = Database::connect();
  $categories = $db->query("SELECT * FROM categories")->results();
  

  if(Input::exists('post')) {

    // validacija podataka


    // upload fajla
    $target_dir = PUBLIC_DIR . '/img/uploads/';
    $img_name = time() . "-" . basename($_FILES["img"]["name"]);
    $target_file = $target_dir . $img_name;
    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

    // pripremanje areja za ubacivanje

    $fields = [
      null,
      Input::get('title'),
      Input::get('body'),
      $img_name,
      (int)Input::get('category'),
      $user->data()->id,
      date('Y-m-d H:i:s'), // created_at
      date('Y-m-d H:i:s')  // updated_at
    ];

    // insert
    if($db->insert('posts', $fields)) {
      Session::set('success', 'New post created!');
    } else {
      Session::set('error', 'Something went wrong!');
    }

    // redirekt
    Redirect::to('index.php');

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
          <li class="breadcrumb-item active">New Post</li>
        </ol>


  <!-- Poruke -->
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <?php 
        include('../includes/messages.php');
      ?>
    </div>
  </div>


  <div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
          <h5 class="card-header">Create new post</h5>
          <div class="card-body">


            <form action="create.php" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
                <small class="form-text text-muted">Post title.</small>
              </div>
              
              <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" rows="3"></textarea>
              </div>

               <div class="form-group">
                  <label for="image">Post image</label>
                  <input type="file" class="form-control-file" name="img">
               </div>

               <div class="form-group">
                <label for="category">Post Category</label>
                <select class="form-control" name="category">
                  <?php

                    if(isset($categories)) {
                      foreach ($categories as $category) {
                        echo "<option value=\"{$category->id}\">{$category->title}</option>";
                      }
                    }
                  ?>
                 
                </select>
              </div>

              <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>


            

          </div>
        </div>

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
