<?php
include_once (dirname(__FILE__) . DIRECTORY_SEPARATOR . 'settings.php');

global $my_email;

$email_field = $_POST['newsletter'];
$subject_field = 'Perception Sun and Sport Eyewear - Newsletter Entry';
$message_field = "Please add this email to the newsletter list $email_field";

$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $email_field\r\n";
$headers .= "Reply-To: $email_field\r\n";

$mail_status = mail($my_email, $subject_field, $message_field, $headers);

if ($mail_status) {
    header('HTTP/1.1 200 OK');
}else{
    header('HTTP/1.1 500 Internal Server Error');
}
?>