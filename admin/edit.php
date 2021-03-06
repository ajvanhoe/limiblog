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


  if(Input::exists('get')) {

    $post_id = Input::get('post'); // odnosi se na vrednost dobijenu iz linka putem GET metoda
    $post = $db->find('posts', 'id', $post_id)->first();

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
          <li class="breadcrumb-item active">Edit Post</li>
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
          <h5 class="card-header">Edit post</h5>
          <div class="card-body">


            <form action="update.php" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" value="<?php echo $post->title; ?>" class="form-control" id="title" name="title">
                <small class="form-text text-muted">Post title.</small>
              </div>
              
              <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" rows="3"><?php echo $post->body; ?></textarea>
              </div>

              <?php 
                if(!$post->img) {

                  echo '<div class="form-group">
                        <label for="image">Post image</label>
                        <input type="file" class="form-control-file" name="img">
                        </div>';
                }
              ?>
              

               <div class="form-group">
                <label for="category">Post Category</label>
                <select class="form-control" name="category">
                  <?php

                    if(isset($categories)) {
                      foreach ($categories as $category) {
                        if($category->id == $post->category_id) { 
                          echo "<option value=\"{$category->id}\" selected>{$category->title}</option>";
                        } else {
                          echo "<option value=\"{$category->id}\">{$category->title}</option>";  
                        }
                        
                      }
                    }
                  ?>
                 
                </select>
              </div>

              <input type="hidden" name="id" value="<?php echo $post_id ?>">

              <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>

            <hr class="my-5">

            <?php 
              if($post->img) {
            ?>

              <form method="POST" action="removeimg.php">

              <div class="form-group">
                <?php  $img = (isset($post->img)) ? '../public/img/uploads/'.$post->img : 'https://via.placeholder.com/150'; ?>
                  <img src="<?php echo $img; ?>" style="height:200px;width:250px;">
              </div>

              <input type="hidden" name="id" value="<?php echo $post_id ?>">
              <button type="submit" class="btn btn-danger">Remove</button>
              

            </form>

            <?php 
              }
            ?>

          


            

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
