@extends('layouts.app')

@section('title', 'Contact Us – Ashutosh Nandani')

@section('content')
<style>
    :root {
        --primary: #4F46E5;
        --primary-dark: #4338CA;
        --gradient: linear-gradient(135deg, #4F46E5 0%, #7C3AED 50%, #EC4899 100%);
        --glass: rgba(255, 255, 255, 0.07);
        --glass-border: rgba(255, 255, 255, 0.18);
        --text-muted: #94a3b8;
        --dark-bg: #0f172a;
        --card-shadow: 0 20px 50px -12px rgba(0,0,0,0.4);
        --transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    body {
        font-family: 'Inter', system-ui, sans-serif;
        background: var(--dark-bg);
        color: #e2e8f0;
    }

    /* Advanced Glass + Neumorphism */
    .glass-advanced {
        background: var(--glass);
        backdrop-filter: blur(24px) saturate(180%);
        -webkit-backdrop-filter: blur(24px) saturate(180%);
        border: 1px solid var(--glass-border);
        border-radius: 1.75rem;
        box-shadow: var(--card-shadow), inset 0 1px 0 rgba(255,255,255,0.08);
        transition: var(--transition);
    }

    .glass-advanced:hover {
        transform: translateY(-6px);
        box-shadow: 0 30px 70px -15px rgba(79,70,229,0.35);
    }

    /* Form Elements – Floating Label Style */
    .form-floating-modern {
        position: relative;
    }

    .form-floating-modern input,
    .form-floating-modern textarea {
        background: rgba(30,41,59,0.6);
        border: 1px solid rgba(79,70,229,0.3);
        border-radius: 1rem;
        padding: 1.25rem 1.25rem 0.75rem;
        color: white;
        transition: var(--transition);
    }

    .form-floating-modern input:focus,
    .form-floating-modern textarea:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 4px rgba(79,70,229,0.2);
        outline: none;
    }

    .form-floating-modern label {
        position: absolute;
        top: 1.1rem;
        left: 1.25rem;
        color: var(--text-muted);
        pointer-events: none;
        transform-origin: 0 0;
        transition: var(--transition);
    }

    .form-floating-modern input:focus + label,
    .form-floating-modern input:not(:placeholder-shown) + label,
    .form-floating-modern textarea:focus + label,
    .form-floating-modern textarea:not(:placeholder-shown) + label {
        transform: translateY(-0.75rem) scale(0.85);
        color: var(--primary);
    }

    /* Gradient Button */
    .btn-gradient {
        background: var(--gradient);
        border: none;
        border-radius: 3rem;
        padding: 1rem 2.5rem;
        font-weight: 700;
        color: white;
        box-shadow: 0 10px 30px rgba(79,70,229,0.35);
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    .btn-gradient:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 50px rgba(79,70,229,0.5);
    }

    .btn-gradient::before {
        content: '';
        position: absolute;
        top: 0; left: -100%;
        width: 100%; height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: 0.7s;
    }

    .btn-gradient:hover::before {
        left: 100%;
    }

    /* Map Container */
    #map {
        height: 420px;
        border-radius: 1.5rem;
        overflow: hidden;
        border: 1px solid rgba(79,70,229,0.25);
        box-shadow: var(--card-shadow);
    }

    /* Particles Background */
    .particles-bg {
        position: absolute;
        inset: 0;
        pointer-events: none;
        background: radial-gradient(circle at 20% 30%, rgba(79,70,229,0.08) 0%, transparent 50%),
                    radial-gradient(circle at 80% 70%, rgba(236,72,153,0.06) 0%, transparent 60%);
        animation: pulse 18s ease-in-out infinite;
    }

    @keyframes pulse {
        0%,100% { opacity: 0.7; transform: scale(1); }
        50%     { opacity: 1;   transform: scale(1.05); }
    }

    /* Responsive */
    @media (max-width: 992px) {
        #map { height: 360px; }
    }
</style>

<!-- Hero / Main Contact -->
<section class="position-relative min-vh-100 d-flex align-items-center py-5" style="margin-top: 76px; background: linear-gradient(160deg, #0f172a 0%, #1e293b 100%);">
    <div class="particles-bg"></div>
    <div class="container position-relative">
        <div class="row align-items-center g-5">
            <!-- Left - Text + CTA -->
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="900">
                <span class="badge bg-gradient text-white fs-5 px-4 py-2 mb-4">
                    <i class="fas fa-rocket me-2"></i> Available for Projects
                </span>
                <h1 class="display-4 fw-bold mb-4">
                    Let's Create <span style="background: var(--gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Something</span><br>
                    <span class="text-white">Extraordinary</span>
                </h1>
                <p class="lead fs-4 mb-5" style="color: var(--text-muted); max-width: 520px;">
                    Full-Stack PHP Developer specializing in Laravel • Livewire • Modern Web Apps.<br>
                    Ready to turn your vision into high-performance reality.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#contactForm" class="btn btn-gradient btn-lg px-5">
                        <i class="fas fa-paper-plane me-2"></i> Start a Project
                    </a>
                    <a href="mailto:ashnandani123@gmail.com" class="btn btn-outline-light btn-lg px-4">
                        <i class="fas fa-envelope me-2"></i> Quick Email
                    </a>
                </div>
            </div>

            <!-- Right - Contact Cards -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                <div class="glass-advanced p-5">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex align-items-center gap-4 p-4 rounded-4" style="background: rgba(79,70,229,0.12);">
                                <div class="icon-circle bg-gradient text-white fs-3 d-flex align-items-center justify-content-center" style="width:70px;height:70px;border-radius:1rem;">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1 fs-5">Email</h6>
                                    <p class="mb-1 fs-5">ashnandani123@gmail.com</p>
                                    <a href="mailto:ashnandani123@gmail.com" class="text-primary fw-semibold text-decoration-none">
                                        Write Now →
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center gap-4 p-4 rounded-4" style="background: rgba(16,185,129,0.12);">
                                <div class="icon-circle bg-success text-white fs-3 d-flex align-items-center justify-content-center" style="width:70px;height:70px;border-radius:1rem;">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Phone / WA</h6>
                                    <p class="mb-0">+91 74900 26191</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center gap-4 p-4 rounded-4" style="background: rgba(236,72,153,0.12);">
                                <div class="icon-circle bg-danger text-white fs-3 d-flex align-items-center justify-content-center" style="width:70px;height:70px;border-radius:1rem;">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Based in</h6>
                                    <p class="mb-0">Anand, Gujarat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Form + Map Section -->
