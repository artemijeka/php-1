<!DOCTYPE html>
<html lang="ru">
<head>
	<? require_once('../templates/head.tpl'); ?>
</head>
  <body>

  	<header>
  		<h1>Добро пожаловать на страницу собаки <?=$dogName; ?></h1>
  		<h2>Наш телефон в Самаре 89277220225.</h2>
      <a href="../public/index.php">На главную</a>
  	</header>
  	
    <p>
    	<figure class="card-dog">
    		<a href="<?=$pathToBigImage;?>" target="_blank">
    			<img src="<?=$pathToSmallImage;?>" alt="<?=$dogName;?>" title="Окрыть в полном размере">
  			</a>
        <br>
        <br>
    		<figcaption><?=$dogDescription; ?></figcaption>
    	</figure>
      <br>
      <? require_once('../engine/your_leash.php'); ?>
      <? require_once('../engine/reserve_a_puppy.php'); ?>
    </p>

    <h2>Новости собаки:"<?=$dogName;?>"</h2>
    <? require_once('../engine/add_dog_news.php'); ?>
  <footer> 
  </footer>
  </body>
</html>