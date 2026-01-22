<?php $__env->startSection('konten'); ?>

<style>
    /* 1. Hero Section dengan Glassmorphism */
    .hero-relawan {
        position: relative;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                    url('https://images.unsplash.com/photo-1580281657521-6165b1a27a16?auto=format&fit=crop&w=1400&q=60');
        background-size: cover;
        background-position: center;
        background-attachment: fixed; /* Efek Parallax */
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 80px 20px;
    }

    .form-container {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        max-width: 500px;
        width: 100%;
        transition: transform 0.3s ease;
    }

    .form-container:hover {
        transform: translateY(-5px);
    }

    /* 2. Newsletter Section (Sesuai Gambar) */
    .newsletter-section {
        background-color: #0099cc; /* Warna biru sesuai gambar */
        padding: 60px 0;
    }

    .newsletter-input-group {
        background: white;
        border-radius: 50px;
        padding: 5px;
        display: flex;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .newsletter-input-group input {
        border: none;
        padding: 10px 25px;
        border-radius: 50px;
        flex: 1;
        outline: none;
    }

    .btn-custom {
        border-radius: 50px;
        padding: 10px 30px;
        font-weight: bold;
        transition: 0.3s;
    }

    /* 3. Modal Styling */
    .modal-content {
        border-radius: 20px;
        border: none;
    }
</style>

<div class="hero-relawan">
    <div class="form-container p-4 p-md-5 shadow-lg">
        <div class="text-center mb-4">
            <h2 class="fw-bold text-dark">Gabung Relawan</h2>
            <p class="text-muted small">Bantu sesama dan jadilah bagian dari perubahan.</p>
        </div>

        <form action="/daftar-relawan/kirim" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Contoh: Budi Santoso" required>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="nama@email.com" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">WhatsApp</label>
                    <input type="tel" name="wa" class="form-control" placeholder="08xxx" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Program</label>
                <select name="program" class="form-select" required>
                    <option value="" disabled selected>Pilih Program...</option>
                    <option value="Pelayanan Sosial">Pelayanan Sosial</option>
                    <option value="Bantuan Kemanusiaan">Bantuan Kemanusiaan</option>
                    <option value="Relawan Pendidikan">Relawan Pendidikan</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Motivasi</label>
                <textarea name="alasan" class="form-control" rows="3" placeholder="Apa alasan Anda bergabung?" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2 fw-bold shadow">Kirim Pendaftaran</button>
        </form>
    </div>
</div>

<section class="newsletter-section">
    <div class="container">
        <div class="row align-items-center text-white">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <h2 class="fw-bold">Ingin Mengetahui Informasi terbaru setiap hari?</h2>
                <p class="mb-0 opacity-75">Dapatkan informasi terkini tentang isu kesehatan, pembangunan, dan relawan.</p>
            </div>
            <div class="col-lg-5">
                <form action="/berlangganan" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="newsletter-input-group">
                        <input type="email" name="email_newsletter" placeholder="Masukkan email Anda" required>
                        <button type="submit" class="btn btn-primary btn-custom">Berlangganan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php if(session('success') || session('newsletter_success')): ?>
<div class="modal fade" id="statusModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-lg p-3">
            <div class="modal-body text-center">
                <div class="mb-3">
                    <i class="bi bi-check-circle-fill text-success" style="font-size: 4rem;"></i>
                </div>
                <h3 class="fw-bold"><?php echo e(session('newsletter_success') ? 'Terima Kasih!' : 'Pendaftaran Berhasil!'); ?></h3>
                <p class="text-muted">
                    <?php echo e(session('success') ?? 'Email Anda ' . session('email') . ' telah berhasil terdaftar untuk mendapatkan informasi terbaru.'); ?>

                </p>
                <button type="button" class="btn btn-dark w-100 rounded-pill py-2" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var myModal = new bootstrap.Modal(document.getElementById('statusModal'));
        myModal.show();
    });
</script>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\WebSosial\WebSosial\resources\views/daftar.blade.php ENDPATH**/ ?>