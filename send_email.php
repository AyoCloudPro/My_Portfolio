<?php
if($_SERVER['REQUEST_METHOD'] == 'post') {
    $name = $_post['name'];
    $email = $_post["email"];
    $subject = $_post["subject"];
    $message = $_post['message'];

    // Format the email body
    $subject = "Portfolio Mail: " . $subject;
    $body = "Name: " . $name . "\n\n" . "Email: " . $email . "\n\n" . "Message: " . $message;

    // Send the email
    $to = "ayomideolalere374@gmail.com";
    $headers = "From: " . $name . "\r\n";

    if(mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email. Please try again.";
    }
}
?>
