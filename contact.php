
 <?php
$to      = 'anveshikagbu@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: anveshikagbu@gmail.com' . "\r\n" .
    'Reply-To: anveshikagbu@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
 echo "successful";
 else{
  echo "unsuccessful";
 }
?> 
