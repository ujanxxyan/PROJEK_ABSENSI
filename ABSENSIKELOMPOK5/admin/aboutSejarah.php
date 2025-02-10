<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Developer</title>
    <style>
        body {
            font-family: 'Droid Sans', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #e3f2fd, #90caf9);
            color: #333;
            transition: background 0.5s ease, color 0.5s ease;
        }
        .container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
            padding: 40px;
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
            animation: fadeIn 1s ease-out;
            text-align: center;
        }
        h2 {
            color: #1565c0;
            font-size: 2.5em;
            margin-bottom: 20px;
            font-weight: bold;
        }
        p {
            font-size: 1.2em;
            line-height: 1.8;
            color: #444;
            margin: 15px 0;
        }
        .highlight {
            color: #1565c0;
            font-weight: bold;
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
        .button-container {
			display: flex;
			justify-content: space-between; 
			align-items: center;
			margin-top: 20px;
			padding: 0 20px; 
		}

		.button-container a {
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
			transform: scale(1.1); 
			box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4); 
		}

		.back-button {
			background: #800000;
			color: white;
		}

		.back-button:hover {
			background: #ffc107; 
			color: #800000;
		}


		.login-button {
			background: blue; 
			color: white;
			margin-left: auto; 
		}

		.login-button:hover {
			background: #0056b3; 
			color: white;
		}
    </style>
</head>
<body>
    <div class="container">
        <h2>Tiga Sekawan</h2>
        <p><strong>Tentang Kami:</strong></p>
        <p>
            Sejarah Perusahaan Tiga Bersaudara Investasi<br>
            Tiga Sekawan Investasi didirikan pada tahun 2010 oleh tiga kawan yang memiliki visi untuk membantu masyarakat Indonesia mencapai kebebasan finansial melalui investasi yang aman dan terpercaya. Dengan modal awal yang sederhana dan semangat untuk tumbuh bersama, perusahaan ini mulai menawarkan layanan pengelolaan investasi untuk individu dan usaha kecil.
        </p>
        <p>
            <span class="highlight">Pertumbuhan dan Kepercayaan:</span><br>
            Pada tahun 2015, perusahaan memperluas layanannya dengan membuka kantor cabang di kota besar lainnya di Indonesia. Dengan fokus pada pelayanan personal dan hasil investasi yang konsisten, Tiga Bersaudara Investasi menjadi mitra kepercayaan bagi banyak klien di seluruh negeri.
        </p>
        <p>
            <span class="highlight">Komitmen Masa Depan:</span><br>
            Hingga saat ini, Tiga Bersaudara Investasi terus berkembang dengan tujuan memberikan layanan terbaik kepada setiap klien. Dengan prinsip kejujuran, kerja keras, dan semangat kekeluargaan, perusahaan berkomitmen untuk menjadi bagian dari perjalanan finansial masyarakat Indonesia.
        </p>
		
		<br><br><br>
        <p><strong>Moto Perusahaan:</strong><br>
            "Bersama, Menuju Masa Depan Finansial yang Lebih Baik."
        </p>
    </div>
    <div class="button-container">
		<a href="./?adm=home" class="back-button">↩</a>
		<a href="./?adm=login" class="login-button">LOGIN NOW</a>
	</div>
</body>
</html>
