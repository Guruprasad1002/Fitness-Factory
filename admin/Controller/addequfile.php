<?php

define('DIR','../');
require_once DIR.'../config.php';
$control=new Controller();
$admin = new Admin();


if(isset($_POST['add']))
{
	
	$name=$_POST['ename'];
	$price=$_POST['price'];
	$discri=$_POST['discription'];
	// $date=$_POST['date'];
	$qty=$_POST['qty'];

	
	
	$target_dir="uploads/";
    $image=$target_dir.basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"],$image);

  $stmt= $admin->cud("INSERT INTO `equipment`(`ename`,`price`,`discription`,`date`,`image`,`qty`)VALUES('".$name."','".$price."','".$discri."',NOW(),'".$image."','".$qty."')","saved");
}
echo "<script>
    alert('Data Inserted Successfully');window.location='../viewequ.php';
    </script>";
?>