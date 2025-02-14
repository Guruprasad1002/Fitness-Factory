<?php

define('DIR','');
require_once DIR . '../config.php';

$control= new Controller();
$admin = new Admin();

if (isset($_GET['accept']))
{
	$id =$_GET['id'];
  $uid = $_SESSION['id'];

 $astmt = $admin -> ret("SELECT * FROM `booking` WHERE `usid` = '$uid'");
 $num = $astmt -> rowCount();
 if($num > 0){
  
    $stmt=$admin->cud("UPDATE `events` SET `status`='accept' where evid='$id'","updated");

  echo "<script>
    alert('Booking Placed Successfully');window.location='../index.php';
    </script>";
 }else{
  
	echo "<script>
    alert('You Need To Book Course First');window.location='../viewmoreevents.php?id=$id';
    </script>";
 }


}



?>