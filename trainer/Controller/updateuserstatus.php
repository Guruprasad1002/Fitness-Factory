<?php

define('DIR','');
require_once DIR . '../../config.php';

$control= new Controller();
$admin = new Admin();

if (isset($_GET['accept']))
{
	$id =$_GET['id'];
	$stmt=$admin->cud("UPDATE `user` SET `status`='accept' where uid='$id'","updated");

  echo "<script>
    alert('User is accepted');window.location='../viewuser.php';
    </script>";

}
if (isset($_GET['reject']))
{
	$id =$_GET['id'];
	$stmt=$admin->cud("UPDATE `user` SET `status`='reject' where uid='$id'","updated");

  echo "<script>
    alert('User is accepted');window.location='../viewuser.php';
    </script>";

}


?>