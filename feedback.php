
<?php 
include('config.php');


if(!isset($_SESSION['id']))
{
  header('location:index.php');
}
 $id=$_SESSION['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		
body{
  background: #fc3031;;
}

form{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: rgba(0,0,0,.1);
  padding: 100px;
}

label{
 font-family: sans-serif;
  letter-spacing: 6px;
  text-transform: uppercase;
  font-size: .8em;
  color: #FFF;
}

input[type=text]{
  display: inline-block;
  border: none;
  text-align: left;
  box-shadow: 3px 2px rgba(121, 83, 210,.3 );
  padding: 10px;
  width: 350px;
  margin: 10px 0;
  background: transparent;
  color: #FFF;
}

input[type=text]:focus{
  background: none;
  border: none;
  color: #FFF;
}

button{
  background: transparent;
  color: #FFF;
  font-family: sans-serif;
  text-transform: uppercase;
  letter-spacing: 3px;
  margin: 20px 0;
  padding: 10px 30px;
  border: 2px solid #FFF;
}

button:hover{
  background: transparent;
  border: 2px solid rgba(69, 39, 160, .4);
}	
	</style>
</head>
<body>
<form action="Controller/feedback.php" method="POST">
  <label>Name: </label> <br>
  <input type="text" placeholder="" / name="name" required> <br>
  <label> Your Review </label> </br>
  <input type="text" placeholder="Drop a line" / name="rev" required><br>
<!--   <label> Your Email: </label> </br> -->
  <input type="hidden" placeholder="" name="id" value="<?php echo $id;?>" />
<br>
<button type="submit"> Submit </button>
</form>
</body>
</html>