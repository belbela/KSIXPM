<?php
require('../database/koneksi.php');
require('../assets/fpdf/fpdf.php'); // letakkan FPDF di /assets/fpdf/

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM sertifikat WHERE id='$id'");
    $data = mysqli_fetch_assoc($query);

    if($data) {
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,10,'SERTIFIKAT EPIC',0,1,'C');

        $pdf->Ln(10);
        $pdf->SetFont('Arial','',14);
        $pdf->Cell(0,10,'Nama: '.$data['nama'],0,1);
        $pdf->Cell(0,10,'Tanggal: '.$data['tanggal'],0,1);
        $pdf->Cell(0,10,'Nomor Sertifikat: '.$data['nomor_sertifikat'],0,1);

        $pdf->Output('D','Sertifikat_'.$data['nama'].'.pdf');
    } else {
        echo "Data sertifikat tidak ditemukan.";
    }
} else {
    echo "ID sertifikat belum diberikan.";
}
