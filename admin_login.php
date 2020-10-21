<?php
    
    if(isset($_POST['loginbutton'])){
									
        if (!empty($_POST["username"]) && !empty($_POST["password"])) {
            if($_POST["username"] == "admin" && $_POST["password"] == "qwerty" ){
                header("Location:dashboard.php");
            }
        }
        
    }

?>





<!DOCTYPE html>
<html lang="zxx">

<head>
<?php include_once('links.php'); ?>
    
</head>

<body>
<?php include_once('header.php'); ?>

<div class="container d-flex justify-content-center" style="padding-top:200px; padding-bottom:200px; padding-left:100px;">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 login-text wow fadeIn">
                <h1>Admin Login</h1>
                <p>Use the form to login if you have admin rights.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-sm-offset-3 login-box wow fadeInUp">
 
                <div class="l-form-top">
                    <div class="l-form-top-left">
                        <h3>Sign in</h3>
                        <p>Enter your username and password to log in:</p>
                    </div>
                    <div class="l-form-top-right">
                        <i class="fa fa-lock"></i>
                    </div>
                </div>
                <div class="l-form-bottom">
                    <form role="form" action="" method="post">
                        <div class="form-group">
                            <label class="sr-only" for="username">Username</label>
                            <input type="text" name="username" placeholder="Username..." class="l-form-username form-control" id="l-form-username">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="password">Password</label>
                            <input type="password" name="password" placeholder="Password..." class="l-form-password form-control" id="l-form-password">
                        </div>
                        <button type="submit" class="btn" name="loginbutton">Sign in!</button>
                        <div class="checkbox">
                            <input type="checkbox" id="remember-me" class="styled">
                            <label for="remember-me">Remember me</label>
                        </div>
                    </form>
                </div>
 
            </div>
        </div>
        </div>
        <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-logo">
                        <a href="#"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row pb-50">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Location</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-map-marker"></i>
                            <p>1525 Boring Lane, <br />Los Angeles, CA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Reception</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+1 (603)535-4592</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Shuttle Service</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+1 (603)535-4592</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Restaurant</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+1 (603)535-4592</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>