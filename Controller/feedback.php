<?php

define('DIR','');
require_once DIR .'../config.php';
$control =new Controller();
$admin = new Admin();


 $id=$_POST['id'];
	$cid = $_SESSION['id'];
	$c=$_POST['rev'];
	$name=$_POST['name'];

 $stmt= $admin->cud("INSERT INTO `feedback`(`userid`,`feedback`,`date`,`name`)VALUES('$cid','$c',now(),'$name')","saved");

echo "<script>
    alert('Your Feedback is successfully sent to admin');window.location='../index.php';</script>";

?>