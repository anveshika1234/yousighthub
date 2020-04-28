
 <?php
$to      = 'yoursighthub@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: yoursighthub@gmail.com' . "\r\n" .
    'Reply-To: yoursighthub@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
 echo "successful";
 else{
  echo "unsuccessful";
 }
?> 
