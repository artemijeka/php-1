<!DOCTYPE html">
<html">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>ДЗ php-1 урок 6</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!-- Для скрытия ошибок: -->
	<? #error_reporting(E_ERROR); ?>
	<h1>ДЗ по PHP-1 урок 6</h1>
	<h2>Задание #3.</h2>
	<p>
		ТЗ:
		<br>
		Добавить функционал отзывов в имеющийся у вас проект.
		<span class="gallery__title">(Готово.)</span>
	</p>
		<div class="gallery">
		<h3 class="gallery__h3">Галлерея - магазин)</h3>	
			<!-- Вставка файла обрабатывающего вывод галереи на экран. -->
			<? require_once("../engine/output_gallery.php"); ?>
		</div>
	<form enctype="multipart/form-data" action="" method="POST">
		<p class='gallery__title'>Вы можете загрузить изображение размером не больше 5Мб.</p>
		<!-- Для ограничения размера файла можно использовать. -->
		<input type="hidden" name="MAX_FILE_SIZE" value="5242880" />
		<br>
		<label class="buttonForUploads" for="file">Выбрать изображение.</label><br>
		<!-- Скрыл input. Добавил id для связи с label.-->
		<input hidden="" type="file" id="file" name="userImage" autofocus multiple accept="image/png, image/gif, image/jpeg"/>
		<br>
		<textarea rows="12" cols="26" name="descriptionForImage" placeholder="Сделайте описание выкладываемого изображения..."></textarea>
		<br>
		<label class="buttonForSubmit" for="submit">Загрузить.</label><br>
		<!-- Скрыл input. Добавил id для связи с label.-->
		<input type="submit" hidden="" id='submit' value="Загрузить" />
	</form>
	
	<form enctype="multipart/form-data" action="" method="POST">
		<? require("../engine/processingReviews.php");	?>

		<p class='gallery__title'>Вы можете оставить отзыв.</p>
		<br>
		<label for="name">Имя</label>
		<input type="text" id="name" name="userName" size="21" placeholder="Аркадий Акакиевич">
		<br>
		<label for="email">Email</label>
		<input type="email" id="email" name="userEmail" placeholder="who@mail.com">
		<br>
		<textarea rows="12" cols="26" name="userReview" placeholder="Напишите свой отзыв здесь..."></textarea>
		<br>
		<label class="buttonForSubmit" for="buttonForSubmit">Отправить</label>
		<input type="submit" name="submit" id="buttonForSubmit" value="Отправить" hidden>
		<br>
	</form>
	<div class="gallery">
		<h3 class='gallery__h3'>Отзывы</h3>
		<? require("../engine/bring_review.php");	?>
	</div>

</body>
</html>
