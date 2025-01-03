
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi - Informasi Wisata</title>
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
        .hero {
            background-image: url('https://via.placeholder.com/1920x600');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 100px 20px;
        }
        .hero h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }
        .content {
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }
        .content h3 {
            text-align: center;
            margin-bottom: 20px;
        }
        .destinations {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .destination {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            max-width: 300px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .destination img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .destination .info {
            padding: 15px;
        }
        .destination .info h4 {
            margin: 0;
            font-size: 1.2em;
            color: #333;
        }
        .destination .info p {
            margin: 10px 0 0;
            font-size: 0.9em;
            color: #555;
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
    </style>
</head>
<body>

    <header>
        <h1></h1>
    </header>

    <nav>
        <a href="home.php">Home</a>
        <a href="destinasi.php">Destinasi</a>
        <a href="tentang.php">Tentang</a>
        <a href="kontak.php">Kontak</a>
    </nav>

    <section class="content">
        <h3>Macam-Macam Wisata Lamongan</h3>
        <div class="destinations">
            <div class="destination">
                <img src="003.jpg" alt="Destinasi 1">
                <div class="info">
                    <h4>Pantai Putri Klayar</h4>
                    <p> Wisata pantai yang menawarkan keindahan alami dan ketenangan.</p>
                    <p> Pantai ini terletak di Desa Klayar, Sidokelar, Kecamatan Paciran, Kabupaten Lamongan, Jawa Timur.</p>
                    <p> <a href="https://www.google.co.id/maps/place/Pantai+Putri+Klayar/@-6.8741315,112.4390626,17z/data=!3m1!4b1!4m6!3m5!1s0x2e77dd51177ca5f3:0x55c07ceafe34d517!8m2!3d-6.8741315!4d112.4390626!16s%2Fg%2F11fncr0k_6?entry=ttu&g_ep=EgoyMDI0MTIxMC4wIKXMDSoASAFQAw%3D%3D" target="_blank">Link lokasi</a></p>
                    <p> Harga Tiket Masuk: 10.000 (Buka setiap hari)</p>
                    <p> <a href="https://www.instagram.com/pantaiputriklayar?igsh=MXR5Y3J4cXprYmhqbwtarget" target="_blank"> Pemesanan tiket </a></p>
                    <p class="visitor-count"><i class="fas fa-eye"></i> Jumlah Pengunjung: 20 orang</p>
			   </div>
            </div>
            <div class="destination">
                <img src="17.jpg" alt="Destinasi 2">
                <div class="info">
                    <h4>Waduk Gondang</h4>
                    <p> Sebuah waduk yang berbeda dengan waduk pada umumnya. Suasananya yang sejuk akan membuat Anda merasa ingin berlama-lama berada di tempat ini.</p>
                    <p> Waduk ini terletak di Jl. Kedungpring - Sugio, Jaledriasri, Gondang Lor, Kec. Sugio, Kabupaten Lamongan.</p>
                    <p> <a href="https://www.google.co.id/maps/place/Waduk+Gondang/@-7.2091666,112.2683333,14z/data=!3m1!4b1!4m6!3m5!1s0x2e77f562270efb95:0x7477b598dd9b5696!8m2!3d-7.2091667!4d112.2683333!16s%2Fg%2F122sgcp4?entry=ttu&g_ep=EgoyMDI0MTIxMC4wIKXMDSoASAFQAw%3D%3D" target="_blank">Link lokasi</a></p>
                    <p> Harga Tiket Masuk: 3.000 dengan parkir 2.000 untuk motor dan 3.000 untuk mobil (Buka setiap hari)</p>
                    <p> <a href="https://wa.me/qr/7ZMM3YPBU2W3F1 " target="_blank"> Pemesanan tiket</a></p>
					 <p class="visitor-count"><i class="fas fa-eye"></i> Jumlah Pengunjung: 30 orang</p>
                </div>
            </div>
            <div class="destination">
                <img src="022.jpg" alt="Destinasi 3">
                <div class="info">
                    <h4>WBL</h4>
                    <p> Wisata bahari yang menyediakan banyak sekali wahana.</p>
                    <p> Terletak di Kecamatan Paciran, Kabupaten Lamongan, Jawa Timur.</p>
                    <p> <a href="https://www.google.co.id/maps/place/Wisata+Bahari+Lamongan+(WBL)/@-6.8667365,112.3608866,17z/data=!3m1!4b1!4m6!3m5!1s0x2e77c3505a57d187:0x1eb952764236c3c8!8m2!3d-6.8667365!4d112.3608866!16s%2Fg%2F11rb1rqn9l?entry=ttu&g_ep=EgoyMDI0MTIxMC4wIKXMDSoASAFQAw%3D%3D" target="_blank">Link lokasi</a></p>
                    <p> Harga Tiket Masuk: 85.000-145.000 (Buka setiap hari)</p>
                    <p> <a href="https://www.instagram.com/wisatabaharilamonganpark?igsh=c3FyM21peXJibTR5" target="_blank"> Pemesanan tiket </a></p>
					 <p class="visitor-count"><i class="fas fa-eye"></i> Jumlah Pengunjung: 3.000 orang</p>
                </div>
            </div>
            <div class="destination">
                <img src="13.jpeg" alt="Destinasi 4">
                <div class="info">
                    <h4>Plaza Lamongan</h4>
                    <p> Pusat perbelanjaan yang menyediakan berbagai macam barang, disana juga ada tempat hiburan.</p>
                    <p> Terletak di Kabupaten Lamongan, Jawa Timur.</p>
                    <p> <a href="https://google.co.id/maps/place/Lamongan+Plaza/@-7.1134187,112.4197687,17z/data=!3m2!4b1!5s0x2e77f0ae39052d83:0xb8e2f0d8037e6720!4m6!3m5!1s0x2e77f0af9b096269:0x2aa720752284c815!8m2!3d-7.1134187!4d112.4197687!16s%2Fg%2F11g6bk1s41?entry=ttu&g_ep=EgoyMDI0MTIxMC4wIKXMDSoASAFQAw%3D%3D" target="_blank">Link lokasi</a></p>
                    <p> Buka setiap hari</p>
					 <p class="visitor-count"><i class="fas fa-eye"></i> Jumlah Pengunjung: 200 orang</p>
                </div>
            </div>
            <div class="destination">
                <img src="14.jpg" alt="Destinasi 5">
                <div class="info">
                    <h4>Makam Syeh Maulana Ishaq</h4>
                    <p> Syekh Maulana Ishaq sendiri merupakan ayah dari Raden Ainul Yaqin atau lebih dikenal sebagai Sunan Giri, salah satu tokoh Wali Songo. Tempat ini bisa digunakan untuk ziarah wali sekaligus wisata karena tempatnya yang berada di tepi laut.</p>
                    <p> Terletak di Jalan Raya Gresik, Desa Kemantren, Kecamatan Paciran Lamongan.</p>
                    <p> <a href="https://www.google.co.id/maps/place/Makam+Syech+Maulana+Ishaq/@-6.872571,112.4018808,17z/data=!3m1!4b1!4m6!3m5!1s0x2e77c298959cbbf3:0x81cfbcf25aacd225!8m2!3d-6.872571!4d112.4018808!16s%2Fg%2F1hm29kv36?entry=ttu&g_ep=EgoyMDI0MTIxMC4wIKXMDSoASAFQAw%3D%3D" target="_blank">Link lokasi</a></p>
                    <p> Buka setiap hari</p>
					 <p class="visitor-count"><i class="fas fa-eye"></i> Jumlah Pengunjung: 500 orang</p>
                </div>
            </div>
            <div class="destination">
                <img src="15.jpeg" alt="Destinasi 6">
                <div class="info">
                    <h4>Gunung Pegat</h4>
                    <p> Tempat yang tenang untuk bersantai dan menikmati pemandangan. Di sana juga banyak cafe yang bisa dikunjungi.</p>
                    <p> Terletak di Jalan Babat-Jombang tepatnya di Kecamatan Babat Lamongan.</p>
                    <p> <a href="https://www.google.com/maps/place/Gunung+pegat/@-7.1324748,112.1626158,17z/data=!3m1!4b1!4m6!3m5!1s0x2e778df506c9bd09:0x16b1b90da4263b6f!8m2!3d-7.1324748!4d112.1626158!16s%2Fg%2F11h5vt_x6j?entry=ttu&g_ep=EgoyMDI0MTIxMC4wIKXMDSoASAFQAw%3D%3D" target="_blank">Link lokasi</a></p>
                    <p> Buka setiap hari</p>
					 <p class="visitor-count"><i class="fas fa-eye"></i> Jumlah Pengunjung: 15 orang</p>
                </div>
            </div>
            <div class="destination">
                <img src="16.jpg" alt="Destinasi 7">
                <div class="info">
                    <h4>Tebing Cafe</h4>
                    <p> Tebing Cafe adalah tempat untuk bersantai bersama keluarga atau teman.</p>
                    <p> Terletak di Paciran Lamongan.</p>
                    <p> <a href="https://www.google.com/maps/dir//Tebing+Cafe+Lamongan+Paciran+Kec.+Paciran+Kabupaten+Lamongan,+Jawa+Timur/@-6.8842272,112.3502922,14z/data=!4m5!4m4!1m0!1m2!1m1!1s0x2e77c3a8fa06c9e3:0x6c1483c4e6610ae8" target="_blank">Link lokasi</a></p>
                    <p> Buka setiap hari</p>
					 <p class="visitor-count"><i class="fas fa-eye"></i> Jumlah Pengunjung: 10 orang</p>
                </div>
            </div>
			<div class="destination">
    <img src="19.jpg" alt="Destinasi 8">
    <div class="info">
        <h4>Pantai Joko mursodo</h4>
        <p>Keindahan yang luar biasa dengan air laut yang bersih dan jerni dan pasir yang putih serna pemandangan pohon bakau disekitar .</p>
        <p> Lokasi: Desa Lohgung, Kecamatan Brondong, Kabupaten Lamongan..</p>
        <p> <a href="https://www.google.com/maps/place/Pantai+Joko+Mursodo/@-6.8948017,112.1740499,17z/data=!3m1!4b1!4m6!3m5!1s0x2e77952f7a06335f:0x28ee5fd279ba078c!8m2!3d-6.8948017!4d112.1740499!16s%2Fg%2F11qr07z6cv?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank">Link lokasi</a></p>
        <p> Buka setiap hari</p>
		<p> <a href="https://www.instagram.com/jokomursodobeach?igsh=MWtqZjV2eGtibmRuZg==" target="_blank">Pemesanan Tiket</a></p>
		 <p class="visitor-count"><i class="fas fa-eye"></i> Jumlah Pengunjung: 6 orang</p>
    </div>
</div>
<div class="destination">
    <img src="18.jpg" alt="Destinasi 9">
    <div class="info">
        <h4>Kampung Batik Sendang</h4>
        <p>Wisata budaya untuk melihat proses pembuatan batik khas Lamongan.</p>
        <p> Lokasi: Desa Sendang, Kecamatan Paciran, Lamongan.</p>
        <p> <a href="https://www.google.com/maps/place/Mutiara+Sendang+(Batik+Tulis+Lamongan)/@-6.8981172,112.3464247,17z/data=!4m10!1m2!2m1!1sbatik+sendang+lamongan+paciran!3m6!1s0x2e77e9efb37580fd:0xfbb3b30222204430!8m2!3d-6.8974546!4d112.3476837!15sCh5iYXRpayBzZW5kYW5nIGxhbW9uZ2FuIHBhY2lyYW5aICIeYmF0aWsgc2VuZGFuZyBsYW1vbmdhbiBwYWNpcmFukgEFc3RvcmXgAQA!16s%2Fg%2F11bwh4r7tn?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank">Link lokasi</a></p>
        <p> Buka setiap hari</p>
		 <p class="visitor-count"><i class="fas fa-eye"></i> Jumlah Pengunjung: 6 orang</p>
    </div>
</div>
<div class="destination">
    <img src="20.jpg" alt="Destinasi 8">
    <div class="info">
        <h4>Sendang Duwur</h4>
        <p>Ditempat ini terdapat makam Sunan Sendang yang menjadi tempat untuk berziarah para wisatawan.</p>
        <p> Lokasi: Bukit Aminuton, Desa Duwur, Kecamatan Paciran, Kabupaten Lamongan.</p>
        <p> <a href="https://google.com/maps/place/Sendangduwur,+Kec.+Paciran,+Kabupaten+Lamongan,+Jawa+Timur/@-6.8944781,112.3495475,16z/data=!3m1!4b1!4m6!3m5!1s0x2e77e9e58fbba38d:0xd9a93abb4b011985!8m2!3d-6.8937145!4d112.350169!16s%2Fg%2F12lngtdsk?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank">Link lokasi</a></p>
        <p> Buka setiap hari</p>
		 <p class="visitor-count"><i class="fas fa-eye"></i> Jumlah Pengunjung: 100 orang</p>
    </div>
</div>
<div class="destination">
    <img src="22.jpg" alt="Destinasi 9">
    <div class="info">
        <h4>Maharani Zoo</h4>
        <p>Wisata ini Seperti halnya kebun binatang, di sini terdapat berbagai koleksi binatang. Baik yang hidup hingga binatang yang sudah diawetkan.</p>
        <p> Lokasi: Jalan Raya Paciran, Paciran, Lamongan.</p>
        <p> <a href="https://www.google.com/maps" target="_blank">Link lokasi</a></p>
		<p> Harga Tiket : 40.000 - 145.000 (Buka setiap hari)</p>
		<p> <a href="https://www.instagram.com/maharanizoo?igsh=OGhidDNrNzVrN3U1" target="_blank">Pemesanan Tiket</a></p>
		 <p class="visitor-count"><i class="fas fa-eye"></i> Jumlah Pengunjung: 1.000 orang</p>
    </div>
</div>
<div class="destination">
    <img src="21.jpg" alt="Destinasi 8">
    <div class="info">
        <h4>Aola Cafe</h4>
        <p>Sebuah cafe yang berlokasi di tepi pantai, Aola cafe adalah tempat yang rekomen untuk nongkrong bareng teman, keluarga, ataupun pasangan. disana juga terdapat tempat untuk anak-anak bermain.</p>
        <p> Lokasi: Kandang Semangkon, Kecamatan Paciran, Lamongan.</p>
        <p> <a href="https://www.google.com/maps/place/Aola+Pantura/@-6.8721229,112.3126292,17z/data=!3m1!4b1!4m6!3m5!1s0x2e77c1a164c20b19:0x3fcbf81bf3b0907b!8m2!3d-6.8721229!4d112.3126292!16s%2Fg%2F11m_lq67yz?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank">Link lokasi</a></p>
        <p> Buka setiap hari</p>
		 <p class="visitor-count"><i class="fas fa-eye"></i> Jumlah Pengunjung: 50 orang</p>
    </div>
</div>
<div class="destination">
    <img src="23.jpg" alt="Destinasi 9">
    <div class="info">
        <h4>Masjid Namira</h4>
        <p>Sebuah masjid yang sangat indah banyak orang yang datang untuk beribadah disana sekaligus berwisata.</p>
        <p> Lokasi : Desa Jotosanur, Kecamatan Tikung, Kabupaten Lamongan.</p>
        <p> <a href="https://www.google.com/maps/place/Masjid+Namira+Lamongan/@-7.15281,112.4087138,17z/data=!3m1!4b1!4m6!3m5!1s0x2e77f77274d865a5:0xfa66dee67fbc8b00!8m2!3d-7.15281!4d112.4087138!16s%2Fg%2F11b6gn17j2?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank">Link lokasi</a></p>
        <p> Buka setiap hari</p>
		 <p class="visitor-count"><i class="fas fa-eye"></i> Jumlah Pengunjung: 150 orang</p>
    </div>
</div>
<div class="destination">
    <img src="24.jpeg" alt="Destinasi 9">
    <div class="info">
        <h4>Pantai Lorena</h4>
        <p> Lokasi : Dusun Penanjan, Kecamatan Paciran, Kabupaten Lamongan.</p>
        <p>Pantai Lorena merupakan salah satu obyek wisata yang populer di Lamongan,Bentuk Pantai Lorena melengkung bagaikan laguna, sehingga pantai terlihat indah dipandang mata .</p>
        <p> <a href="https://www.google.com/maps/place/Pantai+Lorena/@-6.8695277,112.3509573,17z/data=!3m1!4b1!4m6!3m5!1s0x2e77c21403672c4d:0x5f39517d34c5fb1d!8m2!3d-6.8695277!4d112.3509573!16s%2Fg%2F11crztkzct?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank">Link lokasi</a></p>
        <p> tidak ada tiket masuk hanya perlu membayar parkir sebesar 2.000-5.000</p>
	   <p> Buka setiap hari</p>
	    <p class="visitor-count"><i class="fas fa-eye"></i> Jumlah Pengunjung: 25 orang</p>
    </div>
</div>
<div class="destination">
    <img src="25.jpg" alt="Destinasi 9">
    <div class="info">
        <h4>Kolam Renang Keraton BBJ</h4>
        <p>Kolam renang ini sangat terkenal di babat karena buka pagi hingga malam dan tentunya dengan fasilitas yang memadahi .</p>
        <p> Lokasi : Jl. Raya Babat Lamongan.</p>
        <p> <a href="https://www.google.com/maps/place/KERATON+BBJ+(BABAT)/@-7.1159074,112.164286,17z/data=!3m1!4b1!4m6!3m5!1s0x2e778c157a6bce8f:0x522ba452654f3dd4!8m2!3d-7.1159074!4d112.164286!16s%2Fg%2F11g7zfmg51?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank">Link lokasi</a></p>
        <p> Buka setiap hari</p>
		<p> harga tiket pagi 5.000 sedangkan malam 15.000 (Buka setiap hari)
		<p> Untuk pembelian tiket tidak bisa secara online</p>
		 <p class="visitor-count"><i class="fas fa-eye"></i> Jumlah Pengunjung: 30 orang</p>
    </div>
</div>
		
    </section>

    <footer>
        <p>&copy; 2024 Informasi Wisata Lamongan | Indahnya wisataku.</p>
    </footer>

</body>
</html>
