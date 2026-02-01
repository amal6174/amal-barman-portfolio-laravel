



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | Amal Barman</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }
        .sidebar {
            min-height: 100vh;
            background: #1f2933;
        }
        .sidebar a {
            color: #cbd5e1;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
        }
        .sidebar a:hover {
            background: #2563eb;
            color: #fff;
        }
        .card-icon {
            font-size: 35px;
            opacity: 0.8;
        }
    </style>
</head>
<body>

<!-- TOP NAVBAR -->
<nav class="navbar navbar-dark bg-dark px-4">
    <span class="navbar-brand fw-bold">Admin Panel</span>

    <div class="dropdown">
        <a class="text-white dropdown-toggle text-decoration-none" data-bs-toggle="dropdown" href="#">
            {{ auth()->user()->name ?? 'Admin' }}
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="/">View Website</a></li>
            <li><a class="dropdown-item" href="/profile">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button class="dropdown-item">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR -->
        <div class="col-md-2 sidebar p-0">
            <h5 class="text-white text-center py-3">Amal Admin</h5>
            <a href="{{ route('admin.dashboard') }}"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
            <a href="{{ route('admin.projects') }}"><i class="bi bi-folder2-open me-2"></i> Projects</a>
            <a href="{{ route('admin.messages') }}"><i class="bi bi-lightning me-2"></i> Skills</a>
            <a href="{{ route('admin.skills') }}"><i class="bi bi-envelope me-2"></i> Messages</a>
        </div>

        <!-- MAIN CONTENT -->
        <div class="col-md-10 p-4">

            <h3 class="mb-4">Welcome back, {{ auth()->user()->name ?? 'Admin' }} </h3>

            <!-- STAT CARDS -->
            <div class="row g-4 mb-4">

                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body d-flex justify-content-between">
                            <div>
                                <h6>Total Projects</h6>
                                <h3>{{ $projectsCount }}</h3>
                            </div>
                            <div class="text-primary card-icon">
                                <i class="bi bi-folder"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body d-flex justify-content-between">
                            <div>
                                <h6>Skills</h6>
                                <h3>{{ $skillsCount }}</h3>
                            </div>
                            <div class="text-success card-icon">
                                <i class="bi bi-lightning"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body d-flex justify-content-between">
                            <div>
                                <h6>Messages</h6>
                                <h3>{{ $messagesCount}}</h3>
                            </div>
                            <div class="text-warning card-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body d-flex justify-content-between">
                            <div>
                                <h6>Status</h6>
                                <h3 class="text-success">Live</h3>
                            </div>
                            <div class="text-danger card-icon">
                                <i class="bi bi-globe"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- INFO BOX -->
            
      <!-- CHART SECTION -->
<div class="card shadow-sm mt-4">
    <div class="card-body">
        <h5 class="mb-3">Portfolio Overview</h5>
        <canvas id="adminChart" height="120"></canvas>
    </div>
</div>



        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('adminChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Projects', 'Skills', 'Messages'],
            datasets: [{
                label: 'Admin Data',
                data: [{{ $projectsCount }}, {{ $skillsCount }}, {{ $messagesCount }}], // baad me DB se aayega
                backgroundColor: [
                    '#0d6efd',
                    '#198754',
                    '#ffc107'
                ],
                borderRadius: 8
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

</body>
</html>
