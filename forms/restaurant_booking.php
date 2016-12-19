<?php include '../config.php'; ?>

<?php
$name = $_POST['name_booking'];
$email = $_POST['email_booking'];
$phone = $_POST['phone_booking'];
$guests = $_POST['guests_booking'];
$calendar = $_POST['calendar_booking'];
$hour = $_POST['hour_booking'];
$requests = $_POST['requests_booking'];
 
$headers = "From: $name <$email>\r\n";  
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
$subject = "[Canadabroker Website Enquiry]";
$body = "Name: ".$name."<br>";
$body .= "Email: ".$email."<br>";
$body .= "Phone: ".$phone."<br>";
$body .= "Company Name: ".$guests."<br>";
$body .= "Country: ".$calendar."<br>";
$body .= "City: ".$hour."<br>";
$body .= "Details : ".$requests."<br>";
 
if($name != '' && $email != '' && $phone != '' && $guests != '' && $calendar != '' && $hour != '' && $requests != ''){
    mail($dest,$subject,$body,$headers);
}
?>