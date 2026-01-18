@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <!-- Header with Animated Background -->
        <div class="text-center mb-5 position-relative" data-aos="fade-up">
            <div class="floating-shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
            </div>
            <span class="badge mb-3 pulse-badge" style="background: linear-gradient(135deg, rgba(79, 70, 229, 0.15), rgba(124, 58, 237, 0.15)); color: #A78BFA; padding: 10px 24px; border-radius: 50px; border: 1px solid rgba(79, 70, 229, 0.4); font-weight: 600; font-size: 0.85rem; letter-spacing: 1.5px; box-shadow: 0 4px 15px rgba(79, 70, 229, 0.2);">
                <i class="fas fa-comments me-2"></i>GET IN TOUCH
            </span>
            <h1 class="display-4 fw-bold mb-3">
                Let's Build Something <span class="gradient-text-animated">Amazing</span>
            </h1>
            <p class="lead" style="color: #9CA3AF; max-width: 700px; margin: 0 auto;">
                Ready to transform your ideas into reality? Let's discuss your next project and create something extraordinary together
            </p>
        </div>

        <div class="row g-5">
            <!-- Contact Info Column -->
            <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1200">
                <!-- Intro Card with Gradient Border -->
                <div class="glass-card-modern gradient-border-card mb-4">
                    <div class="card-glow"></div>
                    <h3 class="mb-3">
                        <i class="fas fa-handshake me-2" style="color: #4F46E5;"></i>
                        Ready to collaborate?
                    </h3>
                    <p style="color: #9CA3AF; line-height: 1.8; margin-bottom: 1.5rem;">
                        Whether you need a custom Laravel application, CRM integration, or a complete web solution, I'm here to help bring your vision to life. Available for freelance projects and full-time opportunities.
                    </p>
                    <div class="stats-mini d-flex gap-4 pt-3 border-top" style="border-color: rgba(79, 70, 229, 0.2) !important;">
                        <div>
                            <div class="fw-bold" style="color: #4F46E5; font-size: 1.5rem;">24h</div>
                            <div class="small text-secondary">Response Time</div>
                        </div>
                        <div>
                            <div class="fw-bold" style="color: #10B981; font-size: 1.5rem;">100%</div>
                            <div class="small text-secondary">Client Satisfaction</div>
                        </div>
                        <div>
                            <div class="fw-bold" style="color: #EC4899; font-size: 1.5rem;">5+</div>
                            <div class="small text-secondary">Years Experience</div>
                        </div>
                    </div>
                </div>

                <!-- Contact Cards with Enhanced Design -->
                <div class="mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="glass-card-modern contact-card-enhanced" onclick="window.location.href='mailto:ashnandani123@gmail.com'">
                        <div class="icon-wrapper icon-email">
                            <i class="fas fa-envelope"></i>
                            <div class="icon-bg"></div>
                        </div>
                        <div class="contact-info">
                            <p class="contact-label">Email Me</p>
                            <h5 class="contact-value">ashnandani123@gmail.com</h5>
                            <span class="availability-badge">
                                <i class="fas fa-circle" style="font-size: 8px; color: #10B981;"></i>
                                Available
                            </span>
                        </div>
                        <div class="arrow-icon">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>

                <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="glass-card-modern contact-card-enhanced" onclick="window.location.href='tel:+917490026191'">
                        <div class="icon-wrapper icon-phone">
                            <i class="fas fa-phone"></i>
                            <div class="icon-bg"></div>
                        </div>
                        <div class="contact-info">
                            <p class="contact-label">Call / WhatsApp</p>
                            <h5 class="contact-value">+91 74900 26191</h5>
                            <span class="availability-badge">
                                <i class="fas fa-circle" style="font-size: 8px; color: #10B981;"></i>
                                Online
                            </span>
                        </div>
                        <div class="arrow-icon">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>

                <div class="mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="glass-card-modern contact-card-enhanced">
                        <div class="icon-wrapper icon-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="icon-bg"></div>
                        </div>
                        <div class="contact-info">
                            <p class="contact-label">Location</p>
                            <h5 class="contact-value">Anand, Gujarat, India</h5>
                            <span class="availability-badge" style="background: rgba(236, 72, 153, 0.1); color: #EC4899;">
                                <i class="fas fa-map-pin" style="font-size: 10px;"></i>
                                View on Map
                            </span>
                        </div>
                        <div class="arrow-icon">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>

                <!-- Social Links with Better Design -->
                <div class="glass-card-modern" data-aos="fade-up" data-aos-delay="400">
                    <h5 class="mb-4">
                        <i class="fas fa-share-alt me-2" style="color: #4F46E5;"></i>
                        Connect with Me
                    </h5>
                    <div class="social-links-grid">
                        <a href="https://linkedin.com/in/ashutosh-nandani-a527b9156" target="_blank" class="social-link linkedin-link" data-social="LinkedIn">
                            <i class="fab fa-linkedin"></i>
                            <span class="social-tooltip">LinkedIn</span>
                        </a>
                        <a href="https://github.com/Ashu-1997-Thakkar" target="_blank" class="social-link github-link" data-social="GitHub">
                            <i class="fab fa-github"></i>
                            <span class="social-tooltip">GitHub</span>
                        </a>
                        <a href="mailto:ashnandani123@gmail.com" class="social-link email-link" data-social="Email">
                            <i class="fas fa-envelope"></i>
                            <span class="social-tooltip">Email</span>
                        </a>
                        <a href="https://wa.me/917490026191" target="_blank" class="social-link whatsapp-link" data-social="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                            <span class="social-tooltip">WhatsApp</span>
                        </a>
                    </div>
                </div>

                <!-- Working Hours Card -->
                <div class="glass-card-modern mt-4" data-aos="fade-up" data-aos-delay="500" style="background: linear-gradient(135deg, rgba(79, 70, 229, 0.05), rgba(124, 58, 237, 0.05));">
                    <h6 class="mb-3">
                        <i class="fas fa-business-time me-2" style="color: #4F46E5;"></i>
                        Working Hours
                    </h6>
                    <div class="working-hours">
                        <div class="hour-item">
                            <span>Monday - Friday</span>
                            <span class="fw-semibold" style="color: #10B981;">9:00 AM - 6:00 PM</span>
                        </div>
                        <div class="hour-item">
                            <span>Saturday</span>
                            <span class="fw-semibold" style="color: #10B981;">10:00 AM - 4:00 PM</span>
                        </div>
                        <div class="hour-item">
                            <span>Sunday</span>
                            <span class="fw-semibold" style="color: #EF4444;">Closed</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form & Map Column -->
            <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1200">
                <!-- Contact Form -->
                <div class="glass-card-modern mb-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h3 class="mb-0">
                            <i class="fas fa-paper-plane me-2" style="color: #4F46E5;"></i>
                            Send Me a Message
                        </h3>
                        <div class="form-indicator">
                            <i class="fas fa-shield-alt me-2" style="color: #10B981;"></i>
                            <span class="small text-secondary">Secure Form</span>
                        </div>
                    </div>
                    
                    <form action="{{ route('contact.submit') }}" method="POST" id="contactForm">
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-group-modern">
                                    <label class="form-label-modern">
                                        <i class="fas fa-user me-2"></i>Full Name <span class="required-star">*</span>
                                    </label>
                                    <input type="text" name="name" class="form-control-modern" placeholder="John Doe" required>
                                    <div class="input-border"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-modern">
                                    <label class="form-label-modern">
                                        <i class="fas fa-envelope me-2"></i>Email Address <span class="required-star">*</span>
                                    </label>
                                    <input type="email" name="email" class="form-control-modern" placeholder="john@example.com" required>
                                    <div class="input-border"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-modern">
                                    <label class="form-label-modern">
                                        <i class="fas fa-phone me-2"></i>Phone Number
                                    </label>
                                    <input type="tel" name="phone" class="form-control-modern" placeholder="+91 XXXXX XXXXX">
                                    <div class="input-border"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-modern">
                                    <label class="form-label-modern">
                                        <i class="fas fa-tag me-2"></i>Subject
                                    </label>
                                    <input type="text" name="subject" class="form-control-modern" placeholder="Project Inquiry">
                                    <div class="input-border"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group-modern">
                                    <label class="form-label-modern">
                                        <i class="fas fa-comment-dots me-2"></i>Message <span class="required-star">*</span>
                                    </label>
                                    <textarea name="message" class="form-control-modern" rows="6" placeholder="Tell me about your project, requirements, timeline, and budget..." required></textarea>
                                    <div class="input-border"></div>
                                    <div class="character-count mt-2 text-end">
                                        <small class="text-secondary"><span id="charCount">0</span> / 1000 characters</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn-primary-modern w-100 btn-submit-enhanced">
                                    <span class="btn-text">
                                        <i class="fas fa-paper-plane me-2"></i>Send Message
                                    </span>
                                    <span class="btn-loading" style="display: none;">
                                        <i class="fas fa-spinner fa-spin me-2"></i>Sending...
                                    </span>
                                    <div class="btn-shine"></div>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Success/Error Messages -->
                    <div id="formMessage" class="mt-4" style="display: none;"></div>
                </div>

                <!-- Interactive Map -->
                <div class="glass-card-modern p-0 overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <div class="map-header" style="padding: 20px; background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.05)); border-bottom: 1px solid rgba(79, 70, 229, 0.2);">
                        <h5 class="mb-0">
                            <i class="fas fa-map-marked-alt me-2" style="color: #4F46E5;"></i>
                            Find Me Here
                        </h5>
                    </div>
                    <div class="map-container" style="height: 400px; position: relative;">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118145.57209123183!2d72.84794954336816!3d22.556325871490643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e4e401c980357%3A0x4d6463117acd562c!2sAnand%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1642345678901!5m2!1sen!2sin"
                            width="100%" 
                            height="100%" 
                            style="border:0; filter: grayscale(20%) contrast(1.2);" 
                            allowfullscreen="" 
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        <div class="map-overlay">
                            <div class="location-pin">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="map-footer" style="padding: 15px 20px; background: rgba(21, 25, 52, 0.5); border-top: 1px solid rgba(79, 70, 229, 0.2); display: flex; justify-content: space-between; align-items: center;">
                        <span class="text-secondary small">
                            <i class="fas fa-location-arrow me-2"></i>Anand, Gujarat, India
                        </span>
                        <a href="https://maps.google.com/?q=Anand,Gujarat,India" target="_blank" class="btn-map-link">
                            <i class="fas fa-external-link-alt me-1"></i>Open in Maps
                        </a>
                    </div>
                </div>

                <!-- Response Time Card -->
                <div class="glass-card-modern mt-4 response-time-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="d-flex align-items-center gap-3">
                        <div class="response-icon">
                            <i class="fas fa-clock"></i>
                            <div class="pulse-ring"></div>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1" style="color: #E0E7FF;">
                                <i class="fas fa-check-circle me-2" style="color: #10B981;"></i>
                                Quick Response Guaranteed
                            </h6>
                            <p class="mb-0 small" style="color: #9CA3AF;">I typically respond within 24 hours on business days. For urgent matters, call directly.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Quick Links -->
                <div class="glass-card-modern mt-4" data-aos="fade-up" data-aos-delay="400">
                    <h6 class="mb-3">
                        <i class="fas fa-question-circle me-2" style="color: #4F46E5;"></i>
                        Quick Questions?
                    </h6>
                    <div class="faq-links">
                        <a href="#" class="faq-item">
                            <i class="fas fa-dollar-sign"></i>
                            <span>Pricing & Packages</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="#" class="faq-item">
                            <i class="fas fa-code"></i>
                            <span>Technologies I Use</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="#" class="faq-item">
                            <i class="fas fa-clock"></i>
                            <span>Project Timeline</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Floating Background Shapes */
