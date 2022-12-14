<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $comment = $_POST['comment'];

    $to = "ronaldbaisa36@gmail.com";
    $subject = "Contact Form Submission - $subject";
    $message = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nMessage: $comment";
    $headers = "From: $email";

    mail($to,$subject,$message,$headers);
    echo "Your message has been sent successfully";

}

?>