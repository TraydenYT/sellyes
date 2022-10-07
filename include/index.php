<?php
    /**
     * Главный файл
     * Регистрация пользователя
     */

     //Запускаем сессию
     session_start();

     //Установим кодировку и вывод всех ошибок
     header('Content-Type: text/html; charset=UTF8')
     error_reporting(E_ALL);

     //Включаем буферизацию содержимого
     ob_start();

     //Определяем переменную для переключателя
    $mode = isset($_GET['mode'])  ? $_GET['mode'] : false;
    $user = isset($_SESSION['user']) ? $_SESSION['user'] : false;
    $err = array();

    //Устанавливаем ключ защиты
    define('CSGO_KEY', true);

    //Подключаем Mysql
    include './bd.php';

    //Подключаем конфигурационный файл
    include './config.php'

    //Подключаем скрипт с функциями
    include './funct/funct.js'
    
    switch($mode){
        //Подключаем обработчик с формой регистрации и авторизации
        case 'reg_avt'
        include '../registration.php'
        break;
    }

    //Получаем данные буфера
    $content=ob_get_contents();
    ob_end_clean();

    //Подключаем наш шаблон
    include '../registration.php'
?>