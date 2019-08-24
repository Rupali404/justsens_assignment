<?php
//get the session
require 'config.php';
 if(isset($_POST['submit'])){
 	$code=$_POST['code'];
  	$delete=mysqli_query($conn,"DELETE FROM message where codeg='$code'");
    header('location:index.php');
 }
?>