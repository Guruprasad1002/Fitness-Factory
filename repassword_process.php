<?php
include('config.php');
$admin=new Admin();

$semail=$_SESSION['supemail'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if($password==$cpassword)
{
	  $sql=$admin->cud("UPDATE `login` SET `password`='$password' where `email`='$semail'","saved");
	  echo "<script>alert('password is sucessfully changed');
    window.location='login.php';
 </script>"; 

}
else
{
	 echo "<script>alert('Dose not Match');
    window.location='repassword.php';
 </script>";
}