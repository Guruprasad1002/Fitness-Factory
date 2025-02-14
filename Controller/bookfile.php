<?php

define('DIR','');
require_once DIR . '../config.php';

$control = new Controller();
$admin = new Admin();



if (isset($_POST['book']))
{
	$cid = $_SESSION['id'];
	// echo $c=$_POST['tid'];
	$a=$_POST['cname'];
	$b=$_POST['guname'];
	$s=$_POST['cp'];
	$m=$_POST['bat'];
	$stmt=$admin->ret("SELECT count(*) from booking where ba_id = '$m'");
    $row= $stmt->fetch(PDO::FETCH_ASSOC);
	$chkav = implode($row);

	if($chkav == 24){
		echo "<script>
    // alert('This slot is full please book other slots');window.location='../booking.php';
    </script>";



	}else{

	$status='booked';	
	// INSERT INTO `booking`(`bid`, `usid`, `courseid`, `guideid`, `status`, `date`, `cperiod`, `ba_id`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])
	
$stmt=$admin->Rcud("INSERT INTO `booking`(`usid`, `courseid`, `guideid`, `status`, `date`, `cperiod`, `ba_id`)VALUES('$cid','$a','$b','$status',now(),'$s','$m')","saved");



                    $astmt = $admin->ret("SELECT * FROM  `ccourse`  WHERE `cc_id`='$a'");
                     $arow = $astmt->fetch(PDO::FETCH_ASSOC);
                     $cour = $arow['course'];        
                     $bstmt = $admin->ret("SELECT * FROM  `course`  WHERE `cname`='$cour'");
                     $brow = $bstmt->fetch(PDO::FETCH_ASSOC);
                     $cost =  $brow['cost'];

                     $zstmt = $admin->ret("SELECT * FROM  `guide`  WHERE `gname`='$b'");
                     $zrow = $zstmt->fetch(PDO::FETCH_ASSOC);
                     $zh = $zrow['price'];        
                 

 $admin->redirect1('../pay.php?id='.$stmt.'&cost='.$cost.'&price='.$zh);
}
}
?>