<?php
$to      = 'nobody@example.com';
$subject='A message from your site visitor ';
$message_body='';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


if(isset($_POST['name']) and $_POST['name'] != ''){$message_body .= 'Visitor: ' . $_POST['name'] . "\n"; $subject.=$_POST['name'];}
if(isset($_POST['email']) and $_POST['email'] != ''){$message_body .= 'Email Address: ' . $_POST['email'] . "\n";}
if(isset($_POST['phone']) and $_POST['phone'] != ''){$message_body .= 'Phone Number: ' . $_POST['phone'] . "\n";}	
if(isset($_POST['message']) and $_POST['message'] != ''){$message_body .= 'Message: ' . $_POST['message'] . "\n";}

mail($to, $subject, $message, $headers);
?> 