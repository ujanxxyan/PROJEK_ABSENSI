<?php

$reksadana_info = [
    "title" => "Panduan Lengkap Investasi Reksa Dana",
    "intro" => "Reksa dana adalah salah satu bentuk investasi yang memungkinkan investor untuk berinvestasi dalam berbagai jenis aset, seperti saham, obligasi, atau pasar uang, dengan cara mengumpulkan dana dari banyak investor.",
    "image" => "reksadana5.jpg", 
    "description" => "Reksa dana sangat populer di kalangan investor pemula karena dikelola oleh manajer investasi profesional yang memiliki pengalaman dalam memilih portofolio yang tepat. Dengan reksa dana, Anda dapat memiliki akses ke pasar yang lebih luas tanpa harus memilih saham atau obligasi secara langsung.",
    "sections" => [
        "jenis_reksadana" => [
            "title" => "Jenis-Jenis Reksa Dana",
            "content" => [
                [
                    "name" => "Reksa Dana Pasar Uang",
                    "image" => "reksadana1.jpg", 
                    "description" => "Reksa dana pasar uang berinvestasi pada instrumen pasar uang seperti deposito dan surat berharga dengan jangka pendek."
                ],
                [
                    "name" => "Reksa Dana Pendapatan Tetap",
                    "image" => "reksadana2.jpg", 
                    "description" => "Reksa dana pendapatan tetap berfokus pada investasi obligasi dan instrumen utang dengan pengembalian stabil."
                ],
                [
                    "name" => "Reksa Dana Saham",
                    "image" => "reksadana4.jpg", 
                    "description" => "Reksa dana saham berinvestasi dalam saham dengan tujuan mendapatkan keuntungan yang lebih besar dari pertumbuhan harga saham."
                ],
                [
                    "name" => "Reksa Dana Campuran",
                    "image" => "reksadana3.jpg", 
                    "description" => "Reksa dana campuran menggabungkan saham, obligasi, dan instrumen pasar uang untuk memberikan diversifikasi yang lebih baik."
                ]
            ]
        ],
        "cara_memilih" => [
            "title" => "Cara Memilih Reksa Dana",
            "content" => [
                "Pahami Tujuan Investasi Anda",
                "Tentukan Profil Risiko",
                "Perhatikan Kinerja Manajer Investasi",
                "Pilih Reksa Dana dengan Biaya yang Efisien"
            ]
        ],
        "tips_berinvestasi" => [
            "title" => "Tips Berinvestasi di Reksa Dana",
            "content" => [
                "Diversifikasi Portofolio Anda",
                "Mulai dengan Investasi Kecil",
                "Lakukan Riset terhadap Produk Reksa Dana",
                "Investasi Jangka Panjang untuk Hasil Optimal"
            ]
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $reksadana_info['title']; ?></title>
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
            padding: 40px;
            animation: fadeIn 1s ease-out;
        }

        h1 {
            text-align: center;
            font-size: 36px;
            color: black;
            margin-bottom: 20px;
        }

        .section {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 30px;
            transition: transform 0.3s ease-in-out;
        }

        .section:hover {
            transform: translateY(-5px);
        }

        .section h2 {
            font-size: 28px;
            color: #3d79f7;
            margin-bottom: 15px;
        }

        .section p {
            font-size: 16px;
            color: #555;
            line-height: 1.7;
        }

        .section ul {
            list-style-type: square;
            margin-left: 20px;
            color: #333;
        }

        .section ul li {
            font-size: 16px;
            margin-bottom: 10px;
        }

        img {
            max-width: 100%; /* Mengubah agar gambar responsif */
            height: auto;
            margin-top: 20px;
            border-radius: 8px;
        }

        .info-box {
            background-color: #f4f8fe;
            border-left: 5px solid #3d79f7;
            padding: 15px;
            margin-top: 25px;
            font-weight: bold;
        }

        .card-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            text-align: center;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 30%;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            max-width: 80%;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .card h3 {
            font-size: 22px;
            color: #3d79f7;
        }

        .card p {
            font-size: 14px;
            color: #666;
        }

        @media (max-width: 768px) {
            .card-container {
                flex-direction: column;
            }

            .card {
                width: 100%;
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

        #cs-wrapper {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
            text-align: center;
            display: flex;
            flex-direction: column;
        }

        #cs-btn {
            background-color: #25d366; 
            border-radius: 50%;
            padding: 10px; 
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px; 
            height: 40px; 
        }

        #cs-btn img {
            width: 20px; 
            height: 20px; 
			align-items: center;
            transition: transform 0.3s ease;
			
        }

        #cs-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
        }

        .cs-label {
            background-color: #f4f4f4;
            color: #333;
            padding: 5px 10px;
            border-radius: 5px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            font-size: 14px;
            font-weight: bold;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(10px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>REKSADANA</h1>       
        <hr style="border: 1px solid #ccc;"/><br />
        <br><br>
        
        <div class="section">
            <p><?php echo $reksadana_info['intro']; ?></p>
            <img src="<?php echo $reksadana_info['image']; ?>" alt="Reksa Dana">
            <p><?php echo $reksadana_info['description']; ?></p>
        </div>

        <div class="section">
            <h2><?php echo $reksadana_info['sections']['jenis_reksadana']['title']; ?></h2>
            <div class="card-container">
                <?php foreach ($reksadana_info['sections']['jenis_reksadana']['content'] as $jenis): ?>
                    <div class="card">
                        <img src="<?php echo $jenis['image']; ?>" alt="<?php echo $jenis['name']; ?>">
                        <h3><?php echo $jenis['name']; ?></h3>
                        <p><?php echo $jenis['description']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>			
        </div>

        <div class="section" style="text-align: left;">
            <h2><?php echo $reksadana_info['sections']['cara_memilih']['title']; ?></h2>
            <ul>
                <?php foreach ($reksadana_info['sections']['cara_memilih']['content'] as $cara): ?>
                    <li><?php echo $cara; ?></li>
                <?php endforeach; ?>
            </ul>            
        </div>

        <div class="section" style="text-align: left;">
            <h2><?php echo $reksadana_info['sections']['tips_berinvestasi']['title']; ?></h2>
            <ul>
                <?php foreach ($reksadana_info['sections']['tips_berinvestasi']['content'] as $tips): ?>
                    <li><?php echo $tips; ?></li>
                <?php endforeach; ?>
            </ul>
            <div class="info-box">
                <p><strong>Info Penting:</strong> Pastikan Anda memilih reksa dana yang sesuai dengan tujuan keuangan dan profil risiko Anda.</p>
            </div>
        </div>
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
		
        <div id="cs-wrapper">
            <a href="https://wa.me/1234567890" target="_blank" id="cs-btn">
                <img src="wa2.png" alt="CS" />
            </a>
        </div>

		<br><br><br>
		<div class="button-container">
		<a href="./?adm=home" class="back-button">↩</a>
		<a href="./?adm=login" class="login-button">LOGIN NOW</a>
	</div>
	</div>
</body>
</html>