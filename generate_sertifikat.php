<?php
require_once 'vendor/autoload.php';
use Dompdf\Dompdf;

// Ambil data dari form
$nama  = $_POST['nama'];
$nim   = $_POST['nim'];
$nilai = $_POST['nilai'];

// Buat objek Dompdf
$dompdf = new Dompdf();

// HTML template sertifikat
$html = "
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 50px;
      border: 10px solid #007bff;
      border-radius: 20px;
    }
    h1 {
      color: #007bff;
      font-size: 28px;
      text-transform: uppercase;
    }
    h2 {
      margin-top: 10px;
      text-decoration: underline;
    }
    p {
      font-size: 16px;
    }
  </style>
</head>
<body>
  <h1>SERTIFIKAT KELULUSAN</h1>
  <p>Diberikan Kepada:</p>
  <h2>$nama</h2>
  <p>NIM: $nim</p>
  <p>Atas partisipasinya dalam Tes English Proficiency for International Communication (EPIC)</p>
  <p><strong>Nilai:</strong> $nilai</p>
  <br><br>
  <p>Politeknik Negeri Lampung</p>
  <p>Tanggal: " . date('d F Y') . "</p>
</body>
</html>
";

// Load HTML ke Dompdf
$dompdf->loadHtml($html);

// Set ukuran kertas
$dompdf->setPaper('A4', 'portrait');

// Render ke PDF
$dompdf->render();

// Output ke browser (langsung download)
$dompdf->stream("sertifikat_$nama.pdf", array("Attachment" => true));
?>
