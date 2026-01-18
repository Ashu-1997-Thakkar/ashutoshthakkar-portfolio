@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-5" data-aos="fade-up">Services</h2>
    <div class="row">
        <div class="col-md-4 mb-4" data-aos="flip-left">
            <div class="card h-100 p-4 text-center">
                <i class="fab fa-laravel fa-3x text-danger mb-3"></i>
                <h4>Laravel Development</h4>
                <p>Building high-performance, secure web applications using the Laravel framework.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="flip-left" data-aos-delay="100">
            <div class="card h-100 p-4 text-center">
                <i class="fab fa-wordpress fa-3x text-primary mb-3"></i>
                <h4>WordPress</h4>
                <p>Custom theme and plugin development for flexible content management.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="flip-left" data-aos-delay="200">
            <div class="card h-100 p-4 text-center">
                <i class="fas fa-database fa-3x text-info mb-3"></i>
                <h4>Database Design</h4>
                <p>Optimized MySQL database structure design and management.</p>
            </div>
        </div>
    </div>
</div>
@endsection