.floating-shapes {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    pointer-events: none;
    z-index: -1;
}

.shape {
    position: absolute;
    border-radius: 50%;
    filter: blur(60px);
    opacity: 0.15;
    animation: float 20s infinite ease-in-out;
}

.shape-1 {
    width: 300px;
    height: 300px;
    background: linear-gradient(135deg, #4F46E5, #7C3AED);
    top: -150px;
    left: -150px;
    animation-delay: 0s;
}

.shape-2 {
    width: 250px;
    height: 250px;
    background: linear-gradient(135deg, #10B981, #06B6D4);
    top: -100px;
    right: -100px;
    animation-delay: 5s;
}

.shape-3 {
    width: 200px;
    height: 200px;
    background: linear-gradient(135deg, #EC4899, #F472B6);
    bottom: -100px;
    left: 50%;
    animation-delay: 10s;
}

@keyframes float {
    0%, 100% { transform: translate(0, 0) rotate(0deg); }
    33% { transform: translate(30px, -30px) rotate(120deg); }
    66% { transform: translate(-20px, 20px) rotate(240deg); }
}

/* Pulse Badge */
.pulse-badge {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% { transform: scale(1); box-shadow: 0 4px 15px rgba(79, 70, 229, 0.2); }
    50% { transform: scale(1.05); box-shadow: 0 6px 25px rgba(79, 70, 229, 0.4); }
}

/* Animated Gradient Text */
.gradient-text-animated {
    background: linear-gradient(90deg, #4F46E5, #7C3AED, #EC4899, #4F46E5);
    background-size: 300% 300%;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: gradientFlow 5s ease infinite;
}

@keyframes gradientFlow {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

/* Gradient Border Card */
.gradient-border-card {
    position: relative;
    background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.05));
    overflow: hidden;
}

.gradient-border-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, #4F46E5, #7C3AED, #EC4899);
    background-size: 200% 200%;
    animation: gradientMove 3s ease infinite;
}

@keyframes gradientMove {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

.card-glow {
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(79, 70, 229, 0.1) 0%, transparent 70%);
    animation: rotate 20s linear infinite;
    pointer-events: none;
}

@keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

/* Enhanced Contact Cards */
.contact-card-enhanced {
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 24px;
    cursor: pointer;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.contact-card-enhanced::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(79, 70, 229, 0.1), transparent);
    transition: left 0.5s;
}

.contact-card-enhanced:hover::before {
    left: 100%;
}

.contact-card-enhanced:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(79, 70, 229, 0.2);
}

