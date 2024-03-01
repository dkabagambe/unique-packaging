<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    

    $to = 'kisitujohn86@gmail.com';
    $subject = 'General Inquiry';
    $message = "Name: $name\n\n";
    $message .= "Email: $email\n\n";
    $message .= "Subject: $subject\n\n";
    $message .= "Check-in Date: $message\n\n";
    

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        // Redirect to home page
        echo '<script>window.location.href = "index.html";</script>';
        exit;
    } else {
        echo '<p>Oops! An error occurred while sending the General Inquiry. Please try again later.</p>';
    }
}
?>
