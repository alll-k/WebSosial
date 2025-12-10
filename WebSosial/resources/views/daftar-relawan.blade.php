@extends('layout.style')

@section('konten')

<style>
    .bg-relawan {
        background: url('https://images.unsplash.com/photo-1580281657521-6165b1a27a16?auto=format&fit=crop&w=1400&q=60');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        filter: brightness(0.8);
    }

    .overlay {
        background: rgba(255, 255, 255, 0.75);
        backdrop-filter: blur(4px);
    }
</style>

<div class="bg-relawan d-flex justify-content-center align-items-center" style="min-height: 100vh; padding: 40px;">

    <div class="overlay p-5 rounded shadow-lg" style="max-width: 450px; width: 100%;">

        <h2 class="fw-bold text-center mb-3">Formulir Pendaftaran Relawan</h2>
        <p class="text-center text-muted mb-4">Isi data diri Anda untuk bergabung menjadi relawan.</p>

        <form action="/daftar-relawan/kirim" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan email aktif" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Nomor WhatsApp</label>
                <input type="text" name="wa" class="form-control" placeholder="Contoh: 081234567890" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Program Relawan</label>
                <select name="program" class="form-select" required>
                    <option value="">-- Pilih Program --</option>
                    <option value="Pelayanan Sosial">Pelayanan Sosial</option>
                    <option value="Bantuan Kemanusiaan">Bantuan Kemanusiaan</option>
                    <option value="Pemberdayaan Komunitas">Pemberdayaan Komunitas</option>
                    <option value="Relawan Pendidikan">Relawan Pendidikan</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Alasan Bergabung</label>
                <textarea name="alasan" class="form-control" rows="4" placeholder="Ceritakan motivasi Anda" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100 fw-bold">Kirim Pendaftaran</button>
        </form>

    </div>
</div>

{{-- MODAL POP-UP BERHASIL --}}
@if(session('success'))
<div class="modal fade show" id="successModal" tabindex="-1" style="display:block; background:rgba(0,0,0,0.5);" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Berhasil!</h5>
            </div>
            <div class="modal-body text-center">
                <p class="fw-semibold mb-3">{{ session('success') }}</p>
                <button class="btn btn-success w-100" onclick="closeModal()">OK</button>
            </div>
        </div>
    </div>
</div>

<script>
    function closeModal() {
        document.getElementById('successModal').style.display = 'none';
    }
</script>
@endif

@endsection
