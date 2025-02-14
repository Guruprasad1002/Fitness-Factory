<?php


include('../../config.php');
$admin=new Admin();
$pp=$_GET['price'];
if(!isset($_SESSION['id']))
{
	echo"<script>alert('please login before');window.location='../../login.php';</script>";
}

 $id=$_SESSION['id'];


	echo"<script>alert('order successful');window.location='../../check.php?price=$pp';</script>";

// header('location:cart.php');
// 


 ?>
