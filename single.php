<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from kickbox.coralixthemes.com/red/club.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 11:51:13 GMT -->
<head>
		<meta charset="utf-8">
		<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
		<title>THE REAL PHYSIQUE</title>
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
			<div class="topbar">
				<div class="container">
					<p class="language"><a href="#">en</a><a href="#">es</a><a href="#">fr</a></p>
					<ul class="social">
						<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
						<li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" class="gplus"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>
					</ul>
					<ul class="top-menu">
						<li><a href="contact.html"><i class="fa fa-envelope-o"></i>Contact</a></li>
						<li><a href="#"><i class="fa fa-lock"></i>Login</a></li>
						<li><a href="#"><i class="fa fa-user"></i>Register</a></li>
					</ul>
				</div>
			</div>
			<!--end Top Bar-->
			<!--begin Navbar-->
			<?php include('nav.php');
$admin=new Admin();
$id=$_GET['id'];
$query=$admin->ret("select * from guide where gid='$id'");
$row=$query->fetch(PDO::FETCH_ASSOC);
 $name=$row['gname'];
			?>
			<!--end Navbar-->
			<!--begin Title-->
			<div class="title title-club">
				<div class="container">
					<h1><?php echo $row['gname'];?></h1>
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
						<div class="col-md-7">
							<div id="carousel-about" data-ride="carousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="item active"><img  src="admin/Controller/<?php echo $row['image'] ?>" style="width: 500px; height: 500px;" alt="//" ></div>
									<!-- <div class="item"><img src="img/about/club02.jpg" alt="//"></div> -->
									<!-- <div class="item"><img src="img/about/club03.jpg" alt="//"></div> -->
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<h2><?php echo $row['gname'];?></h2>
								<p><h4><strong><?php echo $row['gender'];?></strong></h4></p>
							<!-- <p><?php echo $row['discription'];?></p> -->
							<p><u><h2><strong>About Our Trainer</strong></h2></u></p>
							<p><?php echo $row['discription'];?></p>
						</div>
					</div>
					<div class="separator"></div>
					<div class="row">
						<div class="col-md-6">
							<h2>Experience</h2>
							<div id="accordion" class="panel-group">
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-minus-square-o"></i>Experience of our Trainer</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel-body">
											<div class="progress color2">
								&nbsp;&nbsp;&nbsp;<div role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%;" class="progress-bar"><span>&nbsp;&nbsp;&nbsp;<?php echo $row['experience'] ?>Years</span></div>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="fa fa-plus-square-o"></i>Schedule time</a></h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse ">
										<div class="panel-body">
											<p><?php echo $row['schedule'];?></p>
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">
										<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="fa fa-plus-square-o"></i>Popular with</a></h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse ">
									
										<div class="panel-body">
											<table border='2'>
												<thead style="background-color:maroon;color: white;">
													<tr><th>EVENT</th>
														<th>DURATION</th>
														<th>COST</th></tr>

												</thead>
												<tbody>	<?php
$as=$admin->ret("SELECT cname,cost,duration,image FROM course where guname='$name'");
while($re=$as->fetch(PDO::FETCH_ASSOC)){?>


	<tr><td><?php echo $re['cname'] ?></td>

<td><?php echo $re['duration'] ?>months</td>
<td>Rs.<?php echo $re['cost'] ?></td>
	</tr>
									<?php } ?>
</tbody>
											</table>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					
					</div>
					<div class="separator"></div>
				</div>
			</article>
		
			<article>
				<div class="container">
					<!-- <h2>Testimonials</h2> -->
					
					
						
						
					<div class="text-center"><a href="trainer.php" class="btn btn-testimonials"><i class="fa fa-male"></i>See all the trainers</a></div>
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
		<footer>
			<div class="offer">
				<div class="container">
					<h3>Enjoy 50% Off For All Classes</h3>
					<h4>Call us today for register - 0123-456-789</h4><a href="#" class="btn btn-offer"> <i class="fa fa-heart"></i>Join Now</a>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4 footer-about">
						<h4>About Us</h4>
						<figure><img src="img/company.png" alt="//"></figure>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, doloremque delectus eaque alias accusantium repellat.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, doloremque delectus eaque alias accusantium.</p>
					</div>
					<div class="col-md-4 footer-menu">
						<h4>Custom Menu</h4>
						<ul>
							<li><a href="#"><i class="fa fa-long-arrow-right"></i>Home</a></li>
							<li><a href="#"><i class="fa fa-long-arrow-right"></i>The Club</a></li>
							<li><a href="#"><i class="fa fa-long-arrow-right"></i>Trainers</a></li>
							<li><a href="#"><i class="fa fa-long-arrow-right"></i>Pricing</a></li>
							<li><a href="#"><i class="fa fa-long-arrow-right"></i>Classes</a></li>
							<li><a href="#"><i class="fa fa-long-arrow-right"></i>News</a></li>
							<li><a href="#"><i class="fa fa-long-arrow-right"></i>Membership</a></li>
							<li><a href="#"><i class="fa fa-long-arrow-right"></i>Contact</a></li>
						</ul>
					</div>
					<div class="col-md-4 opening-hours">
						<h4>Open Hours</h4>
						<ul>
							<li>
								<p>Monday</p>
								<p>09:30 AM</p>
								<p>07:30 PM</p>
							</li>
							<li>
								<p>Tuesday</p>
								<p>09:30 AM</p>
								<p>07:30 PM</p>
							</li>
							<li>
								<p>Wednesday</p>
								<p>09:30 AM</p>
								<p>07:30 PM</p>
							</li>
							<li>
								<p>Thursday</p>
								<p>09:30 AM</p>
								<p>07:30 PM</p>
							</li>
							<li>
								<p>Friday</p>
								<p>09:30 AM</p>
								<p>07:30 PM</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h4>Tweets</h4>
						<div id="tweet-feed" class="tweet-feed"></div>
					</div>
					<div class="col-md-4">
						<h4>We are social</h4>
						<ul class="social social-square">
							<li><a href="#" class="gplus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="container">
					<p class="top"><a href="#">Go to Top<i class="fa fa-long-arrow-up"></i></a></p>
					<p><p>© <a href="http://www.coralixthemes.com/">CoralixThemes</a> - Elite ThemeForest Author. <p> <p>
				</div>
			</div>
		</footer>
		<!--end Footer-->




		<!--********************************************************************-->
		<!--************************* Javascript Files *************************-->
		<script src="js/vendor/jquery.min.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>

		<!--Owl Carousel-->
		<script src="js/vendor/owl-carousel/owl.carousel.js"></script>
		<!--Twitter Feed-->
		<script src="js/vendor/twitter/jquery.tweet.min.js"></script>
		<!-- Easy Pie Chart-->
		<script src="js/vendor/jquery.easy-pie-chart.js"></script>
		<!--Custom Script-->
		<script src="js/script.js"></script>
	</body>

<!-- Mirrored from kickbox.coralixthemes.com/red/club.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 11:51:13 GMT -->
</html>
