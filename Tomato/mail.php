<?php

$name = $_POST['name'];
$email = $_POST['mail'];
$password= $_POST['passwd'];
$subject= 'text';
$recipient = '$email';
$message = 'text';

mail($recipient, $subject, $message,) or die("Error!");

echo"Mensaje enviado";

?>
