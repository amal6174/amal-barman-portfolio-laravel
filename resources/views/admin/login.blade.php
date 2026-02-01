<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card{
            width: 100%;
            max-width: 400px;
            border-radius: 12px;
        }
        .login-card .card-header{
            background: none;
            border-bottom: none;
            text-align: center;
        }
        .login-card h3{
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="card login-card shadow-lg">
    <div class="card-header">
        <h3>Admin Login</h3>
        <p class="text-muted mb-0">Sign in to your dashboard</p>
    </div>

    <div class="card-body">
        <form method="POST" action="/admin/login">
            @csrf

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="admin@example.com"
                    required
                >
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Enter password"
                    required
                >
            </div>

            <!-- Button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>
            </div>
        </form>
    </div>

    <div class="card-footer text-center text-muted">
        © {{ date('Y') }} Admin Panel
    </div>
</div>

</body>
</html>
