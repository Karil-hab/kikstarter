<?php 
$con = mysqli_connect("127.0.0.1","root","","kickstarter");
$content = mysqli_query($con,"UPDATE idei SET title = '{$_POST['title']}',description = '{$_POST['description']}',goal = '{$_POST['goal']}',img='{$_POST['img']}',place='{$_POST['place']}' WHERE id='{$_GET['id']}'");
header("Location:Personal Area.php");