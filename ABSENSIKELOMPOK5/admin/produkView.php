<?php
include('../koneksi/koneksi.php');

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

session_start();
?>
<?php

$news = [
    [
        "title" => "Keuntungan Investasi untuk Pemula",
        "image" => "saham1.jpg",
        "description" => "Investasi saham menawarkan peluang untuk mendapatkan keuntungan jangka panjang. 
		Bagi pemula, penting untuk memahami dasar-dasar sebelum memulai. Investasi saham menawarkan berbagai 
		keuntungan yang menjadikannya salah satu pilihan investasi yang menarik, terutama bagi pemula yang ingin memulai perjalanan investasi mereka.",
        "date" => "2025-01-01",
        "url" => "https://www.mncsekuritas.id/pages/3-keuntungan-investasi-saham/"
    ],
    [
        "title" => "Strategi Mengelola Risiko dalam Investasi",
        "image" => "saham2.jpg",
        "description" => "Mengelola risiko adalah kunci sukses dalam investasi saham. Pelajari cara diversifikasi dan analisis pasar untuk meminimalkan kerugian.
		Investasi saham memiliki potensi keuntungan yang besar, namun juga disertai risiko. Oleh karena itu, penting untuk mengelola risiko dengan strategi yang baik. 
		Berikut adalah beberapa strategi yang dapat membantu:",
        "date" => "2024-04-07",
        "url" => "https://beritausaha.com/keuangan/risiko-investasi-saham/"
    ],
    [
        "title" => "Tips Memilih Investasi yang Potensial",
        "image" => "saham3.jpeg",
        "description" => "Pemilihan saham yang tepat sangat penting. Tips berikut membantu Anda menentukan saham dengan potensi terbaik untuk investasi. 
		Memilih saham yang potensial memerlukan analisis yang cermat dan pemahaman yang baik tentang pasar. 
		Berikut adalah beberapa tips yang dapat membantu Anda memilih saham yang berpotensi:",
        "date" => "2024-12-11",
        "url" => "https://indodax.com/academy/cara-melihat-saham-yang-bagus-jangka-panjang/"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News - Investasi Saham</title>
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
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
			animation: fadeIn 1s ease-out;
        }

        .news-item {
            display: flex;
            background: #fff;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .news-item:hover {
            transform: scale(1.02);
        }

        .news-item img {
            width: 200px;
            height: auto;
            object-fit: cover;
        }

        .news-content {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .news-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .news-description {
            font-size: 14px;
            margin-bottom: 10px;
            color: #555;
        }

        .news-date {
            font-size: 12px;
            color: #888;
        }

        @media (max-width: 768px) {
            .news-item {
                flex-direction: column;
            }

            .news-item img {
                width: 100%;
                height: auto;
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
        <h1>Berita Seputar Investasi</h1>
        <p>Dapatkan informasi terbaru seputar investasi yang membantu Anda memahami pasar dan membuat keputusan yang tepat.</p>
		<hr style="border: 1px solid #ccc;"/><br />
		<br><br>

        <?php foreach ($news as $item): ?>
            <div class="news-item">
                <a href="<?php echo $item['url']; ?>" target="_blank">
                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
                </a>
                <div class="news-content">
                    <div>
                        <a href="<?php echo $item['url']; ?>" target="_blank" style="text-decoration: none; color: inherit;">
                            <div class="news-title"><?php echo $item['title']; ?></div>
                        </a>
                        <div class="news-description"><?php echo $item['description']; ?></div>
                    </div>
                    <div class="news-date">Dipublikasikan: <?php echo $item['date']; ?></div>
                </div>
            </div>
        <?php endforeach; ?>
		
		 <br><br>

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
	
		<br><br>
		<div class="button-container">
			<a href="./?adm=home" class="back-button">↩</a>
			<a href="./?adm=login" class="login-button">LOGIN NOW</a>
		</div>
	</div>

		
</body>
</html>
