@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-5" data-aos="fade-up">Certificates</h2>
    <div class="row">
        <div class="col-md-4 mb-4" data-aos="zoom-in">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="fas fa-award fa-4x text-warning mb-3"></i>
                    <h5>PHP Laravel Certificate</h5>
                    <p class="text-muted small">Udemy</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <i class="fas fa-microchip fa-4x text-info mb-3"></i>
                    <h5>ITI Copa</h5>
                    <p class="text-muted small">V.J.N.J.M.J Private Institute</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
