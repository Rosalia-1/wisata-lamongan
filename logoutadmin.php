<?php
// Mulai session
session_start();

// Hapus semua session yang ada
session_unset();

// Hancurkan session
session_destroy();

// Redirect ke halaman login setelah logout
header("Location: loginadmin.php");
exit();
?>
