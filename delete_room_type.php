<?php 
include('connection.php');

$id=$_GET['id'];


try {
    mysqli_query($con,"delete from room_type where id='$id' ");
        	
}catch(Exception $e){
}
header('location:dashboard.php?option=room_type');	

?>