CREATE TABLE IF NOT EXISTS sertifikat (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    tanggal DATE NOT NULL,
    nomor_sertifikat VARCHAR(50) NOT NULL
);

-- Dummy data
INSERT INTO sertifikat (nama, tanggal, nomor_sertifikat) VALUES
('Berlian Nurfadhilah', CURDATE(), 'EPIC-2025-001');
