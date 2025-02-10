<?php
include('../koneksi/koneksi.php');

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$queryAdm = "
    SELECT 
        p.NIP, p.nama AS nama_pegawai, p.jabatan, 
        l.username, IFNULL(l.password, '') AS password
    FROM pegawai p
    LEFT JOIN login l ON p.NIP = l.NIP
";

$resultAdm = mysqli_query($koneksi, $queryAdm);
$countAdm = mysqli_num_rows($resultAdm);
?>

<h3 style="text-align: center; font-family: 'Droid Sans', sans-serif;">DATA ABSENSI KANTOR</h3>
<hr style="border: 1px solid #ccc;"/><br />

<div style="text-align: center; margin-bottom: 20px;">
    <a href="./?adm=adminAdd">
        <button style="background: #28a745; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-size: 14px; cursor: pointer;">
            TAMBAH DATA PEGAWAI
        </button>
    </a>
</div>

<table style="width: 100%; border-collapse: collapse; font-family: 'Droid Sans', sans-serif;">
    <thead>
        <tr style="background: #ffc107; color: #002366;">
            <th style="padding: 10px; border: 1px solid #ccc;">NIP</th>
            <th style="padding: 10px; border: 1px solid #ccc;">NAMA</th>
            <th style="padding: 10px; border: 1px solid #ccc;">JABATAN</th>
            <th style="padding: 10px; border: 1px solid #ccc;">USERNAME</th>
            <th style="padding: 10px; border: 1px solid #ccc;">PASSWORD</th>    
            <th style="padding: 10px; border: 1px solid #ccc;">AKSI</th>
        </tr>
    </thead>
    <tbody>
    <?php
    if ($countAdm > 0) {
        while ($dataAdm = mysqli_fetch_array($resultAdm, MYSQLI_ASSOC)) {
    ?>
        <tr style="background: #f9f9f9; border: 1px solid #ccc;">
            <td style="padding: 10px; border: 1px solid #ccc; text-align: center;"> <?php echo $dataAdm['NIP']; ?> </td>
            <td style="padding: 10px; border: 1px solid #ccc; text-align: center;"> <?php echo $dataAdm['nama_pegawai']; ?> </td>
            <td style="padding: 10px; border: 1px solid #ccc; text-align: center;"> <?php echo $dataAdm['jabatan']; ?> </td>
            <td style="padding: 10px; border: 1px solid #ccc; text-align: center;"> <?php echo $dataAdm['username']; ?> </td>
            <td style="padding: 10px; border: 1px solid #ccc; text-align: center;"> <?php echo isset($dataAdm['password']) ? $dataAdm['password'] : '******'; ?> </td>
            <td style="padding: 10px; border: 1px solid #ccc; text-align: center;">
                <a href="./?adm=adminEdit&nip=<?php echo $dataAdm['NIP']; ?>" style="background: #007bff; color: white; text-decoration: none; padding: 3px 7px; border-radius: 3px; margin-right: 3px;">Edit</a>
                <a href="adminDelete.php?nip=<?php echo $dataAdm['NIP']; ?>" style="background: #dc3545; color: white; text-decoration: none; padding: 3px 7px; border-radius: 3px;" class="action-button delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
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
