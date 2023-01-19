<?php
	include 'config.php';
	include 'controller.php';
	$record = getRecord($db, $_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Магазин цветов</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/list.css">
	<link rel="stylesheet" media="screen and (max-width: 1200px)" type="text/css" href="../css/tablet.css">
	<link rel="stylesheet" media="screen and (max-width: 650px)" type="text/css" href="../css/mobile.css">
	<?php include 'config.php'; ?>
</head>
<body class="containermain">
	<div class="container1 nav">
		<div><a href="/create.php" id="nav1">Добавить новый букет</a></div>
		<div><a href="/" id="nav6">Вернуться на сайт</a></div>
	</div>

	<h2>Редактирование букета</h2>

	<form action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Название</label>
			<input type="text" name="title" value="<?php echo $record['title']; ?>" required>
		</div>
		<div class="form-group">
			<label>Описание</label>
			<textarea name="description" rows="7"><?php echo $record['description']; ?></textarea>
		</div>
		<div class="form-group">
			<label>Цена</label>
			<input type="text" name="price" value="<?php echo $record['price']; ?>" required>
		</div>
		<div class="form-group">
			<label>Фото</label>
			<input type="file" name="photo">
		</div>
		<div class="form-group text-center">
			<a class="btn" href="/list.php">Отмена</a>
			<button class="btn" type="submit">Сохранить</button>
		</div>
		<input type="hidden" name="action" value="update">
		<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
	</form>

	<footer class="container8">
		<div><a href="#" id="footer1">Каталог</a></div>
		<div><a href="#" id="footer2">Доставка и оплата</a></div>
		<div><a href="#" id="footer3">Отзывы</a></div>
		<div><a href="#" id="footer4">Спецпредложения</a></div>
		<div><a href="#" id="footer5">Контакты</a></div>
	</footer>
</body>
</html>