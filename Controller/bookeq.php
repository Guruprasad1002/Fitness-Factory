<?php

define('DIR','');
require_once DIR . '../config.php';

$control = new Controller();
$admin = new Admin();



if (isset($_POST['book1']))
{
	// $r=$_SESSION['uname'];
	$b=$_POST['eid'];
	$a=$_POST['quan'];
	
	
	
	
$stmt=$admin->Rcud("INSERT INTO `booking`(`eqid`,`equantity`)VALUES('".$b."','".$a."'","saved");
 $admin->redirect1('../payment1.php?id='.$stmt);
}
?>