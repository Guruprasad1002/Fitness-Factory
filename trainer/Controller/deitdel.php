<?php


 include'../../config.php';
$admin = new Admin();

$id=$_GET['id'];
$stmt=$admin->cud("DELETE FROM `diet` where d_id=".$id,"Deleted");
echo "<script>
alert('Data Deleted Successfully');window.location='../viewdeit.php';</script>";
?>