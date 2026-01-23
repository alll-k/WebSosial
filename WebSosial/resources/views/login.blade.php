<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Web Sosial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .login-container { margin-top: 100px; max-width: 400px; }
        .card { border: none; border-radius: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        .btn-primary { border-radius: 10px; padding: 10px; background-color: #0d6efd; }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center">
    <div class="login-container w-100">
        <div class="card p-4">
            <div class="text-center mb-4">
                <h3 class="fw-bold">Selamat Datang</h3>
                <p class="text-muted">Silakan masuk ke akun Anda</p>
            </div>

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $errors->first() }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                           id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password"
                           placeholder="Masukkan password" required>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Masuk Sekarang</button>
                </div>
            </form>

            <div class="text-center mt-4">
                <p class="small text-muted">Belum punya akun? <a href="/daftar" class="text-decoration-none">Daftar Akun</a></p>
                <a href="/" class="small text-decoration-none">← Kembali ke Beranda</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
