<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Boxnsell</title>
    <meta name="author" content="intoiit.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- FAVICON  -->
    <link rel="icon" href="images/favicon/favicon.png">
    
    <!-- =========================
       STYLESHEETS 
    ============================== -->
    
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="css/plugins/bootstrap.min.css">

    <!-- FONT ICONS -->
    <!-- <link rel="stylesheet" href="css/icons/icons.min.css"> -->
     
    <!-- GOOGLE FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:300,400,600,700%7COpen+Sans:300,400,600,700%7CHandlee" rel="stylesheet">
    
    <!-- PLUGINS STYLESHEET -->
    <link rel="stylesheet" href="css/plugins/plugins.min.css">
    
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- RESPONSIVE FIXES -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- COLORE STYLESHEET -->
    <!-- Change here the Main Color of the Site: Choose your favorite predefined color from assets/css/colors.css -->
    <link rel="stylesheet" href="css/color-theme.css" title="red">
    
    
    <!--[if lt IE 9]>
            <script src="js/plugins/html5shiv.min.js"></script>
            <script src="js/plugins/respond.min.js"></script>
    <![endif]-->


</head>
<style>
    @font-face {
        font-family: FontAwesome;
        src: url(css/FontAwesome.otf);

</style>
<body>
    <div class="main-wrapper">
        
        <!-- =========================
             PRELOADER
        ============================== -->
        <div class="preloader">
            <div class="loader-container">
                <div class="signal"></div>
            </div>
        </div> 
        

        <!-- =========================
             HEADER
        ============================== -->
        <header class="header" id="top" data-stellar-background-ratio="0.5">
            <!-- Background Overlay -->
            <div class="overlay">

                <!-- =========================================
                     Navigation
                ========================================== -->
                <nav class="navbar navbar-fixed-top" role="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Navbar-Header -->
                                <div class="navbar-header">
                                    
                                    <!-- Mobile Menu -->
                                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                        <i class="icon icon_menu"></i>
                                    </button>

                                    <!-- Text-Logo -->

                                    <a href="#top" class="scrollto logo">
                                        <img src="images/logo.png">
                                    </a>

                                </div><!-- /End Navbar-Header -->

                                <!-- Navbar-Collapse -->
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <!-- Menu Items -->
                                        <li><a href="#about" title="" class="scrollto">About</a></li>
                                        <li><a href="#features" title="" class="scrollto">Features</a></li>
                                        <li><a href="#mobile-download" title="" class="scrollto">Download App</a></li>
                                        <li><a class="btn btn-nav btn-color" href="https://intoiit.com/#contact">Visit Website</a></li>
                                    </ul>
                                </div><!-- /End Navbar-Collapse -->
                            </div><!-- /End Col -->
                        </div><!-- /End Row -->
                    </div><!-- /End Container -->
                </nav><!-- /End Sticky Navigation -->


                <!-- =========================================
                     Login/Signup Bootstrap Modal
                ==========================================  -->
                <div class="modal fade login" id="loginModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            
                            <!-- Modal-Header -->
                            <div class="modal-header">
                                <!-- Close Button -->
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <i class="icon icon_close_alt2"></i>
                                </button>
                                <!-- Modal-Header Title-->
                                <h4 class="modal-title">Sign in to <span>boxnsell</span></h4>
                                <p class="modal-subtitle">Enter your email and password</p>
                            </div><!-- /End Modal-Header -->

                            <!-- Modal-Body Content -->
                            <div class="modal-body">  
                                <div class="box">
                                     <div class="content">
                                        <!-- Login Form -->
                                        <div class="loginBox">
                                            <form id="login-modal" role="form">
                                                <!-- Success/Alert Notification -->
                                                <p class="lm-success"><i class="icon icon_check_alt2"></i> <strong>Congratulation! Login modal validation is working. Implement your code.</strong></p>
                                                <p class="lm-failed"><i class="icon icon_close_alt2"></i><strong> Something went wrong! Insert correct value.</strong></p>
                                                <!-- Input Fields -->
                                                <input id="lm-email" class="form-control input-lg" type="text" placeholder="Email" name="lm-email" required>
                                                <input id="lm-password" class="form-control input-lg" type="password" placeholder="Password" name="lm-password" required>
                                                <!-- Login Button -->
                                                <button class="btn btn-color">Login</button>
                                            </form>
                                        </div><!-- /End Login Form -->
                                     </div>
                                </div><!-- /End Login Form Box -->
                                <div class="box">
                                    <!-- Signup Form -->
                                    <div class="content registerBox" style="display:none;">
                                        <form id="signup-modal" role="form">
                                            <!-- Success/Alert Notification -->
                                            <p class="sm-success"><i class="icon icon_check_alt2"></i> <strong>Congratulation! Signup modal validation is working. Implement your code.</strong></p>
                                            <p class="sm-failed"><i class="icon icon_close_alt2"></i><strong> Something went wrong! Insert correct value.</strong></p>
                                            <!-- Input Fields -->
                                            <input id="sm-email" class="form-control input-lg" type="text" placeholder="Email" name="sm-email" required>
                                            <input id="sm-password" class="form-control input-lg" type="password" placeholder="Password" name="sm-password">
                                            <input id="sm-confirm" class="form-control input-lg" type="password" placeholder="Repeat Password" name="sm-confirm">
                                            <!-- Signup Button -->
                                            <button class="btn btn-color">Create Account</button>
                                        </form>
                                        
                                    </div><!-- /End Signup Form -->
                                </div><!-- /End Signup Form Box -->
                            </div><!-- /End Modal-Body -->

                            <!-- Modal-Footer -->
                            <div class="modal-footer">
                                <!-- Login-Footer. Redirect to Signup-Modal-->
                                <div class="forgot login-footer">
                                    <span>Don't have an account? 
                                         <a href="javascript: showRegisterForm();">Sign up.</a>
                                    </span>
                                </div>
                                <!-- Signup-Footer. Redirect to Login-Modal -->
                                <div class="forgot register-footer" style="display:none">
                                     <span>Already have an account?</span>
                                     <a href="javascript: showLoginForm();">Login</a>
                                </div>
                            </div><!-- /End Modal-Footer -->      
                          
                        </div><!-- /End Modal Content -->
                    </div><!-- /End Modal Dialog -->
                </div><!-- /End Modal -->

                
                <!-- =========================================
                     Hero-Section
                ========================================== -->
                <div class="container vmiddle">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="hero-section">
                                
                                <!-- Welcome - Hero Message -->
                                <h1 class="text-white">Connecting buyers and sellers</h1>
                                <p class="text-white">Find your favourite box package.</p>

                            </div><!-- /End Intro-Section -->
                        </div><!-- /End Col -->
                    </div><!-- /End Row -->
                </div><!-- /End Container Hero-Section -->


            </div><!-- /End Background Overlay -->
        </header>
        <!-- =========================
             /END HEADER
        ============================== -->

        
        <!-- =================================
             SECTION ABOUT - INTRO FEATURES
        ====================================== -->
        <section class="intro-features" id="about">
            <div class="container">
                <!-- Padding -->
                <div class="wrapper-lg">
                    <div class="row">
                        <!-- Section Header Title -->
                        <div class="col-xs-12">
                            <h2>It’s about making the best deal.</h2>
                            <p class="large">Post your package for sell.</p>
                        </div>
                    </div>
                    <!-- Three Main Features with Icons -->
                    <div class="row">
                        <div class="col-sm-4 intro-content">
                            <div class="icon-lg">
                                <i class="fa fa-archive" aria-hidden="true"></i>
                            </div>
                            <h4>Box</h4>
                            <p>Box your items</p>
                        </div>
                        <div class="col-sm-4 intro-content">
                            <div class="icon-lg">
                                <i class="fa fa-link" aria-hidden="true"></i>
                            </div>
                            <h4>Connect</h4>
                            <p>Connect with Buyers and Sellers</p>
                        </div>
                        <div class="col-sm-4 intro-content">
                            <div class="icon-lg">
                                <i class="fa fa-handshake-o" aria-hidden="true"></i>
                            </div>
                            <h4>Negotiate</h4>
                            <p>Negotiate best deal</p>
                        </div>
                    </div><!-- /End Row -->

                    <div class="row">
                        <div class="col-md-12">
                            <hr class="content-seperator">
                        </div>
                    </div>


                    <div class="smart-phonelayout-showcase">
                        <div class="row showcase">
                            <div class="col-md-4">
                                <h4>Our products are cloud based and no hassle of IT infrastructure for your business</h4>
                                <p>We are working towards providing our applications across all devices. We create our products users in mind, and try to make it simple and intuitive for our users and clients. Creativity, simplicity and quality of service are our main focus in building products.</p>
                                <p><a href="#mobile-download" class="scrollto"><strong>Download the App for your smartphone ›</strong></a></p>
                            </div>
                            <div class="col-md-8">
                                <!-- Devices Image -->
                                <div class="img-box">
                                    <img src="images/zingjobs-showcase.png" alt="" class="img-responsive">
                                    <!-- <a href="http://youtu.be/SZEflIVnhH8" data-type="youtube" class="venobox video-player"><i class="icon arrow_triangle-right_alt2 wow fadeIn" data-wow-duration="2s"></i></a> -->
                                </div>
                            </div>
                        </div><!-- /End Chart-Box -->
                    </div><!-- END .smart-phonelayout-showcase -->

                </div><!-- /End Wrapper -->
            </div><!-- /End Container -->
        </section>
        <!-- =============================
             /END INTRO FEATURES
        ============================== -->
        
        
        <!-- ==================================================
            FEATURES SECTION
        ======================================================= -->
        <section class="tab-features color-bg" id="features">
            <div class="container">
                <div class="features-title">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-white">Explore Features</h2>
                            <p class="large text-white">Boxnsell is more than just a product, it's a way of thinking.</p>
                        </div>
                        <div class="col-md-12">
                            <ul class="feature-items">
                                <li>
                                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                                    <h5>Manage buy and sell process</h5>
                                </li><li>
                                    <i class="fa fa-file" aria-hidden="true"></i>
                                    <h5>Create your own account.</h5>
                                </li><li>
                                    <i class="fa fa-link" aria-hidden="true"></i>
                                    <h5>Intuitive interface and dashboard
                                    </h5>
                                </li><li>
                                    <i class="fa fa-coffee" aria-hidden="true"></i>
                                    <h5>Social tools</h5>
                                </li><li>
                                    <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                                    <h5>Analytics</h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =============================
             /END FEATURES TAB
        ============================== -->
        
            
        <!-- ==================================================
            MOBILE DOWNLOAD SECTION
        ======================================================= -->
        <section class="mobile-download light-bg" id="mobile-download">
            <div class="container">
                <div class="wrapper-lg">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Download the App</h2>
                            <p class="large">We have just launched our web version, and soon we will bring you the android and ios app version.</p>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Text and Mobile Download Buttons -->
                        <div class="col-sm-6 col-md-4">
                            <h3>Supercharge your Productivity</h3>
                            <p class="mobile-text">With an online dashboard and a mobile app, you'll have full control of your account and see your usage in real-time. <span class="text-color">Even more convenient!</span></p>
                            <a href="#" class="btn btn-color"><i class="icon icon_cloud-download_alt"></i>Download Now!!</a>
                        </div>
                      
                        <div class="col-sm-6 col-md-4">
                            <!-- Screenshot Carousel -->
                            <div class="shot-container">
                                <div id="owl-carousel-shots-phone" class="owl-carousel">
                                    <div class="owl-container text-center shots-modal">
                                        <img src="images/app-screenshots/zingjobs 1.jpg" alt="" title="this is the title" />
                                    </div>
                                    <div class="owl-container text-center shots-modal">
                                        <img src="images/app-screenshots/zingjobs 2.jpg" alt="" title="this is the title" />
                                    </div>
                                    <div class="owl-container text-center shots-modal">
                                        <img src="images/app-screenshots/zingjobs 3.jpg" alt="" title="this is the title" />
                                    </div>
                                </div><!-- /End owl carousel-->
                            </div><!-- /End Container -->
                        </div>

                        <div class="col-sm-12 col-md-4 right-features">
                            <!-- More Features -->
                            <div class="col-sm-4 col-md-12">
                                <h4>Cart System:</h4>
                                <p>Add your desired box in the cart.</p>
                            </div>
                            <div class="col-sm-4 col-md-12">
                                <h4>Offer Management:</h4>
                                <p>Post offers and buy boxes from the same account.</p>
                            </div>
                            <div class="col-sm-4 col-md-12">
                                <h4>Analytics:</h4>
                                <p>Analytics to better and efficiently manage your offer posting.</p>
                            </div>
                        </div>
                    </div><!-- /End Row -->
                </div><!-- /End Wrapper -->
            </div><!-- /End Container -->
        </section>
        <!-- =============================
             /END MOBILE DOWNLOAD SECTION 
        ============================== -->

        
        <!-- ==================================================
            NEWSLETTER AND SOCIAL DIVIDER
        ======================================================= -->
        <section class="newsletter color-bg" id="newsletter">
            <div class="container">
                <div class="wrapper-sm">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- =========================
                                Social Icons
                            ============================== -->
                            <div class="table">
                                <div class="table-row">
                                    <div class="table-cell">
                                        <ul class="social-list">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- /End Table-Cell -->
                                </div><!-- /End Table-Row -->
                            </div><!-- /End Table -->
                        </div><!-- /End Col -->
                    </div><!-- /End Row -->
                </div><!-- End Wrapper -->
            </div><!-- /End Container -->
        </section>
        <!-- =============================
             /END NEWSLETTER SECTION 
        ============================== -->
        
        
        <!-- ==================================================
            FOOTER
        ======================================================= -->
        <footer class="footer dark-bg" id="footer">
            <div class="container">
                    <div class="row">
                            <div class="col-md-12">
<!--                                <a href="../" class="logo"><img src="images/intoiit-logo.png"></a>-->
<!--                                 <ul class="footer-links">
                                    <li><a href="terms.php#terms">Terms & conditions</a></li>
                                    <li><a href="privacy.php#privacy">Privacy policy</a></li>
                                </ul> -->
                                <p class="footer-copy">&copy; 2015 - <a href="../" class="logo"><img style="width:70px;" src="images/intoiit-logo.png"></a></p>
                            </div>
                        
                    </div><!-- End Row -->
            </div><!-- /End Container -->
        </footer>

    </div><!-- /End Main Wrapper -->


    <!-- =========================
         SCRIPTS 
    ============================== -->
    <script src="js/plugins/jquery1.11.0.min.js"></script>
    <script src="js/plugins/bootstrap.min.js"></script>
    <script src="js/plugins/jquery.easing.1.3.min.js"></script>
    <script src="js/plugins/modernizr.custom.min.js"></script>
    <script src="js/plugins/plugins.min.js"></script>
    <script src="js/plugins/twitter/tweetie.min.js"></script>
    <!-- Custom Script -->
    <script src="js/custom.js"></script>

    

</body>
</html>