<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

if (isset($_POST['phone'])) {
    $err = '';
    if (trim($_POST['name']) == '') {
        $err .= 'Укажите имя';
    }
    elseif (preg_match('/[0-9]/', $_POST['name'])) {
        $err .= 'Некорректное имя';
    }
    elseif (trim($_POST['phone']) == '') {
        $err .= 'Укажите телефон';
    }
    if ($err == '') {
        // Переменные, которые отправляет пользователь
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        // Формирование самого письма
        $title = "Новое обращение Best Tour Plan";
        $body = "
        <h2>Новое обращение</h2>
        <b>Имя:</b> $name<br>
        <b>Телефон:</b> $phone<br><br>
        <b>Сообщение:</b><br>$message
        ";

        // Настройки PHPMailer
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        try {
            $mail->isSMTP();
            $mail->CharSet = "UTF-8";
            $mail->SMTPAuth   = true;
            //$mail->SMTPDebug = 2;
            $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

            // Настройки вашей почты
            $mail->Host       = 'smtp.yandex.ru'; // SMTP сервера вашей почты
            $mail->Username   = 'linalleks@yandex.ru'; // Логин на почте
            $mail->Password   = 'afynfpbz950623the'; // Пароль на почте
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;
            $mail->setFrom('linalleks@yandex.ru', 'Ангелина Александровна'); // Адрес самой почты и имя отправителя

            // Получатель письма
            $mail->addAddress('a_alleks@mail.ru');

        // Отправка сообщения
        $mail->isHTML(true);
        $mail->Subject = $title;
        $mail->Body = $body;

        // Проверяем отправленность сообщения
        if ($mail->send()) {
            $result = "success";
            header('location: thankyou.html');
        }
        else {$result = "error";}

        } catch (Exception $e) {
            $result = "error";
            $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
        }


    } else {
        echo $err; // собщаем об ошибке
    }
}


