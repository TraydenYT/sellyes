<?php
    /**
     * Главный файл
     * Регистрация пользователя
     */

     //Запускаем сессию
     session_start();

     //Установим кодировку и вывод всех ошибок
     header('Content-Type: text/html; charset=UTF8');
     error_reporting(E_ALL);

     //Включаем буферизацию содержимого
     ob_start();

     //Определяем переменную для переключателя
    $mode = isset($_GET['mode'])  ? $_GET['mode'] : false;
    $user = isset($_SESSION['user']) ? $_SESSION['user'] : false;
    $err = array();

    //Устанавливаем ключ защиты
    define('CSGO_KEY', true);

    //Подключаем конфигурационный файл
    include 'config.php';

    //Подключаем Mysql
    include 'bd.php';

    //Подключаем скрипт с функциями
    include $_SERVER['DOCUMENT_ROOT'].'/include/funct/funct.php';
    
    switch($mode)
	{
		//Подключаем обработчик с формой регистрации
		case 'reg':
			include './reg/reg.php';
		break;
		
		//Подключаем обработчик с формой авторизации
		case 'auth':
			include './auth/auth.php';
			include './auth/show.php';
		break;
    
	}

    //Получаем данные буфера
    $content=ob_get_contents();
    ob_end_clean();
?>