
<?php

define('DIR','');
require_once DIR .'../config.php';
$control =new Controller();
$admin = new Admin();



if(isset($_POST['update'])){

 $cid = $_SESSION['id'];

 $name = $_POST['uname'];
 $uname = $_POST['email'];
 $email = $_POST['phno'];
 $pass = $_POST['password'];
 $ph = $_POST['age'];
 $dob = $_POST['height'];
 $dobb = $_POST['weight'];
 $dbb = $_POST['gender1'];
 $drr = $_POST['address'];

 $target_dir="uploads/";
	$image=$target_dir.basename($_FILES["image"]["name"]);
	move_uploaded_file($_FILES["image"]["tmp_name"],$image);


 $stmt = $admin -> cud("UPDATE user SET `uname` = '$name' , `email` = '$uname' ,`phno`= '$email' , `password`= '$pass' ,`age` = '$ph' ,`height`= '$dob' ,`weight`='$dobb' ,`gender`='$dbb' , `address`='$drr',`image`='$image' WHERE user.uid = '$cid'","updated");

   if($stmt){
            echo "<script>alert('Profile Updated Successfully');
                        window.location.href='../profile.php';
                    </script>";
        }else{
                    echo "<script>alert('Something Went Wrong Please Try Again.');
                         window.location.href='../profile1.php';
                    </script>";
        }
}
?>
