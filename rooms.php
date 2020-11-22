
<!DOCTYPE html>
<html lang="zxx">

<head>
<?php include_once('links.php'); ?>
</head>

<body>
<?php include_once('header.php'); ?>


    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="img/rooms-bg.jpg">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Rooms</h1>
                    </div>
                </div>
                <div class="page-nav">
                    <a href="./about-us.php" class="left-nav"><i class="lnr lnr-arrow-left"></i> About</a>
                    <a href="./news.php" class="right-nav">News <i class="lnr lnr-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Rooms Section Begin -->
    <section class="room-section spad">
        <div class="container">
        <?php 

            $sql=mysqli_query($con,"select * from room_type");
            while($res=mysqli_fetch_assoc($sql))
            {
            $id=$res['id'];	
            $name = $res['name'];
            $description = $res['description'];
            $price = $res['price'];

        ?>
            <div class="rooms-page-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-pic-slider owl-carousel">
                            <div class="single-room-pic">
                                <img src="<?php echo 'img/room/rooms-'.($id > 5 ? round($id/5): $id).'.jpg'?>" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src=" <?php echo 'img/room/rooms-'.(($id+1) > 5 ? round(($id+1)/5): ($id+1)).'.jpg'?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="room-text">
                            <div class="room-title">
                                <h2><?php echo $name ?></h2>
                                <div class="room-price">
                                    <span>From</span>
                                    <h2>$<?php echo $price ?></h2>
                                    <sub>/night</sub>
                                </div>
                            </div>
                            <div class="room-desc">
                                <p><?php echo $description ?></p>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <i class="flaticon-019-television"></i>
                                    <span>Smart TV</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <span>High Wi-fii</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <span>AC</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-036-parking"></i>
                                    <span>Parking</span>
                                </div>
                                <div class="room-info last">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <span>Pool</span>
                                </div>
                            </div>
                            <form method = "POST" action="">
                                <input type="hidden" value="<?php echo $name ?>" name="title">
                                <input type="hidden" value="$<?php echo $price ?>" name="price">
                            <button type="submit" class="primary-btn fac-btn" name="roomButton">Book Now <i class="lnr lnr-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php 	
                }
                ?>	
           
           
        </div>
    </section>
    <!-- Rooms Section End -->

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