.icon-wrapper {
    position: relative;
    width: 70px;
    height: 70px;
    border-radius: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: all 0.3s;
}

.icon-wrapper i {
    font-size: 1.8rem;
    color: white;
    position: relative;
    z-index: 2;
    transition: transform 0.3s;
}

.contact-card-enhanced:hover .icon-wrapper i {
    transform: scale(1.1) rotate(5deg);
}

.icon-bg {
    position: absolute;
    inset: 0;
    border-radius: 18px;
    opacity: 0.8;
    transition: opacity 0.3s;
}

.contact-card-enhanced:hover .icon-bg {
    opacity: 1;
}

.icon-email .icon-bg {
    background: linear-gradient(135deg, #4F46E5, #7C3AED);
    box-shadow: 0 8px 25px rgba(79, 70, 229, 0.4);
}

.icon-phone .icon-bg {
    background: linear-gradient(135deg, #10B981, #06B6D4);
    box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4);
}

.icon-location .icon-bg {
    background: linear-gradient(135deg, #EC4899, #F472B6);
    box-shadow: 0 8px 25px rgba(236, 72, 153, 0.4);
}

.contact-info {
    flex-grow: 1;
}

.contact-label {
    color: #9CA3AF;
    font-size: 0.85rem;
    margin-bottom: 4px;
    font-weight: 500;
}

.contact-value {
    color: #E0E7FF;
    margin-bottom: 8px;
    font-size: 1.1rem;
    font-weight: 600;
}

.availability-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 4px 12px;
    background: rgba(16, 185, 129, 0.1);
    color: #10B981;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
}

.arrow-icon {
    color: #4F46E5;
    font-size: 1.2rem;
    transition: transform 0.3s;
}

.contact-card-enhanced:hover .arrow-icon {
    transform: translateX(5px);
}

/* Social Links Grid */
.social-links-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 15px;
}

