<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$username = htmlspecialchars($_SESSION['username']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto; padding: 20px; }
        .header { display: flex; justify-content: space-between; align-items: center; }
        .logout { background-color: #f44336; color: white; padding: 10px 15px; text-decoration: none; }
    </style>
</head>
<body>
    <div class="header">
        <h2>Welcome, <?php echo $username; ?></h2>
        <a href="logout.php" class="logout">Logout</a>
    </div>
    
    <div>
        <h3>Secure Dashboard</h3>
        <p>This is a secure area that is only accessible after successful login.</p>
        <p>Your login is protected with:</p>
        <ul>
            <li>HTTPS encryption</li>
            <li>Password salting</li>
            <li>Password hashing (SHA-256)</li>
            <li>Protection against SQL injection</li>
            <li>Protection against XSS attacks</li>
            <li>Protection against buffer overflow</li>
        </ul>
    </div>
</body>
</html>
