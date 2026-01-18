@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <!-- Header -->
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge mb-3" style="background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.1)); color: #A78BFA; padding: 8px 20px; border-radius: 50px; border: 1px solid rgba(79, 70, 229, 0.3); font-weight: 600; font-size: 0.85rem; letter-spacing: 1px;">CAREER PATH</span>
            <h1 class="display-4 fw-bold mb-3">
                Professional <span class="gradient-text">Journey</span>
            </h1>
            <p class="lead" style="color: #9CA3AF; max-width: 700px; margin: 0 auto;">
                Building expertise through diverse experiences and challenging projects
            </p>
        </div>

        <!-- Timeline -->
        <div class="position-relative" style="padding: 2rem 0;">
            <!-- Timeline Line -->
            <div style="position: absolute; left: 50%; top: 0; bottom: 0; width: 2px; background: linear-gradient(180deg, transparent, rgba(79, 70, 229, 0.3), transparent); transform: translateX(-50%);" class="d-none d-lg-block"></div>

            @php
                $experiences = [
                    [
                        'role' => 'WordPress Developer',
                        'company' => 'Information Technology Centre (ITC), Anand',
                        'duration' => 'Dec 2024 — Present',
                        'current' => true,
                        'icon' => 'fab fa-wordpress',
                        'color' => '#00749C',
                        'gradient' => 'linear-gradient(135deg, #00749C, #0099D6)',
                        'desc' => 'Leading WordPress development initiatives, architecting custom themes and plugins for institutional web platforms. Optimizing site performance and implementing modern web standards for enhanced user experiences.',
                        'achievements' => [
                            'Improved site performance by 40%',
                            'Developed 5+ custom plugins',
                            'Managed 10+ WordPress installations'
                        ]
                    ],
                    [
                        'role' => 'Freelance Laravel Developer',
                        'company' => 'DIGITriv Techno, Ahmedabad',
                        'duration' => 'Oct 2024 — Present',
                        'current' => true,
                        'icon' => 'fab fa-laravel',
                        'color' => '#FF2D20',
                        'gradient' => 'linear-gradient(135deg, #FF2D20, #FF6B6B)',
                        'desc' => 'Crafting robust Laravel applications with focus on scalability and clean architecture. Building RESTful APIs, implementing complex business logic, and designing efficient database structures for diverse client requirements.',
                        'achievements' => [
                            'Delivered 8+ custom Laravel apps',
                            'Built scalable REST APIs',
                            'Optimized database queries by 60%'
                        ]
                    ],
                    [
                        'role' => 'Trainee Laravel Developer',
                        'company' => 'Windzoon Techno Pvt Ltd',
                        'duration' => 'Mar 2024 — Sep 2024',
                        'current' => false,
                        'icon' => 'fas fa-graduation-cap',
                        'color' => '#F59E0B',
                        'gradient' => 'linear-gradient(135deg, #F59E0B, #FBBF24)',
                        'desc' => 'Intensive training in Laravel ecosystem and modern PHP practices. Participated in enterprise-level projects, learning code migration strategies, version control best practices, and agile development methodologies.',
                        'achievements' => [
                            'Completed 15+ training modules',
                            'Contributed to 3 major projects',
                            'Mastered Laravel best practices'
                        ]
                    ],
                    [
                        'role' => 'Junior PHP Developer',
                        'company' => 'Krupa Info Service',
                        'duration' => 'Jun 2023 — Jan 2024',
                        'current' => false,
                        'icon' => 'fab fa-php',
                        'color' => '#777BB4',
                        'gradient' => 'linear-gradient(135deg, #777BB4, #8892D6)',
                        'desc' => 'Foundation role working with core PHP, maintaining legacy systems, and transitioning to modern frameworks. Gained valuable experience in debugging, code optimization, and understanding production environments.',
                        'achievements' => [
                            'Fixed 100+ production bugs',
                            'Maintained 5+ legacy systems',
                            'Improved code quality standards'
                        ]
                    ]
                ];
            @endphp

            @foreach($experiences as $index => $exp)
            <div class="row mb-5 position-relative" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                <!-- Desktop Layout -->
                <div class="col-lg-6 {{ $index % 2 == 0 ? 'text-lg-end' : 'offset-lg-6' }} d-none d-lg-block">
                    <div class="glass-card-modern {{ $index % 2 == 0 ? 'me-4' : 'ms-4' }}" style="position: relative;">
                        <!-- Current Badge -->
                        @if($exp['current'])
                        <div style="position: absolute; top: -12px; right: 20px; padding: 6px 16px; background: linear-gradient(135deg, #10B981, #06B6D4); border-radius: 20px; font-size: 0.75rem; font-weight: 700; color: white; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
                            <i class="fas fa-circle me-1" style="font-size: 0.5rem; animation: pulse 2s infinite;"></i>
                            CURRENT
                        </div>
                        @endif

                        <div class="d-flex align-items-start gap-4 mb-4">
                            <div style="width: 80px; height: 80px; background: {{ $exp['gradient'] }}; border-radius: 20px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; box-shadow: 0 10px 30px {{ $exp['color'] }}40;">
                                <i class="{{ $exp['icon'] }}" style="font-size: 2.2rem; color: white;"></i>
                            </div>
                            <div class="flex-grow-1 {{ $index % 2 == 0 ? 'text-end' : '' }}">
                                <h3 class="mb-2">{{ $exp['role'] }}</h3>
                                <h5 class="mb-2" style="color: #A78BFA;">{{ $exp['company'] }}</h5>
                                <span style="padding: 6px 15px; background: rgba(79, 70, 229, 0.1); border-radius: 20px; font-size: 0.85rem; color: #9CA3AF; display: inline-block;">
                                    <i class="far fa-calendar-alt me-1"></i>{{ $exp['duration'] }}
                                </span>
                            </div>
                        </div>

                        <p style="color: #9CA3AF; line-height: 1.8; margin-bottom: 1.5rem;">
                            {{ $exp['desc'] }}
                        </p>

                        <div class="achievements">
                            <h6 class="mb-3" style="color: #E0E7FF; font-weight: 600;">
                                <i class="fas fa-trophy me-2" style="color: {{ $exp['color'] }};"></i>Key Achievements
                            </h6>
                            <ul class="list-unstyled mb-0">
                                @foreach($exp['achievements'] as $achievement)
                                <li class="mb-2 d-flex align-items-start gap-2 {{ $index % 2 == 0 ? 'justify-content-end' : '' }}">
                                    @if($index % 2 != 0)
                                    <i class="fas fa-check-circle mt-1" style="color: {{ $exp['color'] }}; flex-shrink: 0;"></i>
                                    @endif
                                    <span style="color: #9CA3AF;">{{ $achievement }}</span>
                                    @if($index % 2 == 0)
                                    <i class="fas fa-check-circle mt-1" style="color: {{ $exp['color'] }}; flex-shrink: 0;"></i>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Mobile Layout -->
                <div class="col-12 d-lg-none">
                    <div class="glass-card-modern position-relative">
                        @if($exp['current'])
                        <div style="position: absolute; top: -12px; right: 20px; padding: 6px 16px; background: linear-gradient(135deg, #10B981, #06B6D4); border-radius: 20px; font-size: 0.75rem; font-weight: 700; color: white;">
                            <i class="fas fa-circle me-1" style="font-size: 0.5rem;"></i>CURRENT
                        </div>
                        @endif

                        <div class="d-flex align-items-start gap-3 mb-4">
                            <div style="width: 70px; height: 70px; background: {{ $exp['gradient'] }}; border-radius: 18px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="{{ $exp['icon'] }}" style="font-size: 2rem; color: white;"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h4 class="mb-2">{{ $exp['role'] }}</h4>
                                <h6 class="mb-2" style="color: #A78BFA;">{{ $exp['company'] }}</h6>
                                <span style="padding: 5px 12px; background: rgba(79, 70, 229, 0.1); border-radius: 15px; font-size: 0.8rem; color: #9CA3AF;">
                                    {{ $exp['duration'] }}
                                </span>
                            </div>
                        </div>

                        <p style="color: #9CA3AF; line-height: 1.7; margin-bottom: 1.5rem;">
                            {{ $exp['desc'] }}
                        </p>

                        <div>
                            <h6 class="mb-3" style="color: #E0E7FF; font-weight: 600;">
                                <i class="fas fa-trophy me-2" style="color: {{ $exp['color'] }};"></i>Achievements
                            </h6>
                            <ul class="list-unstyled mb-0">
                                @foreach($exp['achievements'] as $achievement)
                                <li class="mb-2 d-flex align-items-start gap-2">
                                    <i class="fas fa-check-circle mt-1" style="color: {{ $exp['color'] }}; flex-shrink: 0;"></i>
                                    <span style="color: #9CA3AF;">{{ $achievement }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Timeline Dot (Desktop) -->
                <div class="d-none d-lg-block" style="position: absolute; left: 50%; top: 40px; transform: translateX(-50%); z-index: 10;">
                    <div style="width: 20px; height: 20px; background: {{ $exp['gradient'] }}; border: 4px solid var(--dark); border-radius: 50%; box-shadow: 0 0 20px {{ $exp['color'] }}80;"></div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Career Stats -->
        <div class="glass-card-modern mt-5" style="background: linear-gradient(135deg, rgba(79, 70, 229, 0.05), rgba(124, 58, 237, 0.05));" data-aos="fade-up">
            <div class="row g-4 text-center">
                <div class="col-md-3 col-6">
                    <div class="p-3">
                        <div class="gradient-text mb-2" style="font-size: 2.5rem; font-weight: 800;">4</div>
                        <p class="text-secondary mb-0">Companies</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-3">
                        <div class="gradient-text mb-2" style="font-size: 2.5rem; font-weight: 800;">2+</div>
                        <p class="text-secondary mb-0">Years</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-3">
                        <div class="gradient-text mb-2" style="font-size: 2.5rem; font-weight: 800;">50+</div>
                        <p class="text-secondary mb-0">Projects</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-3">
                        <div class="gradient-text mb-2" style="font-size: 2.5rem; font-weight: 800;">100%</div>
                        <p class="text-secondary mb-0">Dedication</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection