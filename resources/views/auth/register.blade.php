<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register — MovieBook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Poppins', sans-serif; }
        body {
            background: #0f1117;
            color: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 20px;
        }
        .register-card {
            background: #1a1d29;
            border: 1px solid #232736;
            border-radius: 16px;
            padding: 40px 35px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
        }
        .register-card h2 {
            font-weight: 700;
            text-align: center;
            margin-bottom: 6px;
        }
        .register-card h2 span { color: #e50914; }
        .register-card .subtitle {
            text-align: center;
            color: #b0b8c7;
            font-size: 0.92rem;
            margin-bottom: 30px;
        }
        .form-label { font-size: 0.9rem; color: #d0d5e0; font-weight: 500; }
        .form-control {
            background: #0f1117;
            border: 1px solid #2c3144;
            color: #fff;
            padding: 11px 14px;
            border-radius: 8px;
            font-size: 0.95rem;
        }
        .form-control:focus {
            background: #0f1117;
            color: #fff;
            border-color: #e50914;
            box-shadow: 0 0 0 0.2rem rgba(229, 9, 20, 0.25);
        }
        .form-control::placeholder { color: #5a6070; }
        .btn-register {
            background: #e50914;
            border: none;
            color: #fff;
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1rem;
            transition: 0.3s;
            margin-top: 10px;
        }
        .btn-register:hover {
            background: #b80710;
            transform: translateY(-2px);
        }
        .login-link {
            text-align: center;
            margin-top: 22px;
            font-size: 0.9rem;
            color: #b0b8c7;
        }
        .login-link a {
            color: #e50914;
            text-decoration: none;
            font-weight: 600;
        }
        .login-link a:hover { text-decoration: underline; }
        .brand-icon {
            text-align: center;
            font-size: 2.2rem;
            color: #e50914;
            margin-bottom: 10px;
        }
        .error-text {
            color: #ff6b6b;
            font-size: 0.8rem;
            margin-top: 4px;
            display: none;
        }
    </style>
</head>
<body>

    <div class="register-card">
        <div class="brand-icon"><i class="bi bi-film"></i></div>
        <h2>Create <span>Account</span></h2>
        <p class="subtitle">Join MovieBook and start booking tickets</p>

        <form action="{{ route('userregister') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your full name" value="{{ old('name') }}" >
                @error("name")
                <p style="color: red">{{$message}}</p>

                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" name="email" placeholder="you@example.com" value="{{ old('email') }}">
                @error("email")
                <p style="color: red">{{$message}}</p>

                @enderror
            </div>



            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Minimum 6 characters" value="{{ old('password') }}">
                  @error("password")
                <p style="color: red">{{$message}}</p>

                @enderror
            </div>


            <button type="submit" class="btn-register">
                <i class="bi bi-person-plus me-2"></i> Register
            </button>
        </form>

        <div class="login-link">
            Already have an account? <a href="login.html">Login here</a>
        </div>
    </div>

    <script>
        const form = document.getElementById('registerForm');
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirmPassword');
        const matchError = document.getElementById('matchError');

        confirmPassword.addEventListener('input', () => {
            if (confirmPassword.value && password.value !== confirmPassword.value) {
                matchError.style.display = 'block';
            } else {
                matchError.style.display = 'none';
            }
        });

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            if (password.value !== confirmPassword.value) {
                matchError.style.display = 'block';
                return;
            }
            alert('Registration successful! (Demo only — Laravel se connect karo)');
            // Yahan Laravel route par redirect karo:
            // window.location.href = '/register';
        });
    </script>

</body>
</html>
</body>
</html>
