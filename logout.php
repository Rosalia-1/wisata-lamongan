<?php
session_start();
session_unset();  // Hapus semua session variables
session_destroy();  // Hancurkan session

// Redirect ke halaman login setelah logout
header("Location: login.php?success=loggedout");
exit();
