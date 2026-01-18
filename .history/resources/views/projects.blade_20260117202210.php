@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <!-- Header -->
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge mb-3" style="background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.1)); color: #A78BFA; padding: 8px 20px; border-radius: 50px; border: 1px solid rgba(79, 70, 229, 0.3); font-weight: 600; font-size: 0.85rem; letter-spacing: 1px;">PORTFOLIO</span>
            <h1 class="display-4 fw-bold mb-3">
                Featured <span class="gradient-text">Projects</span>
            </h1>
            <p class="lead" style="color: #9CA3AF; max-width: 700px; margin: 0 auto;">
                Showcasing innovative solutions that blend creativity with cutting-edge technology
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="row g-4 mb-5">
            @php
                $projects = [
                    [
                        'name' => 'Facebook Clone',
                        'category' => 'Social Network',
                        'tech' => ['Laravel', 'MySQL', 'AJAX', 'Bootstrap'],
                        'desc' => 'A comprehensive social media platform featuring real-time notifications, friend management, post interactions, and dynamic content feeds. Built with modern Laravel practices and responsive design.',
                        'features' => ['Real-time Updates', 'Friend System', 'Post Interactions', 'Media Uploads'],
                        'github' => 'https://github.com/Ashu-1997-Thakkar/facebook-clone.git',
                        'color' => '#1877F2',
                        'gradient' => 'linear-gradient(135deg, #1877F2, #42A5F5)'
                    ],
                    [
                        'name' => 'E-Commerce Platform',
                        'category' => 'Online Shopping',
                        'tech' => ['Laravel', 'Stripe', 'Bootstrap', 'jQuery'],
                        'desc' => 'Full-featured e-commerce solution with secure payment integration, inventory management, and comprehensive admin dashboard. Optimized for performance and user experience.',
                        'features' => ['Stripe Payment', 'Cart System', 'Admin Panel', 'Order Tracking'],
                        'github' => '#',
                        'color' => '#10B981',
                        'gradient' => 'linear-gradient(135deg, #10B981, #06B6D4)'
                    ],
                    [
                        'name' => 'Vtiger CRM Extensions',
                        'category' => 'Enterprise CRM',
                        'tech' => ['PHP', 'Vtiger', 'MySQL', 'JavaScript'],
                        'desc' => 'Custom modules and automation workflows for enterprise Vtiger CRM instances. Streamlined business processes through intelligent automation and data integration.',
                        'features' => ['Custom Modules', 'Workflow Auto', 'API Integration', 'Reports'],
                        'github' => '#',
                        'color' => '#FF9900',
                        'gradient' => 'linear-gradient(135deg, #FF9900, #FFB84D)'
                    ],
                    [
                        'name' => 'REST API Service',
                        'category' => 'Backend API',
                        'tech' => ['Laravel', 'JWT', 'MySQL', 'Postman'],
                        'desc' => 'Scalable RESTful API service with JWT authentication, rate limiting, and comprehensive documentation. Designed for mobile and third-party integrations.',
                        'features' => ['JWT Auth', 'Rate Limiting', 'Versioning', 'Documentation'],
                        'github' => '#',
                        'color' => '#7C3AED',
                        'gradient' => 'linear-gradient(135deg, #7C3AED, #A78BFA)'
                    ],
                    [
                        'name' => 'Task Management System',
                        'category' => 'Productivity',
                        'tech' => ['Laravel', 'Vue.js', 'MySQL', 'Tailwind'],
                        'desc' => 'Collaborative task management application with project tracking, team collaboration, and real-time updates. Built with modern SPA architecture.',
                        'features' => ['Team Collab', 'Task Tracking', 'Real-time', 'Kanban Board'],
                        'github' => '#',
                        'color' => '#EC4899',
                        'gradient' => 'linear-gradient(135deg, #EC4899, #F472B6)'
                    ],
                    [
                        'name' => 'Content Management Portal',
                        'category' => 'CMS',
                        'tech' => ['Laravel', 'MySQL', 'TinyMCE', 'Bootstrap'],
                        'desc' => 'Flexible content management system with role-based access, media library, and SEO optimization. Perfect for blogs and business websites.',
                        'features' => ['WYSIWYG Editor', 'Media Library', 'SEO Tools', 'Multi-User'],
                        'github' => '#',
                        'color' => '#06B6D4',
                        'gradient' => 'linear-gradient(135deg, #06B6D4, #0EA5E9)'
                    ]
                ];
            @endphp

            @foreach($projects as $index => $project)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="glass-card-modern h-100 project-card" style="position: relative; overflow: hidden; cursor: pointer;">
                    <!-- Background Glow -->
                    <div class="project-glow" style="position: absolute; top: -50%; right: -50%; width: 200%; height: 200%; background: {{ $project['gradient'] }}; opacity: 0; transition: all 0.5s; filter: blur(60px);"></div>
                    
                    <div class="position-relative" style="z-index: 2;">
                        <!-- Project Header -->
                        <div class="d-flex align-items-start justify-content-between mb-4">
                            <div class="flex-grow-1">
                                <span class="badge mb-2" style="background: {{ $project['gradient'] }}; color: white; padding: 6px 14px; border-radius: 20px; font-size: 0.75rem; font-weight: 600;">
                                    {{ $project['category'] }}
                                </span>
                                <h3 class="mb-2">{{ $project['name'] }}</h3>
                            </div>
                            <div style="width: 50px; height: 50px; background: {{ $project['gradient'] }}; border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-code" style="color: white; font-size: 1.3rem;"></i>
                            </div>
                        </div>

                        <!-- Description -->
                        <p style="color: #9CA3AF; line-height: 1.7; margin-bottom: 1.5rem; min-height: 100px;">
                            {{ $project['desc'] }}
                        </p>

                        <!-- Features -->
                        <div class="mb-4">
                            <h6 class="mb-3" style="color: #E0E7FF; font-size: 0.9rem; font-weight: 600;">
                                <i class="fas fa-star me-2" style="color: {{ $project['color'] }};"></i>Key Features
                            </h6>
                            <div class="d-flex flex-wrap gap-2">
                                @foreach($project['features'] as $feature)
                                <span style="padding: 6px 12px; background: rgba(79, 70, 229, 0.1); border: 1px solid rgba(79, 70, 229, 0.2); border-radius: 15px; font-size: 0.75rem; color: #A78BFA;">
                                    <i class="fas fa-check-circle me-1" style="font-size: 0.6rem;"></i>{{ $feature }}
                                </span>
                                @endforeach
                            </div>
                        </div>

                        <!-- Tech Stack -->
                        <div class="mb-4">
                            <h6 class="mb-3" style="color: #E0E7FF; font-size: 0.9rem; font-weight: 600;">
                                <i class="fas fa-tools me-2" style="color: {{ $project['color'] }};"></i>Tech Stack
                            </h6>
                            <div class="d-flex flex-wrap gap-2">
                                @foreach($project['tech'] as $tech)
                                <span style="padding: 6px 12px; background: linear-gradient(135deg, rgba(79, 70, 229, 0.15), rgba(124, 58, 237, 0.15)); border: 1px solid rgba(79, 70, 229, 0.3); border-radius: 15px; font-size: 0.8rem; color: #E0E7FF; font-weight: 500;">
                                    {{ $tech }}
                                </span>
                                @endforeach
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class="d-flex gap-3">
                            @if($project['github'] != '#')
                            <a href="{{ $project['github'] }}" target="_blank" class="flex-grow-1" style="text-decoration: none;">
                                <div style="padding: 12px; background: {{ $project['gradient'] }}; border-radius: 12px; text-align: center; transition: all 0.3s; color: white; font-weight: 600;">
                                    <i class="fab fa-github me-2"></i>View Code
                                </div>
                            </a>
                            @else
                            <div class="flex-grow-1">
                                <div style="padding: 12px; background: rgba(79, 70, 229, 0.2); border: 1px solid rgba(79, 70, 229, 0.3); border-radius: 12px; text-align: center; color: #9CA3AF; font-weight: 500;">
                                    <i class="fas fa-lock me-2"></i>Private Project
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Call to Action -->
        <div class="glass-card-modern text-center" style="background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.1)); border: 2px solid rgba(79, 70, 229, 0.3);" data-aos="fade-up">
            <div class="py-4">
                <h3 class="mb-3">Have a Project in Mind?</h3>
                <p class="lead mb-4" style="color: #9CA3AF; max-width: 600px; margin: 0 auto;">
                    Let's collaborate to bring your ideas to life with cutting-edge technology and innovative solutions.
                </p>
                <a href="{{ route('contact') }}" class="btn-primary-modern">
                    <i class="fas fa-rocket me-2"></i>Start a Project
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.project-card:hover .project-glow {
    opacity: 0.1;
    top: -20%;
    right: -20%;
}

.project-card:hover {
    transform: translateY(-8px);
}
</style>
@endsection