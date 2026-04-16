@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="home" class="hero text-center mt-5">
    <div class="container">
        <h1 class="display-4">Hi, I'm Nauman 👋</h1>
        <p class="lead">Laravel Developer | WordPress Expert | Full Stack Learner</p>
        <a href="#projects" class="btn btn-light btn-lg mt-3">View My Work</a>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-5">
    <div class="container text-center">
        <h2 class="section-title">About Me</h2>
        <p class="text-muted">
            I am a passionate web developer skilled in Laravel, PHP, and modern web technologies.
            I love building scalable and efficient web applications.
        </p>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center section-title">Projects</h2>

        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">E-Commerce Website</h5>
                        <p class="card-text">Laravel-based shopping platform with cart & payment integration.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Food Delivery App</h5>
                        <p class="card-text">WordPress + Elementor based Foodpanda clone project.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">AI Recruitment System</h5>
                        <p class="card-text">AI-powered job matching platform using Python + FastAPI.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5">
    <div class="container text-center">
        <h2 class="section-title">Contact Me</h2>

        <form class="row g-3 justify-content-center">
            <div class="col-md-5">
                <input type="text" class="form-control" placeholder="Your Name">
            </div>

            <div class="col-md-5">
                <input type="email" class="form-control" placeholder="Your Email">
            </div>

            <div class="col-md-10">
                <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
            </div>

            <div class="col-md-10">
                <button class="btn btn-primary w-100">Send Message</button>
            </div>
        </form>
    </div>
</section>
@endsection