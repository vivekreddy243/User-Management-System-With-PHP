<?php
session_start();
error_reporting(0);
include('config.php');
if (strlen($_SESSION['uid'] == 0)) {
    header('location:logout.php');
} else {
    if (isset($_GET['delid'])) {
        $rid = intval($_GET['delid']);
        $sql = mysqli_query($con, "delete from tblusers where ID=$rid");
        echo "<script>alert('Data deleted');</script>";
        echo "<script>window.location.href = 'dashboard.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management Dashboard</title>
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
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 24px;
            margin: 0;
        }

        header .header-buttons {
            display: flex;
            gap: 10px;
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

        /* Main Content */
        .container {
            flex: 1;
            padding: 20px;
        }

        .table-wrapper {
            max-width: 1000px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .table-title {
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .table-title h2 {
            font-size: 28px;
            color: #000; /* Black */
        }

        .table-title .btn {
            background-color: #333; /* Dark gray */
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .table-title .btn:hover {
            background-color: #555; /* Lighter gray */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #333; /* Dark gray */
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        .action-icons a {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            color: white;
            text-decoration: none;
            background-color: #333; /* Dark gray */
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .action-icons a:hover {
            background-color: #555; /* Lighter gray */
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
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <?php
        $uid = $_SESSION['uid'];
        $ret = mysqli_query($con, "select FullName from tbluser where ID='$uid'");
        $row = mysqli_fetch_array($ret);
        $name = $row['FullName'];
        ?>
        <h1>Welcome, <?php echo htmlspecialchars($name); ?>!</h1>
        <div class="header-buttons">
            <a href="home.php" class="btn">Home</a>
            <a href="logout.php" class="btn">Logout</a>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <h2>User <b>Management</b></h2>
                <a href="insert.php" class="btn">Add New User</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ret = mysqli_query($con, "select * from tblusers");
                    $cnt = 1;
                    $row = mysqli_num_rows($ret);
                    if ($row > 0) {
                        while ($row = mysqli_fetch_array($ret)) {
                    ?>
                            <tr>
                                <td><?php echo $cnt; ?></td>
                                <td><?php echo $row['FirstName']; ?> <?php echo $row['LastName']; ?></td>
                                <td><?php echo $row['Email']; ?></td>
                                <td><?php echo $row['MobileNumber']; ?></td>
                                <td><?php echo $row['CreationDate']; ?></td>
                                <td class="action-icons">
                                    <a href="read.php?viewid=<?php echo htmlentities($row['ID']); ?>" title="View">View</a>
                                    <a href="edit.php?editid=<?php echo htmlentities($row['ID']); ?>" title="Edit">Edit</a>
                                    <a href="dashboard.php?delid=<?php echo ($row['ID']); ?>" title="Delete" onclick="return confirm('Do you really want to delete this user?');">Delete</a>
                                </td>
                            </tr>
                    <?php
                            $cnt++;
                        }
                    } else {
                    ?>
                        <tr>
                            <td colspan="6" style="text-align: center; color: red;">No Record Found</td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 User Management System. All rights reserved.</p>
    </footer>
</body>
</html>
<?php } ?>
