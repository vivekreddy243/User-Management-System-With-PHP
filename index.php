<?php 
include('config.php');
if(isset($_POST['submit']))
  {
    $fname=$_POST['fname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $ret=mysqli_query($con, "select Email from tbluser where Email='$email' || MobileNumber='$contno'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
        echo "<script>alert('This email or Contact Number already associated with another account');</script>";
    }
    else{
        $query=mysqli_query($con, "insert into tbluser(FullName, MobileNumber, Email, Password) value('$fname', '$contno', '$email', '$password' )");
        if ($query) {
            echo "<script>alert('You have successfully registered');</script>";
            echo "<script>window.location.href ='signin.php'</script>";
        }
        else {
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
            echo "<script>window.location.href ='index.php'</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>

    <!-- Font and Icon CSS-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #fff;
            color: #333;
        }

        /* Header styles */
        header {
            background-color: #000;
            color: white;
            padding: 15px;
            text-align: left;
            font-size: 24px;
        }

        header a {
            color: white;
            text-decoration: none;
        }

        /* Form and container styles */
        .page-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 60px);
        }

        .wrapper {
            width: 100%;
            max-width: 680px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 40px;
            border-radius: 8px;
        }

        .card-heading {
            text-align: center;
        }

        .card-body h2 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #333;
        }

        .input--style-1 {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            background-color: #f9f9f9;
            color: #333;
            margin-bottom: 20px; /* Adds space between input fields */
        }

        .input--style-1:focus {
            outline: none;
            border-color: #000;
        }

        .btn--radius {
            border-radius: 5px;
        }

        .btn--green {
            background-color: #333;
            color: white;
            padding: 12px 20px;
            font-size: 16px;
            width: 100%;
            border: none;
            cursor: pointer;
        }

        .btn--green:hover {
            background-color: #555;
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

        footer {
            background-color: #000;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 14px;
        }

        footer a {
            color: #FFD700;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .card-body h2 {
                font-size: 24px;
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

    <!-- Sign Up Form Section -->
    <div class="page-wrapper">
        <div class="wrapper">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Full Name" name="fname" required="true">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Mobile Number" name="contactno" required="true" maxlength="10" pattern="[0-9]+">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="Email" name="email" required="true">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input type="password" class="input--style-1" name="password" required="true" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="submit">Submit</button>
                        </div>
                        <br>
                        <a href="signin.php" style="color: black;">Already have an account? Sign In</a>
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
