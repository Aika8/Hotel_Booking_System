<?php 
include('connection.php');

$id=$_GET['id'];


try {
    mysqli_query($con,"delete from dimension where id='$id' ");
        	
}catch(Exception $e){
    echo "Some Room has this Dimension. Please delete room first!";
}
header('location:dashboard.php?option=dimension');	

?>