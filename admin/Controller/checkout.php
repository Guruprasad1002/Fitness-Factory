<?php

include('../../config.php');
$admin=new Admin();
$cid=$_SESSION['id'];
$name=$_POST['name'];
$b=$_POST['add'];
$c=$_POST['city'];
$d=$_POST['phone'];
echo $pay=$_POST['cash'];
// $a=$_POST['payment_method'];
 $ran=rand(1111,99999);


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

$rt=$admin->cud("DELETE  from `cart` where `cusid`='$cid'","saved");
}

echo "<script>alert('thankyou');window.location='../../order.php';</script>";






 ?>
