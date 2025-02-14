<?php

define('DIR','');
require_once DIR .'../../config.php';
$control =new Controller();
$admin = new Admin();


if (isset($_POST['update']))
{
	$id=$_POST['gid'];
	$a=$_POST['gname'];
	$b=$_POST['phno'];
	$c=$_POST['email'];
	$d=$_POST['gender'];
	$e=$_POST['experience'];
	$f=$_POST['discription'];
	$g=$_POST['age'];
	$i=$_POST['price'];
	$target_dir="uploads/";
	$image=$target_dir.basename($_FILES["image"]["name"]);
	move_uploaded_file($_FILES["image"]["tmp_name"],$image);
	/*$h=$_POST['date'];*/
	

    $stmt=$admin->cud("UPDATE `guide` SET `gname`='".$a."',`phno`='".$b."',`email`='".$c."',`gender`='".$d."',`experience`='".$e."',`discription`='".$f."',`age`='".$g."',`price`='".$i."',`image`='".$image."' WHERE gid=".$id,"updated");

}
    echo "<script>
    alert('Data Updated Successfully');window.location='../viewguide.php';
    </script>";

?>