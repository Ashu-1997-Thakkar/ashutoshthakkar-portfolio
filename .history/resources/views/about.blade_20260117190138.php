@extends('layouts.app')

@section('content')
<div class="container py-5 mt-5">
    <div class="row align-items-center g-5">
        <div class="col-lg-5" data-aos="fade-right">
            <div class="glass-card p-3 rounded-5 overflow-hidden">
                <div class="bg-dark rounded-4 d-flex align-items-center justify-content-center" style="height: 450px;">
                    
                    <!-- PROFILE IMAGE -->
                    <img src="{{ asset('images/profile.jpg') }}"
                         alt="Profile"
                         style="width:100%; height:100%; object-fit:cover;">

                </div>
                <div class="experience-badge bg-primary text-white p-3 rounded-4 shadow-lg position-absolute bottom-0 end-0 translate-middle-x mb-n3 me-n3"> <span class="h2 fw-bold d-block mb-0">2+</span> <span class="small">Years Exp.</span> </div>
            </div>
        </div>
        <div class="col-lg-7" data-aos="fade-left">
            <h6 class="text-primary fw-bold text-uppercase mb-3">About Me</h6>
            <h2 class="display-5 fw-bold mb-4">Building Digital <span class="text-gradient">Experiences</span></h2>
            <p class="lead text-secondary mb-4">
                I'm Ashutosh Hareshkumar Nandani, a dedicated PHP Laravel Developer based in Anand, Gujarat. With a strong foundation in computer applications and over 2 years of professional experience, I focus on creating high-performance web applications.
            </p>
            
            <div class="row g-4 mb-5">
                <div class="col-sm-6">
                    <div class="d-flex gap-3">
                        <i class="fas fa-check-circle text-primary fs-4 mt-1"></i>
                        <div>
                            <h5 class="mb-1">2+ Years Exp.</h5>
                            <p class="text-secondary small">Proven track record in the industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex gap-3">
                        <i class="fas fa-check-circle text-primary fs-4 mt-1"></i>
                        <div>
                            <h5 class="mb-1">50+ Projects</h5>
                            <p class="text-secondary small">Delivered diverse web solutions.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-wrap gap-4 align-items-center">

                <!-- DOWNLOAD RESUME -->
                <a href="{{ asset('resume/YourResume.pdf') }}" class="btn btn-modern" download>
                    Download CV
                </a>

                <div class="d-flex gap-3">
                    <a href="https://linkedin.com/in/ashutosh-nandani-a527b9156" class="text-secondary fs-4"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/Ashu-1997-Thakkar" class="text-secondary fs-4"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
