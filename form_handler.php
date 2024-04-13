<?php
 $name=$_POST['name']
$visitor_email=$_POST['email']
$subject=$_POST['subject']
$message=$_POST['message']
$email_from='bisdoaecc@gmail.com';
$email_subject='New form submission';

$email_body="user name: $name.\n".
            "user email:$visitor_email.\n".
            "subject:$subject.\n".
            "user message:$message.\n";

$to='bisdoaecc@gmail.com';
$header= "from $email_from \r \n";
$header .= "reply-to: $visitor_email \r \n";
mail($to,$email_subject,$email_body,$header);
header("location: contact form.html")


?>