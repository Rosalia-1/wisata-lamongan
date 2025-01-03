<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'wisata_lamongan');

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mulai session
session_start();

// Cek jika sudah login
if (isset($_SESSION['username'])) {
    header("Location: homeadmin.php");  // Jika sudah login, arahkan ke halaman admin
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data username dan password yang dimasukkan oleh admin
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Ambil data admin berdasarkan username
    $sql = "SELECT * FROM admin WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $admin = $result->fetch_assoc();

        // Bandingkan password yang dimasukkan dengan password yang ada di database
        if ($password === $admin['password']) {
            // Login berhasil
            $_SESSION['username'] = $admin['username'];
            $_SESSION['message'] = "Login berhasil!";
            header("Location: homeadmin.php");  // Halaman setelah login berhasil
            exit();
        } else {
            // Password salah
            $_SESSION['message'] = "Password salah!";
        }
    } else {
        // Username tidak ditemukan
        $_SESSION['message'] = "Username tidak ditemukan!";
    }
}
?>

<!-- Form login admin -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        header {
            background-color: #fc8fcc;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
			color: pink;
        }

        main {
            padding: 20px;
            text-align: center;
        }

        form {
            width: 30%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        input[type="text"], input[type="password"] {
             width: 100%;
             padding: 10px;
             margin: 10px 0;
             border: 1px solid #ddd;
             border-radius: 4px;
             background-color: #fc8fcc;  /* Change input fields background to pink */
        }

        button {
            padding: 10px 20px;
            background-color: #fc8fcc;  /* Change button background to pink */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

            button:hover {
            background-color: #fc8fcc;  /* Keep the button hover color as before */
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #fc8fcc;
            color: #fff;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .message {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .message.success {
            background-color: #28a745;
            color: white;
        }

        .message.error {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>
    <main>
        <?php
        // Tampilkan pesan jika ada
        if (isset($_SESSION['message'])) {
            echo '<div class="message ' . (strpos($_SESSION['message'], 'berhasil') !== false ? 'success' : 'error') . '">' . $_SESSION['message'] . '</div>';
            // Hapus pesan setelah ditampilkan
            unset($_SESSION['message']);
        }
        ?>

        <!-- Form login hanya muncul jika belum login -->
        <?php if (!isset($_SESSION['username'])): ?>
        <form action="loginadmin.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <button type="submit">Login</button>
        </form>
        <?php endif; ?>
    </main>
    <footer>
        <p>&copy; 2024 Informasi Wisata Lamongan| Indahnya wisataku</p>
    </footer>
</body>
</html>