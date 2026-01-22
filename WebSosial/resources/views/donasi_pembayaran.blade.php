@extends('layout.style')

@section('konten')
<style>
    .hero-gradient { 
        background: linear-gradient(135deg, #0288d1, #26c6da); 
        color: white; padding: 80px 0; border-radius: 0 0 50px 50px; text-align: center; 
    }
    .card-custom { 
        border: none; border-radius: 25px; box-shadow: 0 20px 40px rgba(0,0,0,0.1); 
        margin-top: -60px; background: white; padding: 40px; 
    }
    .method-box { 
        background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 16px; 
        padding: 20px; margin-bottom: 15px; text-align: left; 
    }

    /* Pengaturan Logo Agar Muncul dari File Lokal */
    .bank-logo-container {
        height: 35px; /* Tinggi disesuaikan agar rapi */
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }
    .bank-logo {
        height: 100%;
        width: auto;
        display: block !important;
        object-fit: contain;
    }

    .copy-link { 
        color: #0288d1; cursor: pointer; font-weight: 700; font-size: 11px; 
        text-transform: uppercase; padding: 5px 12px; background: #e1f5fe; border-radius: 8px; 
    }
    .badge-id { 
        background: #e1f5fe; color: #0288d1; padding: 5px 15px; border-radius: 50px; 
        font-weight: 600; display: inline-block; 
    }
    .btn-whatsapp {
        background: #25d366; color: white; border: none; padding: 18px; border-radius: 15px; 
        font-weight: 800; width: 100%; display: block; text-decoration: none; text-align: center;
        transition: 0.3s;
    }
    .btn-whatsapp:hover {
        background: #128c7e;
        transform: translateY(-2px);
    }
</style>

<div class="hero-gradient">
    <h1 class="fw-bold">Instruksi Pembayaran</h1>
    <p>Silakan transfer ke salah satu metode di bawah ini.</p>
</div>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-custom shadow-lg">
                <div class="text-center mb-4">
                    <p class="text-muted mb-2">Total Transfer:</p>
                    <h1 class="fw-bold text-primary mb-2">Rp {{ number_format($nominal, 0, ',', '.') }}</h1>
                    <span class="badge-id">ID Transaksi: {{ $kode }}</span>
                </div>

                <div class="text-start mb-4">
                    <label class="fw-bold text-dark mb-3">Tujuan Transfer Bank:</label>

                    {{-- Seabank --}}
                    <div class="method-box">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="bank-logo-container">
                                {{-- Memanggil file sebank.png --}}
                                <img src="{{ asset('assets/img/sebank.png') }}" class="bank-logo" alt="Logo Seabank">
                            </div>
                            <span class="copy-link" onclick="copy('901294713740')">Salin</span>
                        </div>
                        <div class="mt-2">
                            <h4 class="fw-bold mb-0">901294713740</h4>
                            <p class="text-muted mb-0">A/N: <strong>DIAN FADHILAH</strong></p>
                        </div>
                    </div>

                    {{-- BRI --}}
                    <div class="method-box">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="bank-logo-container">
                                {{-- Memanggil file bankbri.jpg --}}
                                <img src="{{ asset('assets/img/bankbri.jpg') }}" class="bank-logo" alt="Logo BRI">
                            </div>
                            <span class="copy-link" onclick="copy('593501046705539')">Salin</span>
                        </div>
                        <div class="mt-2">
                            <h4 class="fw-bold mb-0">593501046705539</h4>
                            <p class="text-muted mb-0">A/N: <strong>JENNY WULANDARI</strong></p>
                        </div>
                    </div>
                </div>

                @php
                    $noAdmin = "6289654059764"; 
                    $pesanWA = "Halo Admin Relawan+, saya ingin konfirmasi donasi:\n\n"
                             . "*ID:* " . $kode . "\n"
                             . "*Nominal:* Rp " . number_format($nominal, 0, ',', '.') . "\n\n"
                             . "Mohon divalidasi, terima kasih.";
                @endphp

                <a href="https://wa.me/{{ $noAdmin }}?text={{ urlencode($pesanWA) }}" target="_blank" class="btn-whatsapp">
                    <i class="fab fa-whatsapp me-2"></i> KONFIRMASI PEMBAYARAN
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    function copy(text) {
        navigator.clipboard.writeText(text).then(() => {
            alert('Nomor rekening ' + text + ' berhasil disalin!');
        });
    }
</script>
@endsection