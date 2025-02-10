<?php

$title = "Saham";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Droid+Sans:regular,bold&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Droid Sans', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #f5f7fa, #c3cfe2);
            color: #333;
        }

        .container {
            max-width: 2000px;
            margin: 0 auto;
            padding: 20px;
			animation: fadeIn 1s ease-out;
        }

        h1 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
        }

        h2 {
            font-size: 28px;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        h3 {
            font-size: 22px;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .section {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .section ul {
            padding-left: 20px;
            margin-bottom: 20px;
        }

        .section ul li {
            margin-bottom: 10px;
        }
		/* Gallery Styling */
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

        .highlight {
            background-color: #f0f8ff;
            padding: 10px;
            border-left: 5px solid #00aaff;
            margin: 20px 0;
        }

        .info-box {
            background-color: #fff3cd;
            border: 1px solid #ffeeba;
            color: #856404;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 28px;
            }

            h2 {
                font-size: 22px;
            }

            h3 {
                font-size: 20px;
            }
        }
		
		.button-container {
			text-align: center;
			margin-top: 20px;
		}

		.button-container a {
			background: #800000;
			color: white;
			text-decoration: none;
			padding: 10px 20px;
			border-radius: 5px;
			display: inline-block;
			margin-right: 10px;
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
		
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes zoomIn {
            0% {
                transform: scale(0.8);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

		.button-container {
			text-align: center;
				margin-top: 20px;
		}
		
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $title; ?></h1>
		<hr style="border: 1px solid #ccc;"/><br />

        <div class="section">
            <h2>Pengertian Singkat Saham</h2>
            <p>Saham adalah surat berharga yang menunjukkan bagian kepemilikan seseorang atau badan usaha dalam suatu perusahaan. Pemegang saham berhak atas bagian dari keuntungan perusahaan berupa dividen serta hak suara dalam rapat umum pemegang saham (RUPS).
            Saham diperdagangkan di pasar saham, dan nilai saham ini dapat berubah-ubah seiring dengan kinerja perusahaan serta faktor ekonomi lainnya.</p>
            <div class="image-gallery">
        <?php
        $images = ["saham3.jpeg", "saham2.jpg", "saham1.jpg"];
        foreach ($images as $image) {
            echo "<div class='gallery-item'><img src='$image' alt='Gallery Image'></div>";
        }
        ?>
    </div>
            <div class="highlight">
                <p><strong>Highlight:</strong> Saham merupakan instrumen penting dalam dunia investasi dan dapat menjadi sumber pendapatan pasif jika dikelola dengan baik.</p>
            </div>
        </div>

<div class="section" style="text-align: left;">
    <h2>Jenis-Jenis Saham</h2>
    <p>Ada beberapa jenis saham yang perlu diketahui oleh para investor, yaitu:</p>
    <ul>
        <li><strong>Saham Biasa (Common Stock)</strong>: Jenis saham yang paling umum diperdagangkan. Pemegang saham biasa memiliki hak suara dalam RUPS dan memperoleh dividen jika perusahaan menghasilkan keuntungan.</li>
		<br>	
		<li><strong>Saham Preferen (Preferred Stock)</strong>: Saham yang memberikan hak istimewa kepada pemegangnya, seperti prioritas dalam pembayaran dividen dan klaim atas aset perusahaan jika terjadi likuidasi.</li>
		<br>	
		<li><strong>Saham Growth</strong>: Saham dari perusahaan dengan potensi pertumbuhan yang tinggi. Biasanya, perusahaan ini tidak memberikan dividen, karena lebih fokus pada ekspansi dan pengembangan.</li>
        <br>
		<li><strong>Saham Value</strong>: Saham yang dianggap undervalued, atau lebih murah daripada nilai intrinsiknya. Investor value cenderung membeli saham ini dengan harapan nilainya akan meningkat di masa depan.</li>
    </ul>    
</div>

<div class="section" style="text-align: left;">
    <h2>Cara Memilih Saham untuk Investasi</h2>
    <p>Pemilihan saham yang tepat sangat penting untuk meraih keuntungan jangka panjang. Berikut adalah beberapa tips untuk memilih saham yang potensial:</p>
    <ul>
        <li><strong>Analisis Fundamental:</strong> Pelajari laporan keuangan perusahaan, seperti rasio profitabilitas, rasio utang, dan rasio pengembalian.</li>
        <br>
		<li><strong>Performa Keuangan:</strong> Pilih perusahaan dengan rekam jejak yang solid dalam hal pendapatan dan laba bersih.</li>
        <br>
		<li><strong>Potensi Pertumbuhan:</strong> Carilah perusahaan dengan prospek pertumbuhan yang baik di masa depan, baik dari sisi pasar maupun produk inovatif.</li>
        <br>
		<li><strong>Manajemen yang Baik:</strong> Manajemen yang berpengalaman dan kredibel sangat penting dalam kesuksesan jangka panjang perusahaan.</li>
    </ul>   
    <div class="info-box">
        <p><strong>Info Penting:</strong> Selalu lakukan riset sebelum membeli saham. Jangan hanya mengikuti tren atau rekomendasi tanpa dasar yang kuat.</p>
    </div>
</div>

<div class="section" style="text-align: left;">
    <h2>Tips Berinvestasi di Saham</h2>
    <p>Berinvestasi di saham dapat memberikan keuntungan besar, tetapi juga disertai risiko. Berikut adalah beberapa tips yang bisa membantu Anda berinvestasi dengan bijak:</p>
    <ul>
        <li><strong>Lakukan Riset:</strong> Selalu lakukan riset tentang perusahaan dan pasar sebelum membeli saham.</li>
        <br>
		<li><strong>Mulai dengan Modal yang Terjangkau:</strong> Jangan memaksakan diri untuk berinvestasi dengan jumlah besar. Mulailah dengan investasi kecil dan tingkatkan seiring waktu.</li>
        <br>
		<li><strong>Berinvestasi Jangka Panjang:</strong> Saham dapat berfluktuasi, namun dengan berinvestasi jangka panjang, Anda dapat meraih keuntungan yang stabil.</li>
        <br>
		<li><strong>Diversifikasi Portofolio:</strong> Jangan menaruh semua uang di satu saham. Diversifikasi akan membantu mengurangi risiko.</li>
    </ul>    
</div>

	
    <div class="live-video-container">
        <h2>Grafik Live TradingView</h2>
        <iframe 
            src="https://www.tradingview.com/widgetembed/?frameElementId=tradingview_5f01c&symbol=NASDAQ%3AGOOG&interval=D&hidesidetoolbar=1&symboledit=1&saveimage=1" 
            width="100%" 
            height="600" 
            frameborder="0" 
            allowfullscreen="true">
        </iframe>
	</div>	

		<br><br><br>
		<div class="button-container">
			<a href="./?adm=home" class="back-button">↩</a>
			<a href="./?adm=login" class="login-button">LOGIN NOW</a>
		</div>
	</div>
		
</body>
</html>
