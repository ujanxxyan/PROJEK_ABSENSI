<?php
include('../koneksi/koneksi.php');

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

session_start();

$queryPpm = "SELECT * FROM pegawai";
$resultPpm = mysqli_query($koneksi, $queryPpm);
$countPpm = mysqli_num_rows($resultPpm);
?>

<h3 style="text-align: center; font-family: 'Droid Sans', sans-serif;">DATA ABSENSI KANTOR</h3>
<hr style="border: 1px solid #ccc;"/><br />

<table style="width: 100%; border-collapse: collapse; font-family: 'Droid Sans', sans-serif;">
    <thead>
        <tr style="background: #ffc107; color: #002366;">
            <th style="padding: 10px; border: 1px solid #ccc;">NO</th>
            <th style="padding: 10px; border: 1px solid #ccc;">NIP</th>
            <th style="padding: 10px; border: 1px solid #ccc;">NAMA</th>
            <th style="padding: 10px; border: 1px solid #ccc;">JABATAN</th>
            <th style="padding: 10px; border: 1px solid #ccc;">KETERANGAN</th>
        </tr>
    </thead>
    <tbody>
    <?php
    if ($countPpm > 0) {
        $nomor = 1; 
        while ($dataPpm = mysqli_fetch_array($resultPpm, MYSQLI_NUM)) {
    ?>
        <tr style="background: #f9f9f9; border: 1px solid #ccc;">
            <td style="padding: 10px; border: 1px solid #ccc; text-align: center; width: 50px;"><?php echo $nomor++; ?></td>
            <td style="padding: 10px; border: 1px solid #ccc; text-align: center;"><?php echo $dataPpm[0]; ?></td>
            <td style="padding: 10px; border: 1px solid #ccc; text-align: center;"><?php echo $dataPpm[1]; ?></td>
            <td style="padding: 10px; border: 1px solid #ccc; text-align: center;"><?php echo $dataPpm[2]; ?></td>
            <td style="padding: 10px; border: 1px solid #ccc; text-align: center;"><?php echo !empty($dataPpm[5]) ? $dataPpm[5] : 'Belum ada keterangan'; ?>
</td>

        </tr>
    <?php
        }
    } else {
        echo "<tr>
                <td colspan='6' style='padding: 20px; text-align: center; background: #f9f9f9;'>
                    <i>Belum ada Data Pegawai</i>
                </td>
              </tr>";
    }
    ?>
    </tbody>
</table>

<br><br><br>
<div class="button-container">
    <a href="./?adm=home" class="back-button">kembali ke home  ↩</a>
</div>
