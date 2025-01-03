<?php
session_start();

// Memeriksa apakah admin sudah login
if (!isset($_SESSION['username'])) {
    // Jika tidak ada session 'username', redirect ke halaman login
    header("Location: loginadmin.php");
    exit();
}

// Proses logout
if (isset($_POST['logout'])) {
    // Menghapus session dan redirect ke halaman login
    session_unset(); // Menghapus semua session variables
    session_destroy(); // Menghancurkan session
    header("Location: loginadmin.php"); // Arahkan ke halaman login setelah logout
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Untuk ikon -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .sidebar {
            width: 250px;
            background-color: #fc8fcc;
            height: 100vh;
            padding-top: 20px;
            color: white;
            position: fixed;
        }
        .sidebar h2 {
            text-align: center;
            font-size: 1.8em;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: white;
            font-size: 1.2em;
            display: block;
        }
        .sidebar ul li a:hover {
            background-color: #e60066;
            border-radius: 5px;
        }
        .content {
            margin-left: 250px;
            padding: 30px;
            flex-grow: 1;
        }
        .header {
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
        .header h1 {
            font-size: 2.5em;
            margin: 0;
        }
        .dashboard-cards {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }
        .card {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 22%;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card i {
            font-size: 3em;
            color: #fc8fcc;
        }
        .card p {
            font-size: 1.2em;
            color: #333;
        }
        .btn-logout {
            background-color: #ff4d4d;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-logout:hover {
            background-color: #e60000;
        }
        .btn-logout i {
            margin-right: 10px;
        }
        .footer {
            background-color: #fc8fcc;
            padding: 10px;
            text-align: center;
            color: white;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Sidebar Navigasi -->
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="home.php"><i class="fas fa-tachometer-alt"></i> Halaman utama</a></li>
            <li><a href="add_wisata.php"><i class="fas fa-users"></i> Add Wisata</a></li>
            <li><a href="manage_wisata.php"><i class="fas fa-users"></i> Manage Wisata</a></li>
        </ul>
    </div>

    <!-- Konten Utama -->
    <div class="content">
        <div class="header">
            <h1>HALAMAN ADMIN</h1>
        </div>

        <!-- Form Logout -->
        <form action="homeadmin.php" method="post">
            <button type="submit" name="logout" class="btn-logout"><i class="fas fa-sign-out-alt"></i> Logout</button>
        </form>
    </div>

    <div class="footer">
        <p>&copy; 2024 Informasi Wisata Lamongan | Indahnya Wisataku</p>
    </div>

</body>
</html>
