<?php include '../config.php'; ?>

<?php
$name = $_POST['name_contact_form'];
$email = $_POST['email_contact_form'];
$message = $_POST['message_contact_form'];

$headers = "From: $name <$email>\r\n";  
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
$subject = "[Canada Broker Contact Form]";
$body = "Name: ".$name."<br>";
$body .= "Email: ".$email."<br>";
$body .= "Message: ".$message;
 
if($name != '' && $email != '' && $message != ''){
    mail($dest,$subject,$body,$headers);
}
?>