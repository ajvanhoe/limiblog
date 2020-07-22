<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloger</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/animation.css">
  </head>
  <body>
    
    <?php  
      include('includes/navbar.php');
    ?>

    <section class="main-banner">
      <div class="container">
        <div class="banner-text">
          <h1>i am banner heading for this page</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus sodales eros facilisis consectetur vel quis nibh. Suspendisse dictum, risus sed malesuada euismod, lectus justo elementum risus.</p>
        </div>
      </div>
    </section>
    <!-- end main banner -->

    <section class="container">
      <div class="box-wrapper">
        <div class="box">
          <h2>Focus on Systems</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <div>
            <a href="javascript:;">read more</a>
          </div>
        </div>

        <div class="box">
          <h2>Plan of Action</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <div>
            <a href="javascript:;">read more</a>
          </div>
        </div>

        <div class="box">
          <h2>Quality Compliance</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <div>
            <a href="javascript:;">read more</a>
          </div>
        </div>
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
          <h2>Subscribe Hero for Updates</h2>
          <form accept="#">
            <input type="text" name="subscribe" id="subscribe" placeholder="Email">
            <input type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </section>
    <!-- end subscribe -->

    <section class="container">
      <h1 class="title">Executing team</h1>
      <div class="box-wrapper team">
        <div class="box">
          <img src="./img/team/1.jpg" alt="">
          <h3>
            <a href="#">
              Adam Miser
            </a>
          </h3>
          <span>CEO</span>
          <div>
            <a href="#">
              mail@mail.com
            </a>  
          </div>
        </div>
        <!-- end box -->

        <div class="box">
          <img src="./img/team/2.jpg" alt="">
          <h3>
            <a href="#">
              Adam Miser
            </a>
          </h3>
          <span>CEO</span>
          <div>
            <a href="#">
              mail@mail.com
            </a>  
          </div>
        </div>
        <!-- end box -->

        <div class="box">
          <img src="./img/team/1.jpg" alt="">
          <h3>
            <a href="#">
              Adam Miser
            </a>
          </h3>
          <span>CEO</span>
          <div>
            <a href="#">
              mail@mail.com
            </a>  
          </div>
        </div>
        <!-- end box -->

        <div class="box">
          <img src="./img/team/2.jpg" alt="">
          <h3>
            <a href="#">
              Adam Miser
            </a>
          </h3>
          <span>CEO</span>
          <div>
            <a href="#">
              mail@mail.com
            </a>  
          </div>
        </div>
        <!-- end box -->

      </div>
    </section>
    <!-- end team -->

    <footer class="footer-wrapper">
      <div class="container">
        <div class="footer">
          <ul class="nav-list">
            <li>
              <a href="#">
                Home
              </a>
            </li>

            <li>
              <a href="#">
                About
              </a>
            </li>

            <li>
              <a href="#">
                Contact
              </a>
            </li>
          </ul>
          <!-- end nav list -->

          <ul class="social-list">
            <li>
              <a href="#">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-facebook-f fa-w-10 fa-3x"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" class=""></path></svg>
              </a>
            </li>
            <li>
              <a href="#">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-linkedin-in fa-w-14 fa-9x"><path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" class=""></path></svg>
              </a>
            </li>
            <li>
              <a href="#">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-facebook-f fa-w-10 fa-3x"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" class=""></path></svg>
              </a>
            </li>
          </ul>
          <!-- end social list -->
          <p class="legal">Copyright &copy;, all right reserved.</p>
        </div>
      </div>
    </footer>
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