<section class="py-5" style="background: linear-gradient(to bottom, #0f172a, #1e293b);">
    <div class="container">
        <div class="row g-5">
            <!-- Map -->
            <div class="col-lg-6 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                <h3 class="fw-bold mb-4 display-6 text-center text-lg-start">Find Me Here</h3>
                <div id="map"></div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-6 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <div class="glass-advanced p-5" id="contactForm">
                    <div class="text-center mb-5">
                        <h3 class="fw-bold display-5 mb-3">Let's Talk About Your Project</h3>
                        <p class="fs-5" style="color: var(--text-muted);">Free 30-min consultation • Reply within 24h</p>
                    </div>

                    <form action="{{ route('contact.submit') }}" method="POST" id="contactFormSubmit" novalidate>
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-6 form-floating-modern">
                                <input type="text" name="name" class="form-control" placeholder=" " required>
                                <label>Full Name *</label>
                            </div>
                            <div class="col-md-6 form-floating-modern">
                                <input type="email" name="email" class="form-control" placeholder=" " required>
                                <label>Email Address *</label>
                            </div>
                            <div class="col-12 form-floating-modern">
                                <input type="text" name="subject" class="form-control" placeholder=" ">
                                <label>Subject (optional)</label>
                            </div>
                            <div class="col-12 form-floating-modern">
                                <textarea name="message" rows="6" class="form-control" placeholder=" " required></textarea>
                                <label>Your Message *</label>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-gradient w-100 btn-lg">
                                    <span class="btn-text"><i class="fas fa-paper-plane me-2"></i>Send Message</span>
                                    <span class="btn-loading d-none"><i class="fas fa-spinner fa-spin me-2"></i>Sending...</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init({ duration: 900, once: true, offset: 120 });</script>

<!-- Google Maps – Modern Night Style -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
<script>
    let map;
    function initMap() {
        const anand = { lat: 22.5480, lng: 72.9513 };

        map = new google.maps.Map(document.getElementById('map'), {
            center: anand,
            zoom: 13,
            styles: [
                { featureType: "all", elementType: "labels.text.fill", stylers: [{ color: "#e2e8f0" }] },
                { featureType: "all", elementType: "labels.text.stroke", stylers: [{ color: "#0f172a" }, { lightness: -80 }] },
                { featureType: "administrative", elementType: "geometry", stylers: [{ color: "#1e293b" }] },
                { featureType: "poi", elementType: "geometry", stylers: [{ color: "#1e293b" }] },
                { featureType: "road", elementType: "geometry", stylers: [{ color: "#334155" }] },
                { featureType: "road.highway", elementType: "geometry", stylers: [{ color: "#475569" }] },
                { featureType: "water", elementType: "geometry", stylers: [{ color: "#0f172a" }] },
                { featureType: "landscape", elementType: "geometry", stylers: [{ color: "#0f172a" }] }
            ],
            mapTypeControl: false,
            streetViewControl: false,
            fullscreenControl: false
        });

        new google.maps.Marker({
            position: anand,
            map: map,
            title: "Ashutosh Nandani - PHP Developer",
            icon: {
                url: "data:image/svg+xml," + encodeURIComponent(`
                    <svg width="48" height="56" viewBox="0 0 48 56" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 0C15 0 8 7 8 16c0 9 11 25 16 31 1.2 1.4 3.6 1.4 4.8 0 5-6 16-22 16-31 0-9-7-16-16-16z" fill="#4F46E5" stroke="#ffffff" stroke-width="2"/>
                        <circle cx="24" cy="16" r="7" fill="#ffffff"/>
                    </svg>
                `),
                scaledSize: new google.maps.Size(48, 56)
            }
        });
    }
</script>

<!-- Form Submission Animation -->
<script>
    const form = document.getElementById('contactFormSubmit');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // remove if using real backend
            const btn = this.querySelector('button[type="submit"]');
            const text = btn.querySelector('.btn-text');
            const loading = btn.querySelector('.btn-loading');

            text.classList.add('d-none');
            loading.classList.remove('d-none');
            btn.disabled = true;

            setTimeout(() => {
                alert('Message sent! 🚀 I will reply within 24 hours.');
                form.reset();
                text.classList.remove('d-none');
                loading.classList.add('d-none');
                btn.disabled = false;
            }, 1800);
        });
    }
</script>

<!-- Smooth Scroll -->
<script>
    document.querySelectorAll('a[href^="#"]').forEach(a => {
        a.addEventListener('click', e => {
            e.preventDefault();
            document.querySelector(a.getAttribute('href'))?.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });
</script>
@endpush    