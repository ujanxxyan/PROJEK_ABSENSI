<?php
session_start();
include('../koneksi/koneksi.php');

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
$NIP = $_SESSION['NIP'];

$queryPgw = "SELECT * FROM pegawai WHERE NIP = '$NIP'";
$resultPgw = mysqli_query($koneksi, $queryPgw);
$dataPgw = mysqli_fetch_array($resultPgw);

$countPgw = mysqli_num_rows($resultPgw);

$queryLogin = "SELECT username, password FROM login WHERE NIP = '$NIP'";
$resultLogin = mysqli_query($koneksi, $queryLogin);

if (mysqli_num_rows($resultLogin) > 0) {
    $loginData = mysqli_fetch_array($resultLogin);
} else {
    $loginData = ['username' => 'Tidak Ada', 'password' => 'Tidak Ada'];
}
?>

<h3 style="text-align: center; font-family: 'Droid Sans', sans-serif;">BIODATA PEGAWAI</h3>
<hr style="border: 1px solid #ccc;"/><br />
<table style="width: 100%; border-collapse: collapse; font-family: 'Droid Sans', sans-serif;">
    <thead>
        <tr style="background: #ffc107; color: #002366;">
            <th style="padding: 10px; border: 1px solid #ccc;">Foto</th>
            <th style="padding: 10px; border: 1px solid #ccc;">NIP</th>
            <th style="padding: 10px; border: 1px solid #ccc;">NAMA</th>
            <th style="padding: 10px; border: 1px solid #ccc;">JABATAN</th>
            <th style="padding: 10px; border: 1px solid #ccc;">USERNAME</th>
            <th style="padding: 10px; border: 1px solid #ccc;">PASSWORD</th>
            <th style="padding: 10px; border: 1px solid #ccc;">KEHADIRAN</th>
        </tr>
    </thead>
    <tbody>
    <?php
    if ($countPgw > 0) {
    ?>
        <tr style="background: #f9f9f9; border: 1px solid #ccc;">
            <td style="padding: 10px; border: 1px solid #ccc; text-align: center;">
                <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_640.png" alt="Foto" style="width: 100px; height: 100px; object-fit: cover;">
            </td>
            
            <td style="padding: 10px; border: 1px solid #ccc; text-align: center;"><?php echo $dataPgw[0]; ?></td>
            <td style="padding: 10px; border: 1px solid #ccc; text-align: center;"><?php echo $dataPgw[1]; ?></td>
            <td style="padding: 10px; border: 1px solid #ccc; text-align: center;"><?php echo $dataPgw[2]; ?></td>
            <td style="padding: 10px; border: 1px solid #ccc; text-align: center;"><?php echo $loginData['username']; ?></td>
            <td style="padding: 10px; border: 1px solid #ccc; text-align: center;"><?php echo $loginData['password']; ?></td>
            <td style="padding: 10px; border: 1px solid #ccc; text-align: center;"><?php echo $dataPgw[5]; ?></td> 
       
        </tr>
    <?php
        } else {
        echo "<tr>
                <td colspan='7' style='padding: 20px; text-align: center; background: #f9f9f9;'>
                    <i>Belum ada Data Pegawai</i>
                </td>
              </tr>";
    }
    ?>
    </tbody>
</table>

<br><br><br>
<div class="button-container">
    <a href="logout.php" class="back-button">Kembali ke halaman utama ↩</a>
</div>
