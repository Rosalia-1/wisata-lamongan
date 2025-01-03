<?php
session_start();

// Daftar pengguna yang telah terdaftar (username dan password yang disimpan dalam array)
$users = [
    'admin' => 'admin123', // Username dan password
    'user' => 'user123', // Username dan password
];
// Cek apakah form login sudah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah username ada dalam array $users dan apakah password cocok
    if (array_key_exists($username, $users) && $users[$username] == $password) {
        // Jika login berhasil, set session
        $_SESSION['username'] = $username;

        // Redirect ke halaman dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        // Jika username atau password salah
        header("Location: login.html?error=invalid");
        exit();
    }
}
?>
