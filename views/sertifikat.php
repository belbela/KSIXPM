<?php
require('../database/koneksi.php');

$query = mysqli_query($koneksi, "SELECT * FROM sertifikat");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Preview Sertifikat</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h2>Daftar Sertifikat</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Nomor Sertifikat</th>
            <th>Aksi</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($query)) { ?>
        <tr>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['tanggal']; ?></td>
            <td><?php echo $row['nomor_sertifikat']; ?></td>
            <td>
                <a href="../routes/sertifikat.php?id=<?php echo $row['id']; ?>">Unduh PDF</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
