<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$comment= $_POST['comment'];
$number= $_POST['mobile'];

$to = "ukraine6633+bjjhr@gmail.com";
$subject = "Mail From website";
$txt = "Name: " . $name . "\r\nEmail: " . $email . "\r\nComment: " . $comment . "\r\nMobile number: " . $number;
$headers = "From: noreply@yoursite.com" . "\r\n" .
    "CC: somebodyelse@example.com";

if ($email != '') {
    mail($to, $subject, $txt, $headers);
}
//redirect
header("Location: thankyou.html");
?>
