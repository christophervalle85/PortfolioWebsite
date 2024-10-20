<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="../css/projects.css"> 
</head>
<body>
    <?php include 'template.php'; ?> 
    
    <main>
        <div class="content-container">
            <h1>Projects</h1>
            <div class="projects-container">
                <div class="project">
                    <img src="../images/chatapp.png" alt="Project 1">
                    <div class="project-info">
                        <h2>Chat Server</h2>
                        <p><strong>Description:</strong>  real-time chat server built using Node.js and WebSocket, allowing users to communicate securely and instantly.</p>
                        <p><strong>Skills Used:</strong> Node.js, WebSocket, Express, Socket.io, MongoDB.</p>
                        <p><strong>Key Features:</strong> User authentication, message encryption, and group chats.</p>
                        <a href="https://github.com/username/project1" target="_blank">View on GitHub</a>
                    </div>
                </div>

                <div class="project">
                    <img src="../images/emailgen.png" alt="Project 2">
                    <div class="project-info">
                        <h2>Email Generator</h2>
                        <p><strong>Description:</strong> A web application that allows users to create temporary email addresses for anonymous sign-ups and registrations.</p>
                        <p><strong>Skills Used:</strong> PHP, JavaScript, RESTful APIs, HTML/CSS.</p>
                        <p><strong>Key Features:</strong> API integration for email creation, user-friendly interface, and email forwarding functionality.</p>
                        <a href="https://github.com/username/project2" target="_blank">View on GitHub</a>
                    </div>
                </div>

                <div class="project">
                    <img src="../images/passwordman.png" alt="Project 3">
                    <div class="project-info">
                        <h2>Password Manager</h2>
                        <p><strong>Description:</strong> A secure password manager that stores and encrypts user passwords, enabling users to manage their credentials safely.</p>
                        <p><strong>Skills Used:</strong> Python, Flask, SQLAlchemy, AES encryption.</p>
                        <p><strong>Key Features:</strong> User authentication, password generation, and secure storage.</p>
                        <a href="https://github.com/username/project3" target="_blank">View on GitHub</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Christopher Valle</p>
    </footer>
</body>
</html>

