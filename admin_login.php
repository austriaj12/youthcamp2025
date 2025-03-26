<?php
session_start();
$admin_username = "admin"; // Change this to your desired username
$admin_password = "MarkAllen1201"; // Change this to a strong password

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION["admin_logged_in"] = true;
        header("Location: admin_dashboard.php"); // Redirect to admin panel
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youth Camp Director Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #6dd5ed, #2193b0); /* Modern gradient background */
            margin: 0;
            padding: 0;
            background-image: url('admin-background.png'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .login-box {
            background: rgba(255, 255, 255, 0.9); /* Semi-transparent white box */
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            width: 90%; /* Responsive width */
            max-width: 400px;
            text-align: center;
        }

        .login-box h2 {
            color: #2193b0;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .login-box input {
            width: calc(100% - 22px); /* Adjust for padding and border */
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .login-box button {
            width: 100%;
            padding: 14px;
            background: #2193b0;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .login-box button:hover {
            background: #197691;
        }

        .error {
            color: #e74c3c;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Youth Camp Director Login</h2>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>