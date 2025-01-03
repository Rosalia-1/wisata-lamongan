<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Wisata</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffe4ec;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px 40px;
            max-width: 500px;
            width: 100%;
        }
        .container h1 {
            text-align: center;
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
        }
        label {
            font-weight: 600;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        textarea {
            resize: none;
        }
        input[type="file"] {
            font-size: 0.9rem;
        }
        button {
            width: 100%;
            background-color: #fc8fcc;
            border: none;
            padding: 12px;
            color: white;
            font-size: 1.2rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #e60066;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            font-size: 0.9rem;
            color: #fc8fcc;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Destinasi Wisata</h1>
        <form action="add_wisata.php" method="POST" enctype="multipart/form-data">
            <label for="nama_tempat">Nama Tempat:</label>
            <input type="text" id="nama_tempat" name="nama_tempat" required placeholder="Masukkan nama tempat">

            <label for="deskripsi">Deskripsi:</label>
            <textarea id="deskripsi" name="deskripsi" rows="4" required placeholder="Masukkan deskripsi tempat"></textarea>

            <label for="gambar">Gambar:</label>
            <input type="file" id="gambar" name="gambar" required>

            <label for="status">Status:</label>
            <select name="status" id="status">
                <option value="active">Aktif</option>
                <option value="inactive">Non-Aktif</option>
            </select>

            <button type="submit" name="submit">Tambah Wisata</button>
        </form>
        <a href="manage_wisata.php" class="back-link">Kembali ke Halaman Manage Wisata</a>
    </div>
</body>
</html>
