@extends('layouts.app')

@section('title', 'Contact Us - Modern Professional Design')

@section('content')
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #4F46E5 0%, #7C3AED 50%, #EC4899 100%);
        --glass-bg: rgba(255, 255, 255, 0.08);
        --glass-border: rgba(255, 255, 255, 0.2);
        --shadow-lg: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        --shadow-xl: 0 35px 60px -12px rgba(0, 0, 0, 0.3);
    }

    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        line-height: 1.6;
    }

    /* Navbar Styles */
    .navbar {
        backdrop-filter: blur(20px);
        background: rgba(15, 23, 42, 0.95) !important;
        border-bottom: 1px solid rgba(79, 70, 229, 0.2);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
        background: var(--primary-gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 800;
    }

    .nav-link {
        color: rgba(255, 255, 255, 0.8) !important;
        font-weight: 500;
        transition: all 0.3s ease;
        position: relative;
    }

    .nav-link:hover, .nav-link.active {
        color: #ffffff !important;
        background: rgba(79, 70, 229, 0.15);
        border: 1px solid rgba(79, 70, 229, 0.4);
        transform: translateY(-2px);
    }

    /* Hero Section */
    .hero-section {
        min-height: 100vh;
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 40%, #334155 100%);
        position: relative;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><radialGradient id="a" cx="50%" cy="50%"><stop offset="0%" stop-color="%234F46E5" stop-opacity="0.03"/><stop offset="100%" stop-color="%237C3AED" stop-opacity="0"/></radialGradient></defs><circle cx="300" cy="200" r="200" fill="url(%23a)"><animate attributeName="r" values="200;250;200" dur="8s" repeatCount="indefinite"/></circle><circle cx="700" cy="700" r="150" fill="url(%23a)"><animate attributeName="r" values="150;200;150" dur="10s" repeatCount="indefinite"/></circle></svg>');
        animation: float 20s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(180deg); }
    }

    /* Glass Morphism Cards */
    .glass-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: var(--shadow-lg);
        border-radius: 24px;
        position: relative;
        overflow: hidden;
    }

    .glass-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: var(--primary-gradient);
    }

    .glass-card-light {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.5);
    }

    /* Form Controls */
    .form-control-modern {
        background: rgba(255, 255, 255, 0.7);
        border: 2px solid rgba(79, 70, 229, 0.2);
        border-radius: 16px;
        padding: 16px 20px;
        font-size: 1rem;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        color: #1e293b;
        font-weight: 500;
    }

    .form-control-modern:focus {
        background: rgba(255, 255, 255, 0.95);
        border-color: #4F46E5;
        box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.15);
        transform: translateY(-2px);
        outline: none;
    }

    .form-control-modern::placeholder {
        color: #94a3b8;
    }

    /* Buttons */
    .btn-primary-modern {
        background: var(--primary-gradient);
        border: none;
        border-radius: 50px;
        padding: 16px 32px;
        font-weight: 700;
        font-size: 1.1rem;
        box-shadow: 0 12px 30px rgba(79, 70, 229, 0.4);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }

    .btn-primary-modern:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(79, 70, 229, 0.5);
    }

    .btn-primary-modern:active {
        transform: translateY(-2px);
    }

    /* Contact Cards */
    .contact-card-modern {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
    }

    .contact-card-modern:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: var(--shadow-xl);
    }

    .icon-circle {
        width: 80px;
        height: 80px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
        transition: all 0.3s;
    }

    /* Floating Elements */
    .floating-elements {
        position: absolute;
        width: 100%;
        height: 100%;
        pointer-events: none;
        overflow: hidden;
    }

    .float-circle {
        position: absolute;
        border-radius: 50%;
        background: var(--primary-gradient);
        opacity: 0.1;
        animation: float 6s ease-in-out infinite;
    }

    .float-circle:nth-child(1) { width: 60px; height: 60px; top: 10%; left: 10%; animation-delay: 0s; }
    .float-circle:nth-child(2) { width: 40px; height: 40px; bottom: 20%; right: 15%; animation-delay: 2s; }

    /* Map Styles */
    #map {
        height: 350px;
        border-radius: 20px;
        box-shadow: var(--shadow-lg);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    /* Social Cards */
    .social-card {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        text-decoration: none;
    }

    .social-card:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: var(--shadow-xl);
        color: inherit !important;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .hero-section { min-height: 80vh; margin-top: 76px; }
        .glass-card, .glass-card-light { padding: 2rem !important; margin-bottom: 2rem; }
        .display-3 { font-size: 2.5rem !important; line-height: 1.1; }
    }

    /* Animations */
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
    }

    .btn-loading {
        animation: shake 0.5s ease-in-out;
    }

    /* AOS Overrides */
    [data-aos] {
        transition-duration: 0.8s;
    }
