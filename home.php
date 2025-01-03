<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Informasi Wisata</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #ffe4ec;
            padding: 0;
            color: #333;
        }
        header {
            background: linear-gradient(90deg, #ff8fb1, #ffc8dd);
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        header h1 {
            margin: 0;
            font-size: 2em;
            font-weight: bold;
        }
        .login-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 1.5em;
            color: white;
            text-decoration: none;
            z-index: 1000;
            cursor: pointer;
        }
        .login-icon:hover {
            color: #ffe4ec;
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: #ffb3c1;
            padding: 15px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        nav a {
            text-decoration: none;
            color: white;
            padding: 12px 20px;
            margin: 0 10px;
            font-size: 1em;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        nav a:hover {
            background-color: #f080a1;
            border-radius: 20px;
            transform: scale(1.1);
        }
        .welcome-message {
            text-align: center;
            margin-top: 30px;
            font-size: 1.5em;
            color: #b23a48;
            font-weight: bold;
        }
        .slider {
            position: relative;
            max-width: 80%;
            margin: 30px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .slides {
            display: flex;
            transition: transform 1s ease-in-out;
        }
        .slides img {
            width: 150%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 12px;
        }
        footer {
            background-color: #ff8fb1;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }
        footer p {
            margin: 0;
            font-size: 0.9em;
        }

        @keyframes slideShow {
            0% { transform: translateX(0); }
            20% { transform: translateX(-100%); }
            66% { transform: translateX(-200%); }
            50% { transform: translateX(-200%); }  /* Jaga gambar terakhir tetap ditampilkan */
            50% { transform: translateX(0); }     /* Kembali ke gambar pertama */
        }

        .slides {
            animation: slideShow 12s infinite; /* Ganti durasi agar lebih lambat */
        }

    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Informasi Wisata</h1>
        <a href="loginuser.php" class="login-icon" title="Login">
            <i class="fas fa-user"></i>
        </a>
    </header>
    <nav>
        <a href="home.php">Home</a>
        <a href="destinasi.php">Destinasi</a>
        <a href="tentang.php">Tentang</a>
        <a href="kontak.php">Kontak</a>
    </nav>
    <div class="welcome-message">
        <p>Halo semua, Selamat datang di halaman utama informasi wisata.</p>
    </div>
    <div class="slider">
        <div class="slides">
            <img src="011.jpg" alt="Gambar Wisata 1">
            <img src="30.jpg" alt="Gambar Wisata 2">
            <img src="32.jpg" alt="Gambar Wisata 3">
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Informasi Wisata Lamongan | Indahnya wisataku.</p>
    </footer>
</body>
</html>
