<?php $__env->startSection('title', 'Tentang Kami & Donasi - Relawan+'); ?>

<?php $__env->startSection('konten'); ?>

<div class="hero-tentang">
    <div class="hero-overlay"></div>
    <div class="container position-relative z-index-2">
        <div class="hero-content text-center">
            <span class="badge bg-primary px-3 py-2 mb-3 rounded-pill shadow-sm">EST. 2025</span>
            <h1 class="display-3 fw-bold mb-3">Relawan+</h1>
            <p class="lead fw-light">Satu Platform, Berjuta Aksi Nyata untuk Kemanusiaan di Indonesia.</p>
        </div>
    </div>
</div>

<section class="section-padding overflow-hidden">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="pe-lg-5">
                    <h6 class="text-primary fw-bold text-uppercase mb-3">Tentang Gerakan Kami</h6>
                    <h2 class="display-5 fw-bold mb-4">Membangun Harapan Lewat Aksi Nyata</h2>
                    <p class="text-muted fs-5 mb-4">
                        Didirikan pada awal 2025, **Relawan+** lahir dari semangat kolaborasi digital untuk menjawab tantangan sosial masyarakat. Kami bukan sekadar pengumpul donasi, melainkan jembatan bagi setiap individu yang ingin mengabdikan diri.
                    </p>
                    <div class="row g-4 mt-2 text-center">
                        <div class="col-4">
                            <h3 class="fw-bold text-primary mb-0">5K+</h3>
                            <small class="text-muted">Penerima Manfaat</small>
                        </div>
                        <div class="col-4">
                            <h3 class="fw-bold text-primary mb-0">150+</h3>
                            <small class="text-muted">Relawan Aktif</small>
                        </div>
                        <div class="col-4">
                            <h3 class="fw-bold text-primary mb-0">12</h3>
                            <small class="text-muted">Kota Jangkauan</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="rounded-5 shadow-lg p-5 bg-white border-start border-primary border-5">
                    <h3 class="fw-bold mb-4">Visi Kami</h3>
                    <p class="fst-italic fs-5 border-bottom pb-4 mb-4">
                        "Menjadi ekosistem sosial digital paling terpercaya di Indonesia yang mampu mentransformasi kepedulian menjadi kemandirian masyarakat pada tahun 2030."
                    </p>
                    <h3 class="fw-bold mb-3">Misi Utama</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i> Digitalisasi transparansi penyaluran donasi 100%.</li>
                        <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i> Pemberdayaan ekonomi masyarakat berbasis potensi lokal.</li>
                        <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i> Respon cepat bantuan kemanusiaan dalam < 24 jam.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-light" id="donasi">
    <div class="container text-center">
        <h6 class="text-primary fw-bold text-uppercase mb-2">Pilih Kepedulian Anda</h6>
        <h2 class="display-5 fw-bold mb-5">Program Donasi Aktif</h2>

        <div class="row g-4 justify-content-center">
            <?php
                $programs = [
                    ['id' => 1, 'icon' => '🎓', 'title' => 'Beasiswa Anak Bangsa', 'target' => 200000000, 'current' => 125000000, 'color' => 'primary'],
                    ['id' => 2, 'icon' => '🩺', 'title' => 'Kesehatan Masyarakat Desa', 'target' => 100000000, 'current' => 85000000, 'color' => 'success'],
                    ['id' => 3, 'icon' => '🌳', 'title' => 'Gerakan Tanam 50rb Pohon', 'target' => 75000000, 'current' => 45000000, 'color' => 'info']
                ];
            ?>

            <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden card-hover">
                    <div class="card-body p-4 text-start">
                        <div class="fs-1 mb-3"><?php echo e($p['icon']); ?></div>
                        <h4 class="fw-bold mb-3"><?php echo e($p['title']); ?></h4>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted small">Terkumpul</span>
                            <span class="fw-bold text-<?php echo e($p['color']); ?>">Rp <?php echo e(number_format($p['current'], 0, ',', '.')); ?></span>
                        </div>
                        <div class="progress rounded-pill mb-3" style="height: 10px;">
                            <?php $percent = ($p['current'] / $p['target']) * 100; ?>
                            <div class="progress-bar bg-<?php echo e($p['color']); ?> progress-bar-striped progress-bar-animated" style="width: <?php echo e($percent); ?>%"></div>
                        </div>
                        <div class="d-flex justify-content-between small mb-4">
                            <span class="text-muted">Target: Rp <?php echo e(number_format($p['target'], 0, ',', '.')); ?></span>
                            <span class="fw-bold"><?php echo e(round($percent)); ?>%</span>
                        </div>
                        <button class="btn btn-<?php echo e($p['color']); ?> w-100 rounded-pill py-2 fw-bold shadow-sm btn-donasi-trigger" 
                                data-id="<?php echo e($p['id']); ?>" 
                                data-title="<?php echo e($p['title']); ?>">
                            Berdonasi Sekarang
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<section class="section-padding" id="metode-bayar">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-7">
                <div class="bg-white p-5 rounded-5 shadow-sm border h-100">
                    <h3 class="fw-bold mb-4">Formulir Konfirmasi Donasi</h3>
                    <form id="formDonasi" action="/konfirmasi-donasi" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Nama Lengkap (Sesuai KTP)</label>
                                <input type="text" name="nama" class="form-control" placeholder="Budi Santoso" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="budi@email.com" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label fw-bold">Pilih Program Donasi</label>
                                <select name="program_id" class="form-select" id="selectProgram" required>
                                    <option value="" disabled selected>Pilih Program...</option>
                                    <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($p['id']); ?>"><?php echo e($p['title']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Nominal Donasi (Rp)</label>
                                <input type="number" name="nominal" class="form-control" placeholder="Contoh: 100000" required>
                                <small class="text-muted">Min. Rp 10.000</small>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Metode Pembayaran</label>
                                <select name="metode" class="form-select" required>
                                    <option value="BCA">Transfer BCA</option>
                                    <option value="MANDIRI">Transfer Mandiri</option>
                                    <option value="QRIS">QRIS / E-Wallet</option>
                                </select>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill fw-bold py-3 shadow">
                                    Konfirmasi & Kirim Bukti <i class="bi bi-send-fill ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="payment-card-real p-5 rounded-5 shadow-sm bg-primary text-white h-100">
                    <h4 class="fw-bold mb-4">Detail Pembayaran</h4>
                    <div class="mb-4">
                        <small class="opacity-75">Bank BCA (Kode: 014)</small>
                        <div class="d-flex align-items-center justify-content-between bg-white bg-opacity-10 p-3 rounded-3 mt-1 border border-white border-opacity-25">
                            <span class="fs-5 fw-mono">123-456-7890</span>
                            <button class="btn btn-sm btn-light py-1 px-3 rounded-pill btn-copy" data-copy="1234567890">Salin</button>
                        </div>
                    </div>
                    <div class="mb-4">
                        <small class="opacity-75">Bank Mandiri (Kode: 008)</small>
                        <div class="d-flex align-items-center justify-content-between bg-white bg-opacity-10 p-3 rounded-3 mt-1 border border-white border-opacity-25">
                            <span class="fs-5 fw-mono">987-654-3210</span>
                            <button class="btn btn-sm btn-light py-1 px-3 rounded-pill btn-copy" data-copy="9876543210">Salin</button>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <h5 class="fw-bold mb-3">Scan QRIS (OVO/GoPay/Dana)</h5>
                        <div class="bg-white p-2 d-inline-block rounded-4 shadow">
                                                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    :root {
        --primary: #0099cc;
        --secondary: #0077a3;
        --light: #f8f9fa;
    }

    .hero-tentang {
        background-image: url('https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?q=80&w=1470&auto=format&fit=crop');
        height: 60vh;
        background-size: cover;
        background-position: center;
        position: relative;
        display: flex;
        align-items: center;
        color: white;
    }

    .hero-overlay {
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: linear-gradient(to right, rgba(0, 153, 204, 0.9), rgba(0, 50, 100, 0.7));
    }

    .section-padding { padding: 100px 0; }
    
    .card-hover { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .card-hover:hover { transform: translateY(-10px); box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important; }

    .fw-mono { font-family: 'Courier New', Courier, monospace; letter-spacing: 1px; }

    .btn-copy { transition: all 0.2s; }
    .btn-copy:active { transform: scale(0.9); }

    .z-index-2 { z-index: 2; }
</style>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // 1. Tombol Salin Rekening
        document.querySelectorAll('.btn-copy').forEach(btn => {
            btn.addEventListener('click', function() {
                const text = this.getAttribute('data-copy');
                navigator.clipboard.writeText(text);
                
                const originalText = this.innerText;
                this.innerText = 'Tersalin!';
                this.classList.replace('btn-light', 'btn-success');
                
                setTimeout(() => {
                    this.innerText = originalText;
                    this.classList.replace('btn-success', 'btn-light');
                }, 2000);
            });
        });

        // 2. Tombol "Donasi Sekarang" (Auto Select Program)
        document.querySelectorAll('.btn-donasi-trigger').forEach(btn => {
            btn.addEventListener('click', function() {
                const programId = this.getAttribute('data-id');
                document.getElementById('selectProgram').value = programId;
                document.getElementById('metode-bayar').scrollIntoView({ behavior: 'smooth' });
            });
        });

        // 3. Form Submission dengan SweetAlert2 (Simulasi Berfungsi Nyata)
        document.getElementById('formDonasi').addEventListener('submit', function(e) {
            e.preventDefault();
            
            Swal.fire({
                title: 'Konfirmasi Donasi?',
                text: "Pastikan Anda sudah melakukan transfer ke rekening yang tertera.",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#0099cc',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Sudah Transfer!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Terima Kasih!',
                        text: 'Laporan Anda telah kami terima. Kami akan memverifikasi dalam waktu maksimal 1x24 jam.',
                        icon: 'success',
                        timer: 3000,
                        showConfirmButton: false
                    });
                    this.reset();
                }
            });
        });
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\WebSosial\WebSosial\resources\views/tentang.blade.php ENDPATH**/ ?>