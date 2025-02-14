<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();











//votp

   if(isset($_POST['op']))
{

  
  $b=$_POST['otp'];

  

   $stmt=$admin->ret("SELECT * from `login` WHERE `otp`='$b'");
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $num = $stmt->rowCount();
        if($num>0){
            $id=$row['aid'];
            $_SESSION['aid']=$id;
            $admin->redirect('../vemailpass');
      }else{
           echo"<script>
            alert('you have entered wrong otp');
            window.location.href='../vemailotp.php';
          </script>";
           // $admin->redirect('../password');
        }
   

  }


//password update
  if(isset($_POST['update']))
{

   
  $password=$_POST['password'];
  $id=$_SESSION['sid'];

$pass=password_hash($password, PASSWORD_BCRYPT);


 $stmt=$admin -> cud("UPDATE `login` SET `password`='$pass' WHERE `aid`='$id'","updated");

 $admin -> redirect('../login');
 }


?>