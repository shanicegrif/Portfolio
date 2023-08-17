<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = "shanicegriffin@pursuit.org"; // Replace with your email address
    $subject = $_POST["subject"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["text"];
    
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    mail($recipient, $subject, $message, $headers);

    // Redirect user back to the contact section after submission
    header("Location: index.html#contact");
    exit;
}
?>
