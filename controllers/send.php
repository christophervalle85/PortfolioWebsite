<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate input
    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    // If there are errors, display them
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
        // Optionally, you can redirect back to the form
        // header('Location: contact.php');
        // exit();
    } else {
        // Prepare to send the email
        $to = "vchris006@gmail.com"; 
        $subject = "New Contact Message from $name";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";

        // Send the email
        if (mail($to, $subject, $body, $headers)) {
            echo "<p style='color: green;'>Message sent successfully!</p>";
        } else {
            echo "<p style='color: red;'>Failed to send message. Please try again later.</p>";
        }
    }
} else {
    // Redirect to contact form if accessed directly
    header('Location: contact.php');
    exit();
}
?>
