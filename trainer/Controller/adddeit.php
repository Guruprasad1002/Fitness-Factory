<?php 



include'../../config.php';
$admin = new Admin();
$gid=$_SESSION['id'];
$tit=$_POST['tit'];
$cat=$_POST['cat'];
$name=$_SESSION['name'];
$sum=$_POST['sum'];


$ar=$admin->cud("INSERT INTO `diet`(`diet_title`, `discription`, `gid`, `date`,`gname`, `catname`) VALUES ('$tit','$sum','$gid',now(),'$name','$cat')","saved");
echo "<script>alert('TIME TABLE ADDED');window.location='../viewdeit.php';</script>";
?>