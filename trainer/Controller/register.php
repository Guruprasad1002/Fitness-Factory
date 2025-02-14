<?php

define('DIR','');
require_once DIR .'../config.php';
$control =new Controller();
$admin = new Admin();


if (isset($_POST['signup']))
{
	$a=$_POST['name'];
	$b=$_POST['email'];
	$f=$_POST['password'];
	
	
$stmt=$admin->cud("INSERT INTO `user`(`uname`,`email`,`password`)VALUES('".$a."','".$b."','".$f."')","saved");

}
?>