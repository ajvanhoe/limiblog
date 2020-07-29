<?php
  require_once('../core/start.php');
  $db = Database::connect();
  $categories = $db->query("SELECT * FROM categories")->results();

  if(Input::exists('get')) {

      $selected_category = $db->find('categories', 'title', Input::get('category'))->first();
  }  

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
    
    <!-- Navbar -->
    <?php  
      include('../includes/navbar.php');
    ?>

    <!-- Banner -->
    <section class="main-banner">
      <div class="container">
        <div class="banner-text">
          <h1>
            <?php
              echo (isset($selected_category)) ? $selected_category->title : 'Categories';
            ?>
          </h1>
          <p><?php echo $selected_category->description; ?></p>
        </div>
      </div>
    </section>
    <!-- end main banner -->

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