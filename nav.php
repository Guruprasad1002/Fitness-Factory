<?php 

include('config.php');
$admin=new Admin();
if(isset($_SESSION['id'])){
$id=$_SESSION['id'];


}
?>


  <nav role="navigation" class="navbar">
        <div class="container">
          <!--Brand and toggle get grouped for better mobile display-->
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="#" class="navbar-brand"><h2 style="font-weight: 50px;color: black;font-family: cabrin;">PHYSIQUE</h2>
         </a>
          </div>
          <!--Collect the nav links, forms, and other content for toggling-->
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav menu-effect">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="course.php">Courses</a></li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Trainers<i class="fa fa-angle-down"></i></a>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="trainer.php">All Trainers</a></li>
                  <!-- <li><a href="trainers-single.html">Single Trainers</a></li> -->
                </ul>
              </li>
              <!-- <li><a href="club.html">Club</a></li> -->
              <li><a href="store.php">Store</a></li>
             <!--  <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages<i class="fa fa-angle-down"></i></a>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="classes-single.html">Classes Single</a></li>
                  <li><a href="store-single.html">Store Single</a></li>
                  <li><a href="news-single.html">Blog Single</a></li>
                  <li><a href="events.html">Events</a></li>
                  <li><a href="events-single.html">Events Single</a></li>
                  <li><a href="timetable.html">Timetable</a></li>
                  <li><a href="membership.html">Membership</a></li>
                  <li><a href="error-404.html">Error 404</a></li>
                </ul>
              </li> -->

                                              <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Bookings<i class="fa fa-angle-down"></i></a>
   <ul role="menu" class="dropdown-menu">

              <?php 

                                            if (isset($_SESSION['id'])) {?>

              <li><a href="yourbook.php">Bookings</a></li>
              <li><a href="order.php">Track your Order</a></li>

            <?php } ?>
          </ul></li>
              <?php if(!isset($_SESSION['id'])){?>
              <li><a href="login.php">login</a></li>
            <?php } else {?>
              <li><a href="logout.php">logout</a></li>
              <li><a href="feedback.php">Feedback</a></li>
            <?php } ?>
            <li></li>
            <li></li>
             <?php
                                            if (!isset($_SESSION['id'])) {?>

                                              <li>  <a href="login.php">Cart</a></li>
                                               
                                                    

                                      <?php }else{?>
          <?php $rt=$admin->ret("select * from cart where cusid='$id'");
          $num=$rt->rowCount();
          if($num==0){?>
            <h1>CART IS EMPTY</h1>
          <?php } ?>
          
            
         <li> <a href="cart.php">Cart</a></li>
           

   


      

        

                                                <!-- <span class="number-cart"> -->

          <?php  }?>
                                                <!-- </span> -->
                                            <!-- </a>  -->

            </ul>
          </div>
        </div>
      </nav>