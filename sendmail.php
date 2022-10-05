<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');
$mail->IsHTML(true);

// От кого письмо
$mail->setFrom('alkamo@inbox.ru', 'Вижу цель');
// Кому отправить
$mail->addAddress('sellyeshelp@gmail.com');
// Тема письма
$mail->Subject = "Заявка с сайта";

$mail->isSMTP(); //Send using SMTP
$mail->Host = 'smtp.example.com';  //Set the SMTP server to send through
$mail->SMTPAuth = true;  //Enable SMTP authentication
$mail->Username  = 'user@example.com'; //SMTP username
$mail->Password  = 'secret';  //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  //Enable implicit TLS encryption
$mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

// Рука :)
$hand = "Правая";
if($_POST['hand'] == 'left'){
    $hand = "Левая";
}

// Тело письма
$body = '<h1>Встречай письмо!</h1>';

if(trim(!empty($_POST['name']))){
    $body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
}
if(trim(!empty($_POST['email']))){
    $body.='<p><strong>E-mail:</strong> '.$_POST['email'].'</p>';
}
if(trim(!empty($_POST['hand']))){
    $body.='<p><strong>Рука:</strong> '.$hand.'</p>';
}
if(trim(!empty($_POST['aga']))){
    $body.='<p><strong>Возраст:</strong> '.$_POST['age'].'</p>';
}
if(trim(!empty($_POST['message']))){
    $body.='<p><strong>Сообщение:</strong> '.$_POST['message'].'</p>';
}

// Прикрепить файл
if (!empty($_FILES['image']['tmp_name'])) {
    // путь загрузки файла
    $filePath = __DIR__ . "/files/" . $_FILES['image']['name'];
    // грузим файл
    if(copy($_FILES['image']['tmp_name'], $filePath)){
        $fileAttach = $filePath;
        $body.='<p><strong>Фото в приложении</strong>';
        $mail->addAttachment($fileAttach);
    }
}

$mail->Body = $body;

// Отправляем
if (!$mail->send()) {
    $message = 'Ошибка';
} else {
    $message = 'Данные отправлены!';
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);
?>