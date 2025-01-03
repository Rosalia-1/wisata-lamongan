<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang - Informasi Wisata</title>
    <!-- Tambahkan link ke Font Awesome untuk ikon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> <!-- Tautkan ke file CSS jika ada -->
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

        .container {
            width: 80%;
            margin: 30px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        h2 {
            color: #333;
            margin-top: 20px;
        }

        ul {
            padding-left: 20px;
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

        .explore-section {
            margin: 50px auto;
            text-align: center;
        }

        .explore-section h2 {
            font-size: 1.8em;
            color: #333;
        }

        .explore-section .destinations {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .explore-section .destination {
            width: 180px;
            background-color: #fcf3f5;
            border: 1px solid #fc8fcc;
            border-radius: 8px;
            text-align: center;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .explore-section .destination:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .explore-section .destination img {
            width: 100%;
            height: 100px;
            border-radius: 6px;
            object-fit: cover;
        }

        .explore-section .destination h3 {
            margin: 10px 0 5px;
            font-size: 1.2em;
            color: #333;
        }

        .explore-button-container {
            margin-top: 30px;
            text-align: center;
            margin-bottom: 50px; /* Added margin-bottom for spacing between button and footer */
        }

        .explore-button {
            display: inline-block;
            padding: 15px 25px;
            background-color: #fc8fcc;
            color: white;
            font-size: 1.2em;
            text-decoration: none;
            border-radius: 25px;
            transition: background-color 0.3s;
        }

        .explore-button:hover {
            background-color: #f06292;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1></h1>
    </header>

    <!-- Navigasi Menu -->
    <nav>
        <a href="home.php">Home</a>
        <a href="destinasi.php">Destinasi</a>
        <a href="tentang.php">Tentang</a>
        <a href="kontak.php">Kontak</a>
    </nav>

    <!-- Konten Halaman Tentang -->
    <div class="container">
        <h1> Wisata Lamongan</h1>
        <p>Selamat datang di <strong>Wisata Lamongan</strong>, destinasi utama untuk menemukan keindahan dan kekayaan budaya yang dimiliki Kabupaten Lamongan. Kami hadir untuk memberikan informasi lengkap dan terbaru seputar wisata di Lamongan, mulai dari tempat-tempat wisata alam, sejarah, budaya, kuliner, hingga berbagai aktivitas seru yang dapat dinikmati bersama keluarga dan teman.</p>
        
        <h2>Visi Kami</h2>
        <p>Menjadi sumber informasi terpercaya yang menginspirasi wisatawan untuk mengeksplorasi keindahan, budaya, dan kearifan lokal Lamongan.</p>
        
        <h2>Misi Kami</h2>
        <ul>
            <li>Menyajikan informasi wisata yang akurat, terbaru, dan mudah diakses.</li>
            <li>Mempromosikan potensi wisata Lamongan di tingkat lokal, nasional, dan internasional.</li>
            <li>Mendukung pengembangan pariwisata berkelanjutan yang mendukung pelestarian alam dan budaya.</li>
            <li>Memberikan rekomendasi wisata terbaik yang sesuai dengan kebutuhan dan minat pengunjung.</li>
        </ul>
        
        <h2>Keindahan Lamongan</h2>
        <p>Lamongan adalah tempat yang kaya akan keindahan alam, mulai dari pantai yang mempesona, wisata alam pegunungan, hingga destinasi wisata buatan yang menarik untuk dikunjungi. Selain itu, Lamongan juga memiliki beragam kuliner khas yang sayang untuk dilewatkan, seperti <strong>Soto Lamongan</strong> dan berbagai makanan tradisional lainnya.</p>
        
        <h2>Komitmen Kami</h2>
        <p>Kami berkomitmen untuk memudahkan perjalanan Anda dengan informasi lengkap, mulai dari lokasi, harga tiket, jam operasional, hingga tips wisata yang berguna. Apapun jenis wisata yang Anda cari, <strong>Wisata Lamongan</strong> siap memberikan panduan lengkap agar liburan Anda semakin menyenangkan.</p>
        
        <h2>Jelajahi Keindahan Lamongan</h2>
        <p>Bergabunglah bersama kami dalam perjalanan untuk menemukan berbagai pengalaman tak terlupakan di setiap sudut kota Lamongan.</p>
    </div>

    <!-- Bagian Jelajahi Destinasi -->
    <div class="explore-section">
        <!-- Button to Explore Destinations -->
        <div class="explore-button-container">
            <a href="destinasi.php" class="explore-button">Jelajahi Destinasi</a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Informasi Wisata Lamongan | Indahnya wisataku.</p>
    </footer>
</body>
</html>
