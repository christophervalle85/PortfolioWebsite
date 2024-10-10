<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="../css/contact.css"> 
</head>
<body>
    <?php include 'template.php'; ?> 
    
    <div id="notification" style="display: none;"></div>

    <main>
        <h1>Contact Me</h1>
        <form id="contact-form" method="POST" class="contact-form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2024 Christopher Valle</p>
    </footer>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery for simplicity -->
<script src="../js/contact.js"></script> <!-- Link to your JavaScript file -->

</html>
