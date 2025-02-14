<?php 
include('../../config.php');
$admin=new Admin();
 $id=$_GET['id'];
$var=$admin->cud(" delete from batch where batch_id='$id'","Deleted");
echo "<script>alert('Deleted');window.location='../addbatch.php';</script>";






?>