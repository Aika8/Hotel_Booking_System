<?php
session_start();

if(!isset($_SESSION['userId'])){
    header("Location: index.php");
}

?>



<h1><?php echo $_SESSION['userId']; ?></h1>