<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true) {
    header("Location: admin_login.php"); // Redirect to login page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #6dd5ed, #2193b0);
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .dashboard-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            width: 90%;
            max-width: 500px;
            text-align: center;
        }

        h2 {
            color: #2193b0;
            margin-bottom: 30px;
            font-weight: 600;
        }

        p {
            margin-bottom: 20px;
            font-size: 16px;
        }

        .btn {
            display: inline-block;
            padding: 14px 25px;
            font-size: 16px;
            color: white;
            background-color: #2193b0;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s ease;
            margin: 10px;
        }

        .btn:hover {
            background-color: #197691;
        }

        .logout-btn {
            background-color: #e74c3c;
        }

        .logout-btn:hover {
            background-color: #c23b2b;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h2>Welcome, Pastor Mark Allen!</h2>
        <p>Manage camper registrations and download the list.</p>

        <a href="export.php" class="btn">Download Camper List</a>
        <a href="JesusOverEverthing.php" class="btn logout-btn">Logout</a>
    </div>
</body>
</html>