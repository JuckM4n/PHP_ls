<?php
require_once '../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.yandex..ru', 465, 'ssl'))
->setUsername('nik-morozov99@yandex.ru')
->setPassword('daxosoabkotwlcdl')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
->setFrom(['nik-morozov99@yandex.ru' => 'Nikita Morozov'])
->setTo(['nik_morozov0@mail.ru'])
->setBody('Here is the message itself')
;

// Send the message
$result = $mailer->send($message);
var_dump($result);
