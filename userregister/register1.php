<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action="Controller/register.php" method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i "name" id="name" placeholder="Your Name"/>
                            </div>class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name=
                           
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <!--  <div class="form-group">
                                <label for="phno"><i class="zmdi zmdi-email"></i></label>
                                <input type="phno" name="phno" id="phno" placeholder="Your phone number"/>
                            </div>
                            <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-email"></i></label>
                                <input type="address" name="address" id="address" placeholder="Your address"/>
                            </div> -->
                          <!--   <div class="form-group">
                                <label for="age"><i class="zmdi zmdi-email"></i></label>
                                <input type="age" name="age" id="age" placeholder="Your age"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="gender"><i class="zmdi zmdi-email"></i></label>
                                <input type="gender" name="gender" id="gender" placeholder="Your Gender"/>
                            </div>
                           <div class="form-group">
                                <label for="height"><i class="zmdi zmdi-email"></i></label>
                                <input type="height" name="height" id="height" placeholder="Your Height"/>
                            </div>
                            <div class="form-group">
                                <label for="weight"><i class="zmdi zmdi-email"></i></label>
                                <input type="weight" name="weight" id="weight" placeholder="Your Weight"/>
                            </div>
                            <div class="form-group">
                                <label for="image"><i class="zmdi zmdi-email"></i></label>
                                <input type="image" name="image" id="image" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="status"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div><div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div> -->
                                               
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
       

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>