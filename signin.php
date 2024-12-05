<?php
session_start();
error_reporting(0);
include('config.php');
if(isset($_POST['login']))
{
    $emailcon=$_POST['emailcont'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbluser where  (Email='$emailcon' || MobileNumber='$emailcon') && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
        $_SESSION['uid']=$ret['ID'];
        echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
    }
    else{
        echo "<script>alert('Invalid Details');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Page</title>
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
            color: #333; /* Black text */
            background-color: #fff; /* White background */
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ensures the body takes at least the full viewport height */
        }

        /* Header Styles */
        header {
            background-color: #000; /* Black header */
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

        header a {
            color: white;
            text-decoration: none;
        }

        header a:hover {
            text-decoration: underline;
        }

        /* Sign In Form Section */
        .page-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 80px); /* Full page minus header */
        }

        .wrapper {
            width: 100%;
            max-width: 680px;
        }

        .card {
            background-color: #fff;
            padding: 40px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .card-heading {
            text-align: center;
            margin-bottom: 20px;
        }

        .card-body {
            padding: 20px;
        }

        .card-body h2 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #333;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input--style-1 {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            background-color: #f9f9f9;
            color: #333;
        }

        .input--style-1:focus {
            outline: none;
            border-color: #333;
        }

        .btn--radius {
            border-radius: 5px;
        }

        .btn--green {
            background-color: #333; /* Dark gray button */
            color: white;
            padding: 12px 20px;
            font-size: 16px;
            width: 100%;
            border: none;
            cursor: pointer;
        }

        .btn--green:hover {
            background-color: #555; /* Lighter gray on hover */
        }

        a {
            color: #333;
            text-decoration: none;
            font-size: 14px;
            display: block;
            text-align: center;
            margin-top: 20px;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Footer Styles */
        footer {
            background-color: #000; /* Black footer */
            color: white;
            padding: 20px;
            text-align: center;
        }

        footer p {
            font-size: 14px;
            margin: 0;
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
                font-size: 28px;
            }

            .card-body h2 {
                font-size: 28px;
            }

            .input--style-1 {
                font-size: 14px;
                padding: 10px;
            }

            .btn--green {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>

<body>

<!-- Header Section -->
<header style="background-color: #000; padding: 10px; display: flex; justify-content: flex-start; align-items: center;">
    <a href="home.php" style="background-color: #333; color: white; font-size: 16px; text-decoration: none; font-weight: bold; padding: 10px 20px; margin: 10px; transition: background-color 0.3s ease; border-radius: 15px;">
        Home
    </a>
</header>



<!-- Sign In Form Section -->
<div class="page-wrapper">
    <div class="wrapper">
        <div class="card">
            <div class="card-heading">
                <h2 class="title">Sign In</h2>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="input-group">
                        <input type="text" class="input--style-1" placeholder="REGISTERED EMAIL OR MOBILE NUMBER" required="true" name="emailcont">
                    </div>

                    <div class="input-group">
                        <input type="password" class="input--style-1" placeholder="PASSWORD" name="password" required="true">
                    </div>

                    <div class="p-t-20">
                        <button class="btn btn--radius btn--green" type="submit" name="login">SIGN IN</button>
                    </div>
                    <br>
                    <a href="index.php">Don't have an account? CREATE AN ACCOUNT</a>
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Footer Section -->
<footer>
    <p>&copy; 2024 User Management System. All rights reserved.</p>
    <p><a href="contact.php">Contact Us</a></p>
</footer>

</body>
</html>
