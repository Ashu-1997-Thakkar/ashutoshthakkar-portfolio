@extends('layouts.app')

@section('content')
<div class="container py-5 mt-5">
    <div class="row g-5">
        <div class="col-lg-5" data-aos="fade-right">
            <h6 class="text-primary fw-bold text-uppercase mb-3">Contact</h6>
            <h2 class="display-5 fw-bold mb-4">Let's Create <br><span class="text-gradient">Together</span></h2>
            <p class="text-secondary mb-5">Open for freelance opportunities and full-time roles. I'm just a message away.</p>
            
            <div class="glass-card p-4 mb-4 d-flex align-items-center gap-4">
                <div class="bg-primary p-3 rounded-circle"><i class="fas fa-envelope text-white"></i></div>
                <div>
                    <small class="text-secondary d-block">Email Me</small>
                    <span class="fw-bold">ashnandani123@gmail.com</span>
                </div>
            </div>

            <div class="glass-card p-4 d-flex align-items-center gap-4">
                <div class="bg-success p-3 rounded-circle"><i class="fas fa-phone text-white"></i></div>
                <div>
                    <small class="text-secondary d-block">Call/WhatsApp</small>
                    <span class="fw-bold">+91 74900 26191</span>
                </div>
            </div>
        </div>
        
        <div class="col-lg-7" data-aos="fade-left">
            <div class="glass-card p-5">
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="small text-secondary mb-2">Full Name</label>
                            <input type="text" name="name" class="form-control bg-dark border-0 py-3 text-white" style="border-radius: 12px;" required>
                        </div>
                        <div class="col-md-6">
                            <label class="small text-secondary mb-2">Email Address</label>
                            <input type="email" name="email" class="form-control bg-dark border-0 py-3 text-white" style="border-radius: 12px;" required>
                        </div>
                        <div class="col-12">
                            <label class="small text-secondary mb-2">Message</label>
                            <textarea name="message" class="form-control bg-dark border-0 py-3 text-white" style="border-radius: 12px;" rows="5" required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-modern w-100 py-3 mt-2">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
