@extends('layouts.app')

@section('title', 'Projects | Ashutosh Nandani')

@section('content')

<section class="projects-section py-5">
    <div class="container">

        <!-- Heading -->
        <div class="text-center mb-5" data-aos="fade-down">
            <h2 class="fw-bold">Projects</h2>
            <p class="text-muted">Some of my recent work</p>
        </div>

        <!-- Filters -->
        <div class="text-center mb-4" data-aos="fade-up">
            <button class="btn btn-outline-primary filter-btn active" data-filter="all">All</button>
            <button class="btn btn-outline-primary filter-btn" data-filter="laravel">Laravel</button>
            <button class="btn btn-outline-primary filter-btn" data-filter="php">PHP</button>
            <button class="btn btn-outline-primary filter-btn" data-filter="wordpress">WordPress</button>
        </div>

        <!-- Projects Grid -->
        <div class="row">

            <!-- Project 1 -->
            <div class="col-md-4 mb-4 project-item laravel" data-aos="zoom-in">
                <div class="project-card">
                    <img src="{{ asset('images/projects/ecommerce.jpg') }}" class="img-fluid" alt="E-commerce">
                    <div class="project-body">
                        <h5>E-commerce Website</h5>
                        <p>Laravel based online shopping platform.</p>
                        <span class="badge bg-primary">Laravel</span>
                        <span class="badge bg-dark">MySQL</span>
                        <div class="mt-3">
                            <a href="#" class="btn btn-sm btn-outline-primary">Live Demo</a>
                            <a href="#" class="btn btn-sm btn-outline-dark">GitHub</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="col-md-4 mb-4 project-item laravel" data-aos="zoom-in">
                <div class="project-card">
                    <img src="{{ asset('images/projects/facebook-clone.jpg') }}" class="img-fluid" alt="Facebook Clone">
                    <div class="project-body">
                        <h5>Facebook Clone</h5>
                        <p>Social media clone built with Laravel.</p>
                        <span class="badge bg-primary">Laravel</span>
                        <span class="badge bg-info">AJAX</span>
                        <div class="mt-3">
                            <a href="https://github.com/Ashu-1997-Thakkar/facebook-clone.git" target="_blank"
                               class="btn btn-sm btn-outline-dark">GitHub</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col-md-4 mb-4 project-item php" data-aos="zoom-in">
                <div class="project-card">
                    <img src="{{ asset('images/projects/vtiger.jpg') }}" class="img-fluid" alt="Vtiger CRM">
                    <div class="project-body">
                        <h5>Vtiger CRM Modules</h5>
                        <p>Custom CRM modules developed in PHP.</p>
                        <span class="badge bg-secondary">PHP</span>
                        <span class="badge bg-success">MySQL</span>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="col-md-4 mb-4 project-item wordpress" data-aos="zoom-in">
                <div class="project-card">
                    <img src="{{ asset('images/projects/wordpress.jpg') }}" class="img-fluid" alt="WordPress">
                    <div class="project-body">
                        <h5>WordPress Websites</h5>
                        <p>Multiple business & institutional WordPress websites.</p>
                        <span class="badge bg-primary">WordPress</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection
