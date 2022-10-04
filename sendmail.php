<?php
    use PHPMailer\PHPMailer;
    use PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';

    $mail = new PHPMailer (true);
    $mail->CharSet = 'UTF-8';
    $mail->setLaunguage('ru', 'phpmailer/language/');
    $mail->IsHTML(true);

    // От кого письмо
    $mail->setFrom('info@mail.ru', 'SellYES - Поддержка');
    // Кому отправить
    $mail->addAddres('aip6569@indox.ru');
    // Тема письма
    $mail->Subject = 'Привет это Айрат';

    // Рука
    $hand = 'Правая';
    if($_POST['hand'] == "left"){
        $hand = "Левая";
    }

    // Тело письма
    $body = '<h1>Встречайте супер письмо<h1>';

    if(trim(!empty($_POST['name']))){
        $body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
    }
    if(trim(!empty($_POST['email']))){
        $body.='<p><strong>E-mail:</strong> '.$_POST['email'].'</p>';
    }
    if(trim(!empty($_POST['hand']))){
        $body.='<p><strong>Рука:</strong> '.$hand.'</p>';
    }
    if(trim(!empty($_POST['age']))){
        $body.='<p><strong>Возраст:</strong> '.$_POST['age'].'</p>';
    }
    if(trim(!empty($_POST['message']))){
        $body.='<p><strong>Сообщение:</strong> '.$_POST['message'].'</p>';
    }

    // Прикрепряем файлы
    if(!empty($_FILES['image']['tmp_name'])) {
        //Путь загрузки файла
        $filePath = __DIR__ . "/file/" . $_FILES['image']['name'];
        //Грузим файлы
        if(copy($_FILES['image']['tmp_name'], $filePath)){
            $fileAttach = $filePath;
            $body.='<p><strong>Фото в приложении</strong>';
            $mail->addAttachment($fileAttach);
        }
    }

    $mail->Body = $body

    if (!$mail->send()) {
        $message = 'Ошибка';
    }else
        $message = 'Данные отправлены';

    $response = ['message' => $message];

    header('Content-type: application/json');
    echo json_encode($response);
?>


