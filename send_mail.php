<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate the data (basic validation)
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Email settings
            $to = "kamaranzafar4343@gmail.com"; // Replace with your email address
            $subject = "New Contact Form Submission";
            $body = "You have received a new message from the contact form.\n\n" .
                    "Name: $name\n" .
                    "Email: $email\n" .
                    "Phone: $phone\n" .
                    "Message:\n$message\n";
            $headers = "From: $email";

            // Send the email
            if (mail($to, $subject, $body, $headers)) {
                echo "Message sent successfully!";
            } else {
                echo "Failed to send the message. Please try again.";
            }
        } else {
            echo "Invalid email address.";
        }
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request.";
}
?>
