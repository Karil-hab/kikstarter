<?php

$ins = "INSERT INTO idei (title,description,goal,img,place,user) VALUES ('".$_POST['title']."','".$_POST['description']."','".$_POST['goal']."','".$_POST['img']."','".$_POST['place']."','".$_POST['user']."')";
mysqli_query(mysqli_connect("127.0.0.1","root","","kickstarter"),$ins);
//$ins = "INSERT INTO Cannal (Title, Name , Img) VALUES('".$_GET['Title']."','".$_GET['Name']."','".$_GET['Img']."')";
//mysqli_query(mysqli_connect('127.0.0.1',"root","","Twitter"), $ins);

header("Location: index.php");