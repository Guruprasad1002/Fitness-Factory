<?php

define('DIR','../');
require_once DIR.'../config.php';
$control=new Controller();
$admin = new Admin();


if(isset($_POST['add']))
{
	
	$b=$_POST['time'];

	
	


  $stmt= $admin->cud("INSERT INTO `ccourse`(`course`)VALUES('".$b."')","saved");
}
echo "<script>
    alert('Data Inserted Successfully');window.location='../addc.php'
    </script>";
?>