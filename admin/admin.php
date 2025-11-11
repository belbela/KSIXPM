<?php
// DATA DUMMY (nanti diganti database)
$total_peserta = 20;
$peserta_lulus = 5;
$belum_bayar = 7;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin EPIC</title>
    <style>
        body { font-family: Arial; background:#f5f5f5; padding:20px; }
        .card { background:white; padding:20px; margin:10px; border-radius:10px; display:inline-block; width:200px; box-shadow:0 3px 6px rgba(0,0,0,0.1);}
        h2 { color:#333; }
    </style>
</head>
<body>

<h1>Dashboard Admin EPIC</h1>

<div class="card">
    <h2><?= $total_peserta ?></h2>
    <p>Total Peserta</p>
</div>

<div class="card">
    <h2><?= $peserta_lulus ?></h2>
    <p>Peserta Lulus</p>
</div>

<div class="card">
    <h2><?= $belum_bayar ?></h2>
    <p>Belum Bayar</p>
</div>

<br><br>
<a href="peserta.php">Lihat Data Peserta ➜</a>

</body>
</html>
