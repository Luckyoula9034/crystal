<?php

$name = $_POST['name'];
$visitor_email + $_POST['email'];
$massage = $_POST['massage'];

$email_from = 'crystaltechcompany@gmail.com';

$email_subject = 'form submission';

$email_subject = "user name: $name.\n".
                  "user Email: $visitor_email.\n".
                    "user massage:$massage.\n";

    $to = "crystaltechcompany@gmail.com";
    
    $headers = "from: $email_from \r\n";

    $headers .= " Reply-To: $visitors_email \r\n";
    
    mail($to.$email_subject,$email_body,$headers);

    header("location: index.html");


?>