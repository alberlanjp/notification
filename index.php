<?php

require __DIR__ . '/librarys/autoload.php';

echo "<h1>PHPMailer</h1>";

use Notification\Email;

$mail = new Email;
$mail->sendMail();
