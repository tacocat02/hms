<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login - Hospital Management System</title>
    <link rel="stylesheet" type="text/css" href="admin_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="login-section">
            <div class="login-header">
                <img src="logo.png" alt="MediConnect Logo" class="logo">
                <h1>MediConnect</h1>
                <h2>Admin Panel</h2>
            </div>
            <div class="login-form">
                <h2>Admin Login</h2>
                <form action="admin_login.php" method="post">
                    <input type="text" name="username" placeholder="Username" class="input-box" required>
                    <input type="password" name="password" placeholder="Password" class="input-box" required>
                    <button type="submit" class="login-button">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>