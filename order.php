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
					<h1>BILLING DETAILS</h1>
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
<table align="center">
					

<thead style="background-color: #fc3031; color: white; font-size: 23px;"><tr><th width="200">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th width="200">Name</th>
<th width="200">Order Date</th>
<th width="200">Price</th>
<th width="200">Quantity</th>
<th width="200">Total Amount</th>
<th width="200">Delivery Date</th>
<th></th>
<th></th></tr>
</thead>
<tbody>
					    <?php
					    	$uid=$_SESSION['id'];
                                            $query=$admin->ret("select * from `purchase_list` inner join `purchase` on purchase_list.O_ID=purchase.id inner join equipment on purchase_list.P_ID=equipment.eid where C_ID='$uid'")or die("wrong"); 	
                                           
                         
 while($row=$query->fetch(PDO::FETCH_ASSOC))
                        {?>
	<tr>

		<td style="color: black;"><img src="admin/Controller/<?php echo $row['image'];?>"></td>
		<td style="color: black;"><?php echo $row['ename'];?></td>
		<td style="color: black;"><?php echo $row['date'];?></td>
		<td style="color: black;"><?php echo $row['price'];?></td>
		<td style="color: black;"><?php echo $row['Del_Qty'];?></td>
		<td style="color: black;"><?php echo $row['ogrand_total'];?></td>
		<td style="color: black;"><?php echo date('Y-m-d',strtotime($row['date'].'+4 days'))?></td>
		<!-- <td><a href="time.php?id=<?php echo $row['course'];?>"><p class="btn btn-danger fa fa-eye"></p></td> -->

	</tr>

<?php } ?>
				</tbody>




				</table>			
							


                        <!--  -->

                           
                        </div>
                    </div>
	
                                </div>
                           
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
