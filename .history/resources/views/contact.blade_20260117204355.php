@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="py-5 position-relative overflow-hidden">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="d-inline-flex align-items-center gap-2 mb-3" style="padding: 10px 25px; background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.1)); border: 1px solid rgba(79, 70, 229, 0.3); border-radius: 50px;">
                <span style="width: 10px; height: 10px; background: #10B981; border-radius: 50%; animation: pulse 2s infinite;"></span>
                <span style="color: #A78BFA; font-weight: 600; font-size: 0.85rem; letter-spacing: 1px;">AVAILABLE FOR PROJECTS</span>
            </div>
            <h1 class="display-3 fw-bold mb-4">
                Let's Build Something <br><span class="gradient-text">Extraordinary</span>
            </h1>
            <p class="lead mx-auto" style="color: #9CA3AF; max-width: 650px; font-size: 1.2rem; line-height: 1.8;">
                Turn your vision into reality with expert Laravel development. From concept to deployment, I'm here to make it happen.
            </p>
        </div>

        <!-- Stats Cards -->
        <div class="row g-4 mb-5" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-3 col-6">
                <div class="glass-card-modern text-center p-4" style="background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(6, 182, 212, 0.05));">
                    <div class="gradient-text mb-2" style="font-size: 2.5rem; font-weight: 800;">24h</div>
                    <p class="mb-0 small" style="color: #9CA3AF;">Response Time</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="glass-card-modern text-center p-4" style="background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.05));">
                    <div class="gradient-text mb-2" style="font-size: 2.5rem; font-weight: 800;">50+</div>
                    <p class="mb-0 small" style="color: #9CA3AF;">Projects Done</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="glass-card-modern text-center p-4" style="background: linear-gradient(135deg, rgba(236, 72, 153, 0.1), rgba(244, 114, 182, 0.05));">
                    <div class="gradient-text mb-2" style="font-size: 2.5rem; font-weight: 800;">100%</div>
                    <p class="mb-0 small" style="color: #9CA3AF;">Satisfaction</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="glass-card-modern text-center p-4" style="background: linear-gradient(135deg, rgba(245, 158, 11, 0.1), rgba(251, 191, 36, 0.05));">
                    <div class="gradient-text mb-2" style="font-size: 2.5rem; font-weight: 800;">2+</div>
                    <p class="mb-0 small" style="color: #9CA3AF;">Years Exp</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Contact Section -->
