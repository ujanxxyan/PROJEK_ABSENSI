<?php
include('../koneksi/koneksi.php');

if (isset($_GET["nip"])) {
    $getnip = $_GET["nip"];
    $editAdm = "SELECT * FROM pegawai WHERE nip = '$getnip'";
    $resultAdm = mysqli_query($koneksi, $editAdm); 

    if ($resultAdm && mysqli_num_rows($resultAdm) > 0) {
        $dataAdm = mysqli_fetch_array($resultAdm);
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "USERNAME tidak ditemukan.";
    exit;
}
?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f7fa;
        color: #333;
        margin: 0;
        padding: 0;
    }
    .container {
        width: 60%;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: 1px solid #ccc;
    }
    h3 {
        text-align: center;
        color: #4CAF50;
    }
    table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }
    td {
        padding: 8px;
        vertical-align: middle;
    }
    td:first-child {
        width: 30%;
        font-weight: bold;
    }
    td:last-child {
        width: 70%;
    }
    input[type="text"],
    select {
        width: 95%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
    a {
        text-decoration: none;
        color: #4CAF50;
        font-weight: bold;
    }
    a:hover {
        color: #45a049;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        font-size: 14px;
        margin-bottom: 5px;
        display: inline-block;
    }
    .form-group input,
    .form-group select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
    }
    .form-group input[type="submit"] {
        width: auto;
        background-color: #4CAF50;
        color: white;
    }
</style>

<div class="container">
    <h3>UBAH DATA PEGAWAI</h3>
    <br />
    <hr />
    <br />
    <p>
    <?php
    if (!isset($_POST['submit'])) {
    ?>
    <form enctype="multipart/form-data" method="post">
        <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" name="nip" value="<?php echo $dataAdm[0]; ?>" readonly="readonly" />
        </div>
        <div class="form-group">
            <label for="nama">NAMA</label>
            <input name="nama" type="text" id="nama" value="<?php echo $dataAdm[1]; ?>" />
        </div>
        <div class="form-group">
            <label for="jabatan">JABATAN</label>
            <select name="jabatan">
                <option value="">-=PILIH=-</option>
                <option value="Staff Ahli" <?php if ($dataAdm['jabatan'] == 'Staff Ahli') echo 'selected'; ?>>STAFF AHLI</option>
                <option value="Manager" <?php if ($dataAdm['jabatan'] == 'Manager') echo 'selected'; ?>>MANAGER</option>
                <option value="Chief Officer" <?php if ($dataAdm['jabatan'] == 'Chief Officer') echo 'selected'; ?>>CHIEF OFFICER</option>
            </select>
        </div>
        <div class="form-group">
            <label for="username">USERNAME</label>
            <input name="username" type="text" id="username" />
        </div>
        <div class="form-group">
            <label for="password">PASSWORD</label>
            <input name="password" type="text" id="password" />
        </div>
        <div class="form-group">
            <input id="submit" name="submit" type="submit" value="UBAH" />
        </div>
    </form>
    <?php
    } else {
        $nip = $_POST["nip"];
        $nama = $_POST["nama"];
        $jabatan = $_POST["jabatan"];
        $username = $_POST["username"];
        $password = ($_POST["password"]); 

        $updateAdm = "UPDATE pegawai SET nama='$nama', jabatan='$jabatan' WHERE nip='$nip'";
        $queryAdm = mysqli_query($koneksi, $updateAdm);

        $updateAcc = "UPDATE login SET username='$username', password='$password' WHERE username='$username'";
        $queryAcc = mysqli_query($koneksi, $updateAcc);

        if ($queryAdm && $queryAcc) {
            echo "<script>alert('Data Berhasil Diubah!');</script>";
            echo "<script type='text/javascript'>window.location='adminView.php';</script>";
        } else {
            echo "<script>alert('Data Gagal Diubah!');</script>";
            echo "Error: " . mysqli_error($koneksi);
        }
    }
    ?>
    <br />
    <a href="adminView.php">&raquo; KEMBALI </a>
</div>
