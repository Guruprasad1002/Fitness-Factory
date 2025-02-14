<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from kickbox.coralixthemes.com/red/store.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 11:51:14 GMT -->
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
		<?php include('nav.php');
		$admin=new Admin();
		?>
			<!--end Navbar-->
			<!--begin Title-->
			<div class="title title-store">
				<div class="container">
					<h1>Store</h1>
				</div>
			</div>
			<!--end Title-->
		</header>
		<!--end Header-->
		<!--begin Content-->
		<section>
			<article>
				<div class="container">
				
					<div class="row">
						
						<div class="col-md-15">
							
							<div class="store-grid">
										<?php 
						
						$q=$admin->ret("SELECT * FROM `equipment`");
while($row=$q->fetch(PDO::FETCH_ASSOC)){?>
								<div class="store-item" style="margin: 12px;">
									<figure><img src="admin/Controller/<?php echo $row['image'] ?>" alt="//" style="width: 250px;height: 250px;"></figure>
									<figure><img src="admin/Controller/<?php echo $row['image'] ?>" alt="//"></figure>
									<div class="links"><a href="admin/Controller/cart.php?id=<?php echo $row['eid'] ?>" class="btn btn-store"><i class="fa fa-shopping-cart"></i>Add to Cart</a><a href="view.php?id=<?php echo $row['eid'] ?>" class="btn btn-store"><i class="fa fa-eye"></i>View Item</a></div>
									<div class="foot">
										<div class="price"><strong><?php echo $row['price'] ?></strong></div>
										<h4><?php echo $row['ename'] ?></h4>
										<!-- <h6>Men's Running</h6> -->
									</div>
								</div>
							<?php } ?>
								
							
						</div>
					</div>
				</div>
			</article>
			
		</section>
		<!--end Content-->
		<!--begin Footer-->
		
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
		<!--Custom Script-->
		<script src="js/script.js"></script>
	</body>

<!-- Mirrored from kickbox.coralixthemes.com/red/store.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 11:51:17 GMT -->
</html>
