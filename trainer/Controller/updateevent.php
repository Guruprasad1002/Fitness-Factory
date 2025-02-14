<?php

define('DIR','');
require_once DIR .'../../config.php';
$control =new Controller();
$admin = new Admin();


if (isset($_POST['update']))
{
	$id=$_POST['evid'];
	$a=$_POST['evname'];
	$b=$_POST['date'];
	$c=$_POST['time'];
	$d=$_POST['location'];
	$e=$_POST['discription'];
	$f=$_POST['evtype'];
	
	$target_dir="uploads/";
	$image=$target_dir.basename($_FILES["image"]["name"]);
	move_uploaded_file($_FILES["image"]["tmp_name"],$image);
	/*$h=$_POST['date'];*/
	

    $stmt=$admin->cud("UPDATE `events` SET `evname`='".$a."',`date`='".$b."',`time`='".$c."',`location`='".$d."',`discription`='".$e."',`evtype`='".$f."',`image`='".$image."' WHERE evid=".$id,"updated");

}
    echo "<script>
    alert('Data Updated Successfully');window.location='../viewevent.php';
    </script>";

?>