<?php  
$mailto = "info@klein-kitchens.com";  //My email address

$data = $_POST;

//getting customer data
$name = $data['name']; //getting customer name
$phone = $data['phone']; //getting customer Phome number
$message = $data['message']; //getting subject line from client
$email = $data['email']; //getting subject line from client
$date = $data['date']; //getting date line from client
$time = $data['time']; //getting time line from client


$subject = "Заявка с сайта http://Test.com/"; 

//Email body I will receive
$sendEmail = "Name: " . $name . "\n"
. "Phone Number: " . $phone . "\n" 
. "Client Message: " . "\n" . $message "\n"
. "Email: " . $email . "\n" 
. "Date: " . "\n" . $date "\n"
. "Time: " . "\n" . $time;

//Email headers
$headers = "Content-type: text/html; charset=\"utf-8\"";
$headers .= "Reply-To: reply-to@example.com\r\n"; 

//PHP mailer function

$result1 = mail($mailto, $subject, $sendEmail, $headers); // This email sent to My address

//Checking if Mails sent successfully

if ($result1) {
  $success = "Your Message was sent Successfully!";
} else {
  $failed = "Sorry! Message was not sent, Try again Later.";
}
 
?>
