@extends('layouts.app')

@section('title', 'About Me | Ashutosh Nandani')

@section('content')

<section class="about-section py-5">
    <div class="container">

        <!-- Heading -->
        <div class="text-center mb-5" data-aos="fade-down">
            <h2 class="fw-bold">About Me</h2>
            <p class="text-muted">Get to know me better</p>
        </div>

        <div class="row align-items-center">

            <!-- Profile Image -->
            <div class="col-md-4 text-center mb-4" data-aos="fade-right">
                <img src="{{ asset('images/profile.jpg') }}" class="img-fluid rounded-circle shadow about-img" alt="Ashutosh Nandani">
            </div>

            <!-- About Content -->
            <div class="col-md-8" data-aos="fade-left">
                <h4 class="fw-semibold">PHP Laravel Developer</h4>

                <p class="mt-3">
                    I am a passionate and dedicated PHP Laravel Developer with over
                    <strong>2+ years of experience</strong> in building scalable and
                    user-focused web applications. I specialize in Laravel-based
                    solutions, REST APIs, and full-stack development.
                </p>

                <p>
                    Currently, I work as a <strong>WordPress Developer</strong> at
                    Information Technology Centre (ITC), Anand, and also provide
                    freelance Laravel development services.
                </p>

                <!-- Personal Info -->
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <ul class="list-unstyled">
                            <li><strong>Name:</strong> Ashutosh Nandani</li>
                            <li><strong>Email:</strong> ashnandani123@gmail.com</li>
                            <li><strong>Phone:</strong> 7490026191</li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-unstyled">
                            <li><strong>Experience:</strong> 2+ Years</li>
                            <li><strong>Location:</strong> Anand, Gujarat</li>
                            <li><strong>Role:</strong> Laravel Developer</li>
                        </ul>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="mt-4">
                    <a href="{{ asset('resume/Ashutosh_Nandani_Resume.pdf') }}" class="btn btn-primary me-3" download>
                        Download Resume
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-secondary">
                        Hire Me
                    </a>
                </div>

            </div>
        </div>

        <!-- Counters -->
        <div class="row text-center mt-5">

            <div class="col-md-3 col-6" data-aos="zoom-in">
                <h2 class="counter" data-count="2">0</h2>
                <p>Years Experience</p>
            </div>

            <div class="col-md-3 col-6" data-aos="zoom-in">
                <h2 class="counter" data-count="10">0</h2>
                <p>Projects Completed</p>
            </div>

            <div class="col-md-3 col-6" data-aos="zoom-in">
                <h2 class="counter" data-count="5">0</h2>
                <p>Technologies</p>
            </div>

            <div class="col-md-3 col-6" data-aos="zoom-in">
                <h2 class="counter" data-count="3">0</h2>
                <p>Companies</p>
            </div>

        </div>

        <!-- Hobbies -->
        <div class="mt-5" data-aos="fade-up">
            <h4 class="fw-bold">Hobbies & Interests</h4>
            <p>
                Reading, Playing Cricket, Travelling, Watching Movies,
                Singing, Listening to Music
            </p>
        </div>

    </div>
</section>

@endsection
