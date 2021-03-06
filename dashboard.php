
<?php 

 include('connection.php');

?>


<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include_once('links.php'); ?>
  
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    
  </head>
  <body>
<!-- Header Section Begin -->
<header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="index.php"><img src="img/logo.png" alt=""></a>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <nav class="main-menu mobile-menu float-right">
                                <ul>
                                    <li><a href="index.php">Logout</a></li>
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


    <div class="container" style="padding-top: 90px;">


        <div class="row content mt-5">

            <div class="col-sm-3 sidenav">

            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>AdminPanel</h3>
                </div>

                <ul class="list-unstyled components">

                    <li><a href="dashboard.php?option=feedback">Feedback</a></li>
                    <li><a href="dashboard.php?option=room">Room</a></li>
                    <li><a href="dashboard.php?option=booking_details">Booking Details</a></li>
                    <li><a href="dashboard.php?option=user_registration">Users</a></li>
                    <li><a href="dashboard.php?option=room_type">Room Type</a></li>
                    <li><a href="dashboard.php?option=dimension">Dimension</a></li>

                </ul>
            </nav>

            </div>

            <div class="col-sm-9 text-left ">
            <?php 
                @$opt=$_GET['option'];
                if($opt=="")
                {
                include('reports.php');	
                }
                else
                {
                    if($opt=="feedback")
                    {
                    include('feedback.php');	
                    }
                    else if($opt=="room")
                    {
                    include('room.php');	
                    }
                    else if($opt=="booking_details")
                    {
                    include('booking_details.php');	
                    }
                    else if($opt=="user_registration")
                    {
                    include('user_registration.php');	
                    }
                    else if($opt=="add_rooms")
                    {
                    include('add_rooms.php');	
                    }
                    else if($opt=="room_type")
                    {
                    include('room_type.php');	
                    }
                    else if($opt=="add_room_type")
                    {
                    include('add_room_type.php');	
                    }
                    else if($opt=="dimension")
                    {
                    include('dimension.php');	
                    }
                    else if($opt=="add_dimension")
                    {
                    include('add_dimension.php');	
                    }
                    else if($opt=="update_dimension")
                    {
                    include('update_dimension.php');	
                    }
                    else if($opt=="update_room_type")
                    {
                    include('update_room_type.php');	
                    }
                    else if($opt=="update_room")
                    {
                    include('update_room.php');	
                    }
                }
                ?>


            </div>
        </div>
    </div>       

    
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>

</html>