.social-link {
    position: relative;
    aspect-ratio: 1;
    background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.1));
    border: 1px solid rgba(79, 70, 229, 0.3);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #4F46E5;
    font-size: 1.5rem;
    text-decoration: none;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    overflow: hidden;
}

.social-link::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, #4F46E5, #7C3AED);
    opacity: 0;
    transition: opacity 0.3s;
}

.social-link i {
    position: relative;
    z-index: 2;
    transition: transform 0.3s;
}

.social-tooltip {
    position: absolute;
    bottom: -35px;
    left: 50%;
    transform: translateX(-50%) scale(0);
    background: rgba(21, 25, 52, 0.95);
    color: #E0E7FF;
    padding: 6px 12px;
    border-radius: 8px;
    font-size: 0.75rem;
    white-space: nowrap;
    border: 1px solid rgba(79, 70, 229, 0.3);
    transition: all 0.3s;
    pointer-events: none;
    z-index: 10;
}

.social-link:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(79, 70, 229, 0.3);
}

.social-link:hover::before {
    opacity: 1;
}

.social-link:hover i {
    color: white;
    transform: scale(1.1);
}

.social-link:hover .social-tooltip {
    transform: translateX(-50%) scale(1);
    bottom: -40px;
}

.linkedin-link:hover { box-shadow: 0 10px 30px rgba(14, 118, 168, 0.4); }
.github-link:hover { box-shadow: 0 10px 30px rgba(31, 41, 55, 0.4); }
.email-link:hover { box-shadow: 0 10px 30px rgba(79, 70, 229, 0.4); }
.whatsapp-link:hover { box-shadow: 0 10px 30px rgba(37, 211, 102, 0.4); }

