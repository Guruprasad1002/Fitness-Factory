<?php

define('DIR','../');
require_once DIR . 'config.php';

$control = new Controller();
$admin = new Admin();

?>
<?php if(isset($_SESSION['aname'])){

}?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>REAL PHYSIQUE</title>

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
  <style>
    th
    {
      font-size:20px;
    }
  </style>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <?php include "header.php"?>
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
<!--  --> <!-- at the end of the document so the pages load faster --> -->
<section id="main-content">
          <section class="wrapper">
            <h3><b><i class="fa fa-angle-right"></i> VIEW PRODUCT DETAILS</b></h3>
  <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                           
              
                            <hr>
                              <thead>
                              <tr>
                                  <th>  Product name</th>
                                  <th > Add image</th>
                                  <th> Price</th>
                                  
                                  <th> Discription</th>
                                  <th>Date</th>
                                  <th> Action</th>
                                   
                                 

                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php
                               $table='equipment';
                               $stmt=$admin->ret("SELECT * FROM `equipment` ");
                               while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                ?>

                              <tr>
                                  <td><?php echo $row['ename'];?></td>
                                  <td><img src="Controller/<?php echo $row['image'];?>" height=250 width=250></td>
                                  <td><?php echo $row['price'];?></td>
                                  <td><?php echo $row['discription'];?></td>
                                  <td><?php echo $row['date'];?></td>
                                  
                                  <!-- <td><?php echo $row['status'];?></td> -->
                                  <td><a href="updateequform.php?id=<?php echo $row['eid'];?>" onclick="
                                   return confirm('Are you sure you want to update?')" class=" btn btn-success">Update</a>

                                  </td>
          <td><a href="Controller/deleteequ.php?id=<?php echo $row['eid'];?>" onclick="
            return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</a>
          </td>

                                  
                                  
                                 
                                  
                                     
                              </tr>
                             
                                 
                            <?php }?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div>
              <!-- /row -->
</section>
</section>
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
