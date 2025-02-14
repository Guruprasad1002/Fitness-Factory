<?php

define('DIR','');
require_once DIR .'../../config.php';
$control =new Controller();
$admin = new Admin();


if (isset($_POST['update']))
{
	$id=$_POST['eid'];
	$a=$_POST['ename'];
	$b=$_POST['price'];
	$c=$_POST['discription'];
	/*$d=$_POST['date'];*/
	/*$e=$_POST['date'];*/

 $image=$_FILES["image"]["name"];
  if(empty($image)){
//echo"variable 'image'is empty.<br>";//
$image=$_POST['pim'];
}
else
{
 $image=$_FILES["image"]["name"];

$target_dir="uploads/";
	$image=$target_dir.basename($_FILES["image"]["name"]);
	move_uploaded_file($_FILES["image"]["tmp_name"],$image);
}
	
	
	
	

    $stmt=$admin->cud("UPDATE `equipment` SET `ename`='".$a."',`price`='".$b."',`discription`='".$c."',`image`='".$image."' WHERE eid=".$id,"updated");

}
    echo "<script>
    alert('Data Updated Successfully');window.location='../viewequ.php';
    </script>";

?>