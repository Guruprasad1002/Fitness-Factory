
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
	$cp=$_POST['confirmpassword'];
	$age=$_POST['age'];
	$phn=$_POST['phn'];
	$t=$admin->ret("select * from login where email='$b'");
	$num=$t->rowCount();
	if($num>0)
	{
		echo"<script>alert('email already exist');window.location='../login.php';</script>";
	}
	
	else{
$stmt=$admin->Rcud("INSERT INTO `user`(`uname`,`phno`,`email`,`password`,`age`)VALUES('".$a."','".$phn."','".$b."','".$f."','".$age."')","saved");
	
  $astmt = $admin -> cud("INSERT INTO `login` ( `email`, `password`, `roll`, `date`, `u_id`) VALUES ('".$b."','".$f."','u',now(),'".$stmt."')","saved");
echo "<script>
    alert('You have registered successfully');window.location='../login.php';
    </script>";
          }
        }
  
  

?>