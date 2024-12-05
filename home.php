<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - User Management System</title>
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
            color: #333; /* Dark gray text */
            background: url('https://img.freepik.com/free-photo/abstract-networking-concept-still-life-assortment_23-2149035715.jpg?t=st=1733376313~exp=1733379913~hmac=3dc936edb25a62ea3a432207db1d2e319c677b54bc88e6d1b7c28948d9ab062f&w=996') no-repeat center center fixed; /* Background image */
            background-size: cover; /* Ensure the image covers the entire viewport */
            min-height: 100vh; /* Ensures the body takes at least the full viewport height */
            display: flex;
            flex-direction: column;
        }

        /* Header Styles */
        header {
            background-color: rgba(0, 0, 0, 0.8); /* Black background with transparency */
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        header p {
            font-size: 18px;
            margin-bottom: 20px;
            color: #bbb;
        }

        header .btn {
            background-color: #333; /* Dark gray button */
            color: white;
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        header .btn:hover {
            background-color: #555; /* Lighter gray on hover */
        }

        /* Main Section */
        main {
            padding: 40px 20px;
            flex: 1;
            background: rgba(255, 255, 255, 0.8); /* Add slight transparency for readability */
        }

        /* Features Section */
        .features {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .features h2 {
            text-align: center;
            font-size: 28px;
            margin-bottom: 30px;
            color: #000; /* Black heading */
            border-bottom: 2px solid #333; /* Underline */
            display: inline-block;
            padding-bottom: 10px;
        }

        .feature-card {
            background-color: rgba(255, 255, 255, 0.9); /* White with slight transparency */
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }

        .feature-card h3 {
            font-size: 22px;
            margin-bottom: 10px;
            color: #000;
        }

        .feature-card p {
            font-size: 16px;
            color: #555; /* Light gray for text */
        }

        /* Footer Styles */
        footer {
            background-color: rgba(0, 0, 0, 0.8); /* Black footer with transparency */
            color: white;
            padding: 20px;
            text-align: center;
        }

        footer p {
            font-size: 14px;
        }

        footer a {
            color: #fff; /* White for footer links */
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            header h1 {
                font-size: 28px;
            }

            .btn {
                padding: 12px 25px;
                font-size: 18px;
            }

            .feature-card h3 {
                font-size: 20px;
            }

            .feature-card p {
                font-size: 14px;
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
    <h1>Welcome to the User Management System</h1>
    <p>Your go-to platform for managing users securely and efficiently.</p>
    <?php if (isset($_SESSION['username'])): ?>
        <p>Welcome, <?= htmlspecialchars($_SESSION['username']); ?>!</p>
        <a href="dashboard.php" class="btn">Go to Dashboard</a>
        <a href="logout.php" class="btn">Logout</a>
    <?php else: ?>
        <a href="signin.php" class="btn">Sign In</a>
        <a href="index.php" class="btn">Register</a>
        <a href="about.php" class="btn">About Us</a>
    <?php endif; ?>
</header>

<!-- Main Section -->
<main>
    <section>
        <h2>Key Features</h2>
        <div class="features">
            <div class="feature-card">
                <h3>Secure Login</h3>
                <p>Log in to access your personalized dashboard with industry-standard security measures.</p>
            </div>
            <div class="feature-card">
                <h3>Data Management</h3>
                <p>Perform Create, Read, Update, and Delete (CRUD) operations seamlessly.</p>
            </div>
            <div class="feature-card">
                <h3>Responsive Design</h3>
                <p>Access the platform on any device with a user-friendly interface.</p>
            </div>
            <div class="feature-card">
                <h3>Scalable Platform</h3>
                <p>Built to handle growing user bases and data efficiently.</p>
            </div>
        </div>
    </section>
</main>

<!-- Footer Section -->
<footer>
    <p>&copy; 2024 User Management System. All rights reserved.</p>
    <p><a href="contact.php">Contact Us</a></p>
</footer>

</body>
</html>
