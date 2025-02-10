<?php
session_start();

if (!isset($_SESSION['NIP'])) {
    header("Location: loginView.php");
}
$NIP = $_SESSION['NIP'];
$nama = $_SESSION['username'];
include('../koneksi/koneksi.php');
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kehadiran Pegawai</title>
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
        .form-container {
            background: linear-gradient(135deg, #e9ecef, #ffffff);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .form-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        .form-label {
            font-weight: bold;
            color: #495057;
        }

        .form-control,
        .form-select {
            border-radius: 5px;
            border: 1px solid #ced4da;
            padding: 10px;
            transition: border-color 0.3s;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .btn-success {
            background: #28a745;
            border: none;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .btn-success:hover {
            background: #218838;
            box-shadow: 0 4px 8px rgba(33, 136, 56, 0.5);
        }

        .icon {
            margin-right: 10px;
        }

        .button-container a {
            margin: 0 10px;
            text-decoration: none;
            color: #007bff;
        }

        .button-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h3 class="text-center" style="font-family: 'Droid Sans', sans-serif;">KEHADIRAN PEGAWAI</h3>
    <hr style="border: 1px solid #ccc;"/><br />

    <div class="card mx-auto form-container" style="max-width: 600px;">
        <div class="card-body">
            <form enctype="multipart/form-data" method="post">
                <div class="mb-3">
                    <label for="NIP" class="form-label"><i class="fas fa-id-card icon"></i>NIP</label>
                    <input type="text" name="NIP" class="form-control" value="<?= $NIP ?>" readonly>
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label"><i class="fas fa-user icon"></i>NAMA</label>
                    <input type="text" name="nama" class="form-control" value="<?= $nama ?>" readonly>
                </div>

                <div class="mb-3">
                    <label for="ket" class="form-label"><i class="fas fa-info-circle icon"></i>Keterangan</label>
                    <select name="ket" class="form-select" required>
                        <option value="">--Keterangan--</option>
                        <option value="Hadir">Hadir</option>
                        <option value="Sakit">Sakit</option>
                        <option value="Izin">Izin</option>
                        <option value="Alfa">Alfa</option>
                    </select>
                </div>

                <div class="text-center">
                    <button id="submit" name="submit" type="submit" class="btn btn-success">KIRIM</button>
                </div>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $NIP = $_SESSION['NIP']; 
                $nama = $_POST["nama"];
                $keterangan = $_POST["ket"];
                
                $checkQuery = "SELECT * FROM pegawai WHERE NIP = '$NIP'";
                $checkResult = mysqli_query($koneksi, $checkQuery);
            
                if (mysqli_num_rows($checkResult) > 0) {
                    $updateQuery = "UPDATE pegawai SET nama='$nama', ket='$keterangan' WHERE NIP='$NIP'";
                } else {
                    $insertQuery = "INSERT INTO pegawai (NIP, nama, ket) VALUES ('$NIP', '$nama', '$keterangan')";
                }
            
                if (isset($updateQuery) && mysqli_query($koneksi, $updateQuery) || isset($insertQuery) && mysqli_query($koneksi, $insertQuery)) {
                    echo "<script>alert('Data berhasil disimpan!'); window.location='pegawaiView.php';</script>";
                } else {
                    echo "<script>alert('Data gagal disimpan!');</script>";
                }
            }
            
            ?>

            <br><br>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	
	<div class="button-container">
		<a href="./?adm=home" class="back-button">↩</a>
	</div>
	
</body>
</html>