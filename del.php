<?php 
$con = mysqli_connect("127.0.0.1","root","","kickstarter") ;
 
 $storoca = mysqli_query($con,"DELETE FROM idei WHERE id ='{$_GET['id']}'");
header("Location:Personal Area.php");