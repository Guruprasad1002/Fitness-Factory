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
		?>
			<!--end Navbar-->
			<!--begin Title-->
			<div class="title title-store">
				<div class="container">
					<h1>Cart</h1>
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
						
						<table  class="shop_table shop_table_responsive">
							
 <thead style="border:red 2px solid; background: red; color:white">
                                        <tr>
                                            <th width="300" > &nbsp;</th>
                                            <th class="product-thumbnail"width="300">&nbsp;</th>
                                            <th class="product-name"width="300">Product</th>
                                            <th class="product-price"width="300">Price</th>
                                            <th class="product-quantity"width="300">Quantity</th>
                                            <th class="product-quantity"></th>
                                            <th class="product-quantity"></th>
                                            <th class="product-subtotal"width="300">Total</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                        <?php 
    $sum=0;

                                        $id=$_SESSION['id'];
$admin=new Admin();
                                        $a=$admin->ret("select * from `cart` INNER JOIN `equipment` ON cart.`pid`=equipment.`eid` where `cusid`='$id'");
while($row=$a->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a href="#"  class="btn btn-dark" onclick="delete1(<?php echo $row['eid'] ?>)"><i class="fa fa-trash"></i></a>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a href="product-details.html">
                                                    <img class="img-fluid" src="admin/Controller/<?php echo $row['image'] ?>"  style="width: 50px;height: 50px;border-radius: 50%;" alt="product-img">
                                                </a>
                                            </td>
                                            <td class="product-name" data-title="Product">
                                                <a href="product-details.html"><?php echo $row['ename'];?> </a>
                                            </td>
                                            <td class="product-price" data-title="Price">
                                                <span class="Price-amount">
                                                    <span class="Price-currencySymbol">Rs.</span><?php echo $row['price'];?> 
                                                </span>
                                            </td>
                                             <td class="product-quantity">
                                            <span class="quantity buttons_added">
                                                <?php if ($row['cquantity'] > 1) { ?>
                                                    <input onclick="decrement(<?php echo $row['cid']; ?>)" type="button" value="-" class="minus" class="btn btn-dark">
                                                <?php } ?>
                                                <?php echo $row['cquantity'] ?> <!-- showing quantity-->

                                                <?php if($row['cquantity']>0 && $row['qty']>1){?>
                                                <input onclick="increment(<?php echo $row['cid']; ?>)" type="button" value="+" class="plus">
                                                <?php } ?>


                                            </span>
                                        </td>

                                        <!-- remove item -->
                                        <!-- <td class="product-remove"><input onclick="remove(<?php echo $row['cid']; ?>)" type="button" value="x" ></td> -->
                                        <td class="product-remove"><a onclick="remove(<?php echo $row['cid']; ?>,  <?php echo $row['cquantity'] ?>,<?php echo $row['eid'] ?>,<?php echo $row['qty'] ?>)"></a></td>
                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity">
                                                </div>
                                            </td>
                                            <td class="product-subtotal" data-title="Total">
                                                <span class="Price-amount">
                                                    <span class="Price-currencySymbol">Rs</span>
                                                    <?php 
$t=$row['price']*$row['cquantity'];
$sum=$sum+$t;

echo $t;?>
                                                    
                                                </span>
                                            </td>
                                        </tr>
                                        <?php 
                                        } ?>
                                    </tbody>





						</table>
						<hr>
						 <div class="cart-collaterals">
                                <div class="cart_totals ">
                                    <h2 align="right" style="color: black;font-family: bold;">Cart totals</h2>
                                    <table class="shop_table shop_table_responsive" border="2" align="right">
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td data-title="Subtotal">
                                                    <span class="Price-amount">
                                                        <span class="Price-currencySymbol"></span><?php echo $sum; ?>
                                                    </span>
                                                </td>
                                            </tr>
                                             <tr class="cart-subtotal">
                                                <th>Delivery Charge</th>
                                                <td data-title="Subtotal">
                                                    <span class="Price-amount">
                                                        <span class="Price-currencySymbol"></span><?php if($sum>499){?>
                                                            <?php echo 0;?>

                                                        <?php }else{?>

                                                        50 <?php }?>
                                                    </span>
                                                </td>
                                            </tr>

                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td data-title="Total">
                                                    <strong><span class="Price-amount">
                                                        <span class="Price-currencySymbol"></span><?php if($sum>499){?>
                                                            <?php  $a=$sum+0; echo $a;?>

                                                        <?php }else{?>
                                                            <?php $a=$sum+50; echo $a;?>

                                                     <?php }?>


                                                        </span>
                                                    </strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table><br><br><br><br>
                                    <div class="proceed-to-checkout" align="right">
                                        <a href="admin/controller/mycart.php?price=<?php echo $a; ?>" class="button ttm-btn ttm-btn-bgcolor-darkgrey checkout-button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button style="background-color:black;color:white;"><h3 style="color: white;">place order</h3></button></a>
                                       <!--  <div class="checkout-process-div">
                                            <div class="checkout-button-separator">— or —</div>
                                            <a href="#"><img src="images/pay-paypal-img.png" alt="paypal"></a>
                                        </div> -->
                                    </div>
                                </div>
                           
							<script>
            function increment(vcart_id) { //getting from onclick function -can use any variable
               window.location.href='admin/controller/cartjs.php?id='+vcart_id;
           // window.location.href='menu.php?category='+cat;
       }


        </script>

        <!--ajax decrement -->
        <script>
            function decrement(vcart_id) { //getting from onclick function -can use any variable

               window.location.href='admin/controller/cartjsdec.php?id='+vcart_id;
             
            }
            function delete1(id)
            {
                alert('Are you sure');
                window.location.href='admin/Controller/cartdelete.php?id='+id;
            }
        </script>
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
