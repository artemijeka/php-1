<?php // КОНТРОЛЛЕР.

// И установка куки из базы.
// cookie_set_reserve_puppy_from_db('puppy_is_reserved', $_COOKIE["name"], $_COOKIE["phone"], $_COOKIE["email"]);
// Переменная для вывода в шаблон.
$name = $_COOKIE['name'];
$userId = $_COOKIE['user_id'];
$userLogin = $_COOKIE['login'];
// $rowFromTheTable = db_get_info_about_dog_by_id($dogId);
// $dogName = $rowFromTheTable['title'];
// var_dump($userIdAndDogId);
if ($_POST['logOut']==="Выйти") {
	// Удаление куки.
  // setcookie('userId', $userId, time()-1);
  // setcookie('dogId', $dogId, time()-1);
	setcookie('login', $login, time()-1);
  setcookie('pass', $pass, time()-1);
  setcookie('name', $name, time()-1);
  setcookie('phone', $phone, time()-1);
  setcookie('email', $email, time()-1);
  setcookie('user_id', 0, time()+2592000);

  refresh_index();
}
// var_dump($userIdAndDogId);
// $res = $userId.$dogId;
// var_dump($res);
// var_dump($_SERVER);
// ПРЕДСТАВЛЕНИЕ.
require_once('../templates/user_is_login.tpl');
require_once('../engine/your_leash.php');

?>