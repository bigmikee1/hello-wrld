<?php

$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']


$email_from = 'mckuba2115@gmail.com';

$email_subject = 'New From Submission';

$email_body = "User name: $name.\n".
                "User email: $visitor_email.\n".
                "Subject: $subject.\n".
                "Message: $message.\n";

$to = 'kubaklimkowicz0@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-to: $visitoe_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>