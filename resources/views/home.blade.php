@extends('layouts.app')

@section('content')
<section class="hero-section" style="min-height: 100vh; display: flex; align-items: center; position: relative;">
    <div class="container">
        <div class="row align-items-center g-5">
            <!-- Left Content -->
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200">
                <div class="hero-badge mb-4" style="display: inline-block;">
                    <div style="background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.1)); border: 1px solid rgba(79, 70, 229, 0.3); border-radius: 50px; padding: 10px 20px; display: inline-flex; align-items: center; gap: 10px;">
                        <span style="width: 8px; height: 8px; background: #10B981; border-radius: 50%; animation: pulse 2s infinite;"></span>
                        <span style="color: #9CA3AF; font-size: 0.9rem; font-weight: 500;">Available for Freelance</span>
                    </div>
                </div>

                <h1 class="display-1 fw-bold mb-4" style="line-height: 1.1;">
                    Hi, I'm<br>
                    <span class="gradient-text">Ashutosh</span><br>
                    <span style="font-size: 0.6em; color: #9CA3AF;">Nandani</span>
                </h1>

                <div class="mb-4">
                    <h2 class="h3 mb-3" style="color: #E0E7FF; font-weight: 600;">
                        <span id="typed-role"></span>
                    </h2>
                </div>

                <p class="lead mb-5" style="color: #9CA3AF; max-width: 600px; font-size: 1.1rem; line-height: 1.8;">
                    Transforming ideas into powerful web applications with <strong style="color: #A78BFA;">2+ years</strong> of expertise in Laravel, PHP, and modern web technologies. Specialized in building scalable enterprise solutions.
                </p>

                <div class="d-flex flex-wrap gap-3 mb-5">
                    <a href="{{ route('projects') }}" class="btn-primary-modern">
                        <i class="fas fa-rocket me-2"></i>View My Work
                    </a>
                    <a href="{{ route('contact') }}" class="btn-outline-modern">
                        <i class="fas fa-paper-plane me-2"></i>Let's Talk
                    </a>
                </div>

                <!-- Quick Stats -->
                <div class="row g-4">
                    <div class="col-4">
                        <div class="stat-card">
                            <h3 class="gradient-text mb-1" style="font-size: 2rem; font-weight: 800;">2+</h3>
                            <p class="text-secondary mb-0" style="font-size: 0.9rem;">Years Exp.</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="stat-card">
                            <h3 class="gradient-text mb-1" style="font-size: 2rem; font-weight: 800;">50+</h3>
                            <p class="text-secondary mb-0" style="font-size: 0.9rem;">Projects</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="stat-card">
                            <h3 class="gradient-text mb-1" style="font-size: 2rem; font-weight: 800;">100%</h3>
                            <p class="text-secondary mb-0" style="font-size: 0.9rem;">Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Content - Code Preview -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200">
                <div class="glass-card-modern position-relative" style="overflow: hidden;">
                    <!-- Code Window Header -->
                    <div class="d-flex align-items-center gap-2 mb-3 pb-3" style="border-bottom: 1px solid rgba(79, 70, 229, 0.2);">
                        <span style="width: 12px; height: 12px; background: #EF4444; border-radius: 50%;"></span>
                        <span style="width: 12px; height: 12px; background: #F59E0B; border-radius: 50%;"></span>
                        <span style="width: 12px; height: 12px; background: #10B981; border-radius: 50%;"></span>
                        <span class="ms-3" style="color: #6B7280; font-size: 0.85rem; font-family: 'Courier New', monospace;">developer.php</span>
                    </div>

                    <!-- Code Content -->
                    <pre style="margin: 0; font-family: 'Courier New', monospace; font-size: 0.95rem; line-height: 1.8; color: #E0E7FF;"><code><span style="color: #A78BFA;">&lt;?php</span>

