<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Jika belum login, redirect ke halaman login
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Informasi Wisata</title>
    <link rel="stylesheet" href="styles.css"> <!-- Tautkan ke file CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 15px;
        }

        .container {
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .welcome-message {
            font-size: 1.5em;
            margin-top: 20px;
        }

        .info-links {
            margin-top: 30px;
        }

        .info-links a {
            font-size: 1.2em;
            text-decoration: none;
            color: #4CAF50;
            margin: 10px;
        }

        .info-links a:hover {
            text-decoration: underline;
        }

        .logout-btn {
            background-color: #f44336;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 1.2em;
            margin-top: 30px;
        }

        .logout-btn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>

<header>
    <h1>Selamat Datang di Website Informasi Wisata</h1>
</header>

<div class="container">
    <p class="welcome-message">
        Hai, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>! Selamat datang di halaman utama. Berikut adalah beberapa link yang dapat Anda akses:
    </p>

    <form action="logout.php" method="post">
        <button type="submit" class="logout-btn">Logout</button>
    </form>
</div>

</body>
</html>
