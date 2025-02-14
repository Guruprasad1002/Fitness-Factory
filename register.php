<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="userregister/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="userregister/css/style.css">
</head>
 <script>
        function validate(){

            var a = document.getElementById("password").value;
            var b = document.getElementById("confirmpassword").value;
            var c = document.getElementById("age").value;
            if (a!=b) {
               alert("Passwords do no match");
               return false;
            }
            if (c<=18) {
               alert("Your Not Eligible!..........");
               return false;
            }
        }

       
     </script>
<body>

    <div class="main" style="background-color:black">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action="Controller/user.php" method="POST" class="register-form" id="register-form" onSubmit="return validate()">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" pattern="[A-Za-z]+" title="letters only" id="name" placeholder="Your Name" required="">
                     
                            </div>
                           
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$" placeholder="enter your password" title="xyz@something.com" required="" />
                            </div>
                              <div class="form-group">
                                <label for="age"><i class="zmdi zmdi-facebook"></i></label>
                                <input type="text" name="age" title="Please enter valid age" id="age" placeholder="Your Age" required="" />
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" placeholder="enter password" required="" />
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" required="" />
                            </div>
                             <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="tel" name="phn" id="phn" pattern="[6-9]{1}[0-9]{9}" title="10 numeric characters only" title="only numbers" placeholder="contact-number" required="">
                            </div>
                                                                           
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/ style="background-color:black">
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/1.png" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
       

    </div>

    <!-- JS -->
    <script src="userregister/vendor/jquery/jquery.min.js"></script>
    <script src="userregister/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>