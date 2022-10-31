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

//database connection

$conn = new mysqli('localhost','root','','unibus');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact(name, Visitor_email, message) values(?, ?, ?)");
		$stmt->bind_param("sss", $name,  $Visitor_email , $message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Message sent successfully...";
		$stmt->close();
		$conn->close();
	}
?>