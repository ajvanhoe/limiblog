<?php
  require_once('../core/start.php');
  $db = Database::connect();
  $categories = $db->query("SELECT * FROM categories")->results();

  if(Input::exists('get')) {

    $selected_post = $db->find('posts', 'id', Input::get('post'))->first();
    $author = $db->find('users', 'id', $selected_post->user_id)->first();

    // $sql = "SELECT posts.id, posts.title, posts.body, posts.img, posts.created_at, users.username FROM posts JOIN users ON posts.user_id = users.id WHERE posts.id = ?";
    // $selected_post = $db->query($sql, Input::get('post'))->first();

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
    <?php $post_banner = './img/uploads/'. $selected_post->img  ?>
    <section class="post-banner" style="background-image: url('<?php echo $post_banner; ?>');">
      <div class="container">
        <div class="banner-text">
          <h1><?php  echo $selected_post->title;    ?></h1>
         
        </div>
      </div>
    </section>
    <!-- end main banner -->




    <section class="post-container">

      <div class="post-body">
        
        <?php  echo $selected_post->body;
        echo "<br>";
        echo $author->username; 
        
        ?>

      </div>


    </section>





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