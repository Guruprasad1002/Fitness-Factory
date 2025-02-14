<?php

define('DIR','');
require_once DIR .'../../config.php';
$control =new Controller();
$admin = new Admin();


if (isset($_POST['login']))
{
	$name=$_POST['username'];
	$password=$_POST['password'];

	$stmt=$admin->ret("SELECT * FROM `login` where email='$name' and password='$password'");
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
    $id=$row['u_id'];
	$num=$stmt->rowCount();
	if($num>0)
	{
		if($row['roll'] == "g"){
		$_SESSION['aname']=$name;
			$_SESSION['id']=$id;
			
				$admin->redirect('../../trainer/index');
		}else if($row['roll'] == "u"){
			$_SESSION['uname']=$name;
		$_SESSION['id']=$id;
		

		$admin->redirect('../../index');
				$admin->redirect('../../trainer/index');
		}else{

				$_SESSION['aname']=$name;
				$_SESSION['id']=$id;
				
				$admin->redirect('../index1');
		}
		

	}
	else
	{
        echo "<h2>please check your username and password</h2>";
	}
	}
	?>
