<?php 

define('DIR','');
require_once DIR . 'config.php';

$control = new Controller();
$admin = new Admin();
	$id=$_GET['cc_id'];

    $astmt = $admin -> ret("SELECT * FROM `ccourse` WHERE `cc_id` = '$id'");
	 $aread = $astmt -> fetch(PDO::FETCH_ASSOC);
     $gid = $aread['course'];
    $stmt = $admin -> ret("SELECT * FROM `course` where cname='$gid'");
 
     


    

    echo "<option value=''>Select Guide</option>";
     
    // $stmt = $admin -> ret("SELECT * FROM `guide` where gid='$gid' order by gname ASC");
    while($read = $stmt -> fetch(PDO::FETCH_ASSOC))
    {
    	echo "<option value='".$read['guname']."'>".$read['guname']."</option>";
    } 
    
    ?>
