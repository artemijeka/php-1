<?
// echo "<p class='gallery__title'><strong>Информация из /engine/get_image.php:</strong>";

// Функция перезагрузки страницы
function refresh() {
	header('Location: gallery.php');
	exit;
}

// Переменная хранит описание изображения.
$descriptionForImage = $_POST['descriptionForImage'];

// Дирректория загрузки файлов.
$uploadDir = '../data/uploads/';

// Переменная хранит имя текущего загружаемого файла.
$nameImage = $_FILES['userImage']['name'];

// Переменная размер файла.
$sizeImage = $_FILES['userImage']['size'];

// Дирректория загрузки и название файла.
$userImageDirectoryFile = $uploadDir.$nameImage;
// var_dump($nameImage);

// Если текущее имя загружаемого файла не равно одному из существующих.
if (!in_array($nameImage, $arrayNamesImagesSortByHits)) {// Массив $arrayNamesImagesSortByHits определяется в файле query_sort_by_views.php 
		// То если копирование файла из папки temp в папку ../data/uploads/с текущим именем файла произошло успешно.
		if (copy($_FILES['userImage']['tmp_name'], $userImageDirectoryFile)) {
			// То сообщить об успехе.
		  echo "Файл загружен!<br>";
		  
			// Сразу после загрузки изображений, данные о изображении следует положить в базу данных.
			require('query_to_db.php');

		  // Функция обновления страницы ломала работающую программу из-за того что я ее вызвал до вызова require('query_to_db.php');
		  refresh();
		}
}
else {
  echo "Возникла ошибка при загрузке!";
}

	// echo "<pre>";
	// echo 'Массив $_FILES:';
	// print_r($_FILES);
	// echo "</pre>";
	
// echo "</p><br>";
