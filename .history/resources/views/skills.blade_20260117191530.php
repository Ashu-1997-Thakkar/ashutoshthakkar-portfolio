@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <!-- Header -->
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge mb-3" style="background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.1)); color: #A78BFA; padding: 8px 20px; border-radius: 50px; border: 1px solid rgba(79, 70, 229, 0.3); font-weight: 600; font-size: 0.85rem; letter-spacing: 1px;">TECHNICAL ARSENAL</span>
            <h1 class="display-4 fw-bold mb-3">
                My Tech <span class="gradient-text">Stack</span>
            </h1>
            <p class="lead" style="color: #9CA3AF; max-width: 700px; margin: 0 auto;">
                Mastering modern technologies to build powerful, scalable web solutions
            </p>
        </div>

        <!-- Skills Grid -->
        <div class="row g-4 mb-5">
            @php
                $skills = [
                    [
                        'name' => 'Laravel',
                        'icon' => 'fab fa-laravel',
                        'color' => '#FF2D20',
                        'level' => 95,
                        'projects' => '30+ Projects',
                        'gradient' => 'linear-gradient(135deg, #FF2D20, #FF6B6B)'
                    ],
                    [
                        'name' => 'PHP',
                        'icon' => 'fab fa-php',
                        'color' => '#777BB4',
                        'level' => 90,
                        'projects' => '50+ Projects',
                        'gradient' => 'linear-gradient(135deg, #777BB4, #8892D6)'
                    ],
                    [
                        'name' => 'MySQL',
                        'icon' => 'fas fa-database',
                        'color' => '#4479A1',
                        'level' => 85,
                        'projects' => '40+ Databases',
                        'gradient' => 'linear-gradient(135deg, #4479A1, #5B9BD5)'
                    ],
                    [
                        'name' => 'Vtiger CRM',
                        'icon' => 'fas fa-cogs',
                        'color' => '#FF9900',
                        'level' => 88,
                        'projects' => '15+ Implementations',
                        'gradient' => 'linear-gradient(135deg, #FF9900, #FFB84D)'
                    ],
                    [
                        'name' => 'JavaScript',
                        'icon' => 'fab fa-js-square',
                        'color' => '#F7DF1E',
                        'level' => 80,
                        'projects' => '25+ Applications',
                        'gradient' => 'linear-gradient(135deg, #F7DF1E, #FFE97D)'
                    ],
                    [
                        'name' => 'Bootstrap',
                        'icon' => 'fab fa-bootstrap',
                        'color' => '#7952B3',
                        'level' => 92,
                        'projects' => '45+ Websites',
                        'gradient' => 'linear-gradient(135deg, #7952B3, #9B6FD4)'
                    ]
                ];
            @endphp

            @foreach($skills as $index => $skill)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="glass-card-modern h-100 skill-card" style="position: relative; overflow: hidden;">
                    <!-- Background Glow -->
                    <div style="position: absolute; top: 0; right: 0; width: 150px; height: 150px; background: {{ $skill['gradient'] }}; opacity: 0.1; border-radius: 50%; filter: blur(40px); transition: all 0.3s;"></div>
                    
                    <div class="position-relative">
                        <!-- Icon & Title -->
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <div style="width: 70px; height: 70px; background: {{ $skill['gradient'] }}; border-radius: 18px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px {{ $skill['color'] }}40; position: relative;">
                                <i class="{{ $skill['icon'] }}" style="font-size: 2rem; color: white;"></i>
                                <!-- Pulse Animation -->
                                <div style="position: absolute; width: 100%; height: 100%; border-radius: 18px; background: {{ $skill['gradient'] }}; opacity: 0; animation: pulse-ring 2s infinite;"></div>
                            </div>
                            <div class="flex-grow-1">
                                <h4 class="mb-1">{{ $skill['name'] }}</h4>
                                <p class="mb-0 small" style="color: #9CA3AF;">{{ $skill['projects'] }}</p>
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span style="color: #9CA3AF; font-size: 0.9rem; font-weight: 500;">Proficiency</span>
                                <span style="color: {{ $skill['color'] }}; font-weight: 700; font-size: 1.1rem;">{{ $skill['level'] }}%</span>
                            </div>
                            <div style="height: 10px; background: rgba(79, 70, 229, 0.1); border-radius: 5px; overflow: hidden;">
                                <div class="skill-progress" style="height: 100%; width: 0; background: {{ $skill['gradient'] }}; border-radius: 5px; transition: width 1.5s cubic-bezier(0.4, 0, 0.2, 1);"></div>
                            </div>
                        </div>

                        <!-- Key Features -->
                        <div class="d-flex flex-wrap gap-2">
                            @php
                                $features = [
                                    'Laravel' => ['MVC', 'Eloquent', 'Blade'],
                                    'PHP' => ['OOP', 'PSR', 'Composer'],
                                    'MySQL' => ['Query', 'Index', 'Relations'],
                                    'Vtiger CRM' => ['Custom', 'Workflow', 'API'],
                                    'JavaScript' => ['ES6+', 'AJAX', 'DOM'],
                                    'Bootstrap' => ['Grid', 'Components', 'Responsive']
                                ];
                            @endphp
                            @foreach($features[$skill['name']] as $feature)
                            <span style="padding: 5px 12px; background: rgba(79, 70, 229, 0.1); border: 1px solid rgba(79, 70, 229, 0.2); border-radius: 20px; font-size: 0.75rem; color: #A78BFA;">{{ $feature }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Additional Skills -->
        <div class="row g-4 mb-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="glass-card-modern h-100">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #06B6D4, #7C3AED); border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-code" style="font-size: 1.8rem; color: white;"></i>
                        </div>
                        <h4 class="mb-0">Frontend Technologies</h4>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        @foreach(['HTML5', 'CSS3', 'Tailwind CSS', 'jQuery', 'AJAX', 'Responsive Design'] as $tech)
                        <span style="padding: 8px 16px; background: linear-gradient(135deg, rgba(6, 182, 212, 0.1), rgba(124, 58, 237, 0.1)); border: 1px solid rgba(6, 182, 212, 0.3); border-radius: 25px; font-size: 0.9rem; color: #06B6D4; font-weight: 500;">
                            {{ $tech }}
                        </span>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left">
                <div class="glass-card-modern h-100">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #4F46E5, #EC4899); border-radius: 15px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-tools" style="font-size: 1.8rem; color: white;"></i>
                        </div>
                        <h4 class="mb-0">Tools & Platforms</h4>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        @foreach(['Git', 'GitHub', 'VS Code', 'Postman', 'Composer', 'NPM'] as $tool)
                        <span style="padding: 8px 16px; background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(236, 72, 153, 0.1)); border: 1px solid rgba(79, 70, 229, 0.3); border-radius: 25px; font-size: 0.9rem; color: #7C3AED; font-weight: 500;">
                            {{ $tool }}
                        </span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Learning Path -->
        <div class="glass-card-modern" style="background: linear-gradient(135deg, rgba(79, 70, 229, 0.05), rgba(124, 58, 237, 0.05));" data-aos="fade-up">
            <div class="text-center mb-4">
                <h3 class="mb-3"><i class="fas fa-graduation-cap me-2" style="color: #4F46E5;"></i>Currently Learning</h3>
            </div>
            <div class="row g-3">
                @foreach(['Vue.js', 'React', 'Docker', 'AWS'] as $learning)
                <div class="col-md-3 col-6">
                    <div class="text-center p-3" style="background: rgba(79, 70, 229, 0.1); border-radius: 15px; border: 1px dashed rgba(79, 70, 229, 0.3);">
                        <i class="fas fa-book-open mb-2" style="color: #A78BFA; font-size: 1.5rem;"></i>
                        <p class="mb-0 fw-semibold" style="color: #E0E7FF;">{{ $learning }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<style>
@keyframes pulse-ring {
    0% {
        opacity: 0.5;
        transform: scale(1);
    }
    50% {
        opacity: 0;
        transform: scale(1.2);
    }
    100% {
        opacity: 0;
        transform: scale(1);
    }
}

.skill-card:hover .skill-progress {
    width: var(--skill-width) !important;
}
</style>
@endsection

@push('scripts')
<script>
    // Animate skill bars on scroll
    document.addEventListener('DOMContentLoaded', function() {
        const skills = @json($skills);
        const skillCards = document.querySelectorAll('.skill-card');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    const progressBar = entry.target.querySelector('.skill-progress');
                    const level = skills[index].level;
                    progressBar.style.setProperty('--skill-width', level + '%');
                    setTimeout(() => {
                        progressBar.style.width = level + '%';
                    }, index * 100);
                }
            });
        }, { threshold: 0.5 });
        
        skillCards.forEach(card => observer.observe(card));
    });
</script>
@endpush