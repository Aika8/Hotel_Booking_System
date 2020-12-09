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
    <section class="hero-section set-bg" data-setbg="img/services-bg.jpg">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Gallery</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->

        <!--begin modal window-->
        <div class="modal fade" id="galleryModal">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <div class="pull-left">Our gallery</div>
        <button type="button" class="close" data-dismiss="modal" title="Close"> <span class="glyphicon glyphicon-remove"></span></button>
        </div>
        <div class="modal-body">

        <!--begin carousel-->
            <div id="myGallery" class="carousel" data-interval="false">
            <div class="carousel-inner">
            <div class="item active"> <img src="img/services/services-1.jpg" alt="item0">
            <div class="carousel-caption">
            
            </div>
            </div>
            <div class="item"> <img src="img/services/services-2.jpg" alt="item1">
            <div class="carousel-caption">
            
            </div>
            </div>
            <div class="item"> <img src="img/services/services-3.jpg" alt="item2">
            <div class="carousel-caption">
            
            </div>
            </div>
            <div class="item"> <img src="img/services/services-4.jpg" alt="item3">
            <div class="carousel-caption">
            
            </div>
            </div>
            <div class="item"> <img src="img/services/services-5.jpg" alt="item4">
            <div class="carousel-caption">
            
            </div>
            </div>
            <div class="item"> <img src="img/services/services-6.jpg" alt="item5">
            <div class="carousel-caption">
            
            </div>
            </div>
            <!--end carousel-inner--></div>
            <!--Begin Previous and Next buttons-->
            <a class="left carousel-control" href="#myGallery" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> 
            <a class="right carousel-control" href="#myGallery" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
            <!--end carousel--></div>

        <!--end modal-body--></div>
        <div class="modal-footer">
        <div class="pull-left">
        </div>
        <button class="btn-sm close" type="button" data-dismiss="modal">Close</button>
        <!--end modal-footer--></div>
        <!--end modal-content--></div>
        <!--end modal-dialoge--></div>
        <!--end myModal--></div>








    <section class="services-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6 works-item filter-web" data-toggle="modal" data-target="#galleryModal">
                <a href="#myGallery" data-slide-to="0">
                    <div class="single-services-item">
                        <div class="services-pic-item">
                            <img class="img-thumbnail" src="img/services/services-1.jpg" alt="">
                        </div>
                        <div class="services-text">
                            <h2>Outdoor Pool</h2>
                        </div>
                    </div>
                </a>
                </div>
                <div class="col-lg-3 col-sm-6 works-item filter-web" data-toggle="modal" data-target="#galleryModal">
                <a href="#myGallery" data-slide-to="1">
                    <div class="single-services-item">
                        <div class="services-pic-item">
                            <img class="img-thumbnail" src="img/services/services-2.jpg" alt="">
                        </div>
                        <div class="services-text">
                            <h2>Restaurant</h2>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 works-item filter-web" data-toggle="modal" data-target="#galleryModal">
                <a href="#myGallery" data-slide-to="2">
                    <div class="single-services-item">
                        <div class="services-pic-item">
                            <img class="img-thumbnail" src="img/services/services-3.jpg" alt="">
                        </div>
                        <div class="services-text">
                            <h2>SPA & Wellnes</h2>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 works-item filter-web" data-toggle="modal" data-target="#galleryModal">
                <a href="#myGallery" data-slide-to="3">
                    <div class="single-services-item">
                        <div class="services-pic-item">
                            <img class="img-thumbnail" src="img/services/services-4.jpg" alt="">
                        </div>
                        <div class="services-text">
                            <h2>Coffee Shop</h2>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 works-item filter-web" data-toggle="modal" data-target="#galleryModal">
                <a href="#myGallery" data-slide-to="4">
                    <div class="single-services-item changed-align">
                        <div class="services-pic-item">
                            <img class="img-thumbnail" src="img/services/services-5.jpg" alt="">
                        </div>
                        <div class="services-text">
                            <h2>Executive<br /> Conference<br /> Room</h2>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 works-item filter-web" data-toggle="modal" data-target="#galleryModal">
                <a href="#myGallery" data-slide-to="5">
                    <div class="single-services-item changed-align">
                        <div class="services-pic-item">
                            <img class="img-thumbnail" src="img/services/services-6.jpg" alt="">
                        </div>
                        <div class="services-text">
                            <h2>Events<br /> Conference<br /> Venue</h2>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 works-item filter-web" data-toggle="modal" data-target="#galleryModal">
                <a href="#myGallery" data-slide-to="6">
                    <div class="single-services-item">
                        <div class="services-pic-item">
                            <img class="img-thumbnail" src="img/services/services-7.jpg" alt="">
                        </div>
                        <div class="services-text">
                            <h2>Weddings</h2>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 works-item filter-web" data-toggle="modal" data-target="#galleryModal">
                <a href="#myGallery" data-slide-to="7">
                    <div class="single-services-item">
                        <div class="services-pic-item">
                            <img class="img-thumbnail" src="img/services/services-8.jpg" alt="">
                        </div>
                        <div class="services-text">
                            <h2>Gym</h2>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Services Section End -->
    <section class="features-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Features</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-043-room-service"></i>
                        <h4>Room Service</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-007-swimming-pool"></i>
                        <h4>Pool</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-013-safety-box"></i>
                        <h4>Safty Box</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-033-dinner"></i>
                        <h4>Restaurant</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-029-wifi"></i>
                        <h4>Wi-fi</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-003-air-conditioner"></i>
                        <h4>Air Conditioner</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-033-dinner"></i>
                        <h4>Restaurant</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-020-telephone"></i>
                        <h4>Phone</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-019-television"></i>
                        <h4>Smart TV</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-040-key-card"></i>
                        <h4>Smart Key</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-009-cctv"></i>
                        <h4>24/7 Security</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-036-parking"></i>
                        <h4>Free Parking</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

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