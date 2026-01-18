@extends('layouts.app')

@section('title', 'Certificates | Ashutosh Nandani')

@section('content')

<section class="certificates-section py-5">
    <div class="container">

        <!-- Heading -->
        <div class="text-center mb-5" data-aos="fade-down">
            <h2 class="fw-bold">Certificates</h2>
            <p class="text-muted">My professional certifications</p>
        </div>

        <!-- Certificates Grid -->
        <div class="row">

            <!-- Certificate 1 -->
            <div class="col-md-4 mb-4" data-aos="zoom-in">
                <div class="certificate-card">
                    <img src="{{ asset('images/certificates/laravel-udemy.jpg') }}" alt="Laravel Certificate" class="img-fluid">
                    <div class="certificate-body">
                        <h5>PHP with Laravel</h5>
                        <p>Udemy</p>
                        <span class="date">2023</span>
                        <div class="mt-3">
                            <a href="https://www.udemy.com/certificate/UC-e69f09ba-4739-42ca-898a-7524ade51f22/"
                               target="_blank" class="btn btn-sm btn-outline-primary">
                                View Certificate
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Certificate 2 -->
            <div class="col-md-4 mb-4" data-aos="zoom-in">
                <div class="certificate-card">
                    <img src="{{ asset('images/certificates/iti-copa.jpg') }}" alt="ITI Copa" class="img-fluid">
                    <div class="certificate-body">
                        <h5>ITI Copa</h5>
                        <p>V.J.N.J.M.J Private Institute</p>
                        <span class="date">2018</span>
                        <div class="mt-3">
                            <a href="#" class="btn btn-sm btn-outline-secondary">
                                Certificate
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection
s