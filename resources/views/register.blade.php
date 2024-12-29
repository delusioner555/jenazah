<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masoaghi Alamat Disini</title>
    <!-- Link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('../assets/images/loginkuburan.jpeg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4" style="width: 30rem;">
            <div class="card-body">
                <h3 class="text-center mb-4">Alogin Edinnak</h3>

                <!-- Alert Error -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Form Registrasi -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Input Nama -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Asmaepon</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                            class="form-control @error('name') is-invalid @enderror" placeholder="Masoaghi Asmaepon se lengkap"
                            required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Input Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Emailla</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                            class="form-control @error('email') is-invalid @enderror" placeholder="Masoaghi Emailla Se Bhender"
                            required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Input Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Passworddhe</label>
                        <input type="password" name="password" id="password"
                            class="form-control @error('password') is-invalid @enderror" placeholder="Masoaghi Pasword se Sakerana tak kenning Bobol"
                            required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Input Konfirmasi Password -->
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Konfirmasi Passworddhe</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="form-control" placeholder="Konfirmasi pasword se bhuru epasoaghi" required>
                    </div>

                    <!-- Tombol Registrasi -->
                    <button type="submit" class="btn btn-primary w-100">Adaftar Pah</button>
                </form>

                <!-- Link Kembali ke Login -->
                <p class="text-center mt-3">
                    Lakar Ampon Andi' akun? <a href="{{ route('login') }}">Alogin Ekakdintoh</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
