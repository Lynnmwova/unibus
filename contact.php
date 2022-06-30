<?php
$name = $_POST('name');
$Visitor_email = $_POST('email');
$message = $_POST('message');


$email_from ='unibus@gmail.com';

$email_subject ="unibus feedback";

$email_body =" User Name: $name. \n".
"User Email: $Visitor_email. \n".
"User Message: $message. \n";

$to = "useremailadress.com";
$headers = "from: $email_from \r\n";
$headers .= "Reply-to: $visitor_email \r\n";
mail($to, $email_subject,$email_body,$headers);
header( "location: contact.html");



?>