<?php namespace ProcessWire;

$to  = 'agent208@site69.ru';      
$subject = '=?utf-8?b?'. base64_encode('Отклик на вакансию') .'?=';
$fromMail = 'rabota@afanasy.ru';
$fromName = 'Rabota-afanasy';
$date = date(DATE_RFC2822);
$messageId='<'.time().'-'.md5($fromMail.$to).'@'.$_SERVER['SERVER_NAME'].'>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text/html; charset=utf-8". "\r\n";
$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";
$headers .= "Date: ". $date ." \r\n";
$headers .= "Message-ID: ". $messageId ." \r\n";

if ($input->post('title')) {
    $message = "Отклик на вакансию \"{$input->post('title')}\"<br/>";
} else if ($input->post('page')) {
    $message .= "Отправлено со страницы: {$input->post('page')}<br/>";
} else {
    $message = "Отклик с сайта rabota.afanay.ru <br>";
}

if ($input->post('name')) {
    $message .= "Имя: {$input->post('name')}<br/>";
}

if ($input->post('phone')) {
    $message .= "Телефон: {$input->post('phone')}<br/>";
}

if ($input->post('email')) {
    $message .= "Email: {$input->post('email')}<br/>";
}

if ($input->post('msg')) {
    $message .= "Дополнительная информация: {$input->post('msg')}<br/>";
}

mail($to, $subject, $message, $headers); 