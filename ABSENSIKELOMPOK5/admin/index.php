<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.: Sistem Informasi Absensi Perusahaan - Kelompok 5 :.</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/logoicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Droid+Sans:regular,bold&display=swap" rel="stylesheet">
    <style>       
        body {
            font-family: 'Droid Sans', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #f5f7fa, #c3cfe2);
            color: #333;
        }
       
        header {
            background: black;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        header .logo img {
            max-height: 80px;
            margin-left: 20px;
        }

        header .text-content {
			display: flex; 
			align-items: center; 
			justify-content: flex-end; 
			text-align: right;
			flex: 1;
			margin-right: 40px;
			gap: 10px; 
		}

		header .text-content img.right-logo {
			height: 60px; 
			width: auto; 
		}
		header .right-logo {
			cursor: pointer; 
			transition: transform 0.3s ease, opacity 0.3s ease;
		}

		header .right-logo:hover {
			transform: scale(1.1); 
			opacity: 0.8; 
		}

        header .title {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
            cursor: pointer; 
			 transition: transform 0.3s ease, opacity 0.3s ease;
        }
		header .title:hover {
			transform: scale(1); 
			opacity: 0.6; 
		}

        header .title span {
            font-size: 22px;
            font-weight: normal;
            color: #ffc107;
        }

        header .clr {
            margin-top: 5px;
            font-size: 14px;
            color: #ddd;
        }
				
		#cs-btn {
			position: fixed;
			bottom: 30px;
			right: 30px;
			background-color: #25d366; 
			border-radius: 50%;
			padding: 20px;
			box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
			z-index: 1000;
			transition: all 0.3s ease;
			transform: scale(1);
		}

		#cs-btn img {
			width: 20px; 
			height: 20px;
			transition: transform 0.3s ease;
		}
		
		#cs-btn:hover {
			transform: scale(1.2); 
			box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
		}
		
		#cs-btn:before {
			content: "";
			position: absolute;
			bottom: 50px;
			right: 10px;
			width: 12px;
			height: 12px;
			border-radius: 50%;
			background-color: #25d366;
			animation: bubble-animation 1.5s infinite ease-in-out;
		}

		@keyframes bubble-animation {
			0% {
			transform: translateY(0);
			opacity: 1;
		}
		50% {
			transform: translateY(-10px);
			opacity: 0.5;
		}
		100% {
			transform: translateY(0);
			opacity: 1;
		}
	}

        .header-icons {
            display: flex;
            align-items: center;
            margin-left: 30px;
            transition: transform 0.2s ease;
        }

        .header-icons a {
            margin-right: 20px;
            text-decoration: none;
        }

        .header-icons a img {
            height: 30px;
            width: 30px;
            transition: transform 0.1s ease;
        }

        .header-icons a img:hover {
            transform: scale(1.2);
        }

        #navigator {
            background: #800000;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            height: 70px;
			transition: all 0.3s ease; 
        }
		
		#navigator.shrink {
			padding: 10px 0; 
			 font-size: 14px; 
			background: #333; 
		}

        #navigator .menus {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: right;
            margin-right: 60px;
            flex: 1;
        }

        #navigator .menus li {
            margin: 0 20px;
            position: relative;
        }

		#navigator .menus li a {
			text-decoration: none;
			color: white;
			font-weight: bold;
			font-size: 15px;
			position: relative;
			overflow: hidden;
			display: inline-block;
			transition: color 0.3s ease;
		}

		#navigator .menus li a::after {
			content: "";
			position: absolute;
			bottom: 0;
			left: 0;
			width: 0;
			height: 2px;
			background: white;
			transition: width 0.3s ease;
		}

		#navigator .menus li a:hover::after,
		#navigator .menus li a.active::after {
		width: 100%;
		}	

		#navigator .menus li a:hover,
		#navigator .menus li a.active {
		color: #ffc107; /* Optional color change */
		}

        .dropdown-content {
            display: none;
			position: absolute;
			background-color: #800000; 
			min-width: 200px;
			box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3); 
			border-radius: 5px; 
			z-index: 1000;
			overflow: hidden; 
        }

        .menus li:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
			display: block;
            color: white; 
			padding: 10px 16px;
			text-decoration: none;
			display: block;
			background-color: #800000; 
			transition: background-color 0.3s ease;
        }

        .dropdown-content a:hover {
            background-color: #b71c1c;
			color: white; 
			transition: background-color 0.3s ease, color 0.3s ease;
        }
	
        #container {
            margin: 20px auto;
            max-width: 1450px;
            padding: 20px;
            text-align: center;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
			animation: fadeIn 1s ease-out;
        }

        footer {
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 15px 0;
            background: #800000;
            color: #fff;
        }

        footer a {
            color: #ffc107;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
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
			display: flex;
			justify-content: space-between; /* Mengatur posisi tombol kiri-kanan */
			align-items: center;
			margin-top: 20px;
			padding: 0 20px; /* Menambahkan padding untuk jarak di tepi */
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
			background: #0056b3; /* Biru lebih gelap */
			color: white;
		}

		
    </style>
</head>

