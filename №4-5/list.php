<?php
	include 'config.php';
	include 'controller.php';
	$records = getRecords($db);
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

	<?php if ($records) { ?>
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th></th>
				<th>Название</th>
				<th>Описание</th>
				<th>Цена</th>
				<th width="1"></th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($records as $record) {
					$img = '';
					if (!empty($record['photo'])) $img = '<img class="preview" src="/photo/'.$record['photo'].'" alt="">';
					echo '
						<tr>
							<td>'.$record['id'].'</td>
							<td>'.$img.'</td>
							<td class="nowrap"><a href="/index.php?id='.$record['id'].'" target="_blank">'.$record['title'].'</a></td>
							<td>'.$record['description'].'</td>
							<td class="nowrap">'.$record['price'].' руб.</td>
							<td class="nowrap">
								<a class="btn" href="/update.php?id='.$record['id'].'">Редактировать</a>
								<a class="btn" href="/delete.php?id='.$record['id'].'">Удалить</a>
							</td>
						</tr>
					';
				}
			?>
		</tbody>
	</table>
	<?php } ?>

	<footer class="container8">
		<div><a href="#" id="footer1">Каталог</a></div>
		<div><a href="#" id="footer2">Доставка и оплата</a></div>
		<div><a href="#" id="footer3">Отзывы</a></div>
		<div><a href="#" id="footer4">Спецпредложения</a></div>
		<div><a href="#" id="footer5">Контакты</a></div>
	</footer>
</body>
</html>