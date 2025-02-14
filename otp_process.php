<?php
include('config.php');
$otp=$_SESSION['otp'];
$enterdotp=$_POST['otp'];
if($otp==$enterdotp)
{
	header("location: repassword.php");

}
else
{
 echo "<script>alert('Dose not Match');
    window.location='login.php';
 </script>";
}
?>