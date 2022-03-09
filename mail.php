<?php

$name - $_POST['name']:
$email - $_POST['email']:
$message - $_POST['message']:


$email_from = 'Porfoliowebsite@orion.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
                 "User Email: $email.\n".
                    "User Message: $message.\n";

$to = "opalmer1989@gmail.com";

$headers = "From: $email_from \r\n";

$headers . = "replay-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");


?>