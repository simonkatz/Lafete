<?php
// Check for empty fields
if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$email_address = $_POST['email'];
	
// Create the email and send the message
$to = 'hello@lafetebysheba.com'; 
$email_subject = "Website Contact Form";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nEmail: $email_address";
$headers = "From: noreply@lafetebysheba.com\n"; 
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>