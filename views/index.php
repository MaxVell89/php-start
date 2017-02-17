<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Главная</title>
	<link rel="stylesheet" href="/views/css/style.css">
</head>
<body>
	<div class="wrapper">
		<?php foreach ($newsList as $art): ?>
		<div class="container">
			<h3><?php echo $art['title']; ?></h3>
			<div class="date"><?php echo $art['date'] ?></div>
			<p><?php echo $art['text']; ?></p>
			<a href="/news/<?php echo $art['id']; ?>">Далее..</a>
		</div>
	<?php endforeach; ?>
	</div>
</body>
</html>