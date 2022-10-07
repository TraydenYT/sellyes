<?php
	/**
	 * Конфигурационный файл
	 */

	 //Ключ защиты
	 if(!defined('CSGO_KEY')){
		header("HTTP/1.1 404 Not Found")
		exit(file_get_contents('./404.php'));
	 }

	 //Адрес БД
	 define('DBSERVER','localhost')

	 //Логин БД
	 define('DBUSER','mysql')

	 //Пароль БД
	 define('DBPASSWORD','mysql')

	 //БД
	 define('DATABASE', 'sallyes');
	 
	 //Errors
     define('ERROR_CONNECT','Немогу соеденится с БД');

	 //Errors
     define('NO_DB_SELECT','Данная БД отсутствует на сервере');

	//Адрес хоста сайта
	define('HOST','http://'. $_SERVER['HTTP_HOST'] .'/');

	//Адрес почты от кого отправляем
	define('MAIL_AUTOR','Регистрация на http://sellyes/ <no-reply@sellyes.ru>');
?>