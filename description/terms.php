<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Zingjobs</title>
    <meta name="author" content="Zingjobs.com">
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
                                        <li><a href="index.php#about" title="" class="scrollto">About</a></li>
                                        <li><a href="index.php#features" title="" class="scrollto">Features</a></li>
                                        <li><a href="index.php#mobile-download" title="" class="scrollto">Download App</a></li>
                                        <li><a class="btn btn-nav btn-color" href="index.php">Visit Website</a></li> 
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
                                <h4 class="modal-title">Sign in to <span>Zingjobs</span></h4>
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
                                <h1 class="text-white">Connecting job seekers and providers</h1>
                                <p class="text-white">Find your next dream job.</p>

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
             SECTION Terms & Conditions
        ====================================== -->
        <section id="terms">
            <div class="container">
                <!-- Padding -->
                <div class="wrapper-lg">
                    <div class="row">
                        <!-- Section Header Title -->
                        <div class="col-xs-12">
                            <h2>Terms & conditions</h2>                            
                        </div>
                    </div>
                    <p>Effective Date: February 27, 2012.</p>

                        <p>Zingjobs, INC (hereinafter "Zingjobs") takes your privacy seriously and has adopted this Privacy Policy (hereinafter "Privacy Policy") to inform you of its collection, disclosure, and use of personal and personally identifiable information through your use of the Zingjobs.com website and associated content (hereinafter "Website").</p>

                        <p>Zingjobs may, from time to time, change, modify, amend, or replace this Privacy Policy. In the event that Zingjobs changes, modifies, amends, or replaces this Privacy Policy, the Effective Date located above will change. Your use of the Website after a change in the Effective Date constitutes your manifestation of assent to any change, modification, amendment, or replacement of this Privacy Policy and the terms contained therein.</p>

                        <ol type="1">
                            <li>
                                <b>Information Collected</b> <p>Zingjobs may collect personal or personally identifiable information from you through your use of the Website, which may include but is not limited to your first name, last name, address, email address, date of birth, country, business name, website URL, IP address, geographical location, comments, links, posts, threads, feedback, reviews, photographs, interests, and preferences (collectively "Personal Information").</p>

                                <p>Zingjobs may collect Personal Information from you through various channels, including but not limited to through your voluntary submission of information to the Website, through the collection and analysis of information concerning your computer and browsing activities, through the use of cookies, web beacons, and pixel tags, and through other sources permitted by law.</p>

                            </li>
                            <li>
                                <b>Use of Personal Information</b> <p>Zingjobs may use Personal Information collected from you to provide you with the Website, to respond to requests that you have initiated, to customize the Website or its associated services, to improve your experience on the Website, and to communicate with you to update you on Zingjobs's Website or services.</p>
                                <p>By providing any Personal Information to Zingjobs, you understand and agree that Zingjobs will collect and process your Personal Information in the United States; you provide your unequivocal consent to the collection and processing of your Personal Information in the United States.</p>
                                <p>Zingjobs may share your Personal Information: (1) with third parties where it has obtained your consent; (2) with third party service providers to provide you with services initiated at your request; (3) with Zingjobs's parents, subsidiaries, successors, and assigns; and (4) with Zingjobs's business partners who offer services through or in association with the Website.</p>
                                <p>Except as stated above, Zingjobs will not sell, rent, lease, or transfer your Personal Information to any individual, business, or government entity except to respond to duly authorized information requests by government authorities, to respond to a duly authorized court order or subpoena, to protect the officers, directors, employees, shareholders, or independent contractors of Zingjobs, or to help prevent against fraud or the violation of any applicable law, statute, regulation, ordinance, or treaty.</p>
                                <p>The Personal Information that you provide to Zingjobs may be displayed on your profile page, which may be accessible to all users of the Website. You may limit third parties' ability to view your Personal Information by changing your Member Account settings.</p>
                                <p>You understand and agree that Zingjobs is not responsible for any third party links, content, or communications sent to you from entities or individuals that Zingjobs does not own or control. You are advised to review the privacy policies of all third party websites.</p>
                            </li>
                            <li>
                                <b>Use of Cookies and Other Tracking Techniques</b> <p>Zingjobs may collect Personal Information from you through the storage of data files on your computer called "cookies." These cookies allow the Website to recognize your computer when you revisit the Website. Additionally, Zingjobs may collect Personal Information from you through the use of "session cookies," which help Zingjobs track the pages that you visit during a single use of the Website to ensure that users are not required to re-enter their usernames and passwords upon accessing each page of the Website. These session cookies will expire once you leave the Website.</p>
                                <p>Your web browser may provide you with the ability to block or limit cookies. If you object to Zingjobs's use of cookies, you are advised to adjust your web browser's settings accordingly.</p>
                                <p>Zingjobs or its advertisers may also collect Personal Information from you through the use of pixel tags, web beacons, or other tracking techniques. This Personal Information may be used for advertising purposes, whether contextual or otherwise, and may be shared with Zingjobs's advertisers to provide its advertisers with information on the demographics or preferences of the Website's users.</p>
                            </li>
                            <li>
                                <b>Accuracy of Information, User Choice and Opt-Out</b> <p>In the event Zingjobs allows you to create a Member Account, you will have the opportunity to update components of your Personal Information. You may opt-out of Zingjobs's collection of your Personal Information by deleting your Member Account and by ceasing your use of the Website.</p><p>
                                </p><p>You are responsible for ensuring that your Personal Information is accurate, complete, current, and relevant. You have an ongoing duty to inform Zingjobs of any changes in your Personal Information.</p>
                            </li>
                            <li>
                                <b>Protection and Storage of Personal Information</b> <p>Zingjobs undertakes commercially reasonable procedures to help protect your Personal Information from disclosure. Though Zingjobs takes the security of your Personal Information very seriously, Zingjobs cannot guarantee that its servers and Website are completely secure. Zingjobs uses commercially reasonable efforts to protect your Personal Information, but you provide any and all Personal Information at your own risk.</p>
                            </li>
                            <li>
                                <b>Purchase or Sale of a Business Unit or Subsidiary</b> <p>Zingjobs may, from time to time, purchase or sell a business unit or subsidiary. In the event Zingjobs purchases or sells a business unit or subsidiary, your Personal Information may be transferred to a third party. If this occurs, your Personal Information will continue to be used consistent with the terms of this Privacy Policy.</p>
                            </li>
                            <li>
                                <b>California Privacy Rights</b> <p>California residents have the right to receive information that identifies any third party companies or individuals that Zingjobs has shared your Personal Information with in the previous calendar year, as well as a description of the categories of Personal Information disclosed to that third party. You may obtain this information once a year and free of charge by contacting Zingjobs at <a href="mailto:contact@zingjobs.com">contact@zingjobs.com</a>. </p>
                            </li>
                            <li>
                                <b>Contact and Notices</b> <p>All questions and concerns regarding this Privacy Policy may be directed to Zingjobs, by emailing <a href="mailto:contact@zingjobs.com">contact@zingjobs.com</a>.</p>
                            </li>
                        </ol>
                </div><!-- /End Wrapper -->
            </div><!-- /End Container -->
        </section>
        <!-- =============================
             /END Terms & Conditions
        ============================== -->        
       
        
        
        <!-- ==================================================
            FOOTER
        ======================================================= -->
        <footer class="footer dark-bg" id="footer">
            <div class="container">
                    <div class="row">
                            <div class="col-md-12">
                                <a href="../" class="logo"><img src="images/intoiit-logo.png"></a>
                                <ul class="footer-links">
                                    <li><a href="terms.html#terms">Terms & conditions</a></li>
                                    <li><a href="privacy.html#privacy">Privacy policy</a></li>
                                </ul>
                                <p class="footer-copy">&copy; 2015 - Zingjobs Inc.</p>
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