<?php
session_start();

if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | Pixel++</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/login.css">

</head>

<body>
<div class="login-glow login-glow-left"></div>
<div class="login-glow login-glow-right"></div>
<div class="login-wrapper">
    <div class="login-card">
        <div class="text-center mb-5">
            <h2 class="logo">Pixel++</h2>
            <p>Welcome back, Admin</p>
        </div>

        <form action="admin/auth/login_process.php" method="POST">
            <div class="mb-4">
                <label>Username</label>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Enter username"
                    name="username" required>

            </div>
            <div class="mb-4">
                <label>Password</label>
                <input
                    type="password"
                    class="form-control"
                    placeholder="Enter password"
                    name="password" required>
            </div>
            <button class="btn-login" type="submit">
                <i class="bi bi-box-arrow-in-right"></i>
                Login
            </button>
        </form>
    </div>
</div>

</body>
</html>