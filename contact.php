
<?php
// If you are using Composer
require 'vendor/autoload.php';

// If you are not using Composer (recommended)
// require("path/to/sendgrid-php/sendgrid-php.php");
$name = $_POST['fullname']; 
$email = $_POST['email']; 
$phone = $_POST['phone']; 
$message = $_POST['message'];
$from = new SendGrid\Email(null, $email);
$subject = "Submission of new customer!";
$to = new SendGrid\Email(null, "yoursighthub@gmail.com");
$content = new SendGrid\Content("text/plain", "Hello, Email!");
$mail = new SendGrid\Mail($from, $subject, $to, $fullname,$phone, $message);

$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();
