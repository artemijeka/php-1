<?php # Контроллер.
	
	# Контроллер.
	require_once('../engine/get_data_from_form.php');
  // var_dump($_POST['confirm']);

	if ( isset($_POST['confirm']) ) {
		if ( $login===$login_null ) {
			$class_login = 'registration__login_error';
			$label_login_content = 'Укажите логин!';
		}
		if ( $name===$name_null ) {
			$class_name = 'registration__name_error';
			$label_name_content = 'Укажите имя!';
		} 
		if ( $pass===$pass_null ) {
			$class_pass = 'registration__pass_error';
			$label_pass_content = 'Укажите пароль!';
		}
		if ( $pass!==$pass2 ) {
			$class_pass2 = 'registration__pass2_error';
			$label_pass2_content = 'Пароли не совпадают!';
		}
		if ($login!==$login_null && $name!==$name_null && $pass!==$pass_null && $pass2!==$pass_null) {
echo "string";
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
				// $legend_content = 'Вы зарегистрировались!';
				// $class_legend = 'class_legend__red';
				db_user_registration($login, $pass2, $date, $name);
				// refresh();
				
				// var_dump($_COOKIE);
			}
		}

	}
	// Представление.
	require_once('../templates/registration.php');
?>