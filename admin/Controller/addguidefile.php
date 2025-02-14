<?php
include'../../config.php';
$admin = new Admin();


if(isset($_POST['add']))
{
	
	$name=$_POST['name'];
	$phno=$_POST['phno'];
    $email=$_POST['email'];
    $av=$admin->ret("select * from login where email='$email'");
    $num=$av->rowCount();
    if($num>0){
 echo "<script>
    alert('Email Already Exist');window.location='../addguide.php';
    </script>";
}
else

{
 






  $gender=$_POST['gender'];
  $experience=$_POST['experi'];
  $discription=$_POST['discription'];
  $age=$_POST['Age'];
  $pass=$_POST['pass'];
  $ssarr=$_POST['ss'];
  
  /*$date=$_POST['date'];*/
  $price=$_POST['price'];
  
  $target_dir="uploads/";
    $image=$target_dir.basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"],$image);
    if(!empty($ssarr)){
                        for($i = 0; $i < count($ssarr); $i++){
                            if(!empty($ssarr[$i])){
                               
                                $ss1 = $ssarr[$i];

                              $ch[] = $ss1 . ",";
                              

  

}  
}

  $ch = implode(" ",$ch);
   $ch = substr($ch, 0,-1);

   $stmt= $admin->cud("INSERT INTO `guide`(`gname`,`phno`,`email`,`gender`,`experience`,`discription`,`age`,`date`,`price`,`image`,`schedule`)VALUES('".$name."','".$phno."','".$email."','".$gender."','".$experience."','".$discription."','".$age."',NOW(),'".$price."','".$image."','".$ch."')","saved");
}

  $ustmt = $admin -> ret("SELECT * FROM `guide` WHERE `gname` = '$name' AND `email` = '$email' AND `phno` = '$phno'");
  $urow = $ustmt -> fetch(PDO::FETCH_ASSOC);
  $uid = $urow['gid'];
  $astmt = $admin -> cud("INSERT INTO `login` ( `email`, `password`, `roll`, `date`, `u_id`) VALUES ('".$email."','".$pass."','g',NOW(),'".$uid."')","saved");


  echo "<script>
    alert('Trainer Inserted Successfully');window.location='../viewguide.php';
    </script>";
}








  
}

?>