<?php 

define('DIR','');
require_once DIR . 'config.php';

$control = new Controller();
$admin = new Admin();
	$id=$_GET['cid'];

    $astmt = $admin -> ret("SELECT * FROM `course` WHERE `guname` = '$id'");
     $aread = $astmt -> fetch(PDO::FETCH_ASSOC);
     $gid = $aread['guname'];
    $stmt = $admin -> ret("SELECT * FROM `guide` where gname='$gid'");
 
      


    


     
    // $stmt = $admin -> ret("SELECT * FROM `guide` where gid='$gid' order by gname ASC");
    while($read = $stmt -> fetch(PDO::FETCH_ASSOC))

    {
        if(!empty($read['schedule'])){
            $str = $read['schedule'];
            $a = (explode(",", $str));
            for($i = 0; $i < count($a);$i++){
                $sch = $a[$i];
        echo "<option value='".$sch."'>".$sch."</option>";
   
            }

        }
    }
   
    
    ?>
