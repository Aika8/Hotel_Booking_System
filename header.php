<?php

include('connection.php');

if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}

$show_modal = false;
$modal_message = "";

if(isset($_POST['registerButton'])){

  $firstName = trim($_POST['first_name']);
  $LastName = trim($_POST['last_name']);
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  $passord_hash = password_hash($password, PASSWORD_BCRYPT);

  if($query = $con->prepare("SELECT * FROM guest WHERE email = ?")){
    $query->bind_param('s', $email);
    $query->execute();
    $query->store_result();
    if($query->num_rows > 0){
       $modal_message = "This email address is already registered!";
       $show_modal = true;
    }else{

      $insertQuery = $con->prepare("INSERT INTO guest (first_name, last_name, email, password) VALUES (?, ?, ?, ?);");
      $insertQuery->bind_param("ssss", $firstName, $LastName, $email, $passord_hash);
      $result = $insertQuery->execute();
      if($result){

        $query = "SELECT * FROM guest WHERE email = '$email'";
        $search_result =  mysqli_query($con, $query);
        $row = mysqli_fetch_array($search_result);
        $_SESSION['user'] = $row;
        $_SESSION['userId'] = $row['id'];
        header('Location: '.$_SERVER['PHP_SELF']);
        die;
      }else{
        $modal_message = "oops! Something went wrong. Try again";
        $show_modal = true;
      }
      $insertQuery->close();

    }
  }

}




if(isset($_POST['loginButton'])){

  
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  if($query = "SELECT * FROM guest WHERE email = '$email'"){
    $search_result =  mysqli_query($con, $query);
    if($row = mysqli_fetch_array($search_result)){

       if(password_verify($password, $row['password'])){
        $_SESSION['user'] = serialize($row);
        $_SESSION['userId'] = $row['id'];
        header('Location: '.$_SERVER['PHP_SELF']);
        die;
       }else{
        $modal_message = "The password is not valid";
        $show_modal = true;
       }
    }else{
      $modal_message = "No User exist with that email address";
      $show_modal = true;
    }
  }

}

?>

<?php

