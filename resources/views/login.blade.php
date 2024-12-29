<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
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
        <div class="card shadow p-4" style="width: 25rem;">
            <div class="card-body">
                <h3 class="text-center mb-4">Login</h3>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>

                @endif
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Emailla</label>
                        <input type="email" value="{{ old('email') }}" name="email" class="form-control"
                            id="email" placeholder="Masoaghi emailla sampean se bhender">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Passworddhe</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Masoaghi pasworddhe se bhender">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Masok</button>
                </form>
                <p class="text-center mt-3">
                    tak ngaghungin akun? <a href="{{route('register')}}">Aghebey E ka'dinto</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
