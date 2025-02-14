<?php 

include('config.php');
$admin=new Admin();
session_destroy();
// session_unset()
echo "<script>alert('YOU LOGGED OUT');window.location='index.php';</script>";
?>