<?php 
include('../../config.php');
$admin = new Admin();
$id=$_GET['id'];
$r=$admin->cud("Delete from feedback where fid='$id'","saved");
	echo "<script>alert('Removed');window.location='../feedback.php';</script>";






?>