@extends('layout.style')

@section('konten')
<style>
    /* Hero Gradient */
    .hero-gradient { 
        background: linear-gradient(135deg, #0288d1, #26c6da); 
        color: white; 
        padding: 80px 0; 
        border-radius: 0 0 50px 50px; 
        text-align: center; 
    }

    /* Card Custom */
    .card-custom { 
        border: none; 
        border-radius: 25px; 
        box-shadow: 0 20px 40px rgba(0,0,0,0.1); 
        margin-top: -60px; 
        background: white; 
        padding: 40px; 
    }

    /* Styling Pilihan Nominal */
    .nominal-btn { 
        border: 2px solid #e2e8f0; 
        border-radius: 12px; 
        padding: 12px; 
        cursor: pointer; 
        font-weight: bold; 
        transition: 0.3s; 
        text-align: center; 
    }
    .nominal-btn:hover, .nominal-btn.active { 
        border-color: #0288d1; 
        background: #f0f9ff; 
        color: #0288d1; 
    }

    /* Tombol Utama */
    .btn-action { 
        background: linear-gradient(90deg, #0288d1, #26c6da); 
        color: white; 
        border: none; 
        padding: 18px; 
        border-radius: 15px; 
        font-weight: 800; 
        width: 100%; 
        transition: 0.3s; 
    }
    .btn-action:hover { 
        transform: translateY(-3px); 
        box-shadow: 0 10px 20px rgba(2, 136, 209, 0.4); 
    }

    /* Box Instruksi Bank */
    .method-box { 
        background: #f8fafc; 
        border: 1px solid #e2e8f0; 
        border-radius: 16px; 
        padding: 20px; 
        margin-bottom: 15px; 
        text-align: left; 
    }
    .copy-link { 
        color: #0288d1; 
        cursor: pointer; 
        font-weight: 700; 
        font-size: 13px; 
        text-transform: uppercase; 
    }
    .badge-id { 
        background: #e1f5fe; 
        color: #0288d1; 
        padding: 5px 15px; 
        border-radius: 50px; 
        font-weight: 600; 
        display: inline-block; 
    }
</style>

<div class="hero-gradient">
    <h1 class="fw-bold">{{ isset($nominal) ? 'Selesaikan Donasi Anda' : 'Lengkapi Data Donasi' }}</h1>
    <p>{{ isset($nominal) ? 'Terima kasih atas niat baik Anda untuk membantu sesama.' : 'Berapapun bantuanmu sangat berarti bagi mereka yang membutuhkan.' }}</p>
</div>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            {{-- TAMPILAN 1: INSTRUKSI TRANSFER --}}
            @if(isset($nominal))
            <div class="card card-custom text-center animate__animated animate__fadeIn">
                <div class="mb-4">
                    <p class="text-muted mb-2">Total yang harus ditransfer:</p>
                    <h1 class="fw-bold text-primary mb-2">Rp {{ number_format($nominal, 0, ',', '.') }}</h1>
                    <span class="badge-id">ID Transaksi: {{ $order_id }}</span>
                </div>

                <div class="text-start mb-4">
                    <label class="fw-bold text-dark mb-3">Tujuan Transfer Bank:</label>

                    {{-- Seabank --}}
                    <div class="method-box">
                        <div class="d-flex justify-content-between align-items-center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/SeaBank_logo.svg/1200px-SeaBank_logo.svg.png" height="22">
                            <span class="copy-link" onclick="copy('901294713740')">Salin</span>
                        </div>
                        <div class="mt-3">
                            <h4 class="fw-bold mb-0">901294713740</h4>
                            <small class="text-muted">Atas Nama: <strong>DIAN FADHILAH</strong></small>
                        </div>
                    </div>

                    {{-- BRI --}}
                    <div class="method-box">
                        <div class="d-flex justify-content-between align-items-center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/BRI_Logo.svg/1200px-BRI_Logo.svg.png" height="22">
                            <span class="copy-link" onclick="copy('593501046705539')">Salin</span>
                        </div>
                        <div class="mt-3">
                            <h4 class="fw-bold mb-0">593501046705539</h4>
                            <small class="text-muted">Atas Nama: <strong>JENNY WULANDARI</strong></small>
                        </div>
                    </div>
                </div>

                {{-- WhatsApp Konfirmasi --}}
                @php
                    $pesanWA = "Halo Admin, saya ingin konfirmasi donasi.\n\n"
                             . "*Nama:* " . $nama . "\n"
                             . "*Nominal:* Rp " . number_format($nominal, 0, ',', '.') . "\n"
                             . "*ID Transaksi:* " . $order_id . "\n\n"
                             . "Saya akan melampirkan bukti transfer setelah ini.";
                @endphp
                
                <a href="https://wa.me/628XXXXXXXXXX?text={{ urlencode($pesanWA) }}" target="_blank" class="btn btn-success w-100 py-3 fw-bold" style="border-radius: 15px;">
                    <i class="fab fa-whatsapp me-2"></i> KIRIM BUKTI TRANSFER
                </a>
                <a href="{{ url()->current() }}" class="btn btn-link mt-2 text-muted small text-decoration-none">Kembali ke Form</a>
            </div>

            {{-- TAMPILAN 2: FORM INPUT --}}
            @else
            <div class="card card-custom">
                <form action="{{ route('donasi.submit') }}" method="POST">
                    @csrf
                    <label class="fw-bold mb-3">Pilih Nominal Donasi</label>
                    <div class="row g-2 mb-4">
                        <div class="col-4"><div class="nominal-btn" onclick="setVal(50000)">50rb</div></div>
                        <div class="col-4"><div class="nominal-btn" onclick="setVal(100000)">100rb</div></div>
                        <div class="col-4"><div class="nominal-btn" onclick="setVal(500000)">500rb</div></div>
                    </div>

                    <div class="mb-4">
                        <label class="fw-bold mb-2">Nominal Lainnya (Rp)</label>
                        <input type="number" name="jumlah_donasi" id="amount" class="form-control" placeholder="Minimal 10.000" required>
                    </div>

                    <div class="mb-3">
                        <label class="fw-bold mb-2">Nama Lengkap</label>
                        <input type="text" name="nama_donatur" class="form-control" placeholder="Masukkan nama Anda" required>
                        <div class="mt-2 small text-muted">
                            <input type="checkbox" name="anonim" id="anonim"> Sembunyikan nama (Hamba Allah)
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-6">
                            <label class="fw-bold mb-2">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="email@contoh.com" required>
                        </div>
                        <div class="col-6">
                            <label class="fw-bold mb-2">WhatsApp</label>
                            <input type="text" name="no_hp" class="form-control" placeholder="08xxxxxxxxxx" required>
                        </div>
                    </div>

                    <button type="submit" class="btn-action">
                        <i class="fas fa-shield-alt me-2"></i> LANJUT PEMBAYARAN
                    </button>

                    <div class="text-center mt-3">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Logo_QRIS.svg/1200px-Logo_QRIS.svg.png" height="20">
                        <p class="small text-muted mt-2">Instruksi pembayaran akan muncul setelah klik tombol</p>
                    </div>
                </form>
            </div>
            @endif

        </div>
    </div>
</div>

<script>
    function setVal(v) { 
        document.getElementById('amount').value = v; 
    }
    function copy(text) {
        navigator.clipboard.writeText(text);
        alert('Nomor rekening berhasil disalin!');
    }
</script>
@endsection