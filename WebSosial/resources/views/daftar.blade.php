<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - Web Sosial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .register-container { margin-top: 50px; margin-bottom: 50px; max-width: 500px; }
        .card { border: none; border-radius: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        .btn-primary { border-radius: 10px; padding: 10px; background-color: #0d6efd; }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center">
    <div class="register-container w-100">
        <div class="card p-4">
            <div class="text-center mb-4">
                <h3 class="fw-bold">Buat Akun Baru</h3>
                <p class="text-muted">Daftar untuk menjadi relawan</p>
            </div>

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('register.post') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                           id="name" placeholder="Masukkan nama lengkap" value="{{ old('name') }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                           id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                           id="password" placeholder="Minimal 8 karakter" required>
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="form-control"
                           id="password_confirmation" placeholder="Ulangi password" required>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
                </div>
            </form>

            <div class="text-center mt-4">
                <p class="small text-muted">Sudah punya akun? <a href="{{ route('login') }}" class="text-decoration-none">Masuk di sini</a></p>
                <a href="/" class="small text-decoration-none">← Kembali ke Beranda</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
