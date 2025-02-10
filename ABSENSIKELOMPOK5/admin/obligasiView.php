<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obligasi - Jenis dan Penjelasan</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/logoicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Droid+Sans:regular,bold&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Droid Sans', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #f5f7fa, #c3cfe2);
            color: #333;
            overflow-x: hidden;
        }

        #container {
            margin: 50px auto;
            max-width: 1400px;
            padding: 20px;
            text-align: left;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            animation: fadeIn 1s ease-out;
        }

        .content-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
            color: #800000;
        }

        .content-text {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .content-text h3 {
            color: #800000;
            font-size: 24px;
            margin-top: 30px;
        }

        .content-text ul {
            list-style-type: square;
            margin-left: 20px;
        }
        
        .image-container {
            text-align: center;
            margin-top: 20px;
        }

        .image-container img {
            width: 80%;
            max-width: 600px;
            height: auto;
            border-radius: 10px;
            animation: zoomIn 2s ease-out;
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
    </style>
</head>

<body>
    <section id="container">
        <div class="content-title">Apa Itu Obligasi?</div>
        <div class="content-text">
            <p>Obligasi adalah surat utang yang diterbitkan oleh pemerintah atau perusahaan untuk mendapatkan dana. Dengan membeli obligasi, investor memberikan pinjaman kepada penerbit obligasi, dan sebagai imbalannya, penerbit akan membayar bunga secara periodik serta mengembalikan pokok pinjaman pada saat jatuh tempo.</p>
            <p>Obligasi sering dianggap sebagai investasi yang lebih aman dibandingkan saham, karena pendapatan dari bunga obligasi relatif stabil, meskipun harganya bisa berfluktuasi di pasar.</p>

            <h3>Jenis-Jenis Obligasi</h3>
            <ul>
                <li><strong>Obligasi Negara</strong>: Obligasi yang diterbitkan oleh pemerintah, dengan risiko yang sangat rendah karena dijamin oleh negara.</li>
                <li><strong>Obligasi Korporasi</strong>: Obligasi yang diterbitkan oleh perusahaan. Risikonya lebih tinggi dibandingkan obligasi negara, tetapi juga menawarkan imbal hasil yang lebih besar.</li>
                <li><strong>Obligasi Daerah</strong>: Obligasi yang diterbitkan oleh pemerintah daerah untuk membiayai proyek-proyek tertentu di wilayah tersebut.</li>
                <li><strong>Obligasi Ijarah</strong>: Jenis obligasi yang didasarkan pada prinsip syariah, di mana penerbit obligasi menyewakan aset dan memberikan hasil sewa sebagai imbal hasil.</li>
            </ul>

            <h3>Cara Kerja Obligasi</h3>
            <p>Ketika membeli obligasi, investor akan menerima bunga (kupon) secara periodik, biasanya setiap tahun atau enam bulan. Pada saat obligasi jatuh tempo, penerbit akan mengembalikan jumlah pokok kepada investor. Bunga yang diterima oleh investor disebut dengan kupon.</p>
            <p>Obligasi dapat diperdagangkan di pasar sekunder sebelum jatuh tempo, dan harga obligasi di pasar sekunder dapat berubah tergantung pada suku bunga dan kondisi ekonomi.</p>

            <h3>Keuntungan dan Risiko Investasi Obligasi</h3>
            <ul>
                <li><strong>Keuntungan:</strong> Pendapatan tetap dari bunga obligasi, dan pengembalian pokok pada saat jatuh tempo.</li>
                <li><strong>Risiko:</strong> Jika penerbit obligasi gagal membayar utang, investor dapat kehilangan uang yang diinvestasikan. Selain itu, ada risiko perubahan suku bunga yang dapat mempengaruhi harga obligasi.</li>
            </ul>

            <div class="image-container">
                <img src="https://via.placeholder.com/600x300?text=Obligasi+Image" alt="Obligasi">            
    </section>
	

    <div class="live-video-container">
        <h2>Grafik Live TradingView</h2>
        <iframe 
            src="https://www.tradingview.com/widgetembed/?frameElementId=tradingview_5f01c&symbol=NASDAQ%3AGOOG&interval=D&hidesidetoolbar=1&symboledit=1&saveimage=1" 
            width="100%" 
            height="600" 
            frameborder="0" 
            allowfullscreen="true">
        </iframe>
	
	<div class="button-container">
		<a href="./?adm=home" class="back-button">↩</a>
		<a href="./?adm=login" class="login-button">LOGIN NOW</a>
	</div>
</div>
</body>

</html>
