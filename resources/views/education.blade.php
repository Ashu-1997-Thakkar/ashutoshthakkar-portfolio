@extends('layouts.app')

@section('title', 'Academic | Ashutosh Nandani')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5" data-aos="fade-up">
        <h6 class="text-primary fw-bold text-uppercase ls-wide mb-2">Qualifications</h6>
        <h2 class="display-6 fw-bold">Educational <span class="text-primary">Background</span></h2>
    </div>

    <div class="row g-4 justify-content-center">
        <div class="col-lg-5" data-aos="fade-right">
            <div class="edu-card p-5 rounded-4 bg-glass shadow-lg border-bottom border-primary border-4 h-100">
                <div class="d-flex align-items-center mb-4">
                    <div class="icon-box bg-primary p-3 rounded-4 me-3 text-white">
                        <i class="fas fa-university fa-2x"></i>
                    </div>
                    <div>
                        <h3 class="fw-bold mb-0">BCA</h3>
                        <p class="text-primary mb-0">Bachelor of Computer Applications</p>
                    </div>
                </div>
                <h5 class="fw-medium mb-3">Shri D N Institute of Computer Applications</h5>
                <div class="d-flex justify-content-between text-secondary mb-4">
                    <span><i class="far fa-calendar-alt me-2"></i> 2020 - 2023</span>
                    <span class="badge bg-primary-subtle text-primary px-3 rounded-pill">7.0 CGPA</span>
                </div>
                <p class="text-secondary">Focused on software engineering, database management systems, and web technologies during the undergraduate program.</p>
            </div>
        </div>

        <div class="col-lg-5" data-aos="fade-left">
            <div class="edu-card p-5 rounded-4 bg-glass shadow-lg border-bottom border-info border-4 h-100">
                <div class="d-flex align-items-center mb-4">
                    <div class="icon-box bg-info p-3 rounded-4 me-3 text-white">
                        <i class="fas fa-tools fa-2x"></i>
                    </div>
                    <div>
                        <h3 class="fw-bold mb-0">ITI Copa</h3>
                        <p class="text-info mb-0">Computer Operator & Programming Asst.</p>
                    </div>
                </div>
                <h5 class="fw-medium mb-3">V.J.N.J.M.J Private Institute</h5>
                <div class="d-flex justify-content-between text-secondary mb-4">
                    <span><i class="far fa-calendar-alt me-2"></i> 2017 - 2018</span>
                    <span class="badge bg-info-subtle text-info px-3 rounded-pill">62% Aggregate</span>
                </div>
                <p class="text-secondary">Foundational course in computer operations, software basics, and logic building essential for programming.</p>
            </div>
        </div>
    </div>
</div>
@endsection
