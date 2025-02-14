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
			
			<!--end Top Bar-->
			<!--begin Navbar-->
			<?php include('nav.php');
$admin=new Admin();
$id=$_GET['id'];
$query=$admin->ret("select * from course  where cid='$id'");
$row=$query->fetch(PDO::FETCH_ASSOC);
 $name=$row['cname'];
 $gname=$row['guname'];
			?>
			<!--end Navbar-->
			<!--begin Title-->
			<div class="title title-club">
				<div class="container">
					<h1><?php echo $row['cname'];?></h1>
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
							<h2 style="color:black;font-weight: bold;"><?php echo $row['cname'];?></h2>
								<!-- <p><h4><strong><?php echo $row['gender'];?></strong></h4></p> -->
							<!-- <p><?php echo $row['discription'];?></p> -->
							<p><u><h3><strong>About Our Course</strong></h3></u></p><br>
						<table border="2">
							
<thead style="width:520px;background-color: red;color: white;"><tr><th width="200">COURSE NAME </th>
<th width="250">COURSE DURATION </th>
<th width="150">COURSE FEES </th></tr>
</thead>
<tbody><tr><td style="color:black;"><b><?php echo $row['cname'];?></b></td><td style="color:black;"><b><?php echo $row['duration'];?>Hours</b></td><td style="color:black;"><b><?php echo $row['cost'];?></b></td>
</tr></tbody>

						</table>
						<?php 
							$abc=$admin->ret("select gid from guide where gname='$gname'");
							$r=$abc->fetch(PDO::FETCH_ASSOC);?>
							<p><u><h3><strong>Trainer</strong></h3></u></p><br>
							<a href="single.php?id=<?php echo $r['gid'];?>"><span style="color: white;background-color: red;font-weight: bold;font-size: 23px"><b><?php echo $row['guname'];?></b></span></a>
							<br><br>
								<?php 


								if(!isset($_SESSION['id'])){?>
									<a href="login.php"><button class="btn btn-round btn-success" style="background-color:black;">LOGIN TO BOOK</button></center>
										<?php 

								}else{?>
								<center>
					<a href="bookfirst.php?tid=<?php echo $r['gid'];?>&cid=<?php echo $row['cid'];?>&total=<?php echo $row['cost'];?>"><button class="btn btn-round btn-success" style="background-color:black;">BOOK</button></center>
					<?php } ?>


						</div>
					</div>

					
								</div>
								
							</div>
						</div>
					
					</div>
					
			</article>
		
			<article>
				<div class="container">
					<!-- <h2>Testimonials</h2> -->
					
					
						
						
					<div class="text-center"><a href="course.php" class="btn btn-testimonials"><i class="fa fa-dropbox"></i>See all the Courses</a></div>
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
	<?php include('foot.php'); ?>
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
