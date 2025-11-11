<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - EPIC Politeknik Negeri Lampung</title>
    
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
                        <a class="nav-link active" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 450px;">
            <div class="text-center mb-4">
                <h3 class="fw-bold">Login EPIC</h3>
                <p class="text-muted">Masuk ke akun Anda untuk mengikuti tes</p>
            </div>
            
            <form id="loginForm" onsubmit="return validateLogin(event)">
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control" id="email" name="email" 
                           placeholder="nama@polinela.ac.id" required>
                    <small class="form-text text-muted">Gunakan email mahasiswa Politeknik Negeri Lampung</small>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control" id="password" name="password" 
                           placeholder="Masukkan password Anda" required>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Ingat saya di perangkat ini</label>
                </div>

                <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">
                    Login
                </button>
            </form>

            <hr class="my-4">

            <p class="text-center mb-2">
                Belum punya akun? <a href="register.php" class="fw-bold text-decoration-none">Daftar di sini</a>
            </p>
            <p class="text-center text-muted small">
                <a href="#" class="text-decoration-none">Lupa password?</a>
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
