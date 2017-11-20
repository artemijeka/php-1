<?
	$login = (string)htmlspecialchars(strip_tags(md5(SALT.$_POST['login'].PAPPER)));
	$pass = (string)htmlspecialchars(strip_tags(md5(PAPPER.$_POST['pass'].SALT)));
	$pass2 = (string)htmlspecialchars(strip_tags(md5(PAPPER.$_POST['pass2'].SALT)));
	$pass_null = (string)htmlspecialchars(strip_tags(md5(PAPPER.''.SALT)));
	$login_null = (string)htmlspecialchars(strip_tags(md5(SALT.''.PAPPER)));
	$submitted = $_POST['submitted'];
	$date = gmdate('j.n.o G:i:s');

	// var_dump($submitted);

	$label_pass_content = 'Пароль';
	$label_pass2_content = 'Повторите пароль';
	$label_login_content = 'Логин';
	$legend_content = 'Регистрация:';
	$class_legend = 'registration_legend';

	// var_dump($login);
	// var_dump($pass);
	// var_dump($pass2);


	if ( $login===$login_null ) {
		$class_login = 'registration__login_error';
		$label_login_content = 'Укажите логин!';
	} 

	if ( $pass===$pass_null ) {
		$class_pass = 'registration__pass_error';
		$label_pass_content = 'Укажите пароль!';
	}

	if ( $pass!==$pass2 ) {
		$class_pass2 = 'registration__pass2_error';
		$label_pass2_content = 'Пароли не совпадают!';
	} 

	if ($login!==$login_null && $pass!==$pass_null && $pass2!==$pass_null) {
		// Если в базе данных есть такой логин. 
		if (login_is_busy_or_not($login)) {
			// То говорим: "Введенный логин занят!"
			echo "В базе данных есть логин: ".$login."!!!\n\n";
			$label_login_content = 'Логин занят!';
			$class_login = 'registration__login_error';
		} else {
			// Иначе отправляем данные юзера в бд в таблицу user.
			echo "В базе данных нет вашего логина.".$login."!!!\n\n";
			// $class_login = '';
			$legend_content = 'Вы зарегистрировались!';
			$class_legend = 'registration__legend_red';
			db_user_registration($login, $pass2, $date);
		}
	}
	