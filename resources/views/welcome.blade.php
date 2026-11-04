<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieBook — Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #0f1117;
            color: #fff;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        .welcome-box { text-align: center; padding: 20px; }
        .welcome-box h1 { font-size: 3.5rem; font-weight: 700; margin-bottom: 15px; }
        .welcome-box h1 span { color: #e50914; }
        .welcome-box p { color: #b0b8c7; font-size: 1.1rem; margin-bottom: 40px; }
        .btn-login, .btn-register {
            font-size: 1.05rem;
            padding: 12px 40px;
            border-radius: 10px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: 0.3s;
        }
        .btn-login {
            background: transparent;
            border: 2px solid #444;
            color: #fff;
            margin-right: 10px;
        }
        .btn-login:hover { border-color: #e50914; color: #fff; }
        .btn-register {
            background: #e50914;
            border: 2px solid #e50914;
            color: #fff;
        }
        .btn-register:hover { background: #b80710; border-color: #b80710; transform: translateY(-2px); }
        @media (max-width: 576px) {
            .welcome-box h1 { font-size: 2.3rem; }
            .btn-login, .btn-register { display: block; margin: 10px auto; width: 220px; }
        }
    </style>
</head>
<body>

    <div class="welcome-box">
        <h1><i class="bi bi-film" style="color:#e50914"></i> Movie<span>Book</span></h1>
        <p>Book your movie tickets online — easy, fast, and hassle-free.</p>

        <a href="{{ route('loginform') }}" class="btn-login">
            <i class="bi bi-box-arrow-in-right me-2"></i> Login
        </a>
        <a href="{{ route('registerform') }}" class="btn-register">
            <i class="bi bi-person-plus me-2"></i> Register
        </a>
    </div>

</body>
</html>
