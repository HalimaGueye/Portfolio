
<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $project = $_POST['project'];
  $message = $_POST['message'];
  $to = "halima.gueye@gmail.com";
  $email_from = $visitor_email;
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";
 

  

	$email_subject = "New project";

	$email_body = "You have received a new message from the user $name.\n
    The project : \n $project.\n
    Here is the message:\n $message.";


    mail($to,$email_subject,$email_body,$headers);
?>


