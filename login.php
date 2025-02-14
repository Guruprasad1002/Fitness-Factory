<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="userregister/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="userregister/css/style.css">
</head>
<body>

    <div class="main" style="background-image:url(downloadimages/Gym.png);background-size:cover">

        <!-- Sign up form -->
        <section class="signup" >
            <div class="container" style="background-color:#ffffffcf">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Login</h2>
                        <form action="Controller/userlogin.php" method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Email" required="">
                     
                            </div>
                           
                           
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"required="">
                            </div>
                                 <!-- <p><a href="vemail.php">forgot password</a></p> -->
                                          
                            <div class="form-group form-button">
                                <input type="submit" name="login" id="signup" class="form-submit" value="Login"/ style="background-color:black">
                            </div>
                        </form>
                        <a href="forget.php" class="signup-image-link">Forget Password?</a>
                        
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/LOGO.jpeg" alt="sing up image" style="border-radius: 50px;width: 100px;height: 100px;"></figure>
                        <a href="register.php" class="signup-image-link">I am new member</a>
                    </div>
                       
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