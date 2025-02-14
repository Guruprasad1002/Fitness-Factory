<?php

include('config.php');

$admin = new Admin();
if(!isset($_SESSION['id']))
{
    // echo "<script>window.location='coursesingle.php';</script>";
}
$cid = $_SESSION['id'];

$stmt = $admin -> ret("SELECT * FROM user WHERE uid = '$cid'");
$row = $stmt -> fetch(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Book</title>

    <!-- Icons font CSS-->
    <link href="bookstyle/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="bookstyle/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="bookstyle/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="bookstyle/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="bookstyle/css/main.css" rel="stylesheet" media="all">
    <style>
      input + span {
  position: relative;
}

input + span::before {
  position: absolute;
  right: -20px;
  top: 5px;
}

input:invalid {
  border: 2px solid red;
}

input:invalid + span::before {
  content: '✖';
  color: red;
}

input:valid + span::before {
  content: '✓';
  color: green;
}

     .btnSubmit {
      border: none;
      border-radius: 1.5rem;
      padding: 1%;
      width: 20%;
      cursor: pointer;
      background: #26253a;
      color: #fff;
    }
    </style>
</head>

<body>

    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">

                <div class="card-heading">
                    <h2 class="title">BOOK YOUR COURSE AND TRAINER</h2>
                </div>
                <div class="card-body"  style="background-color: black">
                    <form method="POST" action="Controller/bookfile.php">
                     <input type="hidden" name="tid" value="<?php echo $_GET['id'];?>">
                            
                        <div class="form-row">
                            <div class="name" style="color:white">Course Name</div>
                            <div class="value">
                                <div class="input-group">
                                  <div class="rs-select2 js-select-simple select--no-search">
                                    <select required onchange="showCourse(this.value);" name="cname">
                      <option value="">Select Your Course</option>
                    <?php
                        $stmt = $admin->ret("SELECT * FROM `ccourse`");
                        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                      ?>
                      <option value="<?php echo $row['cc_id'] ?>"><?php echo $row['course'] ?></option>
                <?php } ?>
                    </select>

                    <script>
                       function showCourse(cc_id) {

          if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
          } else { // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
           var a = document.getElementById("guide").innerHTML=xmlhttp.responseText;
            
         
        }
        }
          xmlhttp.open("GET","getGuides.php?cc_id="+cc_id,true);
          xmlhttp.send();
        }
                    </script>

                    

                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                      </div>
                            <div class="form-row">
                           <div class="name" style="color:white">Course Period</div>
                           <div class="value">
                                <div class="input-group">
                                  <div class="rs-select2 js-select-simple select--no-search">
                           <select  name="cp" >
                            <option disabled="disabled" selected="selected">Select Course Period(In month)</option>
              <option value="1">1</option>
              <option value="2">2</option>
              
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              
              <option value="11">11</option>
              <option value="12">12</option>
              
            </select>
            <div class="select-dropdown"></div>

                        </div>
                      </div>
                  </div>
                </div>

               

                        <div class="form-row">
                            <div class="name" style="color:white">Guide Name</div>
                            <div class="value">
                                <div class="input-group">
                                  <div class="rs-select2 js-select-simple select--no-search">
                                    
                                     <select id="guide" required onchange="showCourse1(this.value);" name="guname">
                      <option value="">Select Your Guide</option>
                 
                    </select>

                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                      </div>
                       <script>

  
                       function showCourse1(cid) {
                        

          if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
          } else { // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
           var a = document.getElementById("batch").innerHTML=xmlhttp.responseText;
            
        
        }
        }
          xmlhttp.open("GET","getGuides1.php?cid="+cid,true);
          xmlhttp.send();
          
        }
                    </script>


                        <div class="form-row">
                            <div class="name" style="color:white">Batch</div>
                            <div class="value">
                                <div class="input-group">
                                  <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="bat" placeholder="Please select your Nationality" id="batch">
                      <option value="">Select Your Batch</option>
                    
                    </select>
                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                      </div>
                    


                    

                    
                  


                            <input type="submit" name="book" id="signup" class="btn btn--radius-2 btn--red" value="Book"/>

                       
                    </form>
                   
                </div>
            </div>

        </div>
         <p><a href="index.php" class="btnSubmit">HOME</a>
    </div>

     </p>
    <!-- Jquery JS-->
    <script src="bookstyle/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="bookstyle/vendor/select2/select2.min.js"></script>
    <script src="bookstyle/vendor/datepicker/moment.min.js"></script>
    <script src="bookstyle/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="bookstyle/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->