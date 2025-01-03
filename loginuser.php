<?php
session_start();


// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'wisata_lamongan');

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Proses login ketika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data username dan password dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Ambil data user berdasarkan username
    $sql = "SELECT * FROM user WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Cek apakah user ditemukan dan password cocok
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if ($password === $user['password']) { // Gantilah dengan password_verify jika menggunakan hashing
            $_SESSION['username'] = $user['username'];
            header("Location: home.php"); // Arahkan ke halaman home setelah login berhasil
            exit();
        } else {
            $_SESSION['message'] = "Password salah!";
        }
    } else {
        $_SESSION['message'] = "Username tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Informasi Wisata</title>
    <style>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Informasi Wisata</title>
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
            color: black;
            margin-bottom: 30px;
        }

        header h1 {
            font-size: 36px;
        }

        .login-form {
            background-color: pink;
            padding: 40px;
            width: 100%;
            max-width: 400px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .login-form input {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
        }

        .login-form input:focus {
            border-color: #fc8fcc;
        }

        .login-form button {
            width: 100%;
            padding: 14px;
            background-color: #fc8fcc;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-form button:hover {
            background-color: #d14b99;
        }

        .message {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
            font-weight: bold;
        }

        .message.success {
            background-color: #28a745;
            color: white;
        }

        .message.error {
            background-color: #dc3545;
            color: white;
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
        }

        .register-link a {
            color: #fc8fcc;
            text-decoration: none;
            font-weight: bold;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        footer {
            margin-top: 40px;
            color:black;
            font-size: 14px;
        }

        @media (max-width: 600px) {
            header h1 {
                font-size: 28px;
            }

            .login-form {
                padding: 30px;
            }

            .login-form input,
            .login-form button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>


    <!-- Header -->
    <header>
        <h1>Login</h1>
    </header>

    <!-- Form Login -->
    <div class="login-form">
        <?php
        // Tampilkan pesan jika ada
        if (isset($_SESSION['message'])) {
            echo '<div class="message ' . (strpos($_SESSION['message'], 'berhasil') !== false ? 'success' : 'error') . '">' . $_SESSION['message'] . '</div>';
            unset($_SESSION['message']);
        }
        ?>

        <form action="loginuser.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <button type="submit">Login</button>
        </form>
    </div>

    <!-- Link ke halaman login -->
        <div class="register-link">
            <p>Belum Punya Akun? <a href="daftarakun.php">Login di sini</a></p>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Informasi Wisata Lamongan | Indahnya Wisataku</p>
    </footer>

</body>
</html>