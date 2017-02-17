<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?php echo $art['title']; ?></title>
	<link rel="stylesheet" href="/views/css/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<h1><?php echo $art['title']; ?></h1>
			<div class="date"><?php echo $art['date'] ?></div>
			<p><?php echo $art['text']; ?></p>
			<a href="/news/">Назад..</a>
		</div>
	</div>
</body>
</html>