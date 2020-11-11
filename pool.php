<!DOCTYPE html>
<html lang="zxx">

<head>
<?php include_once('links.php'); ?>
<!--Bootstrap-->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!--Latest stable release of jQuery Core Library-->
<script src="https://code.jquery.com/jquery-1.12.2.min.js" integrity="sha256-lZFHibXzMHo3GGeehn1hudTAP3Sc0uKXBXAzHX1sjtk=" crossorigin="anonymous"></script> 

<!--Bootstrap JS-->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
</script>
    
</head>

<body>
<?php include_once('header.php'); ?>


    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="img/pool-bg.jpg">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Dream Pool</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <section class="pool-section" style="padding-top: 40px;">

      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          
          
          <div class="col-lg-10 offset-lg-1 mb-3">
                        <h2 style="font-size: 48px;">Photos</h2>
                        <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
        
        
          <div class="col-lg-10 offset-lg-1">
               <!--Carousel Wrapper-->
               <div id="carousel-example-1z" class="carousel slide ml-auto mr-auto" data-ride="carousel" style="max-width: 90%;">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active" style="max-height: 700px;">
                            <img class="d-block h-70" src="img/pool/slider_1.jpg"
                                 alt="First slide" th:src="@{img/phones.jpg}">
                            <div class="carousel-caption d-none d-md-block" style="background: rgba(0, 0, 0, 0.7); border-radius: 20px;">
                                <h5 >Welcome to your dream</h5>
                            </div>
                        </div>
                        <!--/First slide-->
                        <!--Second slide-->
                        <div class="carousel-item" style="max-height: 700px;">
                            <img class="d-block h-70" src="img/pool/slider_2.jpg"
                                 alt="Second slide" th:src="@{img/cheap_phone.jpg}">
                        </div>
                        <!--/Second slide-->
                        <!--Third slide-->
                        <div class="carousel-item" style="max-height: 700px;">
                            <img class="d-block  h-70" src="img/pool/slider_3.jpg"
                                 alt="Third slide" th:src="@{img/telev.jpg}">
                        </div>
                        <!--/Third slide-->
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>
                <!--/.Carousel Wrapper-->


          <div class="about-room my-5">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <h2>“Customers may forget what you said  but they will never forget how you made them feel”.</h2>
                    </div>
                </div>
                <div class="about-para">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus libero mauris,
                                bibendum eget sapien ac, ultrices rhoncus ipsum. Donec nec sapien in urna fermentum
                                ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu vehicula fringilla ut vitae
                                orci. Suspendisse maximus malesuada</p>
                        </div>
                        <div class="col-lg-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at vulputate est.
                                Donec tempor felis at nibh eleifend malesuada. Nullam suscipit lobortis aliquam.
                                Phasellus lobortis ante lorem, vitae scelerisque lacus tempus sed. Phasellus rutrum
                                magna </p>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
      </div>
    </section>


    <?php include_once('footer.php'); ?>

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