if(isset($_POST['roomButton'])){
    if(isset($_SESSION['userId'])){
        header("Location: book.php?title={$_POST['title']}&price={$_POST['price']}");
    }else{
        $modal_message = "To Book room you need to login! ";
        $show_modal = true;
    }
}
?>



    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">


        <div class="modal fade" tabindex="-1" role="dialog" id="myModal" style="background-color: ">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p><?php echo $modal_message?></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>


        <?php if($show_modal):?>
          <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.2.min.js"></script>
        <script>
            jQuery(document).ready(function () {
                jQuery("#myModal").modal("show");
        });
        </script>
        <?php endif;?>


        <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="form"> 
                <ul class="tab-group">
                    <li class="tab active"><a href="#signup">Sign Up</a></li>
                    <li class="tab"><a href="#login">Log In</a></li>
                </ul>
                
                <div class="tab-content">
                    <div id="signup">   
                    <h1>Sign Up for Free</h1>
                    
                    <form action="" method="post">
                    
                    <div class="top-row">
                        <div class="field-wrap">
                        <label>
                            First Name<span class="req">*</span>
                        </label>
                        <input type="text" name="first_name" required autocomplete="off" />
                        </div>
                    
                        <div class="field-wrap">
                        <label>
                            Last Name<span class="req">*</span>
                        </label>
                        <input type="text" name="last_name" required autocomplete="off"/>
                        </div>
                    </div>

                    <div class="field-wrap">
                        <label>
                        Email Address<span class="req">*</span>
                        </label>
                        <input type="email" name="email" required autocomplete="off"/>
                    </div>
                    
                    <div class="field-wrap">
                        <label>
                        Set A Password<span class="req">*</span>
                        </label>
                        <input  type="password" name="password" required autocomplete="off" />
                        <small id="passwordHelpBlock" class="form-text text-muted">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                        </small>
                    </div>
                    
                    <button type="submit" class="button button-block" name="registerButton">Get Started</button>
                    
                    </form>

                    </div>
                    
                    <div id="login">   
                    <h1>Welcome Back!</h1>
                    
                    <form action="" method="post">
                    
                        <div class="field-wrap">
                        <label>
                        Email Address<span class="req">*</span>
                        </label>
                        <input type="email"required autocomplete="off" name="email"/>
                    </div>
                    
                    <div class="field-wrap">
                        <label>
                        Password<span class="req">*</span>
                        </label>
                        <input type="password"required autocomplete="off" name="password"/>
                    </div>
                    
                    <p class="forgot"><a href="#">Forgot Password?</a></p>
                    
                    <button class="button button-block" name ="loginButton" type="submit">Log In</button>
                    
                    </form>

                    </div>
                    
                </div><!-- tab-content -->
                
                </div> <!-- /form -->
                </div>
            </div>
            </div>


            <?php if(isset($_SESSION['user'])):?>
            <?php $user = unserialize($_SESSION['user']) ?>
              <div class="modal fade" id="Profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                  <div class="card-container">
                      <div class="card">
                          <div class="front">
                              <div class="cover">
                                  <img src="https://picsum.photos/200/300"/>
                              </div>
                              <div class="user">
                                  <img class="img-circle" src="https://picsum.photos/200/300"/>
                              </div>
                              <div class="content">
                                  <div class="main">
                                      <h3 class="name"><?php echo $user['first_name'] ?>, <?php echo $user['last_name'] ?></h3>
                                      <p class="profession">Member since <?php echo $user['member_since'] ?></p>
                                      <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                  </div>
                                  <div class="footer">
                                      <i class="fa fa-mail-forward"></i> Auto Rotation
                                  </div>
                              </div>
                          </div> <!-- end front panel -->
                          <div class="back">
                              <div class="header">
                                  <h5 class="motto"><?php echo $user['email'] ?></h5>
                              </div>
                              <div class="content">
                                  <div class="main">
                                      <h4 class="text-center">Additional Information</h4>
                                      <p class="text-center">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>

                                  </div>
                              </div>
                              <div class="footer">
                                  <div class="social-links text-center">
                                      <a href="#" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                      <a href="#" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                      <a href="#" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                  </div>
                              </div>
                          </div> <!-- end back panel -->
                      </div> <!-- end card -->
                  </div> <!-- end card-container -->
                  </div>
                </div>
              </div>

              <script type="text/javascript">
                  $().ready(function(){
                      $('[rel="tooltip"]').tooltip();

                      $('a.scroll-down').click(function(e){
                          e.preventDefault();
                          scroll_target = $(this).data('href');
                          $('html, body').animate({
                              scrollTop: $(scroll_target).offset().top - 60
                          }, 1000);
                      });

                  });

                  function rotateCard(btn){
                      var $card = $(btn).closest('.card-container');
                      console.log($card);
                      if($card.hasClass('hover')){
                          $card.removeClass('hover');
                      } else {
                          $card.addClass('hover');
                      }
                  }


              </script>


            <?php endif;?>


 <?php if(!isset($_SESSION['user'])):?>

            <div class="inner-header">
                <div class="logo">
                    <a href="index.php"><img src="img/logo.png" alt=""></a>
                    <div class="mt-2" >
                        <a href="admin_login.php" style="color: #fff"><span>Admin Panel</span></a>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <nav class="main-menu mobile-menu">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about-us.php">About</a></li>
                                    <li><a href="rooms.php">Rooms</a></li>
                                    <li><a href="news.php">News</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a data-toggle="modal" data-target="#Login">Register/Login</a></li>
                                </ul>
                            </nav>                            
                        </div>
                    </div>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->



  <?php else : ?>


              <div class="inner-header">
                <div class="logo">
                    <a href="index.php"><img src="img/logo.png" alt=""></a>
                    <div class="mt-2" >
                        <a href="admin_login.php" style="color: #fff"><span>Admin Panel</span></a>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <nav class="main-menu mobile-menu">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about-us.php">About</a></li>
                                    <li><a href="rooms.php">Rooms</a></li>
                                    <li><a href="news.php">News</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a data-toggle="modal" data-target="#Profile">Profile</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </nav>                            
                        </div>
                    </div>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->



  <?php  endif; ?>


  <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>