@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <!-- Image Section -->
            <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1200">
                <div class="position-relative">
                    <!-- Main Image Card -->
                    <div class="glass-card-modern p-3" style="border-radius: 30px;">
                        <div style="position: relative; overflow: hidden; border-radius: 25px; height: 500px;">
                            <img src="{{ asset('images/profile.jpg') }}" 
                                 alt="Ashutosh Nandani" 
                                 style="width: 100%; height: 100%; object-fit: cover;">
                            
                            <!-- Overlay Gradient -->
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; height: 50%; background: linear-gradient(to top, rgba(10, 14, 39, 0.9), transparent);"></div>
                        </div>
                    </div>

                    <!-- Experience Badge -->
                    <div style="position: absolute; bottom: -20px; right: -20px; background: linear-gradient(135deg, #4F46E5, #7C3AED); padding: 25px; border-radius: 20px; box-shadow: 0 10px 40px rgba(79, 70, 229, 0.5); min-width: 150px; text-align: center;">
                        <h2 class="fw-bold mb-0" style="font-size: 3rem;">2+</h2>
                        <p class="mb-0" style="font-size: 0.9rem; opacity: 0.9;">Years Experience</p>
                    </div>

                    <!-- Decorative Elements -->
                    <div style="position: absolute; top: -15px; left: -15px; width: 100px; height: 100px; background: linear-gradient(135deg, #06B6D4, #7C3AED); opacity: 0.3; border-radius: 20px; filter: blur(40px);"></div>
                    <div style="position: absolute; bottom: 100px; left: -20px; width: 80px; height: 80px; background: linear-gradient(135deg, #4F46E5, #EC4899); opacity: 0.3; border-radius: 15px; filter: blur(30px);"></div>
                </div>
            </div>

            <!-- Content Section -->
            <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1200">
                <div class="mb-4">
                    <span class="badge" style="background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.1)); color: #A78BFA; padding: 8px 20px; border-radius: 50px; border: 1px solid rgba(79, 70, 229, 0.3); font-weight: 600; font-size: 0.85rem; letter-spacing: 1px;">ABOUT ME</span>
                </div>

                <h1 class="display-4 fw-bold mb-4">
                    Crafting Digital <br>
                    <span class="gradient-text">Experiences</span> That Matter
                </h1>

                <p class="lead mb-4" style="color: #9CA3AF; line-height: 1.8;">
                    I'm <strong style="color: #A78BFA;">Ashutosh Hareshkumar Nandani</strong>, a passionate PHP Laravel Developer from Anand, Gujarat. With a solid foundation in computer applications and over <strong style="color: #06B6D4;">2 years of hands-on experience</strong>, I specialize in transforming complex business requirements into elegant, scalable web solutions.
                </p>

                <p style="color: #9CA3AF; line-height: 1.8; margin-bottom: 2rem;">
                    My journey in web development is driven by a commitment to clean code, innovative problem-solving, and creating applications that not only meet but exceed client expectations. From enterprise CRM systems to dynamic e-commerce platforms, I bring technical expertise and creative vision to every project.
                </p>

                <!-- Achievement Cards -->
                <div class="row g-3 mb-4">
                    <div class="col-sm-6">
                        <div class="glass-card-modern p-4" style="border-left: 3px solid #4F46E5;">
                            <div class="d-flex align-items-start gap-3">
                                <div style="width: 50px; height: 50px; background: linear-gradient(135deg, rgba(79, 70, 229, 0.2), rgba(124, 58, 237, 0.2)); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-check-circle" style="color: #4F46E5; font-size: 1.5rem;"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">2+ Years</h5>
                                    <p class="text-secondary small mb-0">Professional Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="glass-card-modern p-4" style="border-left: 3px solid #7C3AED;">
                            <div class="d-flex align-items-start gap-3">
                                <div style="width: 50px; height: 50px; background: linear-gradient(135deg, rgba(124, 58, 237, 0.2), rgba(236, 72, 153, 0.2)); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-project-diagram" style="color: #7C3AED; font-size: 1.5rem;"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">50+ Projects</h5>
                                    <p class="text-secondary small mb-0">Successfully Delivered</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="{{ asset('resume/YourResume.pdf') }}" class="btn-primary-modern" download>
                        <i class="fas fa-download me-2"></i>Download CV
                    </a>
                    <a href="{{ route('contact') }}" class="btn-outline-modern">
                        <i class="fas fa-envelope me-2"></i>Get in Touch
                    </a>
                </div>

                <!-- Social Links -->
                <div class="d-flex gap-3">
                    <a href="https://linkedin.com/in/ashutosh-nandani-a527b9156" target="_blank" style="width: 45px; height: 45px; background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.1)); border: 1px solid rgba(79, 70, 229, 0.3); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #4F46E5; text-decoration: none; transition: all 0.3s;">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/Ashu-1997-Thakkar" target="_blank" style="width: 45px; height: 45px; background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.1)); border: 1px solid rgba(79, 70, 229, 0.3); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #4F46E5; text-decoration: none; transition: all 0.3s;">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="mailto:ashnandani123@gmail.com" style="width: 45px; height: 45px; background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.1)); border: 1px solid rgba(79, 70, 229, 0.3); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #4F46E5; text-decoration: none; transition: all 0.3s;">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Education Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge mb-3" style="background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.1)); color: #A78BFA; padding: 8px 20px; border-radius: 50px; border: 1px solid rgba(79, 70, 229, 0.3); font-weight: 600; font-size: 0.85rem; letter-spacing: 1px;">EDUCATION</span>
            <h2 class="display-6 fw-bold">Academic <span class="gradient-text">Journey</span></h2>
        </div>

        <div class="row g-4">
            <!-- BCA -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="glass-card-modern h-100" style="border-left: 4px solid #4F46E5;">
                    <div class="d-flex align-items-start gap-4 mb-4">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #4F46E5, #7C3AED); border-radius: 15px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; box-shadow: 0 10px 30px rgba(79, 70, 229, 0.3);">
                            <i class="fas fa-graduation-cap" style="font-size: 2rem; color: white;"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h4 class="mb-2">Bachelor of Computer Applications</h4>
                            <h6 class="mb-3" style="color: #A78BFA;">Shri D N Institute of Computer Applications</h6>
                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                <span style="padding: 6px 15px; background: rgba(79, 70, 229, 0.1); border-radius: 20px; font-size: 0.85rem; color: #9CA3AF;">
                                    <i class="far fa-calendar me-1"></i> 2020 - 2023
                                </span>
                                <span style="padding: 6px 15px; background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(6, 182, 212, 0.1)); border-radius: 20px; font-size: 0.85rem; color: #10B981; font-weight: 600;">
                                    <i class="fas fa-star me-1"></i> 7.0 CGPA
                                </span>
                            </div>
                        </div>
                    </div>
                    <p style="color: #9CA3AF; margin-bottom: 0; line-height: 1.7;">
                        Comprehensive study in software engineering, database management systems, web technologies, and modern programming paradigms. Built strong foundation in computer science fundamentals.
                    </p>
                </div>
            </div>

            <!-- ITI -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="glass-card-modern h-100" style="border-left: 4px solid #06B6D4;">
                    <div class="d-flex align-items-start gap-4 mb-4">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #06B6D4, #7C3AED); border-radius: 15px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; box-shadow: 0 10px 30px rgba(6, 182, 212, 0.3);">
                            <i class="fas fa-tools" style="font-size: 2rem; color: white;"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h4 class="mb-2">ITI Copa</h4>
                            <h6 class="mb-3" style="color: #A78BFA;">V.J.N.J.M.J Private Institute</h6>
                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                <span style="padding: 6px 15px; background: rgba(79, 70, 229, 0.1); border-radius: 20px; font-size: 0.85rem; color: #9CA3AF;">
                                    <i class="far fa-calendar me-1"></i> 2017 - 2018
                                </span>
                                <span style="padding: 6px 15px; background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(6, 182, 212, 0.1)); border-radius: 20px; font-size: 0.85rem; color: #10B981; font-weight: 600;">
                                    <i class="fas fa-star me-1"></i> 62% Aggregate
                                </span>
                            </div>
                        </div>
                    </div>
                    <p style="color: #9CA3AF; margin-bottom: 0; line-height: 1.7;">
                        Computer Operator & Programming Assistant certification. Gained practical skills in computer operations, software fundamentals, and logic building essential for programming careers.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fun Facts Section -->
<section class="py-5">
    <div class="container">
        <div class="glass-card-modern" style="background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.05));">
            <div class="row g-4 text-center">
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-3">
                        <div class="gradient-text mb-2" style="font-size: 3rem; font-weight: 800;">50+</div>
                        <p class="text-secondary mb-0">Projects Completed</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-3">
                        <div class="gradient-text mb-2" style="font-size: 3rem; font-weight: 800;">4</div>
                        <p class="text-secondary mb-0">Companies Worked</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-3">
                        <div class="gradient-text mb-2" style="font-size: 3rem; font-weight: 800;">2+</div>
                        <p class="text-secondary mb-0">Years Experience</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-3">
                        <div class="gradient-text mb-2" style="font-size: 3rem; font-weight: 800;">100%</div>
                        <p class="text-secondary mb-0">Client Satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection