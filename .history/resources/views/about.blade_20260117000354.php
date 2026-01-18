@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row g-5 align-items-center">
        <div class="col-lg-5" data-aos="fade-right">
            <div class="position-relative">
                <div class="profile-card bg-glass p-3 rounded-5 shadow-2xl">
                    <div class="profile-img-container rounded-5 overflow-hidden shadow-inner" style="height: 500px; background: linear-gradient(45deg, #334155, #1e293b); display: flex; align-items: center; justify-content: center;">
    <img src="{{ asset('images/profile.jpg') }}" 
         alt="Profile" 
         style="width:100%; height:100%; object-fit:cover;">
</div>

                    <div class="experience-badge bg-primary text-white p-3 rounded-4 shadow-lg position-absolute bottom-0 end-0 translate-middle-x mb-n3 me-n3">
                        <span class="h2 fw-bold d-block mb-0">2+</span>
                        <span class="small">Years Exp.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7" data-aos="fade-left">
            <h6 class="text-primary fw-bold text-uppercase ls-wide mb-3">Professional Bio</h6>
            <h2 class="display-5 fw-bold mb-4">Crafting High-Performance <br><span class="text-primary">Laravel Solutions</span></h2>
            <p class="lead text-secondary mb-4">I'm a dedicated PHP Laravel Developer from Anand, Gujarat, specializing in building secure, scalable, and user-centric web applications.</p>
            
            <div class="row g-4 mb-5">
                <div class="col-6">
                    <div class="d-flex align-items-center">
                        <div class="icon-box bg-primary-subtle text-primary p-3 rounded-3 me-3">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <small class="text-muted d-block">Email</small>
                            <span class="fw-medium">ashnandani123@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex align-items-center">
                        <div class="icon-box bg-success-subtle text-success p-3 rounded-3 me-3">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <small class="text-muted d-block">Phone</small>
                            <span class="fw-medium">7490026191</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex gap-3">
               <a href="{{ asset('resume/Ashutosh_Nandani_Resume.pdf') }}" 
   class="btn btn-primary rounded-pill px-4 py-3" 
   download>
   Download Resume <i class="fas fa-download ms-2"></i>
</a>

                <div class="social-group d-flex gap-2">
                    <a href="https://linkedin.com/in/ashutosh-nandani-a527b9156" class="btn btn-outline-secondary rounded-circle p-3"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://github.com/Ashu-1997-Thakkar" class="btn btn-outline-secondary rounded-circle p-3"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-glass { background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); }
    .ls-wide { letter-spacing: 0.2em; }
    .shadow-2xl { box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5); }
</style>
@endsection
