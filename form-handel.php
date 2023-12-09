<?php
$name = $_POST['name'];
$Vistor_email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['massage'];
$email_form = 'info@as7097931@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "User Name :$name.\n".
                "User Email: $vistor_email.\n".
                 "Subject: $subject.\n".
                 "User Massage: $massage.\n";
$to = "as7097931@gmail.com";
$headers ="Form : $email_form \r\n";
$headers .= "Rely-To :$visto_email \r\n";
mail($to, $email_subject , $email_body,$headers);
header("Location : contact.html");
?>