<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - Informasi Wisata</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(45deg, #ffe4ec, #ffe4ec);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        header {
            text-align: center;
            color: Black;
            margin-bottom: 30px;
        }

        header h1 {
            font-size: 36px;
        }

        .content {
            background-color: pink;
            padding: 40px;
            width: 100%;
            max-width: 400px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .content h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .content p {
            margin-bottom: 20px;
            font-size: 16px;
            color: #555;
        }

        .content input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .content button {
            padding: 14px 30px;
            background-color: #fc8fcc;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .content button:hover {
            background-color: #d14b99;
        }

        footer {
            margin-top: 40px;
            color: white;
            font-size: 14px;
        }

        @media (max-width: 600px) {
            header h1 {
                font-size: 28px;
            }

            .content {
                padding: 30px;
            }

            .content h2 {
                font-size: 20px;
            }

            .content button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Informasi Wisata Lamongan</h1>
    </header>

    <!-- Konten Pendaftaran -->
    <div class="content">
        <h2>Daftar Akun</h2>
        <p>Daftarkan diri Anda untuk mengakses fitur dan informasi menarik di website kami. Lengkapi formulir di bawah ini untuk memulai!</p>
        
        <form action="home.php" method="POST">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Daftar</button>
        </form>

        <p>Sudah punya akun? <a href="loginuser.php">Masuk disini</a></p>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Informasi Wisata Lamongan | Indahnya Wisataku</p>
    </footer>

</body>
</html>
