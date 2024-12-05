<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - User Management System</title>
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
            min-height: 100vh; /* Ensures the body takes full viewport height */
        }

        /* Header Styles */
        header {
            background-color: #000; /* Black */
            color: white;
            padding: 20px;
        }

        header h1 {
            font-size: 28px;
            margin: 0 0 10px; /* Adds spacing between the heading and links */
            text-align: center;
        }

        header .links {
            display: flex;
            justify-content: flex-start; /* Aligns links to the left */
            gap: 10px; /* Adds spacing between buttons */
        }

        header .btn {
            background-color: #333; /* Dark gray */
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        header .btn:hover {
            background-color: #555; /* Lighter gray */
        }

        /* Main Section */
        main {
            flex: 1; /* Pushes the footer to the bottom */
            padding: 40px 20px;
            text-align: center;
        }

        .contact-info {
            background-color: white;
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-size: 18px;
            color: #333;
        }

        .contact-info h2 {
            color: #000; /* Black */
            font-size: 28px;
            margin-bottom: 20px;
        }

        .contact-info p {
            margin-bottom: 15px;
        }

        .contact-info a {
            color: #333; /* Black */
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .contact-info a:hover {
            color: #555; /* Lighter gray */
        }

        /* Footer Styles */
        footer {
            background-color: #000; /* Black */
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            margin-top: auto; /* Ensures the footer stays at the bottom */
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

            .contact-info {
                padding: 20px;
                width: 90%;
            }

            .contact-info h2 {
                font-size: 24px;
            }
        }

        @media (max-width: 480px) {
            header p {
                font-size: 16px;
            }

            .contact-info h2 {
                font-size: 20px;
            }

            footer p {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <h1>Contact Us</h1>
        <div class="links">
            <a href="home.php" class="btn">Home</a>
            <a href="about.php" class="btn">About Us</a>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <section class="contact-info">
            <h2>Contact Information</h2>
            <p>If you have any questions, feel free to reach out to us:</p>
            <p><strong>Email Us:</strong> <a href="mailto:vivekreddypeddireddy@gmail.com">vivekreddypeddireddy@gmail.com</a></p>
            <p><strong>Call Us:</strong> <a href="tel:+14049887941">+1 (404) 988-7941</a></p>
        </section>
    </main>

    <!-- Footer -->
    <footer>
    <p>&copy; 2024 User Management System. All rights reserved.</p>
    <p><a href="contact.php">Contact Us</a></p>
</footer>
</body>
</html>