<span style="color: #60A5FA;">class</span> <span style="color: #34D399;">Developer</span> {
    <span style="color: #F59E0B;">public</span> <span style="color: #60A5FA;">string</span> $name = <span style="color: #FCD34D;">"Ashutosh Nandani"</span>;
    <span style="color: #F59E0B;">public</span> <span style="color: #60A5FA;">string</span> $role = <span style="color: #FCD34D;">"Laravel Expert"</span>;
    <span style="color: #F59E0B;">public</span> <span style="color: #60A5FA;">string</span> $location = <span style="color: #FCD34D;">"Anand, Gujarat"</span>;
    
    <span style="color: #F59E0B;">public</span> <span style="color: #60A5FA;">array</span> $skills = [
        <span style="color: #FCD34D;">"PHP"</span>, <span style="color: #FCD34D;">"Laravel"</span>, <span style="color: #FCD34D;">"MySQL"</span>,
        <span style="color: #FCD34D;">"Vtiger CRM"</span>, <span style="color: #FCD34D;">"REST APIs"</span>
    ];
    
    <span style="color: #F59E0B;">public function</span> <span style="color: #34D399;">build</span>(<span style="color: #60A5FA;">string</span> $idea) {
        <span style="color: #60A5FA;">return</span> <span style="color: #FCD34D;">"Amazing Application ✨"</span>;
    }
}
<span style="color: #A78BFA;">?&gt;</span></code></pre>

                    <!-- Glow Effect -->
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 300px; height: 300px; background: radial-gradient(circle, rgba(79, 70, 229, 0.2) 0%, transparent 70%); pointer-events: none; opacity: 0.5;"></div>
                </div>

                <!-- Floating Tech Stack Icons -->
                <div class="tech-float" style="position: absolute; top: -20px; right: -20px; width: 80px; height: 80px; background: linear-gradient(135deg, #4F46E5, #7C3AED); border-radius: 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(79, 70, 229, 0.4); animation: float 3s ease-in-out infinite;">
                    <i class="fab fa-laravel" style="font-size: 2rem; color: white;"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); animation: bounce 2s infinite;">
        <div style="width: 30px; height: 50px; border: 2px solid rgba(79, 70, 229, 0.5); border-radius: 20px; position: relative;">
            <div style="width: 6px; height: 10px; background: linear-gradient(135deg, #4F46E5, #7C3AED); border-radius: 3px; position: absolute; top: 8px; left: 50%; transform: translateX(-50%); animation: scroll 2s infinite;"></div>
        </div>
    </div>
</section>

<!-- Featured Skills Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h6 class="text-uppercase mb-2" style="color: #4F46E5; font-weight: 700; letter-spacing: 2px;">Core Expertise</h6>
            <h2 class="display-6 fw-bold">Technologies I <span class="gradient-text">Master</span></h2>
        </div>

        <div class="row g-4">
            @php
                $techs = [
                    ['name' => 'Laravel', 'icon' => 'fab fa-laravel', 'color' => '#FF2D20', 'level' => '95%'],
                    ['name' => 'PHP', 'icon' => 'fab fa-php', 'color' => '#777BB4', 'level' => '90%'],
                    ['name' => 'MySQL', 'icon' => 'fas fa-database', 'color' => '#4479A1', 'level' => '85%'],
                    ['name' => 'JavaScript', 'icon' => 'fab fa-js-square', 'color' => '#F7DF1E', 'level' => '80%'],
                    ['name' => 'Bootstrap', 'icon' => 'fab fa-bootstrap', 'color' => '#7952B3', 'level' => '92%'],
                    ['name' => 'Git', 'icon' => 'fab fa-git-alt', 'color' => '#F05032', 'level' => '88%']
                ];
            @endphp

            @foreach($techs as $index => $tech)
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="glass-card-modern h-100">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.1)); border-radius: 15px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(79, 70, 229, 0.2);">
                            <i class="{{ $tech['icon'] }}" style="font-size: 1.8rem; color: {{ $tech['color'] }};"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-1">{{ $tech['name'] }}</h5>
                            <div style="height: 6px; background: rgba(79, 70, 229, 0.1); border-radius: 3px; overflow: hidden;">
                                <div style="height: 100%; width: {{ $tech['level'] }}; background: linear-gradient(90deg, #4F46E5, #7C3AED); border-radius: 3px; transition: width 1s ease;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
@keyframes pulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.5; transform: scale(1.1); }
}

@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
}

@keyframes bounce {
    0%, 100% { transform: translateX(-50%) translateY(0); }
    50% { transform: translateX(-50%) translateY(-10px); }
}

@keyframes scroll {
    0% { top: 8px; opacity: 0; }
    50% { opacity: 1; }
    100% { top: 28px; opacity: 0; }
}
</style>
@endsection

@push('scripts')
<script>
    new Typed('#typed-role', {
        strings: [
            'Laravel Developer',
            'PHP Expert',
            'Full Stack Developer',
            'Vtiger Consultant',
            'API Specialist',
            'Database Architect'
        ],
        typeSpeed: 50,
        backSpeed: 30,
        loop: true,
        backDelay: 2000
    });
</script>
@endpush