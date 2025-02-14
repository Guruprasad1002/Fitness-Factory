<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from kickbox.coralixthemes.com/red/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 11:50:49 GMT -->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <title>FITNESS MANTRA</title>
    <meta name="description" content="Stark Fitness Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/png" href="apple-touch-icon-precomposed.png">
    <!--[if IE]><link rel="shortcut icon" href="favicon.ico" /><![endif]-->

    <!--********************  CSS  ********************-->
    <!--Font: Google Font-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300%7C">

    <!--Owl Carousel-->
    <link rel="stylesheet" href="js/vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="js/vendor/owl-carousel/owl.theme.css">
    <!--Slider Revolution-->
    <link rel="stylesheet" href="js/vendor/revolution/css/settings.css">

    <!--Custom CSS-->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/colors/red.css">

    <!--Modernizr-->
    <script src="js/vendor/modernizr.min.js"></script>
  </head>
  <body>

    <header>
      <!--begin Top Bar-->
     
      <!--end Top Bar-->
      <!--begin Navbar-->
    <?php 
include('nav.php');
    ?>
      <!--end Navbar-->
    </header>
    <!--end Header-->
    <!--begin Slider-->
    <div class="bannercontainer">
      <div id="slider-revolution" class="banner">
       <center><h1 style="background-color:red">We keep you fit</h1></center> 
        <ul>
         <img src="back/12.jpg" alt="//">
            <div data-x="right" data-y="0" data-speed="1000" data-start="1000" data-easing="easeOutBack" class="lfr">
              <!-- <p>Workout Routine for Beginners</p><a href="">Pick up a Class<i class="fa fa-arrow-right"></i></a> -->
            </div>
          </li>
         
        
        </ul>
      </div>
    </div>
    <!--end Slider-->
    <!--begin Content-->
    <section>
      <!--begin Features-->
      <article>
        <div class="container">
          <div class="row">
            <div data-animation="pulse" class="col-sm-6 col-md-4 animated">
              <div class="features-item"><i class="fa fa-certificate"></i>
                <h5>Monthly Competetions</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus deleniti praesentium, modi. Laudantium consequatur placeat ut cupiditate id.</p><a href="#" class="read">Read more</a>
              </div>
            </div>
            <div data-animation="pulse" class="col-sm-6 col-md-4 animated">
              <div class="features-item"><i class="fa fa-gift"></i>
                <h5>Fun and work out</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus deleniti praesentium, modi. Laudantium consequatur placeat ut cupiditate id.</p><a href="#" class="read">Read more</a>
              </div>
            </div>
            <div data-animation="pulse" class="col-sm-12 col-md-4 animated">
              <div class="features-item"><i class="fa fa-shield"></i>
                <h5>Crossfit Team</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus deleniti praesentium, modi. Laudantium consequatur placeat ut cupiditate id.</p><a href="#" class="read">Read more</a>
              </div>
            </div>
          </div>
        </div>
      </article>
      <!--end Features-->
      <!--begin Home New Classes-->
      <article class="home-new-classes">
        <div class="container">
          <h3 class="title-icon">OUR TRAINERS<i class="fa fa-shield"></i></h3>
          <div id="owl-classes" data-animation="bounceIn" data-animation-delay="400" class="classes-carousel animated">
                <?php
                                            $query=$admin->ret("select * from `guide`");
                                           
                         
 while($row=$query->fetch(PDO::FETCH_ASSOC))
                        {?>
            <figure class="owl-classes-item image-over"><img src="admin/Controller/<?php echo $row['image'] ?>" alt="//" style="width: 250px; height: 350px;"><a href="#"></a>
              <figcaption>
                <p><?php echo $row['gname'];?></p>
              </figcaption>
            </figure>
          <?php } ?>
         <!--    <figure class="owl-classes-item image-over"><img src="back/4.jpg" alt="//"><a href="#"></a>
              <figcaption>
                <p>Pilates</p>
              </figcaption>
            </figure> -->
           <!--  <figure class="owl-classes-item image-over"><img src="back/5.jpg" alt="//"><a href="#"></a>
              <figcaption>
                <p>Pilates</p>
              </figcaption>
            </figure> -->
           <!--  <figure class="owl-classes-item image-over"><img src="back/6.jpg" alt="//"><a href="#"></a>
              <figcaption>
                <p>Pilates</p>
              </figcaption>
            </figure> -->
           <!--  <figure class="owl-classes-item image-over"><img src="back/7.jpg" alt="//"><a href="#"></a>
              <figcaption>
                <p>Pilates</p>
              </figcaption>
            </figure> -->
          <!--   <figure class="owl-classes-item image-over"><img src="back/8.jpg" alt="//"><a href="#"></a>
              <figcaption>
                <p>Pilates</p>
              </figcaption>
            </figure> -->
           <!--  <figure class="owl-classes-item image-over"><img src="back/12.jpg" alt="//"><a href="#"></a>
              <figcaption>
                <p>Pilates</p>
              </figcaption>
            </figure> -->
           <!--  <figure class="owl-classes-item image-over"><img src="back/10.jpg" alt="//"><a href="#"></a>
              <figcaption>
                <p>Pilates</p>
              </figcaption>
            </figure> -->
            <!-- <figure class="owl-classes-item image-over"><img src="img/classes/class02.jpg" alt="//"><a href="#"></a>
              <figcaption>
                <p>Pilates</p>
              </figcaption>
            </figure> -->
          </div>
        </div>
      </article>
      <!--end Home New Classes-->
      <!--begin Timetable-->
     
      <!--end Timetable-->
      <!--begin bgVideo-->
     
      <!--end bgVideo-->

      <!--begin Pricong Tables-->
    
      <!--end Pricong Tables-->
      <div class="partners">
        <div class="container">
          <div id="owl-partners"><a href="#">
              <figure class="partners-item"><img src="img/partners/partners01.jpg" alt="//"></figure></a><a href="#">
              <figure class="partners-item"><img src="img/partners/partners02.jpg" alt="//"></figure></a><a href="#">
              <figure class="partners-item"><img src="img/partners/partners03.jpg" alt="//"></figure></a><a href="#">
              <figure class="partners-item"><img src="img/partners/partners04.jpg" alt="//"></figure></a><a href="#">
              <figure class="partners-item"><img src="img/partners/partners05.jpg" alt="//"></figure></a><a href="#">
              <figure class="partners-item"><img src="img/partners/partners06.jpg" alt="//"></figure></a><a href="#">
              <figure class="partners-item"><img src="img/partners/partners04.jpg" alt="//"></figure></a><a href="#">
              <figure class="partners-item"><img src="img/partners/partners05.jpg" alt="//"></figure></a><a href="#">
              <figure class="partners-item"><img src="img/partners/partners02.jpg" alt="//"></figure></a>
          </div>
        </div>
      </div>
    </section>
    <!--end Content-->
    <!--begin Footer-->
  <?php include('foot.php');?>
    <!--end Footer-->




    <!--********************************************************************-->
    <!--************************* Javascript Files *************************-->
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>

    <!--Owl Carousel-->
    <script src="js/vendor/owl-carousel/owl.carousel.js"></script>
    <!--Twitter Feed-->
    <script src="js/vendor/twitter/jquery.tweet.min.js"></script>
    <!-- Slider Revolution-->
    <script src="js/vendor/revolution/js/jquery.themepunch.plugins.min.js"></script>
    <script src="js/vendor/revolution/js/jquery.themepunch.tools.min.html"></script>
    <script src="js/vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- jQuery Appear-->
    <script src="js/vendor/jquery.appear.js"></script>
    <!--Custom Script-->
    <script src="js/script.js"></script>
  </body>

<!-- Mirrored from kickbox.coralixthemes.com/red/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 11:50:49 GMT -->
</html>
