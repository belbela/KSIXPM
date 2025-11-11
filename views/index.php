<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPIC - English Proficiency For International Communication</title>
    
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="index.php">
                <span class="badge bg-primary me-2">EPIC</span> Politeknik Negeri Lampung
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang EPIC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero bg-gradient text-white text-center py-5">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">EPIC</h1>
            <p class="lead fs-5 mb-4">English Proficiency For International Communication</p>
            <p class="mb-4">Tes Kemampuan Bahasa Inggris untuk Komunikasi Internasional<br>Politeknik Negeri Lampung</p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="register.php" class="btn btn-light btn-lg fw-bold">Daftar Sekarang</a>
                <a href="login.php" class="btn btn-outline-light btn-lg fw-bold">Login</a>
            </div>
        </div>
    </section>

    <section id="tentang" class="tentang py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Tentang EPIC</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body">
                            <h5 class="card-title text-primary fw-bold">📚 Apa itu EPIC?</h5>
                            <p class="card-text">
                                EPIC adalah sistem tes kemampuan bahasa Inggris yang dirancang untuk mengukur 
                                kompetensi komunikasi internasional mahasiswa Politeknik Negeri Lampung.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body">
                            <h5 class="card-title text-success fw-bold">🎯 Tujuan EPIC</h5>
                            <p class="card-text">
                                Memastikan mahasiswa memiliki kemampuan bahasa Inggris yang memadai untuk 
                                berkomunikasi dalam konteks internasional dan akademik.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Keunggulan EPIC</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card shadow-sm h-100 text-center border-0 card-hover">
                        <div class="card-body">
                            <div class="icon-box mb-3">📝</div>
                            <h5 class="card-title fw-bold">Tes Komprehensif</h5>
                            <p class="card-text">Mencakup Reading, Writing, Listening, dan Speaking untuk penilaian menyeluruh.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm h-100 text-center border-0 card-hover">
                        <div class="card-body">
                            <div class="icon-box mb-3">⏱️</div>
                            <h5 class="card-title fw-bold">Penjadwalan Fleksibel</h5>
                            <p class="card-text">Pilih jadwal tes yang sesuai dengan ketersediaan Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm h-100 text-center border-0 card-hover">
                        <div class="card-body">
                            <div class="icon-box mb-3">📜</div>
                            <h5 class="card-title fw-bold">Sertifikat Resmi</h5>
                            <p class="card-text">Dapatkan sertifikat resmi setelah menyelesaikan tes EPIC.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta bg-primary text-white py-5">
        <div class="container text-center">
            <h3 class="mb-4 fw-bold">Siap Menguji Kemampuan Bahasa Inggris Anda?</h3>
            <p class="mb-4">Daftar sekarang dan ikuti tes EPIC untuk mendapatkan sertifikasi internasional.</p>
            <a href="register.php" class="btn btn-light btn-lg fw-bold">Mulai Pendaftaran</a>
        </div>
    </section>

    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="fw-bold mb-3">EPIC Politeknik Negeri Lampung</h6>
                    <p class="text-muted">Sistem Informasi untuk Tes Kemampuan Bahasa Inggris Internasional</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="text-muted mb-0">&copy; <?php echo date('Y'); ?> Politeknik Negeri Lampung. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="../public/js/bootstrap.bundle.min.js"></script>
    
    <script src="../public/js/script.js"></script>
</body>
</html>