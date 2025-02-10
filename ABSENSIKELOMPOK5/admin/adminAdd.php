<?php
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
    <title>Tambah Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Droid Sans', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #f5f7fa, #c3cfe2);
            color: #333;
        }

        .form-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .form-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        .form-label {
            font-weight: bold;
        }

        .form-control,
        .form-select {
            border-radius: 10px;
            padding: 10px;
            border: 1px solid #ced4da;
            transition: border-color 0.3s;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #007bff;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.3);
        }

        .btn-success {
            background: linear-gradient(135deg, #28a745, #218838);
            border: none;
            color: #fff;
            font-weight: bold;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .btn-success:hover {
            background: #1e7e34;
            box-shadow: 0 8px 16px rgba(33, 126, 52, 0.5);
            transform: scale(1.05);
        }

        h3 {
            font-weight: bold;
            color: #333;
        }

        .back-link {
            text-decoration: none;
            color: #fff;
            background: #800000;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
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

		login-button:hover {
			background: #0056b3;
			color: white;
		}
    </style>
</head>
<body>
    <h3 class="text-center my-4">TAMBAH DATA PEGAWAI</h3>
    <hr class="mb-4" style="border: 1px solid #ccc;" />

    <div class="container">
        <div class="card mx-auto form-container" style="max-width: 600px;">
            <div class="card-body">
            <?php
if (!isset($_POST['submit'])) { 
?>
    <form enctype="multipart/form-data" method="post" style="background: #f9f9f9; padding: 20px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <table width="100%" border="0" style="border-collapse: collapse;">
            <tr>
                <td width="30%" style="padding: 10px;">NIP</td>
                <td width="5%">:</td>
                <td width="65%"><input type="text" name="nip" size="30" placeholder="NIP" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;"></td>
            </tr>

            <tr>
                <td style="padding: 10px;">NAMA</td>
                <td>:</td>
                <td><input name="nama" type="text" size="30" placeholder="NAMA" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;"></td>
            </tr>

            <tr>
                <td style="padding: 10px;">JABATAN</td>
                <td>:</td>
                <td>
                    <select name="jabatan" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
                        <option value="">-=PILIH=-</option>
                        <option value="Staff Ahli">STAFF AHLI</option>
                        <option value="Manager">MANAGER</option>
                        <option value="Chief Officer ">CHIEF OFFICER</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px;">USERNAME</td>
                <td>:</td>
                <td><input name="username" type="text" size="30" placeholder="USERNAME" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;"></td>
            </tr>
            <tr>
                <td style="padding: 10px;">PASSWORD</td>
                <td>:</td>
                <td><input name="password" type="password" size="30" placeholder="PASSWORD" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;"></td>
            </tr>
           
            <tr>
                <td colspan="3" style="padding: 20px 10px; text-align: center;">
                    <button id="submit" name="submit" type="submit" style="background: #28a745; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">TAMBAH</button>
                </td>
            </tr>
        </table>
    </form>
<?php
} else {
include('../koneksi/koneksi.php');

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $nip = $_POST["nip"];
    $nama = $_POST["nama"];
    $jabatan = $_POST["jabatan"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = "pegawai"; 

    // Cek apakah NIP atau Username sudah ada di database
    $checkQuery = "SELECT * FROM pegawai WHERE nip = '$nip' OR username = '$username'";
    $resultCheck = mysqli_query($koneksi, $checkQuery);

    if (mysqli_num_rows($resultCheck) > 0) {
        echo "<script>alert('NIP atau Username sudah terdaftar! Silakan gunakan yang lain.');</script>";
        echo "<script type='text/javascript'>window.location ='adminAdd.php'</script>";
        exit;
    }

    // Jika belum terdaftar, lakukan INSERT
    $insertPegawai = "INSERT INTO pegawai (NIP, nama, jabatan, username, password) 
                      VALUES ('$nip', '$nama', '$jabatan', '$username', '$password')";
    $queryPegawai = mysqli_query($koneksi, $insertPegawai);

    $insertLogin = "INSERT INTO login (NIP, username, password, jabatan, role) 
                    VALUES ('$nip', '$username', '$password', '$jabatan', '$role')";
    $queryLogin = mysqli_query($koneksi, $insertLogin);

    if ($queryPegawai && $queryLogin) {
        echo "<script>alert('Data Berhasil Disimpan!');</script>";
        echo "<script type='text/javascript'>window.location ='adminView.php'</script>";
        exit;
    } else {
        echo "<script>alert('Data Gagal Disimpan!');</script>";
        echo "<script type='text/javascript'>window.location ='adminAdd.php'</script>";
        exit;
    }
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