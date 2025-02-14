<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from kickbox.coralixthemes.com/red/store-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 11:51:19 GMT -->
<head>
		<meta charset="utf-8">
		<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
		<title>Product - Fitness Center</title>
		<meta name="description" content="This is the site description.">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="icon" type="image/png" href="apple-touch-icon-precomposed.png">
		<!--[if IE]><link rel="shortcut icon" href="favicon.ico" /><![endif]-->
		<!--********************  CSS  ********************-->

		<!--Font: Google Font-->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300%7C">

		<!--Owl Carousel-->
		<link rel="stylesheet" href="js/vendor/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="js/vendor/owl-carousel/owl.theme.css">
		<!-- fancyBox-->
		<link rel="stylesheet" href="js/vendor/fancybox/jquery.fancybox.css">
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
		<?php  include('nav.php');?>
			<!--end Navbar-->
			<!--begin Title-->
			<div class="title title-store-single">
				<div class="container">
					<h1>COURSES</h1>
				</div>
			</div>
			<!--end Title-->
		</header>
		<!--end Header-->
		<!--begin Content-->
		


	<section>
			<article class="classes-gallery">
				<div class="container">
					<h2>COURSES</h2>
					<!-- <div class="filters"><a href="trainer.php?id=" data-filter="*" class="btn btn-filters active">All</a><a href="#" data-filter=".retro" class="btn btn-filters">Retro Yoga</a><a href="#" data-filter=".indoor" class="btn btn-filters">Indoor Cycling</a><a href="#" data-filter=".crossfit" class="btn btn-filters">Crossfit</a><a href="#" data-filter=".pilates" class="btn btn-filters">Pilates</a><a href="#" data-filter=".bachata" class="btn btn-filters">Bachata</a></div> -->
					<div class="row">
					    <?php
                                            $query=$admin->ret("select * from `course`");
                                           
                         
 while($row=$query->fetch(PDO::FETCH_ASSOC))
                        {?>
				<div class="col-md-4">
						<a href="coursesingle.php?id=<?php echo $row['cid'];?>" class="retro">
							<figure class="image-over"><img  src="admin/Controller/<?php echo $row['image'] ?>" alt="//" style="width: 250px; height: 350px;">
								<figcaption>
									<p><?php echo $row['cname'];?></p>
								</figcaption>
							</figure></a>
				</div>


<?php } ?>
							
							
					</div>
				</div>
			</article>
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
		<!-- Isotope-->
		<script src="js/vendor/isotope.pkgd.min.js"></script>
		<!--Custom Script-->
		<script src="js/script.js"></script>
	</body>

<!-- Mirrored from kickbox.coralixthemes.com/red/classes.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 11:51:12 GMT -->
</html>