</style>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold fs-3" href="{{ route('home') }}">
            <i class="fas fa-rocket me-2"></i>ishahiya
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-2"><a class="nav-link px-3 py-2 rounded-pill" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item mx-2"><a class="nav-link px-3 py-2 rounded-pill" href="{{ route('about') }}">About</a></li>
                <li class="nav-item mx-2"><a class="nav-link px-3 py-2 rounded-pill" href="{{ route('services') }}">Services</a></li>
                <li class="nav-item mx-2"><a class="nav-link px-3 py-2 rounded-pill active" href="#">Contact</a></li>
                <li class="nav-item mx-2"><a class="nav-link px-3 py-2 rounded-pill" href="{{ route('portfolio') }}">Portfolio</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section d-flex align-items-center py-5" style="margin-top: 76px;">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                <span class="badge fs-6 fw-semibold px-5 py-3 mb-4 d-inline-block">
                    <i class="fas fa-paper-plane me-2"></i>GET IN TOUCH
                </span>
                <h1 class="display-3 fw-bold mb-4 lh-1">
                    Let's Build <span class="text-primary">Something</span><br>
                    <span class="text-danger fw-bolder">Amazing</span>
                </h1>
                <p class="lead mb-5" style="color: #94a3b8; font-size: 1.3rem; max-width: 500px;">
                    PHP Developer ready to transform your ideas into modern, responsive web applications. Let's discuss your project!
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#contactForm" class="btn btn-primary-modern px-5">
                        <i class="fas fa-message me-2"></i>Start Project
                    </a>
                    <a href="mailto:ashnandani123@gmail.com" class="btn btn-outline-light px-4">
                        <i class="fas fa-envelope me-2"></i>Email Me
                    </a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                <div class="glass-card p-5">
                    <div class="floating-elements"></div>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="contact-card-modern text-center p-4 text-white">
                                <div class="icon-circle bg-gradient-primary mx-auto mb-3">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <h6 class="fw-bold mb-1">Email</h6>
                                <p class="mb-2">ashnandani123@gmail.com</p>
                                <a href="mailto:ashnandani123@gmail.com" class="text-white fw-semibold">
                                    Send Message <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="contact-card-modern text-center p-4 text-white" style="background: rgba(16,185,129,0.2);">
                                <div class="icon-circle bg-success mx-auto mb-3">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <h6 class="fw-bold mb-1">Phone</h6>
                                <p>+91 74900 26191</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="contact-card-modern text-center p-4 text-white" style="background: rgba(236,72,153,0.2);">
                                <div class="icon-circle bg-danger mx-auto mb-3">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <h6 class="fw-bold mb-1">Location</h6>
                                <p>Anand, Gujarat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Contact Section -->