<section class="pb-5">
    <div class="container">
        <div class="row g-5">
            <!-- Left Side - Contact Info & Map -->
            <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1200">
                <!-- Quick Connect -->
                <div class="glass-card-modern mb-4" style="background: linear-gradient(135deg, rgba(79, 70, 229, 0.05), rgba(124, 58, 237, 0.05)); border-left: 4px solid #4F46E5;">
                    <div class="d-flex align-items-start gap-3 mb-3">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #4F46E5, #7C3AED); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fas fa-bolt" style="color: white; font-size: 1.3rem;"></i>
                        </div>
                        <div>
                            <h4 class="mb-2">Quick Connect</h4>
                            <p class="mb-0" style="color: #9CA3AF; line-height: 1.7;">
                                Need immediate assistance? I'm available for urgent project discussions and consultations.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Contact Methods -->
                <div class="mb-4">
                    <h5 class="mb-4" style="color: #E0E7FF; font-weight: 600;">
                        <i class="fas fa-address-card me-2" style="color: #4F46E5;"></i>Contact Methods
                    </h5>

                    <!-- Email -->
                    <a href="mailto:ashnandani123@gmail.com" class="text-decoration-none mb-3 d-block" data-aos="fade-up" data-aos-delay="100">
                        <div class="glass-card-modern contact-card-modern" style="position: relative; overflow: hidden;">
                            <div class="d-flex align-items-center gap-4">
                                <div class="contact-icon-wrapper" style="width: 70px; height: 70px; background: linear-gradient(135deg, #4F46E5, #7C3AED); border-radius: 18px; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
                                    <i class="fas fa-envelope" style="font-size: 1.8rem; color: white; position: relative; z-index: 2;"></i>
                                    <div class="icon-glow"></div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-1 small" style="color: #9CA3AF; font-weight: 500;">Email Address</p>
                                    <h5 class="mb-0" style="color: #E0E7FF; font-weight: 600;">ashnandani123@gmail.com</h5>
                                    <p class="mb-0 small" style="color: #6366F1; margin-top: 4px;">
                                        <i class="fas fa-arrow-right me-1"></i>Click to send email
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Phone -->
                    <a href="tel:+917490026191" class="text-decoration-none mb-3 d-block" data-aos="fade-up" data-aos-delay="200">
                        <div class="glass-card-modern contact-card-modern" style="position: relative; overflow: hidden;">
                            <div class="d-flex align-items-center gap-4">
                                <div class="contact-icon-wrapper" style="width: 70px; height: 70px; background: linear-gradient(135deg, #10B981, #06B6D4); border-radius: 18px; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
                                    <i class="fas fa-phone-alt" style="font-size: 1.8rem; color: white; position: relative; z-index: 2;"></i>
                                    <div class="icon-glow"></div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-1 small" style="color: #9CA3AF; font-weight: 500;">Phone Number</p>
                                    <h5 class="mb-0" style="color: #E0E7FF; font-weight: 600;">+91 74900 26191</h5>
                                    <p class="mb-0 small" style="color: #10B981; margin-top: 4px;">
                                        <i class="fas fa-arrow-right me-1"></i>Call now
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- WhatsApp -->
                    <a href="https://wa.me/917490026191" target="_blank" class="text-decoration-none mb-3 d-block" data-aos="fade-up" data-aos-delay="300">
                        <div class="glass-card-modern contact-card-modern" style="position: relative; overflow: hidden;">
                            <div class="d-flex align-items-center gap-4">
                                <div class="contact-icon-wrapper" style="width: 70px; height: 70px; background: linear-gradient(135deg, #25D366, #128C7E); border-radius: 18px; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
                                    <i class="fab fa-whatsapp" style="font-size: 2rem; color: white; position: relative; z-index: 2;"></i>
                                    <div class="icon-glow"></div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-1 small" style="color: #9CA3AF; font-weight: 500;">WhatsApp</p>
                                    <h5 class="mb-0" style="color: #E0E7FF; font-weight: 600;">+91 74900 26191</h5>
                                    <p class="mb-0 small" style="color: #25D366; margin-top: 4px;">
                                        <i class="fas fa-arrow-right me-1"></i>Chat on WhatsApp
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Location -->
                    <div class="glass-card-modern mb-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="d-flex align-items-center gap-4">
                            <div class="contact-icon-wrapper" style="width: 70px; height: 70px; background: linear-gradient(135deg, #EC4899, #F472B6); border-radius: 18px; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
                                <i class="fas fa-map-marker-alt" style="font-size: 1.8rem; color: white; position: relative; z-index: 2;"></i>
                                <div class="icon-glow"></div>
                            </div>
                            <div class="flex-grow-1">
                                <p class="mb-1 small" style="color: #9CA3AF; font-weight: 500;">Location</p>
                                <h5 class="mb-0" style="color: #E0E7FF; font-weight: 600;">Anand, Gujarat</h5>
                                <p class="mb-0 small" style="color: #9CA3AF; margin-top: 4px;">India - 388001</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Map Section -->
                <div class="glass-card-modern p-0 overflow-hidden" data-aos="fade-up" data-aos-delay="500">
                    <div style="position: relative; padding-bottom: 75%; height: 0; overflow: hidden; border-radius: 20px;">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118143.68143734488!2d72.8479986!3d22.5572076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e4e7ae0b46d6d%3A0x68cf527af9bb564e!2sAnand%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1234567890"
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0; filter: grayscale(20%) contrast(1.1);"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="p-3" style="background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.05));">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1" style="color: #E0E7FF;">Anand, Gujarat, India</h6>
                                <p class="mb-0 small" style="color: #9CA3AF;">Available for remote & on-site projects</p>
                            </div>
                            <a href="https://www.google.com/maps/place/Anand,+Gujarat/@22.5572076,72.8479986,12z" target="_blank" class="btn btn-sm" style="background: linear-gradient(135deg, #4F46E5, #7C3AED); color: white; border: none; padding: 8px 20px; border-radius: 8px; font-weight: 600;">
                                <i class="fas fa-directions me-1"></i>Get Directions
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Social Connect -->
                <div class="glass-card-modern mt-4" data-aos="fade-up" data-aos-delay="600">
                    <h5 class="mb-4" style="color: #E0E7FF; font-weight: 600;">
                        <i class="fas fa-share-alt me-2" style="color: #4F46E5;"></i>Connect on Social
                    </h5>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="https://linkedin.com/in/ashutosh-nandani-a527b9156" target="_blank" class="social-link-modern">
                            <div style="width: 65px; height: 65px; background: linear-gradient(135deg, #0077B5, #00A0DC); border-radius: 15px; display: flex; align-items: center; justify-content: center; transition: all 0.3s; position: relative; overflow: hidden;">
                                <i class="fab fa-linkedin-in" style="font-size: 1.8rem; color: white; position: relative; z-index: 2;"></i>
                                <div class="social-glow"></div>
                            </div>
                            <p class="mb-0 mt-2 small text-center" style="color: #9CA3AF;">LinkedIn</p>
                        </a>
                        <a href="https://github.com/Ashu-1997-Thakkar" target="_blank" class="social-link-modern">
                            <div style="width: 65px; height: 65px; background: linear-gradient(135deg, #333, #24292E); border-radius: 15px; display: flex; align-items: center; justify-content: center; transition: all 0.3s; position: relative; overflow: hidden;">
                                <i class="fab fa-github" style="font-size: 1.8rem; color: white; position: relative; z-index: 2;"></i>
                                <div class="social-glow"></div>
                            </div>
                            <p class="mb-0 mt-2 small text-center" style="color: #9CA3AF;">GitHub</p>
                        </a>
                        <a href="mailto:ashnandani123@gmail.com" class="social-link-modern">
                            <div style="width: 65px; height: 65px; background: linear-gradient(135deg, #EA4335, #FBBC05); border-radius: 15px; display: flex; align-items: center; justify-content: center; transition: all 0.3s; position: relative; overflow: hidden;">
                                <i class="fas fa-envelope" style="font-size: 1.8rem; color: white; position: relative; z-index: 2;"></i>
                                <div class="social-glow"></div>
                            </div>
                            <p class="mb-0 mt-2 small text-center" style="color: #9CA3AF;">Email</p>
                        </a>
                        <a href="https://wa.me/917490026191" target="_blank" class="social-link-modern">
                            <div style="width: 65px; height: 65px; background: linear-gradient(135deg, #25D366, #128C7E); border-radius: 15px; display: flex; align-items: center; justify-content: center; transition: all 0.3s; position: relative; overflow: hidden;">
                                <i class="fab fa-whatsapp" style="font-size: 1.8rem; color: white; position: relative; z-index: 2;"></i>
                                <div class="social-glow"></div>
                            </div>
                            <p class="mb-0 mt-2 small text-center" style="color: #9CA3AF;">WhatsApp</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Side - Contact Form -->
            <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1200">
                <div class="glass-card-modern" style="background: linear-gradient(135deg, rgba(79, 70, 229, 0.03), rgba(124, 58, 237, 0.02)); position: relative; overflow: hidden;">
                    <!-- Background Pattern -->
                    <div style="position: absolute; top: 0; right: 0; width: 300px; height: 300px; background: radial-gradient(circle, rgba(79, 70, 229, 0.1) 0%, transparent 70%); pointer-events: none;"></div>
                    
                    <div style="position: relative; z-index: 2;">
                        <div class="mb-4">
                            <h3 class="mb-2" style="font-size: 2rem;">Send a Message</h3>
                            <p style="color: #9CA3AF;">Fill out the form below and I'll get back to you within 24 hours</p>
                        </div>

                        <form action="{{ route('contact.submit') }}" method="POST" id="contactForm">
                            @csrf
                            <div class="row g-4">
                                <!-- Name Field -->
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label class="form-label-modern">
                                            <i class="fas fa-user me-2" style="color: #4F46E5;"></i>Full Name
                                            <span style="color: #EF4444;">*</span>
                                        </label>
                                        <input type="text" name="name" class="form-control-ultra" placeholder="John Doe" required>
                                    </div>
                                </div>

                                <!-- Email Field -->
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label class="form-label-modern">
                                            <i class="fas fa-envelope me-2" style="color: #4F46E5;"></i>Email Address
                                            <span style="color: #EF4444;">*</span>
                                        </label>
                                        <input type="email" name="email" class="form-control-ultra" placeholder="john@example.com" required>
                                    </div>
                                </div>

                                <!-- Phone Field -->
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label class="form-label-modern">
                                            <i class="fas fa-phone me-2" style="color: #4F46E5;"></i>Phone Number
                                        </label>
                                        <input type="tel" name="phone" class="form-control-ultra" placeholder="+91 98765 43210">
                                    </div>
                                </div>

                                <!-- Subject Field -->
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label class="form-label-modern">
                                            <i class="fas fa-tag me-2" style="color: #4F46E5;"></i>Subject
                                        </label>
                                        <select name="subject" class="form-control-ultra">
                                            <option value="">Select a subject</option>
                                            <option value="web_development">Web Development</option>
                                            <option value="laravel_project">Laravel Project</option>
                                            <option value="crm_integration">CRM Integration</option>
                                            <option value="api_development">API Development</option>
                                            <option value="consultation">Consultation</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Budget Field -->
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label class="form-label-modern">
                                            <i class="fas fa-dollar-sign me-2" style="color: #4F46E5;"></i>Project Budget
                                        </label>
                                        <select name="budget" class="form-control-ultra">
                                            <option value="">Select budget range</option>
                                            <option value="under_1000">Under $1,000</option>
                                            <option value="1000_5000">$1,000 - $5,000</option>
                                            <option value="5000_10000">$5,000 - $10,000</option>
                                            <option value="10000_plus">$10,000+</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Timeline Field -->
                                <div class="col-md-6">
                                    <div class="form-group-modern">
                                        <label class="form-label-modern">
                                            <i class="fas fa-clock me-2" style="color: #4F46E5;"></i>Timeline
                                        </label>
                                        <select name="timeline" class="form-control-ultra">
                                            <option value="">Expected completion</option>
                                            <option value="urgent">Urgent (Within 1 week)</option>
                                            <option value="1_month">1 Month</option>
                                            <option value="2_3_months">2-3 Months</option>
                                            <option value="flexible">Flexible</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Message Field -->
                                <div class="col-12">
                                    <div class="form-group-modern">
                                        <label class="form-label-modern">
                                            <i class="fas fa-comment-dots me-2" style="color: #4F46E5;"></i>Project Details
                                            <span style="color: #EF4444;">*</span>
                                        </label>
                                        <textarea name="message" class="form-control-ultra" rows="6" placeholder="Tell me about your project requirements, goals, and any specific features you need..." required></textarea>
                                        <div class="d-flex justify-content-between mt-2">
                                            <small style="color: #6B7280;">Be as detailed as possible</small>
                                            <small style="color: #6B7280;" id="charCount">0 / 1000</small>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12">
                                    <button type="submit" class="btn-submit-modern w-100">
                                        <span class="btn-content">
                                            <i class="fas fa-paper-plane me-2"></i>Send Message
                                        </span>
                                        <span class="btn-loading" style="display: none;">
                                            <i class="fas fa-spinner fa-spin me-2"></i>Sending...
                                        </span>
                                    </button>
                                </div>

                                <!-- Privacy Note -->
                                <div class="col-12">
                                    <div class="p-3" style="background: rgba(79, 70, 229, 0.05); border-left: 3px solid #4F46E5; border-radius: 8px;">
                                        <div class="d-flex align-items-start gap-2">
                                            <i class="fas fa-shield-alt mt-1" style="color: #4F46E5;"></i>
                                            <small style="color: #9CA3AF; line-height: 1.6;">
                                                Your information is secure and will never be shared. I respect your privacy and will only use this data to respond to your inquiry.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Success Alert -->
                <div class="glass-card-modern mt-4" id="successAlert" style="background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(6, 182, 212, 0.05)); border-left: 4px solid #10B981; display: none;">
                    <div class="d-flex align-items-center gap-3">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #10B981, #06B6D4); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-check" style="color: white; font-size: 1.5rem;"></i>
                        </div>
                        <div>
                            <h6 class="mb-1" style="color: #10B981; font-weight: 700;">Message Sent Successfully!</h6>
                            <p class="mb-0" style="color: #9CA3AF; font-size: 0.9rem;">I'll get back to you within 24 hours.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-6 fw-bold mb-3">
                Frequently Asked <span class="gradient-text">Questions</span>
            </h2>
        </div>

        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="glass-card-modern">
                    <h5 class="mb-3" style="color: #E0E7FF;">
                        <i class="fas fa-question-circle me-2" style="color: #4F46E5;"></i>
                        What's your typical response time?
                    </h5>
                    <p style="color: #9CA3AF; margin: 0; line-height: 1.7;">
                        I typically respond to all inquiries within 24 hours on business days. For urgent projects, I can arrange a call within a few hours.
                    </p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="glass-card-modern">
                    <h5 class="mb-3" style="color: #E0E7FF;">
                        <i class="fas fa-question-circle me-2" style="color: #4F46E5;"></i>
                        Do you work on existing projects?
                    </h5>
                    <p style="color: #9CA3AF; margin: 0; line-height: 1.7;">
                        Absolutely! I can help with bug fixes, feature additions, code optimization, and complete project refactoring for existing Laravel applications.
                    </p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="glass-card-modern">
                    <h5 class="mb-3" style="color: #E0E7FF;">
                        <i class="fas fa-question-circle me-2" style="color: #4F46E5;"></i>
                        What are your working hours?
                    </h5>
                    <p style="color: #9CA3AF; margin: 0; line-height: 1.7;">
                        I'm flexible with time zones and can adjust my schedule to match your requirements. Generally available 9 AM - 8 PM IST, Monday to Saturday.
                    </p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="glass-card-modern">
                    <h5 class="mb-3" style="color: #E0E7FF;">
                        <i class="fas fa-question-circle me-2" style="color: #4F46E5;"></i>
                        Do you provide post-launch support?
                    </h5>
                    <p style="color: #9CA3AF; margin: 0; line-height: 1.7;">
                        Yes! I offer ongoing maintenance, support, and updates for all projects. We can discuss a custom support plan based on your needs.
                    </p>
                </div>
            </div>