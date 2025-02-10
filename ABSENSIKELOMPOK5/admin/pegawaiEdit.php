<?php
session_start();
include('../koneksi/koneksi.php');

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}


?>
<?php

$queryPgw = "SELECT * FROM pegawai";
$resultPgw = mysqli_query($koneksi, $queryPgw);
$countPgw = mysqli_num_rows($resultPgw);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Absensi Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
        font-family: 'Droid Sans', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #f5f7fa, #c3cfe2);
            color: #333;
        }
        h3 {
            font-family: 'Droid Sans', sans-serif;
            margin-top: 20px;
        }
        .table-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
        }
        .btn-success {
            background-color: #28a745;
            border: none;
        }
        .btn-success:hover {
            background-color: #218838;
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
		background: #0056b3; 
		color: white;
		}
    </style>
</head>
<body>
    
    <h3 class="text-center">DATA ABSENSI KANTOR</h3>
    <hr style="border: 1px solid #ccc;"/><br />

    <div class="text-center mb-4">
        <a href="./?adm=pegawaiAbsensi" class="btn btn-success">+ TAMBAH DATA PEGAWAI</a>
    </div>

    <div class="table-container">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-warning">
                    <tr class="text-center">
                        <th>NIP</th>
                        <th>NAMA</th>
                        <th>KETERANGAN</th>                        
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if ($countPgw > 0) {
                    while ($dataPgw = mysqli_fetch_array($resultPgw, MYSQLI_ASSOC)) {
                ?>
                    <tr>
                        <td class="text-center"><?php echo $dataPgw['NIP']; ?></td>
                        <td class="text-center"><?php echo $dataPgw['nama']; ?></td>                       
                        <td class="text-center"><?php echo $dataPgw['keterangan']; ?></td>
                        <td class="text-center">
                            <a href="./?adm=absensiEdit&nip=<?php echo $dataPgw['NIP']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                            <a href="absensiDelete.php?nip=<?php echo $dataPgw['NIP']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');"><i class="fas fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                <?php
                    }
                } else {
                    echo "<tr>
                            <td colspan='4' class='text-center'><i>Belum ada data pegawai.</i></td>
                          </tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <br><br>
    <div class="button-container">
		<a href="./?adm=home" class="back-button">↩</a>
		<a href="./?adm=login" class="login-button">LOGIN NOW</a>
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>