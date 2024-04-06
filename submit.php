<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"];
    $to = "eusman461@gmail.com"; // Change this to your email address
    $subject = "New message from website";
    $headers = "From: eusman461@gmail.com"; // Change this to your email address
    $headers .= "Reply-To: ".$_POST["email"];
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error: Unable to send message.";
    } ?>