<?php

include('../../config.php');
$admin=new Admin();
$cid=$_SESSION['id'];
$name=$_POST['name'];
$b=$_POST['add'];
$c=$_POST['city'];
$d=$_POST['phone'];
$pay=$_POST['cash'];
$a=$_POST['payment_method'];
 $ran=rand(1111,99999);
if ($a=="upi") {


$rt=$admin->ret("select * from `cart` where `cusid`='$cid'");
$n=$rt->fetch(PDO::FETCH_ASSOC);
$q=$n['cprice'];

$as=$admin->Rcud("INSERT INTO `purchase`(`ogrand_total`, `ouser_id`,`odate`) VALUES ('$pay','$cid',now())","saved");

$order=$admin->ret("select * from cart  inner join equipment on cart.pid=equipment.eid where cusid='$cid'");
while($m=$order->fetch(PDO::FETCH_ASSOC)){


$pid=$m['eid'];
$gt=$m['cprice'];
$change=$m['qty'];
$qty=$m['cquantity'];
$power=$change-$qty;
$price=$m['price'];
// $pid=$m['pid'];
// $pid=$m['pid'];
$or1=$admin->cud("INSERT INTO `purchase_list`(`C_ID`, `P_ID`, `Del_Date`, `Total_Amt`,`Del_Qty`, `O_ID`) VALUES ('$cid','$pid',now(),'$price','$qty','$as')","saved");
}

 $ad=$admin->cud("INSERT INTO `shipping`(`name`, `add`, `city`, `phone`, `transid`,`status`,`oid`,`uid`) VALUES ('$name','$b','$c','$d','$ran','paid','$as','$cid')","saved");
 $n=$admin->cud("DELETE FROM `cart` where `cusid`='$cid'","saved");
 

 $change=$admin->cud("UPDATE `equipment` SET `qty`='$power' where `eid`='$pid'","uploads");

echo "<script>alert('thankyou');window.location='../../order.php';</script>";
	
} elseif ($a=="card")
{

$rt=$admin->ret("select * from `cart` where `cusid`='$cid'");
$n=$rt->fetch(PDO::FETCH_ASSOC);
$q=$n['cprice'];

$as=$admin->Rcud("INSERT INTO `purchase`(`ogrand_total`, `ouser_id`,`odate`) VALUES ('$pay','$cid',now())","saved");

$order=$admin->ret("select * from cart  inner join equipment on cart.pid=equipment.eid where cusid='$cid'");
while($m=$order->fetch(PDO::FETCH_ASSOC)){


$pid=$m['eid'];
$gt=$m['cprice'];
$qty=$m['cquantity'];
$change=$m['qty'];

$power=$change-$qty;

$price=$m['price'];
// $pid=$m['pid'];
// $pid=$m['pid'];
$or2=$admin->cud("INSERT INTO `purchase_list`(`C_ID`, `P_ID`, `Del_Date`, `Total_Amt`,`Del_Qty`, `O_ID`) VALUES ('$cid','$pid',now(),'$price','$qty','$as')","saved");

 $ad=$admin->cud("INSERT INTO `shipping`(`name`, `add`, `city`, `phone`, `transid`,`status`,`oid`,`uid`) VALUES ('$name','$b','$c','$d','$ran','paid','$as','$cid')","saved");
 $change=$admin->cud("UPDATE equipment SET qty='$power' where eid='$pid'","uploads");

echo "<script>alert('thankyou');window.location='../../order.php';</script>";


}
}else
{
echo "<script>alert('make payment');window.location='../../check.php';</script>";
}


 ?>
