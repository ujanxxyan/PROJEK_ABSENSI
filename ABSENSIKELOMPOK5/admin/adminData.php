<?php
session_start();
include('../koneksi/koneksi.php');

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}


?>
<?php
$queryDtb = "SELECT * FROM database_table";
$resultDtb = mysqli_query($koneksi, $queryDtb);
$countDtb = mysqli_num_rows($resultDtb);
?>

<h3 style="text-align: center; font-family: 'Droid Sans', sans-serif;">DATA ABSENSI KANTOR</h3>
<hr style="border: 1px solid #ccc;"/><br />


	<table style="width: 100%; border-collapse: collapse; font-family: 'Droid Sans', sans-serif;">
		<thead>
			<tr style="background: #ffc107; color: #002366;">
				<th style="padding: 10px; border: 1px solid #ccc;">NIP</th>
				<th style="padding: 10px; border: 1px solid #ccc;">JABATAN</th>
				<th style="padding: 10px; border: 1px solid #ccc;">HADIR</th>
				<th style="padding: 10px; border: 1px solid #ccc;">SAKIT</th>
				<th style="padding: 10px; border: 1px solid #ccc;">ALFA</th>	
				<th style="padding: 10px; border: 1px solid #ccc;">AKSI</th>
			</tr>
		</thead>
		<tbody>
    <?php
    if ($countDtb > 0) {
        while ($dataDtb = mysqli_fetch_array($resultDtb, MYSQLI_NUM)) {
    ?>
        <tr style="background: #f9f9f9; border: 1px solid #ccc;">
            <td style="padding: 10px; border: 1px solid #ccc; text-align: center;"><?php echo $dataDtb[0]; ?></td>
            <td style="padding: 10px; border: 1px solid #ccc; text-align: center;"><?php echo $dataDtb[1]; ?></td>
            <td style="padding: 10px; border: 1px solid #ccc; text-align: center;"><?php echo $dataDtb[2]; ?></td>
			<td style="padding: 10px; border: 1px solid #ccc; text-align: center;"><?php echo $dataDtb[3]; ?></td>
			<td style="padding: 10px; border: 1px solid #ccc; text-align: center;"><?php echo $dataDtb[4]; ?></td>
			<td style="padding: 10px; border: 1px solid #ccc; text-align: center;">
                <a href="./?adm=adminEdit" style="background: #007bff; color: white; text-decoration: none; padding: 3px 7px; border-radius: 3px; margin-right: 3px;">Edit</a>
                <a href="adminDelete.php?nim=<?php echo $dataAbs[0]; ?>" style="background: #dc3545; color: white; text-decoration: none; padding: 3px 7px; border-radius: 3px;">Hapus</a>
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
		<a href="./?adm=home" class="back-button">↩</a>
		<a href="./?adm=login" class="login-button">LOGIN NOW</a>
	</div>
