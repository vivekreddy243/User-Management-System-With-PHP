<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - User Management System</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header Styles */
        header {
            background-color: #000; /* Black */
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            font-size: 28px;
            margin: 0;
        }

        header nav {
            margin-top: 10px;
        }

        header nav a {
            background-color: #333; /* Dark gray */
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            margin-right: 10px;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        header nav a:hover {
            background-color: #555; /* Lighter gray */
        }

        /* Main Section */
        main {
            flex: 1;
            padding: 40px 20px;
        }

        .about-info {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .about-info h2 {
            color: #000; /* Black */
            font-size: 28px;
            margin-bottom: 20px;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }

        .about-info h3 {
            color: #333; /* Dark gray */
            font-size: 22px;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .about-info p {
            font-size: 18px;
            color: #555;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .about-info ul {
            list-style-type: square;
            padding-left: 20px;
            font-size: 16px;
            color: #333;
            margin-bottom: 20px;
        }

        .about-info ul li {
            margin-bottom: 10px;
        }

        /* Footer Styles */
        footer {
            background-color: #000; /* Black */
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            margin-top: auto;
        }

        footer a {
            color: #FFD700; /* Gold */
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            header h1 {
                font-size: 24px;
            }

            .about-info {
                padding: 20px;
            }

            .about-info h2 {
                font-size: 24px;
            }

            .about-info h3 {
                font-size: 20px;
            }

            .about-info p {
                font-size: 16px;
            }

            footer p {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>About Us</h1>
        <nav>
            <a href="home.php">Home</a>
        </nav>
    </header>
    <main>
        <section class="about-info">
            <h2>Welcome to the User Management System</h2>
            <p>
                The User Management System is designed to streamline and secure the management of user information. 
                It provides an intuitive platform for administrators to perform CRUD (Create, Read, Update, Delete) operations efficiently while ensuring robust data protection.
            </p>
            
            <h3>Our Mission</h3>
            <p>
                To deliver a user-friendly, secure, and efficient platform for managing user data. 
                We aim to prioritize privacy and ensure that all operations are conducted in a secure environment.
            </p>
            
            <h3>Technologies Used</h3>
            <ul>
                <li><strong>PHP:</strong> Handles server-side functionality for efficient operations.</li>
                <li><strong>MySQL:</strong> Provides a robust database solution for managing user data.</li>
                <li><strong>JavaScript:</strong> Ensures dynamic client-side interactions and validations.</li>
            </ul>

            <h3>About the Creator</h3>
            <p>
                This project was developed by <strong>Vivek Reddy</strong>, as part of an educational assignment to demonstrate best practices in secure and efficient user management systems.
            </p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 User Management System. All rights reserved.</p>
        <p><a href="contact.php">Contact Us</a></p>
    </footer>
</body>
</html>
