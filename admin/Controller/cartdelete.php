<?php
include('../../config.php');
$admin=new Admin();
$id=$_GET['id'];  //pid
$qe=$admin->cud("DELETE FROM cart where pid='$id'","saved");
$ad=$admin->ret("select * from cart");
$num=$ad->rowCount();
if($num>0)
{
echo "<script>alert('Product deleted from cart');window.location='../../cart.php';</script>";

}

else
{
echo "<script>alert('Product deleted from cart');window.location='../../store.php';</script>";

}


 ?>