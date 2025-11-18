<?php
// DATA DUMMY
$peserta = [
    ["nama" => "Andi Saputra", "nim" => "22140001", "status" => "Sudah Bayar"],
    ["nama" => "Budi Rahman", "nim" => "22140022", "status" => "Belum Bayar"],
    ["nama" => "Siti Aminah", "nim" => "22140045", "status" => "Sudah Bayar"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Peserta Tes EPIC</title>
    <style>
        body { font-family: Arial; padding:20px; background:#fafafa; }
        table { border-collapse: collapse; width:100%; background:white; }
        th, td { padding:10px; border:1px solid #ddd; }
        th { background:#333; color:white; }
        a { text-decoration:none; color:blue; }
        button { padding:5px 10px; margin-right:5px; }
    </style>
</head>
<body>

<h1>Data Peserta Tes EPIC</h1>

<a href="dashboard.php">⬅ Kembali ke Dashboard</a><br><br>

<button onclick="alert('Fitur Tambah Peserta akan dibuat setelah tahap ini');">Tambah Peserta</button>

<br><br>

<table>
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Status Pembayaran</th>
        <th>Aksi</th>
    </tr>

    <?php foreach ($peserta as $p): ?>
    <tr>
        <td><?= $p["nama"] ?></td>
        <td><?= $p["nim"] ?></td>
        <td><?= $p["status"] ?></td>
        <td>
            <a href="#">Edit</a> | 
            <a href="#">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
