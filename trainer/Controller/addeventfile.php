<?php

define('DIR','../');
require_once DIR.'../config.php';
$control=new Controller();
$admin = new Admin();


if(isset($_POST['add']))
{
	
	$name=$_POST['ename'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$location=$_POST['location'];
	$discri=$_POST['discription'];
	$evtype=$_POST['evtype'];
	
	$target_dir="uploads/";
    $image=$target_dir.basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"],$image);

  $stmt= $admin->cud("INSERT INTO `events`(`evname`,`date`,`time`,`location`,`discription`,`evtype`,`image`)VALUES('".$name."','".$date."','".$time."','".$location."','".$discri."','".$evtype."','".$image."')","saved");
  
}
echo "<script>
    alert('data Inserted Successfully');window.location='../viewevent.php';
    </script>";
?>