<section class="py-5 bg-gradient-light" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);">
    <div class="container">
        <div class="row g-5 mb-5">
            <!-- Map Section -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="glass-card-light p-5 h-100">
                    <h3 class="fw-bold mb-4" style="color: #1e293b; font-size: 2rem;">📍 Visit Us</h3>
                    
                    <!-- Contact Info Cards -->
                    <div class="contact-info mb-5">
                        <div class="d-flex align-items-center gap-4 p-4 mb-4 rounded-3 hover-lift" style="background: rgba(79,70,229,0.08); border-left: 5px solid #4F46E5;">
                            <div class="icon-circle bg-primary text-white fs-5">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1" style="color: #1e293b;">Anand, Gujarat, India</h6>
                                <p class="mb-0" style="color: #64748b;">Virtual meetings worldwide</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-4 p-4 mb-4 rounded-3 hover-lift" style="background: rgba(16,185,129,0.08); border-left: 5px solid #10B981;">
                            <div class="icon-circle bg-success text-white fs-5">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1" style="color: #1e293b;">Response Time</h6>
                                <p class="mb-0" style="color: #64748b;">Within 24 hours</p>
                            </div>
                        </div>
                    </div>

                    <!-- Google Map -->
                    <div id="map" class="w-100"></div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="glass-card-light p-5 h-100 position-relative" id="contactForm">
                    <div class="floating-elements"></div>
                    <div class="text-center mb-5 pb-4">
                        <h3 class="fw-bold mb-3 display-6" style="color: #1e293b;">💬 Send Message</h3>
                        <div class="badge bg-primary fs-6 px-4 py-2 mb-3">Free Consultation</div>
                    </div>

                    <form action="{{ route('contact.submit') }}" method="POST" id="contactFormSubmit" novalidate>
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold mb-2 fs-6" style="color: #374151;">Full Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control-modern" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold mb-2 fs-6" style="color: #374151;">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control-modern" placeholder="john@example.com" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold mb-2 fs-6" style="color: #374151;">Subject</label>
                                <input type="text" name="subject" class="form-control-modern" placeholder="e.g., Laravel Project">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold mb-2 fs-6" style="color: #374151;">Message <span class="text-danger">*</span></label>
                                <textarea name="message" rows="6" class="form-control-modern" placeholder="Tell me about your project requirements, timeline, and budget..." required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary-modern w-100 py-4">
                                    <span class="btn-text">
                                        <i class="fas fa-paper-plane me-2"></i>Send Message
                                    </span>
                                    <span class="btn-loading d-none">
                                        <i class="fas fa-spinner fa-spin me-2"></i>Sending...
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Stats Row -->
        <div class="row text-center g-4" data-aos="fade-up" data-aos-delay="400">
            <div class="col-md-3">
                <div class="h2 fw-bold text-primary mb-1">50+</div>
                <p class="mb-0 fw-semibold" style="color: #64748b;">Projects Delivered</p>
            </div>
            <div class="col-md-3">
                <div class="h2 fw-bold text-success mb-1">100%</div>
                <p class="mb-0 fw-semibold" style="color: #64748b;">Client Satisfaction</p>
            </div>
            <div class="col-md-3">
                <div class="h2 fw-bold text-info mb-1">24h</div>
                <p class="mb-0 fw-semibold" style="color: #64748b;">Response Time</p>
            </div>
            <div class="col-md-3">
                <div class="h2 fw-bold text-warning mb-1">5⭐</div>
                <p class="mb-0 fw-semibold" style="color: #64748b;">Average Rating</p>
            </div>
        </div>
    </div>
</section>

