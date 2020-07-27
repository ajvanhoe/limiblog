<?php
  require_once('../core/start.php');
  $db = Database::connect();
  $categories = $db->query("SELECT * FROM categories")->results();

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
        <div class="box">
          <img src="./img/event/1.jpg" alt="">
          <h3>
            <a href="javascript:;">
              Rihanna, Eminem on stage
            </a>
          </h3>
          <span>Lorem ipsum dolor sit amet</span>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

        </div>

        <div class="box">
          <img src="./img/event/2.jpg" alt="">
          <h3>
            <a href="javascript:;">
              Rihanna, Eminem on stage
            </a> 
          </h3>
          <span>Lorem ipsum dolor sit amet</span>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>

        <div class="box">
          <img src="./img/event/3.jpg" alt="">
          <h3>
            <a href="javascript:;">
              Rihanna, Eminem on stage
            </a>
          </h3>
          <span>Lorem ipsum dolor sit amet</span>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
    </section>
    <!-- end box events -->

    <section class="container">
      <h1 class="title">Latest blog</h1>
      <div class="box-wrapper blog">
        <div class="box">
          <img src="./img/blog/1.jpg" alt="">
            <h3>  
              <a href="javascript:;">
                Rihanna, Eminem on stage
              </a>
            </h3>   
          <span>Lorem ipsum dolor sit amet</span>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>

        <div class="box">
          <img src="./img/blog/2.jpg" alt="">
          <h3>
            <a href="javascript:;">
              Rihanna, Eminem on stage
            </a>
          </h3>
          <span>Lorem ipsum dolor sit amet</span>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="blog-button">
        <a href="#">see more</a>
      </div>
    </section>
    <!-- end blog -->

    <section class="subscribe">
      <div class="container">
        <div class="subscribe-content">
          <h2>Subscribe for Updates</h2>
          <form method="POST" action="subscribe.php">
            <input type="text" name="email" id="subscribe" placeholder="Email">
            <input type="submit" value="Subscribe">
          </form>
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