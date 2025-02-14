<?php

include '../config.php';

$admin = new Admin();

?>
<?php if(!isset($_SESSION['id'])){
  header('location:index.php');

}
   $name=$_SESSION['name'];
  $id=$_SESSION['id'];

 $ad=$admin->ret("SELECT * FROM `guide` where `email`='$name'");
 $r=$ad->fetch(PDO::FETCH_ASSOC);
  $uname=$r['gname'];


  ?>
   

    <!DOCTYPE html>
<html>


  <head>
    <meta charset="UTF-8">
    <title>bootstrap4</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
  </head>
  <body style="margin:60px">
    
<form action="Controller/adddeit.php" method="POST">
<input type="text" name="tit" placeholder="title" class="form-control" required>
<br>
<select class="form-control" name="cat" required>
  <option>choose category</option>
  <?php
$q=$admin->ret("select * from course where guname='$uname'");
while($r=$q->fetch(PDO::FETCH_ASSOC)){?>
<option><?php echo $r['cname'];?></option>
 <?php } ?>
</select>
<br>
    <textarea id="summernote" name="sum" required></textarea><br><br>
    <center ><button type="submit" class="btn btn-success">CREATE</button></center>
  </form><br>
   <center ><a href="viewdeit.php"><button class="btn btn-danger">GO HOME</button></a></center>
    <script>
      
    </script>
 
<script type="text/javascript">
    $('textarea#summernote').summernote({
        placeholder: 'Hello bootstrap 4',
        tabsize: 2,
        height: 100,
  toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        //['fontname', ['fontname']],
       // ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'hr']],
        //['view', ['fullscreen', 'codeview']],
        ['help', ['help']]
      ],
      });
</script>
</body>
</html>   