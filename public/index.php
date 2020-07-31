<?php
  require_once('../core/start.php');
  $db = Database::connect();
  $categories = $db->query("SELECT * FROM categories")->results();

  // dodati Post klasu
  $blogs = $db->query("SELECT * FROM posts WHERE category_id = 2 ORDER BY created_at DESC LIMIT 2")->results();
  $events = $db->query("SELECT * FROM posts WHERE category_id = 1 ORDER BY created_at LIMIT 3")->results();

  $user = new User();
  $user->checkLogin();

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limi Bloger</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/animation.css">
  </head>
  <body>
    
    <?php  
      include('../includes/navbar.php');
    ?>

    <section class="main-banner">
      <div class="container">
        <div class="banner-text">
          <h1>Limi Blog</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus sodales eros facilisis consectetur vel quis nibh. Suspendisse dictum, risus sed malesuada euismod, lectus justo elementum risus.</p>
        </div>
      </div>
    </section>
    <!-- end main banner -->

    <section class="container">
      <div class="box-wrapper">
      </div>
    </section>
    <!-- end box wrapper -->

    <section class="container">


      <h1 class="title">Upcoming events</h1>
      <div class="box-wrapper events">


      <?php 

        if(isset($events)) {

        foreach ($events as $event) {
       
        $img = './img/uploads/' . $event->img;
        $box = '<div class="box">
          <img src="'.$img.'" alt="" class="event-img">
          <h3>
            <a href="posts.php?post='.$event->id.' ">' . $event->title .              
            '</a>
          </h3>
          
          <p>'.get_first_sentence($event->body).'</p>
        </div>';
        echo $box;

          }
        }

      ?>

      </div>
    </section>
    <!-- end box events -->



    <section class="container">

      <h1 class="title">Latest blog</h1>

      <div class="box-wrapper blog">

        <?php

          if(isset($blogs)) {

              foreach ($blogs as $blog) {

              $blog_img = './img/uploads/' . $blog->img;
              $blog_box = '<div class="box">
                        <img src="'.$blog_img.'" alt="">
                          <h3>  
                            <a href="posts.php?post='.$blog->id.'">'.$blog->title.'</a>
                          </h3>   
                        
                        <p>'.get_first_sentence($blog->body).'</p>
                      </div>';                

              echo $blog_box;                      
               } 
          }

        ?>
        
      </div>
      <div class="blog-button">
        <a href="posts.php">see more</a>
      </div>
    </section>
    <!-- end blog -->

    <section class="subscribe" id="subscribe">
      <div class="container">
        <div class="subscribe-content">
          <h2>Subscribe for Updates</h2>
          <form method="POST" action="subscribe.php">
            <input type="text" name="email" id="subscribe" placeholder="Email">
            <input type="submit" value="Subscribe">
          </form>

          <?php 
            if(Session::exists('message')) {
              echo Session::msg('message');
            }
          ?>
          
        </div>
      </div>
    </section>
    <!-- end subscribe -->


    
    <?php include('../includes/footer.php'); ?>
    <!-- end footer -->

    <script
      src="https://code.jquery.com/jquery-3.5.0.min.js"
      integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
      crossorigin="anonymous">
    </script>
    <script>
      $( document ).ready(function() {
        
        $('.burger').on("click", function() {
          $('.nav-bar').slideToggle();
        });
        
        // start animation
        $(window).scroll(function() {
          if ( $(document).scrollTop() > 100 ) {
            $('.box').addClass('animation');
          }
        });
        
      }); 
    </script>

  </body>
</html>