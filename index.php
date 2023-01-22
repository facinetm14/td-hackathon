<?php
if (isset($_GET['email']) && !empty($_GET['email'])) {
    $email = $_GET['email'];
    $name = $_GET["firstName"];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to      = $mail;
        $subject = 'SIM CARD CHANGED !';
        $message = "Hi, $name\n\nYour sim card changed, if it's not you, just ignore this email\n\nSincerly!";
        $headers = 'From: facinetkouyate430@gmail.com' . "\r\n" .
            'Reply-To: noreply';
       if ( mail($to, $subject, $message, $headers))
            echo "COOL\n";
        else
            echo "ERROR\n!"; 
    }
}