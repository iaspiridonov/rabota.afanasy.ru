<?php namespace ProcessWire;

use PHPMailer\PHPMailer\PHPMailer;

// Файлы phpmailer
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$text = $_POST['msg'];
$file = $_FILES['file'];

if ($input->post('title')) {
    $subTitle = "Отклик на вакансию \"{$input->post('title')}\"<br/>";
} else if ($input->post('page')) {
    $subTitle = "Отправлено со страницы: {$input->post('page')}<br/>";
} else {
    $subTitle = "Отклик с сайта rabota.afanay.ru <br>";
}

// Формирование самого письма
$title = "Отклик на вакансию";
$body = "
<h2>{$subTitle}</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $phone<br>
<b>Почта:</b> $email<br><br>
<b>Сообщение:</b><br>$text
";

// Настройки PHPMailer
$mail = new PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
    $mail->Username   = 'spiridonov.ilya81@gmail.com'; // Логин на почте
    $mail->Password   = 'vurn pcru gxfe avuz'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('afanasyweb@gmail.com', 'Rabota.Afanasy'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('afanasyweb@gmail.com');  

    // Adding attachment
	$attachmentPath = $_FILES["file"]["tmp_name"];
	$attachmentName = $_FILES["file"]["name"];
	$mail->addAttachment($attachmentPath, $attachmentName);
    
    // Прикрипление файлов к письму
    // if (!empty($file['name'][0])) {
        // for ($ct = 0; $ct < count($_FILES['file']['tmp_name']); $ct++) {
        //     $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['file']['name'][$ct]));
        //     $filename = $_FILES['file']['name'][$ct];
        //     if (move_uploaded_file($_FILES['file']['tmp_name'][$ct], $uploadfile)) {
        //         $mail->addAttachment($uploadfile, $filename);
        //     } else {
        //         $msg .= 'Failed to move file to ' . $uploadfile;
        //     }
        // }
    // }
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
echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);