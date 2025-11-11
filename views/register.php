<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - EPIC Politeknik Negeri Lampung</title>
    
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="index.php">
                <span class="badge bg-primary">EPIC</span> Politeknik Negeri Lampung
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="register.php">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center py-5">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 550px;">
            <div class="text-center mb-4">
                <h3 class="fw-bold">Daftar EPIC</h3>
                <p class="text-muted">Buat akun untuk mengikuti tes kemampuan bahasa Inggris</p>
            </div>
            
            <form id="registerForm" onsubmit="return validateRegister(event)">
                <div class="mb-3">
                    <label for="fullname" class="form-label fw-bold">Nama Lengkap</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" 
                           placeholder="Masukkan nama lengkap" required>
                </div>

                <div class="mb-3">
                    <label for="npm" class="form-label fw-bold">NPM (Nomor Pokok Mahasiswa)</label>
                    <input type="text" class="form-control" id="npm" name="npm" 
                           placeholder="Contoh: 23753050" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control" id="email" name="email" 
                           placeholder="nama@polinela.ac.id" required>
                    <small class="form-text text-muted">Gunakan email institusional Anda</small>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label fw-bold">Nomor Telepon</label>
                    <input type="tel" class="form-control" id="phone" name="phone" 
                           placeholder="08xxxxxxxxxx" required>
                    <small class="form-text text-muted">Format: 10-13 digit angka</small>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control" id="password" name="password" 
                           placeholder="Minimal 8 karakter" minlength="8" required>
                    <small class="form-text text-muted">Gunakan kombinasi huruf, angka, dan simbol</small>
                </div>

                <div class="mb-3">
                    <label for="confirm_password" class="form-label fw-bold">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" 
                           placeholder="Ulangi password Anda" minlength="8" required>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="agree" name="agree" required>
                    <label class="form-check-label" for="agree">
                        Saya setuju dengan <a href="#" class="text-decoration-none fw-bold">Syarat & Ketentuan</a> 
                        dan <a href="#" class="text-decoration-none fw-bold">Kebijakan Privasi</a> EPIC
                    </label>
                </div>

                <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">
                    Daftar Sekarang
                </button>
            </form>

            <hr class="my-4">

            <p class="text-center mb-0">
                Sudah punya akun? <a href="login.php" class="fw-bold text-decoration-none">Login di sini</a>
            </p>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; <?php echo date('Y'); ?> EPIC Politeknik Negeri Lampung.</p>
    </footer>

    <script src="../public/js/bootstrap.bundle.min.js"></script>
    <script src="../public/js/script.js"></script>
</body>
</html>