/* Working Hours */
.working-hours {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.hour-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
    color: #9CA3AF;
    font-size: 0.9rem;
    border-bottom: 1px solid rgba(79, 70, 229, 0.1);
}

.hour-item:last-child {
    border-bottom: none;
}

/* Modern Form Styles */
.form-group-modern {
    position: relative;
}

.form-label-modern {
    color: #9CA3AF;
    font-size: 0.9rem;
    font-weight: 500;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
}

.form-label-modern i {
    color: #4F46E5;
    font-size: 0.85rem;
}

.required-star {
    color: #EF4444;
    margin-left: 4px;
}

.form-control-modern {
    background: rgba(21, 25, 52, 0.5);
    border: 1px solid rgba(79, 70, 229, 0.2);
    border-radius: 12px;
    padding: 14px 18px;
    color: #E0E7FF;
    font-size: 0.95rem;
    transition: all 0.3s;
    width: 100%;
    position: relative;
    z-index: 1;
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

.input-border {
    position: absolute;
    bottom: 0;
    left: 0;
    height: 2px;
    width: 0;
    background: linear-gradient(90deg, #4F46E5, #7C3AED);
    transition: width 0.3s;
}

.form-control-modern:focus + .input-border {
    width: 100%;
}

/* Enhanced Submit Button */
.btn-submit-enhanced {
    position: relative;
    overflow: hidden;
    padding: 16px;
    border: none;
}

.btn-shine {
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
}

.btn-submit-enhanced:hover .btn-shine {
    left: 100%;
}

/* Map Styles */
.map-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    pointer-events: none;
}

.location-pin {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #EC4899, #F472B6);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.8rem;
    box-shadow: 0 10px 30px rgba(236, 72, 153, 0.5);
    animation: bounce 2s infinite;
}

@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.btn-map-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 14px;
    background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.1));
    border: 1px solid rgba(79, 70, 229, 0.3);
    border-radius: 8px;
    color: #4F46E5;
    font-size: 0.85rem;
    text-decoration: none;
    transition: all 0.3s;
}

.btn-map-link:hover {
    background: linear-gradient(135deg, #4F46E5, #7C3AED);
    color: white;
    transform: translateX(3px);
}

/* Response Time Card */
.response-time-card {
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.05), rgba(6, 182, 212, 0.05));
    border-left: 4px solid #10B981;
}

.response-icon {
    position: relative;
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.2), rgba(6, 182, 212, 0.2));
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #10B981;
    font-size: 1.3rem;
}

