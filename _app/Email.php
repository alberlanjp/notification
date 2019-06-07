<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;

class Email {
    
    public function __construct() {
        
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 2;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                                   // Enable SMTP authentication
        $mail->Username = 'user@example.com';                     // SMTP username
        $mail->Password = 'secret';                               // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
    }

    public function sendMail() {
        echo '<p><b>Email</b> enviado</p1> ';
        
    }


}
