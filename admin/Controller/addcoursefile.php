<?php

define('DIR','../');
require_once DIR.'../config.php';
$control=new Controller();
$admin = new Admin();


if(isset($_POST['add']))
{
	
	$b=$_POST['cname'];
	$c=$_POST['guname'];
	$d=$_POST['duration'];
	$e=$_POST['cost'];
	$av=$admin->ret("select * from course where cname='$b'");
	$num=$av->rowCount();
	if($num>0)
	{
		
echo "<script>
    alert('This course already assaigned by some other trainer');window.location='../addcourse.php';
    </script>";
		
} else
{

	






$target_dir="uploads/";
    $image=$target_dir.basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"],$image);

  $stmt= $admin->cud("INSERT INTO `course`(`cname`,`guname`,`duration`,`cost`,`date`,`image`)VALUES('".$b."','".$c."','".$d."','".$e."',NOW(),'".$image."')","saved");
}
echo "<script>
    alert('Data Inserted Successfully');window.location='../viewcourse.php';
    </script>";
}


	
	
	
?>