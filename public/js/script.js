// fungsi buat validasi form login
function validateLogin(event) {
    event.preventDefault();
    
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    
    // cek kalau ada field yang kosong
    if (email === '' || password === '') {
        alert('ayo, isi semua field!');
        return false;
    }
    
    // cek format email
    if (!email.includes('@')) {
        alert('format emailnya salah!');
        return false;
    }
    
    // cek password minimal 6 karakter
    if (password.length < 6) {
        alert('password minimal 6 karakter!');
        return false;
    }
    
    // cek email harus pakai domain institusi
    if (!email.includes('@polinela.ac.id') && !email.includes('@student.polinela.ac.id')) {
        const result = confirm('kamu pakai email non-institusional. lanjutkan dengan email ini?');
        if (!result) return false;
    }
    
    // kalau valid, tampilkan pesan sukses (demo)
    alert('login berhasil! selamat datang di epic. (mode demo - tidak terhubung database)');
    return false;
}

// fungsi buat validasi form register
function validateRegister(event) {
    event.preventDefault();
    
    const fullname = document.getElementById('fullname').value;
    const npm = document.getElementById('npm').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm_password').value;
    const agree = document.getElementById('agree').checked;
    
    // cek kalau ada field yang kosong
    if (fullname === '' || npm === '' || email === '' || phone === '' || password === '' || confirmPassword === '') {
        alert('ayo, isi semua field!');
        return false;
    }
    
    // cek nama lengkap minimal 5 karakter
    if (fullname.length < 5) {
        alert('nama lengkap minimal 5 karakter!');
        return false;
    }
    
    // cek npm (harus 8 digit)
    if (!/^\d{8}$/.test(npm)) {
        alert('npm harus 8 digit angka!');
        return false;
    }
    
    // cek format email
    if (!email.includes('@')) {
        alert('format emailnya salah!');
        return false;
    }
    
    // cek nomor telepon (10-13 digit)
    const phoneDigits = phone.replace(/\D/g, '');
    if (phoneDigits.length < 10 || phoneDigits.length > 13) {
        alert('nomor telepon harus 10-13 digit!');
        return false;
    }
    
    // cek password minimal 8 karakter
    if (password.length < 8) {
        alert('password minimal 8 karakter!');
        return false;
    }
    
    // cek password cocok
    if (password !== confirmPassword) {
        alert('password dan konfirmasi password tidak cocok!');
        return false;
    }
    
    // cek checkbox
    if (!agree) {
        alert('kamu harus setuju dengan syarat & ketentuan dan kebijakan privasi!');
        return false;
    }
    
    // kalau valid, tampilkan pesan sukses (demo)
    alert('pendaftaran berhasil! data kamu akan diproses oleh admin. (mode demo - tidak terhubung database)');
    return false;
}

// event listener saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
    console.log('sistem epic berhasil dimuat');
    
    // validasi real-time untuk email
    const emailInputs = document.querySelectorAll('input[type="email"]');
    emailInputs.forEach(input => {
        input.addEventListener('blur', function() {
            if (this.value !== '' && !this.value.includes('@')) {
                this.classList.add('is-invalid');
                this.classList.remove('is-valid');
            } else if (this.value !== '') {
                this.classList.add('is-valid');
                this.classList.remove('is-invalid');
            }
        });
    });
    
    // validasi real-time untuk konfirmasi password
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm_password');
    
    if (confirmPasswordInput) {
        confirmPasswordInput.addEventListener('input', function() {
            if (passwordInput.value !== this.value && this.value !== '') {
                this.classList.add('is-invalid');
                this.classList.remove('is-valid');
            } else if (passwordInput.value === this.value && this.value !== '') {
                this.classList.add('is-valid');
                this.classList.remove('is-invalid');
            }
        });
    }
    
    // smooth scroll untuk menu
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
