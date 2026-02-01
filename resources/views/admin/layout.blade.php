<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark px-3">
    <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin Panel</a>
</nav>

<div class="container-fluid">
    <div class="row">

        <aside class="col-md-2 bg-dark min-vh-100 text-white p-3">
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link text-white" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ route('admin.projects') }}">Projects</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ route('admin.skills') }}">Skills</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ route('admin.messages') }}">Messages</a></li>
            </ul>
        </aside>

        <main class="col-md-10 p-4">
            @yield('content')
        </main>

    </div>
</div>

</body>
</html>
