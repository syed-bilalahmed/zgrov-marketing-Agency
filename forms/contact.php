<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $phone   = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Example: Send via PHP mail()
    $to      = "info@zgrov.com"; // Change to your email
    $subject = "New Contact Form Submission";
    $body    = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message has been sent successfully!'); window.location.href='../index.php';</script>";
    } else {
        echo "<script>alert('Message sending failed!'); window.location.href='../index.php';</script>";
    }
}
?>
