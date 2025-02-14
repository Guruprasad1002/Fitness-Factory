<?php

define('DIR','../');
require_once DIR . 'config.php';

$control = new Controller();
$admin = new Admin();

?>
<?php if(!isset($_SESSION['aname'])){
  header('location:index.php');
  
}
?>
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Fitness - Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <?php include "header.php" ?>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <?php include "sidebar.php" ?>      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
<section id="main-content">
          <section class="wrapper"><BR>
            <h3> ADD GUIDE</h3>
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                     
                      <form class="form-horizontal style-form" action="Controller/addguidefile.php" method="post" enctype="multipart/form-data">
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Name</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="name" pattern="[A-Za-z]+" title="letters only" required>
                                  
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Phone Number</label>
                              <div class="col-sm-10">
                                  <input type="tel" class="form-control" name="phno" pattern="[6-9]{1}[0-9]{9}" title="10 numeric characters only" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Schedule</label>
                              <div class="col-sm-10">
                                  
                                    <?php 
                                    $stmt = $admin->ret("SELECT * FROM `batch`");
                                    while($row= $stmt->fetch(PDO::FETCH_ASSOC))
                                    {
                                      ?>
                                     <input type="checkbox" name="ss[]" value="<?php echo $row
                                     ['timings']?>"/><?php echo $row
                                     ['timings']?>
                                                           
                            <?php }?>
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$" title="xyz@something.com" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" >Gender</label>
                              <div class="col-sm-10">
                                  <input type="radio"  name="gender" value="male"> Male
                                  <input type="radio"  name="gender" value="female"> Female
                                  <input type="radio"  name="gender" value="female"> Other
                                  </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Experience</label>
                              <div class="col-sm-10">
                                 <input type="text" class="form-control" name="experi">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">About Trainer</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="discription" required/>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-lg-2 col-sm-2 control-label">Age</label>
                              <div class="col-lg-10">
                                <input type="number" pattern="[1-9]{1}[0-9]{1}" class="form-control" name="Age" required>
                                  
                              </div>
                          </div>
                           <div class="form-group">
                              <label class="col-lg-2 col-sm-2 control-label">Add image</label>
                              <div class="col-lg-10">
                                <input type="file" name="image" required>
                              </div>
                          </div>
                          <!--  <div class="form-group">
                              <label class="col-lg-2 col-sm-2 control-label">Status</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" name="status">
                                  
                              </div>
                          </div> -->
                           <div class="form-group">
                              <label class="col-lg-2 col-sm-2 control-label">Password</label>
                              <div class="col-lg-10">
                                <input type="password" class="form-control" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required />
                                  
                              </div>
                            </div>
                         
                           <div class="form-group">
                              <label class="col-lg-2 col-sm-2 control-label">Fees</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" name="price" pattern="[0-9]+" title="only numbers">
                                  
                              </div>
                          </div>
                          <input type="submit" name="add" class="btn btn-success" value="Add Guide"  >
                      </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->
</section>
</section>
      <!--main content end-->
      <!--footer start-->
      <?php include "afooter.php" ?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
  <script src="assets/js/zabuto_calendar.js"></script>  
  
 
  
  <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>

