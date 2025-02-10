<?php
include('../koneksi/koneksi.php');

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard CV Tiga Sekawan</title>
    <link href="https://fonts.googleapis.com/css2?family=Droid+Sans:regular,bold&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Droid Sans', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #f5f7fa, #c3cfe2);
            color: #333;
            text-align: center;
        }

        h2 {
            color: #800000;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
        }

        a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .image-gallery {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
            margin: 30px auto;
            max-width: 1000px;
        }

        .gallery-item {
            flex: 1 1 auto;
            max-width: 30%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .modal.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            display: flex;
			justify-content: center;
			align-items: center;
			padding: 20px;
			gap: 5px; 
			width: 900px; 
			height: 380px; 
			max-width: 90%; 
			max-height: 90%; 
			background-color: white;
			border-radius: 10px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
		
		.modal-body {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			align-items: center;
			width: 100%;
		}

        .modal-content h3 {
            color: #4682b4;
            margin-bottom: 15px;
        }

        .modal-content p {
            font-size: 16px;
            color: #333;
            margin-bottom: 20px;
        }

        .modal-content input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .modal-content button {
            background: #4682b4;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .modal-content button:hover {
            background: #b71c1c;
        }
		
		.form-group {
			display: flex;
			align-items: center;
			gap: 15px;
		}
		.form-group label {
			display: flex;
			align-items: center;
			font-size: 14px;
			color: #333;
		}
		.form-group input[type="radio"] {
			margin-right: 5px;
		}
		.login-form {
			flex: 1 1 50%; 
			max-width: 400px;
		}

		.login-image {
			flex: 1 1 50%; 
			max-width: 400px;
			text-align: center;
		}

		.login-image img {
			max-width: 100%; 
			height: auto;
			border-radius: 10px; 
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
		}
		@media (max-width: 768px) {
		.modal-content {
			width: 90%; 
			height: auto; 
			}
		}
	
		.button-container {
			display: flex; 
			justify-content: center; 
			align-items: center; 
			margin: 0; 
		}

		.button-container a {
			background: #800000;
			color: white;
			text-decoration: none;
			padding: 10px 20px;
			border-radius: 5px;
			display: inline-block;
			font-size: 16px;
			font-weight: bold;
			transition: all 0.3s ease; 
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); 
		}

		.button-container a:hover {
			background: #ffc107; 
			color: #800000; 
			transform: scale(1.1); 
			box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4); 
		}

    </style>
</head>
<body>
   
    <h1>Selamat Datang Tiga Sekawan Investama</h1>
    <p>
        "Solusi Cerdas untuk Masa Depan Finansial Anda"<br><br>
		Kami adalah mitra terpercaya Anda dalam membangun kekayaan dan mencapai kebebasan finansial. <br>
		Dengan layanan investasi yang inovatif, analisis mendalam, dan pengalaman yang teruji, <br>
		kami hadir untuk membantu Anda mengelola aset dan meraih tujuan keuangan Anda.<br><br>

		Apa yang Kami Tawarkan: <br>
		Portofolio Diversifikasi: Pilihan investasi di saham, reksadana, obligasi, dan lainnya. <br>
		Keamanan & Kepercayaan: Pendekatan investasi berbasis data dan analisis pasar terkini. <br>
		Dukungan Profesional: Tim ahli kami siap membimbing setiap langkah Anda. <br>
		<br><br>
		🌟 Investasi Cerdas Dimulai di Sini. 🌟<br>
		Jadilah bagian dari komunitas yang peduli pada pertumbuhan finansial Anda.
    </p> <br><br>	
	
	<div class="button-container">
		<a href="./?adm=login">LOGIN NOW !!</a>    
	</div>
	
	<br><br><br><br>
    <a href="./?adm=aboutSejarah" target="_new">Tentang Kami</a> <a href="./?adm=aboutDeveloper" target="_new">/ Tentang Developer</a> <br><br>

    <h2>Our Gallery</h2>
    <div class="image-gallery">
        <?php
        $images = ["kerja1.jpg", "kerja2.png", "kerja3.jpg"];
        foreach ($images as $image) {
            echo "<div class='gallery-item'><img src='$image' alt='Gallery Image'></div>";
        }
        ?>
    </div>
	
	<br><br><br><br>
	
    <div class="live-video-container">
        <h2>Grafik Live TradingView</h2>
        <iframe 
            src="https://www.tradingview.com/widgetembed/?frameElementId=tradingview_5f01c&symbol=NASDAQ%3AGOOG&interval=D&hidesidetoolbar=1&symboledit=1&saveimage=1" 
            width="100%" 
            height="600" 
            frameborder="0" 
            allowfullscreen="true">
        </iframe>
		
		<br><br><br><br>
		
		<h2> VISI TIGA SEKAWAN </h2>
		<p>
		Menjadi perusahaan investasi terpercaya dan terdepan yang berkomitmen dalam menciptakan pertumbuhan berkelanjutan, <br> 
		memberdayakan masyarakat, serta menghasilkan nilai tambah optimal bagi seluruh pemangku kepentingan.<br><br><br>
		
		<h2> MISI TIGA SEKAWAN </h2> 
		Memberikan Layanan Investasi Terbaik:<br>
		Menyediakan produk dan layanan investasi yang inovatif, aman, dan transparan sesuai dengan kebutuhan nasabah.<br>
		Mengutamakan kualitas pelayanan untuk membangun kepercayaan jangka panjang.<br><br>

		Meningkatkan Nilai Investasi Pelanggan:<br>
		Mengelola portofolio investasi dengan strategi yang cerdas, berbasis analisis mendalam dan pemahaman terhadap dinamika pasar.<br>
		Berorientasi pada hasil yang memberikan keuntungan maksimal bagi nasabah.<br><br>
				
		Berinovasi di Dunia Investasi Digital:<br>
		Mengembangkan platform investasi berbasis teknologi yang mudah diakses, responsif, dan user-friendly.<br>
		Memanfaatkan kemajuan teknologi untuk mendukung pengelolaan investasi yang efisien dan modern.<br><br>
		
		Mendukung Pertumbuhan Ekonomi:<br>
		Berkontribusi dalam pembangunan ekonomi nasional melalui pembiayaan proyek-proyek strategis dan investasi yang berdampak positif.<br>
		Memberdayakan usaha kecil dan menengah (UKM) melalui penyediaan akses modal investasi.<br><br>
		
		Menjaga Keberlanjutan dan Etika Bisnis:<br>
		Melaksanakan operasional bisnis dengan prinsip kejujuran, integritas, dan tanggung jawab sosial.<br>
		Mendukung investasi berkelanjutan yang memperhatikan lingkungan, sosial, dan tata kelola perusahaan (ESG).<br><br>
		
		Memberdayakan Tim Profesional:<br>
		Mengembangkan sumber daya manusia yang kompeten, profesional, dan memiliki semangat inovasi tinggi.<br>
		Membangun budaya kerja yang mendukung kolaborasi, pembelajaran, dan pertumbuhan bersama.<br>

    </p>		
		
	<br><br><br><br>	
    <div class="video-container">
        <video width="100%" height="auto" autoplay muted loop>
            <source src="video1.mp4" type="video/mp4">           
        </video>
    </div>
</body>
</html>
