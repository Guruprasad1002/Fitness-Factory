<?php
define('DIR','../');
require_once DIR . 'config.php';

$control = new Controller(); 
$admin = new Admin();



	$uid = $_POST['uid'];
	$bid = $_POST['bid'];
	$book=$admin->ret("select * from booking where bid='$bid'");
	$row=$book->fetch(PDO::FETCH_ASSOC);
	$period=$row['cperiod'];

	 $tcost=$_POST['tcost'];

	  $ccost=$_POST['ccost'];
	$ran=rand(1111,9999);
	$grand=(int)$period*(int)$ccost;
	$guide=(int)$period*(int)$tcost;

	 $adamount=$grand-$guide;

	// $address=$_POST['total'];
	
	
	$stmt=$admin->cud("INSERT INTO `payment`(`boid`, `ptype`, `grandamount`, `date`, `status`, `camount`, `gamount`, `adminamount`, `transactionid`, `user_id`) VALUES ('$bid','card','$grand',now(),'booked','$ccost','$guide','$adamount','$ran','$uid')","saved");

	echo "<script>alert('Payment is successfully completed');window.location='../yourbook.php';</script>";
	  // $admin->redirect1('../index1.php');


?>