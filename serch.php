<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
</head>
<?php   
		$con = mysqli_connect("127.0.0.1","root","","kickstarter");
		$content = mysqli_query($con,"SELECT * FROM idei WHERE user='{$_GET['user']}'");
?>
<body>
<div class="col-12">
	<div class="row">
		<div class="col-3 pt-3">
			<a href="" class="text-dark ml-3">Explore</a>
			<a href="" class="text-dark ml-3">Start a project</a>
			<a href="Personal Area.php">Personal Area</a>
		</div>
		<div class="col-7 text-center">
			<img src="logo.png" class="w-25">
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="Who are you.php" > <i class="fa fa-search"></i> Search</a>
			<a href=""><img src="lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
<div class="col-10 mx-auto">
	<h4 class="">Explore <span class="text-success font-weight-bold"><?php 	echo mysqli_num_rows($content) ?><!--Вывести количество проектов--></span></h4>
	<p></p>
	<div class="row mt-5">

		<!--Вывести сами проекты здесь-->
		<?php for ($i=0; $i < mysqli_num_rows($content); $i++) {  ?>
			<?php $result = $content->fetch_assoc(); ?>
			<div class="col-4" style="border: 1px solid black;">
				<div style="height:300px; background-image:url(<?php echo $result['img'] ?>); background-size: cover; background-position:center"></div>
				<h2><?php  echo $result['title'] ?></h2>
				<br>
				<br>
				<p> <?php echo $result['description'] ?> </p>
				<p><?php echo $result['user'].', '.$result['place'] ?></p>
				<br>
				<form method="get" action="Magnification.php">	
					<p name="goal"><?php echo $result['goal'].'$ goal' ?></p>
					<p style="color:green"><?php echo $result['donated'].'$ pledged' ?></p>
				
					<input style="display: none" type="	" name="id" value=<?php echo $result['id'] ?> >				
					<button class="btn btn-danger"> Back this PROJECT +100$</button>
				</form>
				
			</div>
		<?php } ?>
	</div>

</div>
</body>
</html>