<!-- Social Section -->
<section class="py-5" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);">
    <div class="container">
        <div class="text-center mb-5" data-aos="zoom-in">
            <h3 class="fw-bold display-4 mb-4" style="background: linear-gradient(135deg, #ffffff, #a78bfa); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                Connect With Me
            </h3>
            <p class="lead" style="color: #94a3b8; max-width: 600px; margin: 0 auto;">
                Follow my latest work and projects on social platforms
            </p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-3 col-sm-6">
                <a href="https://linkedin.com/in/ashutosh-nandani-a527b9156" target="_blank" class="social-card text-decoration-none p-5 text-center h-100">
                    <div class="icon-circle bg-gradient-primary mx-auto mb-4 fs-1">
                        <i class="fab fa-linkedin"></i>
                    </div>
                    <h5 class="fw-bold mb-2 text-white">LinkedIn</h5>
                    <p class="text-muted mb-0">Professional Network</p>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="https://github.com/Ashu-1997-Thakkar" target="_blank" class="social-card text-decoration-none p-5 text-center h-100" style="background: rgba(13, 148, 38, 0.15); border: 1px solid rgba(13, 148, 38, 0.3);">
                    <div class="icon-circle" style="background: linear-gradient(135deg, #0D8D1A, #2EA043); mx-auto mb-4 fs-1">
                        <i class="fab fa-github"></i>
                    </div>
                    <h5 class="fw-bold mb-2 text-white">GitHub</h5>
                    <p class="text-muted mb-0">Code Repository</p>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="mailto:ashnandani123@gmail.com" class="social-card text-decoration-none p-5 text-center h-100" style="background: rgba(236,72,153,0.15); border: 1px solid rgba(236,72,153,0.3);">
                    <div class="icon-circle bg-danger mx-auto mb-4 fs-1">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h5 class="fw-bold mb-2 text-white">Email</h5>
                    <p class="text-muted mb-0">Direct Contact</p>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="https://wa.me/917490026191" class="social-card text-decoration-none p-5 text-center h-100" style="background: rgba(16,185,129,0.15); border: 1px solid rgba(16,185,129,0.3);">
                    <div class="icon-circle bg-success mx-auto mb-4 fs-1">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h5 class="fw-bold mb-2 text-white">WhatsApp</h5>
                    <p class="text-muted mb-0">Instant Chat</p>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<!-- AOS Animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });
</script>

<!-- Google Maps -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
<script>
    let map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: 22.5480, lng: 72.9513 }, // Anand, Gujarat
            zoom: 14,
            styles: [
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{ "color": "#0f172a" }]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [{ "color": "#1e293b" }]
                }
            ],
            mapTypeControl: false,
            streetViewControl: false
        });

        // Custom Marker
        new google.maps.Marker({
            position: { lat: 22.5480, lng: 72.9513 },
            map: map,
            title: 'Ashutosh Nandani - PHP Developer',
            icon: {
                url: 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(`
                    <svg width="40" height="50" viewBox="0 0 40 50" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 0C12.8 0 6.4 5.6 6.4 14c0 7.2 9.6 20.8 13.6 25.6 1 1.2 2.8 1.2 3.6 0C24 34.8 33.6 21.2 33.6 14c0-8.4-6.4-14-13.6-14z" fill="%234F46E5" stroke="%23ffffff" stroke-width="2"/>
                        <circle cx="20" cy="14" r="6" fill="%23ffffff"/>
                    </svg>
                `),
                scaledSize: new google.maps.Size(40, 50)
            }
        });
    }
</script>

<!-- Form Submission with Animation -->
<script>
    document.getElementById('contactFormSubmit').addEventListener('submit', function(e) {
        const btn = this.querySelector('button[type="submit"]');
        const btnText = btn.querySelector('.btn-text');
        const btnLoading = btn.querySelector('.btn-loading');
        
        btnText.classList.add('d-none');
        btnLoading.classList.remove('d-none');
        btn.disabled = true;
        
        // Simulate form submission
        setTimeout(() => {
            alert('Message sent successfully! I\'ll get back to you within 24 hours. 🚀');
            this.reset();
            btnText.classList.remove('d-none');
            btnLoading.classList.add('d-none');
            btn.disabled = false;
        }, 2000);
    });
</script>

<!-- Navbar Scroll Effect -->
<script>
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.style.background = 'rgba(15, 23, 42, 0.98)';
            navbar.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.2)';
        } else {
            navbar.style.background = 'rgba(15, 23, 42, 0.95)';
            navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
        }
    });
</script>

<!-- Smooth Scrolling -->
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>
@endpus
