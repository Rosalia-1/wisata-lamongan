<?php
// Koneksi ke database
$host = "localhost";
$user = "root"; // ganti dengan username MySQL Anda
$pass = ""; // ganti dengan password MySQL Anda
$db = "wisata_lamongan"; // ganti dengan nama database Anda

$koneksi = new mysqli($host, $user, $pass, $db);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Mengambil data wisata
$query = "SELECT * FROM wisata";
$result = $koneksi->query($query);

// Menghapus data wisata
if (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $hapusQuery = "DELETE FROM wisata WHERE id = $id";
    if ($koneksi->query($hapusQuery)) {
        echo "<script>alert('Data berhasil dihapus.'); window.location.href = 'manage_wisata.php';</script>";
    }
}

// Mengupdate data wisata
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama_tempat = $_POST['nama_tempat'];
    $deskripsi = $_POST['deskripsi'];
    $status = $_POST['status'];
    
    $updateQuery = "UPDATE wisata SET nama_tempat='$nama_tempat', deskripsi='$deskripsi', status='$status' WHERE id = $id";
    if ($koneksi->query($updateQuery)) {
        echo "<script>alert('Data berhasil diperbarui.'); window.location.href = 'manage_wisata.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Wisata</title>
    <style>
        /* Reset dan Aturan Dasar */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fce4ec; /* Background warna pink muda */
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #d81b60; /* Warna pink yang lebih kuat */
            padding-top: 20px;
            font-size: 32px;
        }

        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #d81b60; /* Warna pink untuk header */
            color: white;
            font-weight: bold;
        }

        td {
            background-color: #ffffff;
        }

        tr:hover {
            background-color: #f8bbd0; /* Warna pink cerah saat hover */
        }

        .actions {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        /* Tombol */
        button {
            background-color: #d81b60; /* Warna tombol merah muda */
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 14px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #c2185b; /* Warna tombol lebih gelap saat hover */
        }

        .hapus {
            background-color: #f44336; /* Warna merah untuk hapus */
        }

        .hapus:hover {
            background-color: #e53935; /* Warna merah lebih gelap saat hover */
        }

        /* Form Styling */
        .form-container {
            margin: 20px auto;
            width: 80%;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .form-container input,
        .form-container textarea,
        .form-container select {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .form-container button {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            background-color: #d81b60;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .form-container button:hover {
            background-color: #c2185b;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            table {
                width: 100%;
            }

            .form-container {
                width: 95%;
            }

            h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <h1>Manage Wisata</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Tempat</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nama_tempat']; ?></td>
                    <td><?php echo $row['deskripsi']; ?></td>
                    <td><?php echo $row['status']; ?></td>
					<td><?php echo $row['gambar']; ?></td>
                    <td class="actions">
                        <!-- Form untuk menghapus data -->
                        <form action="manage_wisata.php" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="hapus" class="hapus">Hapus</button>
                        </form>

                        <!-- Form untuk mengedit data -->
                        <form action="manage_wisata.php" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="text" name="nama_tempat" value="<?php echo $row['nama_tempat']; ?>" required>
                            <textarea name="deskripsi" required><?php echo $row['deskripsi']; ?></textarea>
                            <select name="status">
                                <option value="aktif" <?php if ($row['status'] == 'aktif') echo 'selected'; ?>>Aktif</option>
                                <option value="non-aktif" <?php if ($row['status'] == 'non-aktif') echo 'selected'; ?>>Non-Aktif</option>
                            </select>
                            <button type="submit" name="update">Update</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>
