<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | Rental PlayStation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            width: 100%;
            max-width: 380px;
            box-shadow: 0 10px 30px rgba(0,0,0,.15);
        }
        .login-card h3 {
            font-weight: 600;
        }
        .form-control {
            border-radius: 8px;
        }
        .btn-login {
            border-radius: 8px;
            font-weight: 500;
        }
        .brand {
            font-size: 22px;
            font-weight: 600;
            color: #0d6efd;
        }
    </style>
</head>
<body>

<div class="login-card">
    <div class="text-center mb-4">
        <div class="brand">🎮 Rental PlayStation</div>
        <small class="text-muted">Silakan login untuk melanjutkan</small>
    </div>

    <form method="post" action="proses_login.php">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
        </div>

        <button type="submit" class="btn btn-primary w-100 btn-login">
            Login
        </button>
    </form>

    <div class="text-center mt-3">
        <small class="text-muted">© <?= date('Y'); ?> Rental PlayStation</small>
    </div>
</div>

</body>
</html>
