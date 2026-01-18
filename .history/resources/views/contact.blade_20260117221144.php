@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <!-- Header -->
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge mb-3" style="background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.1)); color: #A78BFA; padding: 8px 20px; border-radius: 50px; border: 1px solid rgba(79, 70, 229, 0.3); font-weight: 600; font-size: 0.85rem; letter-spacing: 1px;">GET IN TOUCH</span>
            <h1 class="display-4 fw-bold mb-3">
                Let's Build Something <span class="gradient-text">Amazing</span>
            </h1>
            <p class="lead" style="color: #9CA3AF; max-width: 700px; margin: 0 auto;">
                Ready to transform your ideas into reality? Let's discuss your next project
            </p>
        </div>

        <div class="row g-5">
            <!-- Contact Info -->
            <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1200">
                <!-- Intro Card -->
                <div class="glass-card-modern mb-4" style="background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.05));">
                    <h3 class="mb-3">Ready to collaborate?</h3>
                    <p style="color: #9CA3AF; line-height: 1.8; margin-bottom: 0;">
                        Whether you need a custom Laravel application, CRM integration, or a complete web solution, I'm here to help bring your vision to life. Available for freelance projects and full-time opportunities.
                    </p>
                </div>

                <!-- Contact Cards -->
                <div class="mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="glass-card-modern contact-card" style="cursor: pointer; position: relative; overflow: hidden;">
                        <div class="d-flex align-items-center gap-4">
                            <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #4F46E5, #7C3AED); border-radius: 18px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; box-shadow: 0 8px 25px rgba(79, 70, 229, 0.4);">
                                <i class="fas fa-envelope" style="font-size: 1.8rem; color: white;"></i>
                            </div>
                            <div class="flex-grow-1">
                                <p class="text-secondary mb-1 small">Email Me</p>
                                <h5 class="mb-0" style="color: #E0E7FF;">ashnandani123@gmail.com</h5>
                            </div>
                        </div>
                        <a href="mailto:ashnandani123@gmail.com" style="position: absolute; inset: 0;"></a>
                    </div>
                </div>

                <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="glass-card-modern contact-card" style="cursor: pointer; position: relative; overflow: hidden;">
                        <div class="d-flex align-items-center gap-4">
                            <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #10B981, #06B6D4); border-radius: 18px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4);">
                                <i class="fas fa-phone" style="font-size: 1.8rem; color: white;"></i>
                            </div>
                            <div class="flex-grow-1">
                                <p class="text-secondary mb-1 small">Call / WhatsApp</p>
                                <h5 class="mb-0" style="color: #E0E7FF;">+91 74900 26191</h5>
                            </div>
                        </div>
                        <a href="tel:+917490026191" style="position: absolute; inset: 0;"></a>
                    </div>
                </div>

                <div class="mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="glass-card-modern contact-card" style="cursor: pointer; position: relative; overflow: hidden;">
                        <div class="d-flex align-items-center gap-4">
                            <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #EC4899, #F472B6); border-radius: 18px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; box-shadow: 0 8px 25px rgba(236, 72, 153, 0.4);">
                                <i class="fas fa-map-marker-alt" style="font-size: 1.8rem; color: white;"></i>
                            </div>
                            <div class="flex-grow-1">
                                <p class="text-secondary mb-1 small">Location</p>
                                <h5 class="mb-0" style="color: #E0E7FF;">Anand, Gujarat, India</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="glass-card-modern" data-aos="fade-up" data-aos-delay="400">
                    <h5 class="mb-4">Connect with Me</h5>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="https://linkedin.com/in/ashutosh-nandani-a527b9156" target="_blank" style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.1)); border: 1px solid rgba(79, 70, 229, 0.3); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #4F46E5; text-decoration: none; transition: all 0.3s; font-size: 1.5rem;">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://github.com/Ashu-1997-Thakkar" target="_blank" style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.1)); border: 1px solid rgba(79, 70, 229, 0.3); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #4F46E5; text-decoration: none; transition: all 0.3s; font-size: 1.5rem;">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="mailto:ashnandani123@gmail.com" style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.1)); border: 1px solid rgba(79, 70, 229, 0.3); border-radius: 15px; display: flex; align-items: center; justify-content: center; color: #4F46E5; text-decoration: none; transition: all 0.3s; font-size: 1.5rem;">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1200">
                <div class="glass-card-modern">
                    <h3 class="mb-4">Send Me a Message</h3>
                    
                    <form action="{{ route('contact.submit') }}" method="POST" id="contactForm">
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label" style="color: #9CA3AF; font-size: 0.9rem; font-weight: 500; margin-bottom: 0.5rem;">
                                    Full Name <span style="color: #EF4444;">*</span>
                                </label>
                                <input type="text" name="name" class="form-control-modern" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" style="color: #9CA3AF; font-size: 0.9rem; font-weight: 500; margin-bottom: 0.5rem;">
                                    Email Address <span style="color: #EF4444;">*</span>
                                </label>
                                <input type="email" name="email" class="form-control-modern" placeholder="john@example.com" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label" style="color: #9CA3AF; font-size: 0.9rem; font-weight: 500; margin-bottom: 0.5rem;">
                                    Subject
                                </label>
                                <input type="text" name="subject" class="form-control-modern" placeholder="Project Inquiry">
                            </div>
                            <div class="col-12">
                                <label class="form-label" style="color: #9CA3AF; font-size: 0.9rem; font-weight: 500; margin-bottom: 0.5rem;">
                                    Message <span style="color: #EF4444;">*</span>
                                </label>
                                <textarea name="message" class="form-control-modern" rows="6" placeholder="Tell me about your project..." required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn-primary-modern w-100" style="padding: 16px;">
                                    <i class="fas fa-paper-plane me-2"></i>Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Response Time Card -->
                <div class="glass-card-modern mt-4" style="background: linear-gradient(135deg, rgba(16, 185, 129, 0.05), rgba(6, 182, 212, 0.05)); border-left: 4px solid #10B981;">
                    <div class="d-flex align-items-center gap-3">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, rgba(16, 185, 129, 0.2), rgba(6, 182, 212, 0.2)); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-clock" style="font-size: 1.3rem; color: #10B981;"></i>
                        </div>
                        <div>
                            <h6 class="mb-1" style="color: #E0E7FF;">Quick Response</h6>
                            <p class="mb-0 small" style="color: #9CA3AF;">I typically respond within 24 hours on business days</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.form-control-modern {
    background: rgba(21, 25, 52, 0.5);
    border: 1px solid rgba(79, 70, 229, 0.2);
    border-radius: 12px;
    padding: 14px 18px;
    color: #E0E7FF;
    font-size: 0.95rem;
    transition: all 0.3s;
    width: 100%;
}

.form-control-modern:focus {
    outline: none;
    border-color: rgba(79, 70, 229, 0.5);
    background: rgba(21, 25, 52, 0.7);
    box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
}

.form-control-modern::placeholder {
    color: #6B7280;
}

.contact-card {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.contact-card:hover {
    transform: translateX(8px);
}

@keyframes shake {
    0%, 100% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    75% { transform: translateX(5px); }
}

#contactForm button[type="submit"]:active {
    animation: shake 0.5s;
}
</style>
@endsection

@push('scripts')
<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    const btn = this.querySelector('button[type="submit"]');
    btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...';
    btn.disabled = true;
});
</script>
@endpush