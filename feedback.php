<?php

$remote_addr = $_SERVER['REMOTE_ADDR'];

$mail_body = '';

if(isset($_POST['fio'])) {
    $mail_body .= '<b>Имя отправителя:</b> ' . $_POST['fio'] . '<br/><br/>';
}

if(isset($_POST['phoneNumber'])) {
    $mail_body .= '<b>Контактный телефон:</b> ' . $_POST['phoneNumber'] . '<br/><br/>';
}

if(isset($_POST['email'])) {
    $mail_body .= '<b>E-mail:</b> ' . $_POST['email'] . '<br/><br/>';
}

$mail_body .= '======================================<br/><br/>' . 'IP: ' . $remote_addr;

$mail_body .= '======================================<br/><br/>' . 'На это письмо не надо отвечать.';

$email_to = 'bananamama-mk@yandex.ru, maylo.kondratev@yandex.ru';
$subject = 'Заявка с контактной формы BananaMama:Продлёнка';
$header = "From: BananaMama:Продлёнка <bananamama-mk@yandex.ru>\r\nContent-type: text/html; charset=windows-1251 \r\n";
$body = $mail_body;

$subject = iconv('UTF-8', 'CP1251', $subject);
$header = iconv('UTF-8', 'CP1251', $header);
$body = iconv('UTF-8', 'CP1251', $body);

mail($email_to, $subject, $body, $header);

echo $mail_body;





