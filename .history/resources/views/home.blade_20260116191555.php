@extends('layouts.app')

@section('title', 'Home | Ashutosh Nandani')

@section('content')

<!-- HERO SECTION -->
<section id="hero" class="hero-section position-relative text-white">
    <div id="particles-js"></div>

    <div class="container position-relative z-1">
        <div class="row align-items-center min-vh-100">
            <div class="col-md-8" data-aos="fade-right">
                <h1 class="fw-bold">
                    Hi, I'm <span class="text-primary">Ashutosh Nandani</span>
                </h1>

                <h3 class="mt-3">
                    <span id="typed"></span>
                </h3>

                <p class="mt-4 lead">
                    Passionate PHP Laravel Developer with 2+ years of experience
                    building scalable and user-focused web applications.
                </p>

                <div class="mt-4">
                    <a href="{{ route('projects') }}" class="btn btn-primary me-3">
                        View Projects
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light">
                        Contact Me
                    </a>
                </div>

                <div class="social-icons mt-4">
                    <a href="https://github.com/Ashu-1997-Thakkar" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://linkedin.com/in/ashutosh-nandani-a527b9156" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="mailto:ashnandani123@gmail.com"><i class="fa fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
