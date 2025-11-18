<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Sertifikat</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h1>Generate Sertifikat Digital</h1>
    <form action="generate_sertifikat.php" method="POST">
        <input type="text" name="nama" placeholder="Nama Lengkap" required><br>
        <input type="text" name="nim" placeholder="NIM" required><br>
        <input type="text" name="nilai" placeholder="Nilai (contoh: 870)" required><br>
        <button type="submit">Buat Sertifikat</button>
    </form>
</body>
</html>
