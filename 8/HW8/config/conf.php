<?php
	define('HOST', '127.0.0.1');
	define('MYSQL_LOGIN', 'root');
	define('MYSQL_PASS', '');
	define('MYSQL_DB', 'MORNING_STAR');
	define('MYSQL_TABLE', 'user');

	// Соль с перцем:
	define('SALT', ':Hs|6`c&^$&*)5]#%f:');
	define('PAPPER', '-D8&c#|5G$u4P}c%3G-');

	define("DIR_BIG_IMG","../data/uploads");
	define("DIR_SMALL_IMG","../data/uploads/mini/");
	@mkdir(DIR_BIG_IMG, 0777);    #???????
	@mkdir(DIR_SMALL_IMG, 0777);  #???????
?>