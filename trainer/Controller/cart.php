<?php
include('../../config.php');
$admin=new Admin();
if(!isset($_SESSION['id']))
{
	echo"<script>alert('please login before');window.location='../../login.php';</script>";
}
$cid=$_SESSION['id']; //cusid
$id=$_GET['id']; //product id
$qu=1;



$a=$admin->ret("select * from equipment where eid='$id'");
$rw=$a->fetch(PDO::FETCH_ASSOC);
$price=$rw['price'];
$quantity=$rw['qty'];



$m=$admin->ret("select * from cart where pid='$id' and cusid='$cid'");
$n=$m->rowCount();
$kk=$m->fetch(PDO::FETCH_ASSOC);
$qty=$kk['cquantity'];
$q=(int)$qty+1;
$pr=$price*(int)$q;
$cartid=$kk['cid'];


if($n>0)
{
$p=$admin->cud("UPDATE `cart` set `cquantity`='$q',`cprice`='$pr' WHERE `cid`='$cartid' ","sav");

	// $w=(int)$quantity-1;
// -- $pe=$admin->cud("UPDATE `product` set `pqty`='$w' WHERE `pid`='$id' ","sa");
	echo "<script>window.location='../../store.php';</script>";
  
}
else
{
	// $ad=$admin->ret("select * from product where pid='$i'd");
	// $row=$ad->fetch(PDO::FETCH_ASSOC);
	$query=$admin->cud("INSERT INTO `cart`(`cusid`, `pid`, `cprice`, `cquantity`) VALUES ('$cid','$id','$price','$qu')","saved");
	// header("location:../../shop.php");
	echo "<script>window.location='../../store.php';</script>";

}



?>