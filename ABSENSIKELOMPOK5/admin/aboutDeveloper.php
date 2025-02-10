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
            background: linear-gradient(to bottom right, #e0f7fa, #80deea);
            color: #333;
            transition: background 0.5s ease, color 0.5s ease;
        }
        .container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
            padding: 40px;
            width: 90%;
            max-width: 800px;
            margin: 40px auto;
            animation: fadeIn 1s ease-out;
            text-align: center;
        }
        h2 {
            color: #00796b;
            font-size: 2.5em;
            margin-bottom: 20px;
            font-weight: bold;
        }
        p {
            font-size: 1.2em;
            line-height: 1.8;
            color: #555;
            margin: 10px 0;
        }
        .highlight {
            color: #00796b;
            font-weight: bold;
        }
        .button-container {
            text-align: center;
            margin-top: 30px;
        }
        .button-container a {
            background: #00796b;
            color: white;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 8px;
            display: inline-block;
            margin: 10px;
            font-size: 16px;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .button-container a:hover {
            background: #4db6ac;
            color: white;
            transform: scale(1.1);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
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
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
            h2 {
                font-size: 2em;
            }
            p {
                font-size: 1em;
            }
            .button-container a {
                padding: 10px 20px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Biodata Developer</h2>
        <p><strong>Website ini di Developed oleh:</strong></p> 
        <p><span class="highlight">ANGGOTA KELOMPOK 5:</span></p>
        <p>1.) Abyan Annafi Suwandi / 10523008</p>
        <p>2.) Abia Javas Salih / 10523019</p>
        <p>3.) Muhammad Fayez Aqilla Fahlevy / 10523030</p>
        <p><span class="highlight">KELAS:</span> Sistem Informasi 1</p>
        <p><span class="highlight">MATA KULIAH:</span> Praktikum Pemrograman Web</p>
        <p><span class="highlight">DOSEN PENGAMPU:</span> Pa Rauf Fauzan, M.Kom</p>
    </div>
    <div class="button-container">
		<a href="./?adm=home" class="back-button">↩</a>
	</div>
</body>
</html>