.pulse-ring {
    position: absolute;
    inset: -10px;
    border: 2px solid #10B981;
    border-radius: 12px;
    opacity: 0.5;
    animation: pulsering 2s infinite;
}

@keyframes pulsering {
    0% { transform: scale(1); opacity: 0.5; }
    50% { transform: scale(1.1); opacity: 0.3; }
    100% { transform: scale(1); opacity: 0.5; }
}

/* FAQ Links */
.faq-links {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.faq-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 16px;
    background: rgba(79, 70, 229, 0.05);
    border: 1px solid rgba(79, 70, 229, 0.2);
    border-radius: 10px;
    color: #E0E7FF;
    text-decoration: none;
    transition: all 0.3s;
}

.faq-item i:first-child {
    color: #4F46E5;
    font-size: 1.1rem;
}

.faq-item span {
    flex-grow: 1;
    font-size: 0.9rem;
}

.faq-item i:last-child {
    color: #9CA3AF;
    font-size: 0.8rem;
    transition: transform 0.3s;
}

.faq-item:hover {
    background: rgba(79, 70, 229, 0.1);
    transform: translateX(5px);
    border-color: rgba(79, 70, 229, 0.4);
}

.faq-item:hover i:last-child {
    transform: translateX(3px);
}

/* Form Message Styles */
.alert-success {
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(6, 182, 212, 0.1));
    border: 1px solid rgba(16, 185, 129, 0.3);
    border-left: 4px solid #10B981;
    color: #10B981;
    padding: 16px;
    border-radius: 12px;
    animation: slideIn 0.5s;
}

.alert-error {
    background: linear-gradient(135deg, rgba(239, 68, 68, 0.1), rgba(220, 38, 38, 0.1));
    border: 1px solid rgba(239, 68, 68, 0.3);
    border-left: 4px solid #EF4444;
    color: #EF4444;
    padding: 16px;
    border-radius: 12px;
    animation: slideIn 0.5s;
}

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive Design */
@media (max-width: 991px) {
    .social-links-grid {
        grid-template-columns: repeat(4, 1fr);
    }
    
    .stats-mini {
        flex-direction: column;
        gap: 15px !important;
    }
}

@media (max-width: 576px) {
    .contact-card-enhanced {
        flex-direction: column;
        text-align: center;
    }
    
    .arrow-icon {
        display: none;
    }
    
    .social-links-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Character Counter
    const messageField = document.querySelector('textarea[name="message"]');
    const charCount = document.getElementById('charCount');
    
    if (messageField && charCount) {
        messageField.addEventListener('input', function() {
            const count = this.value.length;
            charCount.textContent = count;
            
            if (count > 1000) {
                charCount.style.color = '#EF4444';
            } else {
                charCount.style.color = '#9CA3AF';
            }
        });
    }
    
    // Form Submission
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const btn = this.querySelector('button[type="submit"]');
            const btnText = btn.querySelector('.btn-text');
            const btnLoading = btn.querySelector('.btn-loading');
            
            btnText.style.display = 'none';
            btnLoading.style.display = 'inline-flex';
            btn.disabled = true;
            
            // Simulate form submission (replace with actual AJAX call)
            setTimeout(() => {
                // Uncomment below for actual form submission
                // this.submit();
                
                // For demo - show success message
                const formMessage = document.getElementById('formMessage');
                formMessage.innerHTML = `
                    <div class="alert-success">
                        <i class="fas fa-check-circle me-2"></i>
                        <strong>Success!</strong> Your message has been sent successfully. I'll get back to you within 24 hours.
                    </div>
                `;
                formMessage.style.display = 'block';
                
                btnText.style.display = 'inline-flex';
                btnLoading.style.display = 'none';
                btn.disabled = false;
                
                // Reset form
                contactForm.reset();
                charCount.textContent = '0';
                
                // Hide message after 5 seconds
                setTimeout(() => {
                    formMessage.style.display = 'none';
                }, 5000);
            }, 2000);
        });
    }
    
    // Smooth scroll for FAQ links (if you add anchor links)
    const faqLinks = document.querySelectorAll('.faq-item');
    faqLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Add your anchor link logic here
        });
    });
});
</script>
@endpush