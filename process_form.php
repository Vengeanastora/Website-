<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    
    // Email configuration (change these values)
    $to = "vengeanastora@gmail.com"; // YOUR EMAIL HERE
    $subject = "New Form Submission";
    $message = "You have received a new submission:\n\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    
    $headers = "From: $email";
    
    // Send email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect to thank you page
        header("Location: thank_you.html");
    } else {
        // Error handling
        header("Location: error.html");
    }
    exit;
} else {
    // Not a POST request, redirect to form
    header("Location: index.html");
    exit;
}
?>
