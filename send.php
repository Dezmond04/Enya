<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$user_email = $_POST['user_email'];

// Формирование самого письма
$title = "Новое обращение Ehya";

if(isset($phone)){
    $body = "
    <h2>Новое обращение</h2>
    <b>Имя:</b> $name<br>
    <b>Телефон:</b> $phone<br><br>
    <b>Email:</b><br>$user_email
    ";
}
else{
    $body = "  
    <h2>Новая подписка </h2>
    <b>Email:</b> $user_email";
};




// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    // $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
    $mail->Username   = 'webcoupmailing@gmail.com'; // Логин на почте
    $mail->Password   = 'webcoup2021'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('webcoupmailing@gmail.com', 'Игорь Карих'); // Адрес самой почты и имя отправителя

    // Получатель письма
    // isset - проверка на существование переменной 
    // "Функция isset() возвращает true, если переменная существует и её значение не null"
    if(!isset($user_email)){
        $mail->addAddress('i.karih.home@gmail.com');
    }else
    {
        $mail->addAddress('i.karih.home@gmail.com');
    }   
     
    // $mail->addAddress('youremail@gmail.com'); // Ещё один, если нужен



// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
// echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);


if(isset($_SESSION)){
    session_destroy();
}

session_start();

if(isset($phone)) {
    $_SESSION['thankyou_title'] = 'Спасибо!';
    $_SESSION['thankyou_description'] = 'Наши менеджеры свяжутся с вами в течении нескольких минут';
}else{
    $_SESSION['thankyou_title'] = 'Спасибо!';
    $_SESSION['thankyou_description'] = 'Вы подписались на наши акции';
}

header('Location: thankyou.php');
