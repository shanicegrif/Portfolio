<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = "your@email.com"; // Replace with your email address
    $subject = $_POST["subject"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["text"];
    
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    mail($recipient, $subject, $message, $headers);

    // Display a confirmation message on your contact section
    echo '<p class="confirmation-message">Thank you for your message! We will get back to you shortly.</p>';
}
?>
