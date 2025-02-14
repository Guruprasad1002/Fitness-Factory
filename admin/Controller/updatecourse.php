<?php

define('DIR','');
require_once DIR .'../../config.php';
$control =new Controller();
$admin = new Admin();


if (isset($_POST['update']))
{
	$id=$_POST['cid'];
	$a=$_POST['cname'];
	$b=$_POST['guname'];
	$c=$_POST['duration'];
	$d=$_POST['cost'];
	/*$e=$_POST['date'];*/

 $image=$_FILES["image"]["name"];
  if(empty($image)){
//echo"variable 'image'is empty.<br>";//
$image=$_POST['pim'];
}
else
{
	$target_dir="uploads/";
	$image=$target_dir.basename($_FILES["image"]["name"]);
	move_uploaded_file($_FILES["image"]["tmp_name"],$image);
}
	

	
	

    $stmt=$admin->cud("UPDATE `course` SET `cname`='".$a."',`guname`='".$b."',`duration`='".$c."',`cost`='".$d."',`image`='".$image."' WHERE cid=".$id,"updated");

}
    echo "<script>
    alert('Data Updated Successfully');window.location='../viewcourse.php';
    </script>";

?>