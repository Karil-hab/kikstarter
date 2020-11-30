<?php 
 $con = mysqli_connect("127.0.0.1","root","","kickstarter") ;
 
 $storoca = mysqli_query($con,"SELECT * FROM idei WHERE id ='{$_GET['id']}'");
 $reuslt = $storoca->fetch_assoc();

 $n =  $reuslt['donated'] + 100;
 $query = mysqli_query($con,"UPDATE idei SET donated = '$n', WHERE id ='{$_GET['id']}'");
 

 header("Location: index.php");