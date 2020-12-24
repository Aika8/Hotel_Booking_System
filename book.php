
<?php

session_start();
if(!isset($_SESSION['userId'])){
    header("Location: index.php");
}


?>


<!DOCTYPE html>
<html lang="zxx">

<head>
<?php include_once('links.php'); ?>
    
</head>

<body>
<?php include_once('header.php'); ?>

<?php

if(isset($_POST['availability'])){


    if(isset($_POST['inDate']) and isset($_POST['outDate'])  ){
   
        $inDate = date( "Y-m-d", strtotime($_POST['inDate'])); 
        $outDate = date( "Y-m-d", strtotime($_POST['outDate']));
        $people_id = $_POST['people'];
        $type_id = $_POST['type'];


        if($inDate > $outDate or $inDate < date('Y-m-d')){
            $modal_message = "Invalid input!";
            $show_modal = true;
        }
        else{
        $flag = false;   
        $sql=mysqli_query($con,"select * from room where room_type_id ='$type_id' and dimension_id = '$people_id'");
        while($res=mysqli_fetch_assoc($sql)){
            $flag = false;
            $room_id=$res['id'];
            $sql_reg = mysqli_query($con,"select * from reservation where room_id= '$room_id'");
            while($res_reg=mysqli_fetch_assoc($sql_reg)){

                if(!($inDate >= $res_reg['date_out'] or $res_reg['date_in'] >= $outDate)){
                        $flag = true;
                }
            }

            if(!$flag){
                $guest_id = $_SESSION['userId'];
                mysqli_query($con,"insert into reservation values('','$inDate','$outDate', '$guest_id', '$room_id')");
                $modal_message = "Your reservation went successfully! Cannot wait to see you here!";
                $show_modal = true;
            }
        }

        if($flag){
            $modal_message = "This dates already taken! Please choose another one!";
            $show_modal = true;
        }

    }
}
else{
    echo $modal_message;
    echo "asjeb";
    $modal_message = "Not valid input! Date does not send! ";
    $show_modal = true;
}

}



?>

<div class="modal fade" tabindex="-1" role="dialog" id="secondModal" style="background-color: ">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Message</h5>
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
                jQuery("#secondModal").modal("show");
        });
        </script>
<?php endif;?>






 <!-- Room Availability Section Begin -->
 <section class="room-availability" style="padding-top: 200px;">
        <div class="container">
            <div class="room-check">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-item">
                            <div class="room-pic-slider room-pic-item owl-carousel">
                                <div class="room-pic">
                                    <img src="img/room-slider/room-1.jpg" alt="">
                                </div>
                                <div class="room-pic">
                                    <img src="img/room-slider/room-2.jpg" alt="">
                                </div>
                                <div class="room-pic">
                                    <img src="img/room-slider/room-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="room-text">
                                <div class="room-title">
                                    <h2><?php echo $_GET['title']?></h2>
                                    <div class="room-price">
                                        <span>From</span>
                                        <h2><?php echo $_GET['price']?></h2>
                                    </div>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="check-form">
                            <h2>Check Availability</h2>
                            <form action="" method="post">
                                <div class="datepicker">
                                    <div class="date-select">
                                        <p>From</p>
                                        <input type="date"  name="inDate" placeholder="">
                                        
                                    </div>
                                    <div class="date-select to">
                                        <p>To</p>
                                        <input type="date"  name="outDate" placeholder="">
                                       
                                    </div>
                                </div>
                                <div class="room-selector">
                                    <p>Adult - Children</p>
                                    <select class="suit-select" name="people">
                                <?php 

                                        $sql =mysqli_query($con,"select * from dimension");
                                        while($res =mysqli_fetch_assoc($sql))
                                        {
                                        $id = $res['id'];	
                                        $adult = $res['adult_available'];
                                        $children = $res['children_available'];
                                ?>
                                              
                                    <option value="<?php echo $id ?>"><?php echo $adult.' - '. $children ?></option>
                                    <?php 	
                                            }
                                    ?>	
                                    </select>
                                </div>
                                    
                                <div class="room-selector">
                                    <p>Room</p>
                                    <select class="suit-select" name="type">
                                    <?php 

                                        $sql=mysqli_query($con,"select * from room_type");
                                        while($res=mysqli_fetch_assoc($sql))
                                        {
                                        $id=$res['id'];	
                                        $name = $res['name'];

                                    ?>
                                      
                                    <option value="<?php echo $id ?>"><?php echo $name?></option>
                                        <?php 	
                                            }
                                        ?>	
                                    </select>
                                </div>
                                <button type="submit" name="availability">CHECK Availability <i class="lnr lnr-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-room">
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
    </section>
    <!-- Room Availability Section End -->

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