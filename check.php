<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from kickbox.coralixthemes.com/red/store.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 11:51:14 GMT -->
<head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <title>REAL PHYSIQUE</title>
        <meta name="description" content="This is the site description.">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="icon" type="image/png" href="apple-touch-icon-precomposed.png">
        <!--[if IE]><link rel="shortcut icon" href="favicon.ico" /><![endif]-->
        <!--********************  CSS  ********************-->

        <!--Font: Google Font-->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300%7C">

        <!--Owl Carousel-->
        <link rel="stylesheet" href="js/vendor/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="js/vendor/owl-carousel/owl.theme.css">
        <!--Custom CSS-->
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/colors/red.css">
        <!--Modernizr-->
        <script src="js/vendor/modernizr.min.js"></script>
    </head>
    <body>

        <header>
            <!--begin Top Bar-->
            
            <!--end Top Bar-->
            <!--begin Navbar-->
        <?php include('nav.php');
        $admin=new Admin();
        $pp=$_GET['price'];
        ?>
            <!--end Navbar-->
            <!--begin Title-->
            <div class="title title-store">
                <div class="container">
                    <h1>BILLING DETAILS</h1>
                </div>
            </div>
            <!--end Title-->
        </header>
        <!--end Header-->
        <!--begin Content-->
        <section>
            <article>
                <div class="container">
                
                    <div class="row">



                        <!--  -->

                            <form action="admin/controller/checkout.php" method="post" >
                                <div class="col-lg-6">
                                    <h3>Billing details</h3>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> Name<abbr>*</abbr></label>
                                                <input type="text" name="name" class="form-control" required>
                                            </div>
                                        </div>
                                      
                                       
                                       
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Street address<abbr>*</abbr></label>
                                                <input type="text" name="add" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Town / City<abbr>*</abbr></label>
                                                <input type="text" name="city" class="form-control" required>
                                            </div>
                                        </div>
                                       
                                      
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Phone<abbr>*</abbr></label>
                                                <input type="text" name="phone" class="form-control" required>
                                                <input type="hidden" name="cash" value="<?php echo $pp;?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-lg-12">
                                    <h3 id="order_review_heading">PAYMENT</h3>
                                    <div id="order_review" class="checkout-review-order">
                                      
                                          <div id="payment" class="checkout-payment">
                                         
                                            <div>
                                                 <div class="card single-accordion">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                    
                                    </h5>
                                </div>

                              

                                                       
                                                            <!-- <form action=""> -->
                                                                <div class="px-3 pt-3">
                                                                    <label for="card number" class="d-flex justify-content-between"><span class="labeltxt">CARD NUMBER</span><img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" style="width: 20px;height: 20px;" class="image" /></label>
                                                                    <input type="text" class="form-control inputtxt" id="card_no" name="card_no" placeholder="0000 0000 0000 0000" minlength="16" maxlength="16" style="background-color: #e60000; width: 250px;color: white;font-weight: bold;" required >
                                                                </div>


                                                                <div class="d-flex justify-content-between px-3 pt-4">
                                                                    <div><label for="date" class="exptxt"> Expiry </label><input type="text" class="form-control expiry" placeholder="MM / YY" id="card_expiry" name="card_expiry" minlength="5" maxlength="5"  style="background-color: #e60000; width: 250px;color: white;font-weight: bold;" pattern="(?:0[1-9]|1[0-2])/[0-9]{2}" required></div>
                                                                    <div><label for="cvv" class="cvvtxt">CVV / CVC</label><input type="text" name="number" class="form-control cvv" id="cvv"  style="background-color: #e60000; width: 250px;color: white;font-weight: bold;" required></div>
                                                                </div>
                                                                <div class="d-flex justify-content-between px-3 pt-4 pb-4">
                                                                    <!-- <div><button type="reset" class="btn btn-light cancel">clear</button></div> -->

                                                                    <!-- <div><button type="button" class="btn btn-primary payment">Make Payment</button></div> -->
                                                                    <!-- <div><input type="submit" class="btn btn-primary payment" value="Make Payment"></div> -->
                                                                </div>
                                            <!-- </form> -->
                                        </div>
                                    </div>
                                    <!--  card paymen  body ends -->

                                </div>

                                    <div><button type="submit" onclick="return cv()" class="btn btn-dark">pay</button></div>

                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
 <script>
        function cardform(myvalue) {

            if (myvalue == 'card') { //radio button id

                document.getElementById('card_div').style.display = 'block'; //div id
                document.getElementById('card_div').CausesValidation="true"
                document.getElementById('upi_div').style.display = 'none';
                document.getElementById('cash_div').style.display = 'none';

                

            } else if (myvalue == 'upi') {
                
                document.getElementById('card_div').style.display = 'none';
                document.getElementById('upi_div').style.display = 'block';
                document.getElementById('upi_div').CausesValidation="true"
                document.getElementById('cash_div').style.display = 'none';
               
            } else {

                document.getElementById('card_div').style.display = 'none';
                document.getElementById('upi_div').style.display = 'none';
                document.getElementById('cash_div').style.display = 'block'; 

            }

        }
    </script>
    <script>
function checkboxFunction() {
  var checkBox = document.getElementById("Prebooking_id");
  var text = document.getElementById("date_time_id");

  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}

function cv()
{
    var pt = document.getElementById("payment_method").value;
  
    var cardno = document.getElementById("card_no").value;
    var exp = document.getElementById("card_expiry").value;
    var cvv = document.getElementById("cvv").value;
    var txno = document.getElementById("tran_id").value;
    if(pt=="card")
    {
        if (cardno=="" || exp=="" || cvv=="") 
        {
            alert("Enter Complete Card details.");
            return false;
        }
        else
        {
            return true;
        }
    }
    else if (pt=="upi")
    {
        if (txno=="") 
        {
            alert("Enter  Transaction Number.");
            return false;
        }
        else
        {
            return true;
        }
    }
    else
    {
        return true;
    }
    
}
</script>







<!--  -->


                        
                                </div>
                           
                                            </div>
                    </div>
                </div>
            </article>
            
        </section>
        <!--end Content-->
        <!--begin Footer-->
        
        <!--end Footer-->




        <!--********************************************************************-->
        <!--************************* Javascript Files *************************-->
        <script src="js/vendor/jquery.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>

        <!--Owl Carousel-->
        <script src="js/vendor/owl-carousel/owl.carousel.js"></script>
        <!--Twitter Feed-->
        <script src="js/vendor/twitter/jquery.tweet.min.js"></script>
        <!-- Slider Range-->
        <script src="js/vendor/bootstrap-slider.js"></script>
        <!--Custom Script-->
        <script src="js/script.js"></script>
    </body>

<!-- Mirrored from kickbox.coralixthemes.com/red/store.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 11:51:17 GMT -->
</html>
