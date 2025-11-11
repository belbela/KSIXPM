CREATE TABLE pendaftaran (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    nim VARCHAR(20) NOT NULL,
    prodi VARCHAR(100),
    tanggal_tes DATE,
    path_bukti_bayar VARCHAR(255) NOT NULL,
    status_validasi VARCHAR(50) DEFAULT 'Menunggu Validasi',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);