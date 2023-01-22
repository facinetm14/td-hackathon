<?php
if (isset($_POST'email']) && !empty($_POST['email'])) {
    $email = $_POST['email'];
    $name = $_POST["firstName"];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to      = $mail;
        $subject = 'SIM CARD CHANGED !';
        $message = "Hi, $name\n\nYour sim card changed, if it's not you, just ignore this email\n\nSincerly!";
        $headers = 'From: facinetkouyate430@gmail.com' . "\r\n" .
            'Reply-To: noreply';
       if ( mail($to, $subject, $message, $headers))
            return 200;
       echo return 501; 
    }
}
