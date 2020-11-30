<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php   
		$con = mysqli_connect("127.0.0.1","root","","kickstarter") ;
		$content = mysqli_query($con,"SELECT * FROM idei WHERE user='Чупачупс'");
?>
<body>
<form style="width: 600px;" class="mx-auto" action="Adding.php" method="post">
	<input class="col-12 mt-2" type="" name="title" placeholder="Заголовок">	
	<input class="col-12 mt-2" type="" name="description" placeholder="Описание">
	<input class="col-12 mt-2" type="" name="goal" placeholder="Необхадимая сумма">
	<input class="col-12 mt-2" type="" name="img" placeholder="Обложка">
	<input class="col-12 mt-2" type="" name="place" placeholder="Город">
	<input class="col-12 mt-2" type="" name="user" placeholder="Пользователь">
	<button class="col-12 btn btn-danger mt-2">Создать</button>
</form>

<br>
<br>

<div class="mx-auto" style="width: 800px">
	<h1 class="text-left">My project</h1>
	<br>
	<?php for ($i=0; $i < mysqli_num_rows($content); $i++) {  ?>
	<?php $result = $content->fetch_assoc(); ?>
	<div class="col-12 mx-auto text-center">
		<h1 class="mb-2"><?php echo $result['title'] ?></h1><!--Название пректа-->
		<p class="mb-2"><?php echo $result['description'] ?></p><!--Описание проекта-->
	</div>
	<div class="col-12">
		<div class="row">
			<div class="col-9" style="height:400px; background-image:url(<?php echo $result['img'] ?>); background-size: cover; background-position:center"></div><!--Картинка-->

			<div class="col-3"><!--Собранно ,необхадимо-->
				<p class="text-success">Собрано :</p>
				<h3 class="text-success"><?php echo $result['donated'] ?></h3><!--pledged-->
				<p class="text-secondary">Необходимо :</p>
				<h3 class="text-secondary"><?php echo $result['goal'] ?></h3><!--Goal-->
				<form action="red.php" method="get">
					<input style="display: none" type="	" name="id" value=<?php echo $result['id'] ?> >
					<button class="btn btn-success mb-2">Редактировать проект</button>
				</form>
				<form action="del.php" method="get">
					<input style="display: none" type="	" name="id" value=<?php echo $result['id'] ?> >
					<button class="btn btn-warning">Удалить проект</button>
				</form>
				
			</div>
		</div>
	</div>
	<br>
	<br>
	<?php } ?>
</div>
</body>
</html>




