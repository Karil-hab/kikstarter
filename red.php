<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php 
	$con = mysqli_connect("127.0.0.1","root","","kickstarter");
	$content = mysqli_query($con,"SELECT * FROM idei  WHERE id='{$_GET['id']}'");
	$result = $content->fetch_assoc();
?>
<body>
	<form style="width: 600px;" class="mx-auto" action="red_2.php" method="post">
		<input class="col-12 mt-2" type="" name="title" placeholder="Заголовок" value=<?php echo $result['title'] ?> >	
		<input class="col-12 mt-2" type="" name="description" placeholder="Описание" value=<?php echo $result['description'] ?> >
		<input class="col-12 mt-2" type="" name="goal" 	placeholder="Необхадимая сумма" value=<?php echo $result['goal'] ?> >
		<input class="col-12 mt-2" type="" name="img"	placeholder="Обложка" value=<?php echo $result['img'] ?> >
		<input class="col-12 mt-2" type="" name="place" placeholder="Город" value=<?php echo $result['place'] ?> >
		<button class="col-12 btn btn-danger mt-2">Перезаписать</button>
	</form>
</body>
</html>

