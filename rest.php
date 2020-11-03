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

<link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@200&display=swap" rel="stylesheet">
    
</head>

<body>

<style>
.bg-image {
  background-size: cover;
  background-attachment: fixed; }

.bg-image-2 {
  background-size: cover;
  background-position: center center; }

.food-menu-tabs {
  text-align: center; }
  .food-menu-tabs .nav-tabs {
    text-align: center;
    display: inline-block;
    text-transform: uppercase;
    border-bottom: none; }
    .food-menu-tabs .nav-tabs li {
      display: inline-block; }
      .food-menu-tabs .nav-tabs li a {
        border: none;
        background: none;
        font-size: 1.9rem;
        font-weight: bold;
        position: relative;
        display: block; }
        .food-menu-tabs .nav-tabs li a:before {
          -webkit-transition: .3s all ease;
          -o-transition: .3s all ease;
          transition: .3s all ease;
          content: "";
          position: absolute;
          bottom: 0;
          left: 16px;
          right: 20px;
          height: 2px;
          background: transparent; }
        .food-menu-tabs .nav-tabs li a.active {
          border: none;
          background: none;
          color: #fff; }
          .food-menu-tabs .nav-tabs li a.active:before {
            background: #fff; }

.bg-image {
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  position: relative;
  z-index: 1; }
  .bg-image.overlay {
    position: relative; }
    .bg-image.overlay > .container {
      position: relative;
      z-index: 3; }
    .bg-image.overlay:before {
      z-index: 2;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      content: "";
      background: rgba(0, 0, 0, 0.6); }


      .nav-link{
        color:  #f5c242;
        font-family: 'Grandstander', cursive; 
     
      }
</style>


<?php include_once('header.php'); ?>


    <!-- Hero Section Begin -->
    <section class="hero-section set-bg">
       <div class="col-lg-10 offset-lg-1">
                    <h2 style="font-size: 48px; ">Enjoy food with us</h2>
                    <p data-aos="fade-up" data-aos-delay="100">We all enjoy delicious food,
Makes us happy, fixes our mood.
It's all about the juicy taste,
Doesn't matter, where the food is placed.</p>
            </div>
    </section>
    <!-- Hero Section End -->

    <section class="section bg-image overlay" style="background-image: url('img/hero_3.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h1 class="heading text-white" style="font-family: 'Grandstander', cursive;">Our Restaurant Menu</h1>
            <p class="text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="food-menu-tabs">
          <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link letter-spacing-2" id="mains-tab" data-toggle="tab" href="#mains" role="tab" aria-controls="mains" aria-selected="true" >Mains</a>
            </li>
            <li class="nav-item">
              <a class="nav-link letter-spacing-2" id="desserts-tab" data-toggle="tab" href="#desserts" role="tab" aria-controls="desserts" aria-selected="false">Desserts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link letter-spacing-2" id="drinks-tab" data-toggle="tab" href="#drinks" role="tab" aria-controls="drinks" aria-selected="false">Drinks</a>
            </li>
          </ul>
          <div class="tab-content py-5" id="myTabContent">
            
            
            <div class="tab-pane fade show active text-left" id="mains" role="tabpanel" aria-labelledby="mains-tab">
              <div class="row">
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-warning h4 mb-3">$20.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Murgh Tikka Masala</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-warning h4 mb-3">$35.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Fish Moilee</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-warning h4 mb-3">$15.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Safed Gosht</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-warning h4 mb-3">$10.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">French Toast Combo</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-warning h4 mb-3">$8.35</span>
                    <h3 class="text-white"><a href="#" class="text-white">Vegie Omelet</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-warning h4 mb-3">$22.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Chorizo &amp; Egg Omelet</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
              </div>
              

            </div> <!-- .tab-pane -->

            <div class="tab-pane fade text-left" id="desserts" role="tabpanel" aria-labelledby="desserts-tab">
              <div class="row">
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-warning h4 mb-3">$11.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Banana Split</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-warning h4 mb-3">$72.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Sticky Toffee Pudding</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-warning h4 mb-3">$26.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Pecan</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-warning h4 mb-3">$42.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Apple Strudel</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-warning h4 mb-3">$7.35</span>
                    <h3 class="text-white"><a href="#" class="text-white">Pancakes</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-warning h4 mb-3">$22.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Ice Cream Sundae</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
              </div>
            </div> <!-- .tab-pane -->
            <div class="tab-pane fade text-left" id="drinks" role="tabpanel" aria-labelledby="drinks-tab">
              <div class="row">
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-warning h4 mb-3">$32.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Spring Water</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-warning h4 mb-3">$14.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Coke, Diet Coke, Coke Zero</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-warning h4 mb-3">$93.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Orange Fanta</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="food-menu mb-5">
                    <span class="d-block text-warning h4 mb-3">$18.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Lemonade, Lemon Squash</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-warning h4 mb-3">$38.35</span>
                    <h3 class="text-white"><a href="#" class="text-white">Sparkling Mineral Water</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="food-menu mb-5">
                    <span class="d-block text-warning h4 mb-3">$69.00</span>
                    <h3 class="text-white"><a href="#" class="text-white">Lemon, Lime &amp; Bitters</a></h3>
                    <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
              </div>
            </div> <!-- .tab-pane -->
          </div>
        </div>
      </div>
    </section>


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
                        <i class="flaticon-013-safety-box"></i>
                        <h4>Safty Box</h4>
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
                        <i class="flaticon-033-dinner"></i>
                        <h4>Restaurant</h4>
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