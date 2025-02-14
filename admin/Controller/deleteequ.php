<?php

define('DIR','../');
require_once DIR .'../config.php';
$control =new Controller();
$admin = new Admin();

$id=$_GET['id'];
$stmt=$admin->cud("DELETE FROM `equipment` where eid=".$id,"Deleted");
echo "<script>
alert('Data Deleted Successfully');window.location='../viewequ.php';</script>";
?>