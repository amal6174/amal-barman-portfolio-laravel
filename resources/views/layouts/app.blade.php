<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Amal Barman | Portfolio</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { scroll-behavior: smooth; }
        .hero { background: #0d6efd; color: white; padding: 80px 0; }
    </style>
</head>
<body>

@include('components.navbar')

@yield('content')

{{-- <footer class="bg-dark text-white text-center py-3 mt-5">
    © {{ date('Y') }} Amal Barman | Laravel Developer
</footer> --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
