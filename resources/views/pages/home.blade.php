{{-- @extends('layouts.app') --}}

{{-- @section('content')

<section class="hero text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Hi, I'm Amal Barman</h1>
        <p class="lead mt-3">Laravel & PHP Developer</p>

        <a href="/projects" class="btn btn-light btn-lg mt-3">View Projects</a>
        <a href="/resume.pdf" class="btn btn-outline-light btn-lg mt-3">Download Resume</a>
    </div>
</section>

@endsection --}}


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Amal Barman — Developer</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- LEFT FIXED PANEL -->
<div class="side-panel">
    <h2>AMAL</h2>
    <span>Laravel Developer</span>

    <ul>
        <li><a href="#home">HOME</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#skills">SKILLS</a></li>
        <li><a href="#projects">PROJECTS</a></li>
        <li><a href="#contact">CONTACT</a></li>
    </ul>
</div>

<!-- MAIN CONTENT -->
<div class="main">

<section id="home" class="screen">
    <div class="content">
        <!-- <h1>BUILDING<br>MODERN<br>WEB</h1> -->
    <h1 class="mask-text">
  <span>BUILDING</span>
  <span>MODERN</span>
  <span>WEB</span>
</h1>

        <p>Laravel • PHP • MySQL</p>
    </div>

    <img src="uploads/WhatsApp Image 2025-12-01 at 20.47.45.jpeg" class="hero-img">
</section>

<section id="about" class="screen dark">
    <h2>ABOUT ME</h2>
    <p>
        I’m Amal, a Laravel developer who builds
        clean, scalable & real-world web applications.
    </p>
</section>

<!-- <section id="skills" class="screen">
    <h2>SKILLS</h2>
    <div class="skills">
        <span>Laravel</span>
        <span>PHP</span>
        <span>MySQL</span>
        <span>Bootstrap</span>
    </div>
</section> -->

<section id="skills" class="screen skills-section">
    <h2 class="section-title">SKILLS</h2>

    <div class="skills-grid">
        <div class="skill-card">Laravel</div>
        <div class="skill-card">PHP</div>
        <div class="skill-card">MySQL</div>
        <div class="skill-card">Bootstrap</div>
    </div>
</section>

<section id="projects" class="screen dark">
    <h2>PROJECTS</h2>
    <div class="project">
        <h4>Online Shopping System</h4>
        <p>Laravel + Admin Panel + MySQL</p>
    </div>
</section>

<!-- <section id="contact" class="screen">
    <h2>CONTACT</h2>
    <p>Email: amalbarman@gmail.com</p>
    <p>India</p>
</section> -->



<section id="contact" class="screen contact-section">
    <h2 class="section-title">CONTACT</h2>

    <div class="contact-cards">
        <a href="/contact" class="contact-card">
            <span class="icon">✉️</span>
            <div>
                
                <h4>Email</h4>
                <p>barmanamal140@gmail.com</p>
            </div>
        </a>

        <div class="contact-card">
            <span class="icon">📍</span>
            <div>
                <h4>Location</h4>
                <p>India</p>
            </div>
        </div>
    </div>
</section>

</div>

<script src="{{ asset("js/script.js") }}"></script>
</body>
</html>
