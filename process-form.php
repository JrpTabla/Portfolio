<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $contactNumber = $_POST["contactNumber"];
    $concerns = $_POST["concerns"];

    // Email recipient (replace with your email address)
    $to = "james.ray.p.tabla@gmail.com";

    // Email subject
    $subject = "New Contact Form Submission";

    // Email body
    $message = "Good day!\n\n";
    $message .= "Hi James,\n\n";
    $message .= "Body: $concerns\n\n";
    $message .= "Kindly contact me here: \nContact Number: $contactNumber\nEmail Address: $email \n\n";
    $message .= "Regards,\n$fullName";

    // Additional headers
    $headers = "From: $email";

    // Send the email
    mail($to, $subject, $message, $headers);

    // Redirect back to the root of the website
    header("Location: /");
    exit();
}
?>