<body>
    <!-- Header -->
    <header>        
        <div class="header-icons">
            <a href="tel:112-022" class="phone">📞 112-022</a>
            <a href="https://instagram.com" target="_blank">
                <img src="IG.png" alt="Instagram">
            </a>
            <a href="https://facebook.com" target="_blank">
                <img src="facebook.png" alt="Facebook">
            </a>
            <a href="https://youtube.com" target="_blank">
                <img src="youtube.png" alt="YouTube">
            </a>
            <a href="https://twitter.com" target="_blank">
                <img src="x.png" alt="Twitter">
            </a>
            <a href="https://tiktok.com" target="_blank">
                <img src="tiktok.png" alt="TikTok">
            </a>
        </div>
   
		<div class="text-content">
			<div>
				<div class="title" id="redirectToAbout">TIGA SEKAWAN</div>

		<a href="https://www.google.com/maps?q=Jl.Bulevar+No.2+Commercial,+Summarecon+Bandung,+Kota+Bandung,+Jawa+Barat+40294" target="_blank">
			<div class="clr">
			Jl.Bulevar No.2 Commercial, Summarecon Bandung, Kota Bandung, Jawa Barat 40294
			</div>
		</a>
        </div>
		
        <a href="./?adm=aboutDeveloper">
			<img src="logo.png" alt="Logo Kanan" class="right-logo">
		</a>
    </header>

    <!-- Navigation -->
    <section id="navigator">
        <ul class="menus">
            <li><a href="./?adm=home">HOME</a></li>
            
			<li class="dropdown">
                <a href="javascript:void(0)">PRODUK</a>
                <div class="dropdown-content">
                    <a href="./?adm=produkView">View</a> <br>
                    <a href="./?adm=sahamView">Saham</a>
					 <a href="./?adm=reksadanaView">Reksadana</a>
					 <a href="./?adm=obligasiView">Obligasi</a>
                </div>
            </li>

			<li class="dropdown">
                <a href="javascript:void(0)">ABOUT</a>
                <div class="dropdown-content">
                    <a href="./?adm=aboutSejarah">Sejarah Perusahaan</a>
                    <a href="./?adm=aboutDeveloper">Biodata Developer</a>
                </div>
            </li>
			
			<li class="dropdown" style="display: none;">
                <a href="javascript:void(0)">ISI</a>
                <div class="dropdown-content">
                    <a href="./?adm=adminView">a v</a>
                    <a href="./?adm=adminData">a d</a>
					<a href="./?adm=adminAdd">a a</a>
                    <a href="./?adm=adminEdit">a e</a>
					<a href="./?adm=adminDelete">a d</a>
                    <a href="./?adm=pegawaiView"> p v</a>
					<a href="./?adm=pegawaiAbsensi">p a</a>
                    <a href="./?adm=pegawaiEdit">p e </a>
					<a href="./?adm=pimpinanView">pim</a>                    
                </div>
            </li>
			
            <li><a href="./?adm=login">LOG IN</a></li>
        </ul>
    </section>

    <section id="container">
         <?php
        if (empty($_GET)) {
            include("home.php");
        } else {
            switch ($_GET["adm"]) {
                case "home":
                    include("home.php");
                    break;
				case "adminData":
                    include("adminData.php");
                    break;	
				case "adminView":
                    include("adminView.php");
                    break;
                case "adminAdd":
                    include("adminAdd.php");
                    break;
                case "adminEdit":
                    include("adminEdit.php");
                    break;
				case "adminDelete":
                    include("adminDelete.php");
                    break;
                case "pegawaiView":
                    include("pegawaiView.php");
                    break;
				case "pegawaiAbsensi":
                    include("pegawaiAbsensi.php");
                    break;
                case "pegawaiEdit":
                    include("pegawaiEdit.php");
                    break;
				case "pimpinanView":
                    include("pimpinanView.php");
                    break;                	
                case "produkView":
                    include("produkView.php");
                    break;
                case "sahamView":
                    include("sahamView.php");
                    break;
                case "reksadanaView":
                    include("reksadanaView.php");
                    break;
                case "obligasiView":
                    include("ObligasiView.php");
                    break;               
                case "aboutSejarah":
                    include("aboutSejarah.php");
                    break;
                case "aboutDeveloper":
                    include("aboutDeveloper.php");
                    break;
                case "login":
                    include("loginView.php");
                    break;
				case "loginAdd":
                    include("loginAdd.php");
                    break;	
            }
        }
        ?>
    </section>

		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br>	
	
    <footer>
        <font>Copyright &copy; 2025 - Tiga Sekawan<br />
        Developed By <a href="./?adm=aboutDeveloper" target="_new">Kelompok 5</a></font>
    </footer>
	
	<script>
		const navigator = document.getElementById("navigator");
    
		window.addEventListener("scroll", () => {
			if (window.scrollY > 50) {
				navigator.classList.add("shrink"); 
			} else {
				navigator.classList.remove("shrink"); 
			}
		});
	</script>

    <script>      
        document.getElementById('redirectToAbout').addEventListener('click', function () {
            window.location.href = './?adm=aboutDeveloper';
        });
    </script>
	
	<script>
    document.getElementById('cs-btn').addEventListener('click', function() {
    });
	</script>

	

	<a href="https://wa.me/1234567890" target="_blank" id="cs-btn">
		<img src="wa2.png" alt="CS" />
	</a>




</body>
</html>
