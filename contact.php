<!-- <?php 

if(isset($_POST['submit'])){
    $to = "yoursighthub@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $fullname = $_POST['fullname'];
     $email = $_POST['email'];
      $phone = $_POST['phone'];
       $message = $_POST['message'];
       
   
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message .= "Name: ". $fullname ."\n";
    $message .= "Contact Number: ". $phone ."\n";
  
    $message .= "Message: ". $message ."\n";
     
    
    $message2 = "Here is a copy of your message " . $fullname . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $fullname . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
 -->

<?php
$to = 'anveshikagbu@gmail.com';
$subject = 'Marriage Proposal';
$message = 'Hi Jane, will you marry me?'; 
$from = 'anveshikagbu@gmail.com';
 
// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>