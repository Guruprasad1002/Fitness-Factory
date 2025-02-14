<?php

define('DIR','../');
require_once DIR .'../config.php';
$control =new Controller();
$admin = new Admin();

$id=$_GET['id'];
$ab=$admin->ret("select * from guide where gid='$id'");
$row=$ab->fetch(PDO::FETCH_ASSOC);
$email=$row['email'];
$st=$admin->cud("DELETE FROM `login` where `email`='$email'","Deleted");

$stmt=$admin->cud("DELETE FROM `guide` where gid=".$id,"Deleted");


echo "<script>
alert('Data Deleted Successfully');window.location='../viewguide.php';</script>";
?>