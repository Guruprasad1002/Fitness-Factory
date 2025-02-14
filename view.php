<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from kickbox.coralixthemes.com/red/store-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 11:51:19 GMT -->
<head>
		<meta charset="utf-8">
		<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
		<title>REAL PHYSIQUE</title>
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
		<?php  include('nav.php');
		$admin=new Admin();?>
			<!--end Navbar-->
			<!--begin Title-->
			<div class="title title-store-single">
				<div class="container">
					<h1>Product</h1>
				</div>
			</div>
			<!--end Title-->
		</header>
		<!--end Header-->
		<!--begin Content-->
		<section align="center">
			<article>
				<div class="container" align="left">
					<!-- <h2>For Men | Jackets</h2> -->
					<div class="row">
						
						<div class="col-md-9">
							<!-- <div class="bars clearfix">
								<div class="prev-next"><a href="#">Prev</a>|<a href="#">Next</a></div>
								<ol class="breadcrumb">
									<li>Lited in Category: </li>
									<li><a href="#">Home</a></li>
									<li><a href="#">Library</a></li>
									<li class="active">Data</li>
								</ol>
							</div> -->
							<?php 
							$id=$_GET['id'];

$admin=new Admin();
						
						$q=$admin->ret("SELECT * FROM `equipment` where eid='$id'");
$row=$q->fetch(PDO::FETCH_ASSOC);

							?>
							<div class="store-single-picture">
								<figure><img id="img-single-store" src="admin/Controller/<?php echo $row['image'] ?>" data-zoom-image="admin/Controller/<?php echo $row['image'] ?>" alt="//" style="height: 500px;"></figure>
								<div id="owl-store-single" class="owl-store-single"><a href="#" data-image="admin/Controller/<?php echo $row['image'] ?>" data-zoom-image="admin/Controller/<?php echo $row['image'] ?>">
										</a>
								</div>
							</div>
							<div class="store-single-details">
								<h2><?php echo $row['ename'] ?></h2>
								<div class="price"><strong>Rs.<?php echo $row['price'] ?></strong>
									<!-- <del>$89.99</del> -->
								</div>
								<u><h4>Product Information</h4></u>
								<p><h3><?php echo $row['discription'] ?></h3></p>
								
								<!-- <form action="admin/Controller/cart.php"> -->
									
									
									<!-- <div class="form-group amount">
										<label for="store-item-amount" class="sr-only">Amount: </label>
										<input id="store-item-amount" type="number" value="1" class="form-control">
									</div>
 -->								<a href="admin/Controller/cart.php?id=<?php echo $row['eid'];?>">	<button class="btn btn-form"><i class="fa fa-shopping-cart"></i>Add to Cart</button></a>
									<div class="clearfix"></div>
								</form>
							
								
							</div>
							<div class="clearfix"></div>
							<div class="separator"></div>
							
							<div class="separator"></div>
							
						</div>
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
		<!-- Slider Range-->
		<script src="js/vendor/bootstrap-slider.js"></script>
		<!-- ElevateZoom 3.0.8-->
		<script src="js/vendor/jquery.elevateZoom.min.js"></script>
		<!-- fancyBox-->
		<script src="js/vendor/fancybox/jquery.fancybox.pack.js"></script>
		<!--Custom Script-->
		<script src="js/script.js"></script>
	</body>

<!-- Mirrored from kickbox.coralixthemes.com/red/store-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 11:51:19 GMT -->
</html>
