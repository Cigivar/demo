<?
/*
 50M
 1G
 1024K
 4096
*/
$size = ini_get('post_max_size');//50M
$letter = $size{strlen($size)-1};//M
$size = (int)$size;//50

switch(strtoupper($letter)){
    case 'G':$size *= 1024;
    case 'M':$size *= 1024;
    case 'K':$size *= 1024;
}
?>

<!doctype html>
    <html>
	<head>
		<title>Контакты</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>

		<div id="header">
			<!-- Верхняя часть страницы -->
			<img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
			<span class="slogan">приходите к нам учиться</span>
			<!-- Верхняя часть страницы -->
		</div>

		<div id="content">
			<!-- Заголовок -->
			<h1>Обратная связь</h1>
			<!-- Заголовок -->
			<!-- Область основного контента -->
			<h3>Адрес</h3>
			<p>123456 Москва, Малый Американский переулок 21</p>
			<h3>Задайте вопрос</h3>
			<form action='' method='post'>
				<label>Тема письма: </label><br />
				<input name='subject' type='text' size="50"/><br />
				<label>Содержание: </label><br />
				<textarea name='body' cols="50" rows="10"></textarea><br /><br />
				<input type='submit' value='Отправить' />
			</form>	
			<!-- Область основного контента -->
		</div>
		<div id="nav">
			<h2>Навигация по сайту</h2>
			<!-- Меню -->
			<ul>
				<li><a href='index.php'>Домой</a></li>
				<li><a href='about.php'>О нас</a></li>
				<li><a href='contact.php'>Контакты</a></li>
				<li><a href='table.php'>Таблица умножения</a></li>
				<li><a href='calc.php'>Калькулятор</a></li>
			</ul>
			<!-- Меню -->
		</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
			&copy; Супер Мега Веб-мастер, 2000 - 2012
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>