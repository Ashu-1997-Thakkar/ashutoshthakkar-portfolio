<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ashutosh Nandani | Elite PHP Laravel Developer')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary: #4F46E5;
            --primary-dark: #4338CA;
            --secondary: #7C3AED;
            --accent: #06B6D4;
            --dark: #0A0E27;
            --dark-secondary: #151934;
            --light: #E0E7FF;
            --text-primary: #F9FAFB;
            --text-secondary: #9CA3AF;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Space Grotesk', sans-serif;
            background: var(--dark);
            color: var(--text-primary);
            overflow-x: hidden;
            position: relative;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Sora', sans-serif;
            font-weight: 700;
        }

        /* Animated Background */
        .bg-animated {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            background: linear-gradient(135deg, #0A0E27 0%, #151934 50%, #1E1B4B 100%);
        }

        .bg-animated::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at 20% 50%, rgba(79, 70, 229, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 80% 80%, rgba(124, 58, 237, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 40% 20%, rgba(6, 182, 212, 0.05) 0%, transparent 50%);
            animation: rotate 30s linear infinite;
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Modern Navbar */
        .navbar-modern {
            background: rgba(10, 14, 39, 0.8);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(79, 70, 229, 0.1);
            padding: 1rem 0;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .navbar-modern.scrolled {
            padding: 0.5rem 0;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .navbar-brand {
            font-family: 'Sora', sans-serif;
            font-weight: 800;
            font-size: 1.5rem;
            color: var(--text-primary) !important;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            box-shadow: 0 4px 15px rgba(79, 70, 229, 0.3);
        }

        .nav-link {
            color: var(--text-secondary) !important;
            font-weight: 500;
            margin: 0 0.5rem;
            padding: 0.5rem 1rem !important;
            border-radius: 8px;
            transition: all 0.3s;
            position: relative;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            transition: width 0.3s;
        }

        .nav-link:hover {
            color: var(--text-primary) !important;
        }

        .nav-link:hover::before,
        .nav-link.active::before {
            width: 80%;
        }

        .nav-link.active {
            color: var(--text-primary) !important;
            background: rgba(79, 70, 229, 0.1);
        }

        /* Theme Toggle */
        .theme-toggle {
            width: 45px;
            height: 45px;
            border-radius: 12px;
            background: rgba(79, 70, 229, 0.1);
            border: 1px solid rgba(79, 70, 229, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
            margin-left: 1rem;
        }

        .theme-toggle:hover {
            background: rgba(79, 70, 229, 0.2);
            transform: rotate(180deg);
        }

        /* Glass Card Modern */
        .glass-card-modern {
            background: rgba(21, 25, 52, 0.6);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(79, 70, 229, 0.2);
            border-radius: 20px;
            padding: 2rem;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .glass-card-modern::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(79, 70, 229, 0.5), transparent);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .glass-card-modern:hover {
            transform: translateY(-8px);
            border-color: rgba(79, 70, 229, 0.5);
            box-shadow: 0 20px 60px rgba(79, 70, 229, 0.2);
        }

        .glass-card-modern:hover::before {
            opacity: 1;
        }

        /* Buttons */
        .btn-primary-modern {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border: none;
            color: white;
            padding: 14px 32px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s;
            box-shadow: 0 4px 20px rgba(79, 70, 229, 0.3);
            position: relative;
            overflow: hidden;
        }

        .btn-primary-modern::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-primary-modern:hover::before {
            left: 100%;
        }

        .btn-primary-modern:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(79, 70, 229, 0.4);
        }

        .btn-outline-modern {
            background: transparent;
            border: 2px solid rgba(79, 70, 229, 0.5);
            color: var(--text-primary);
            padding: 14px 32px;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-outline-modern:hover {
            background: rgba(79, 70, 229, 0.1);
            border-color: var(--primary);
            color: var(--text-primary);
            transform: translateY(-2px);
        }

        /* Text Gradient */
        .gradient-text {
            background: linear-gradient(135deg, #A78BFA, #EC4899, #06B6D4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Footer Modern */
        .footer-modern {
            background: rgba(21, 25, 52, 0.4);
            border-top: 1px solid rgba(79, 70, 229, 0.1);
            padding: 3rem 0;
            margin-top: 5rem;
        }

        .social-link {
            width: 45px;
            height: 45px;
            border-radius: 12px;
            background: rgba(79, 70, 229, 0.1);
            border: 1px solid rgba(79, 70, 229, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-secondary);
            transition: all 0.3s;
            text-decoration: none;
        }

        .social-link:hover {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(79, 70, 229, 0.3);
        }

        /* Scroll to Top */
        .scroll-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(79, 70, 229, 0.4);
        }

        .scroll-top.visible {
            opacity: 1;
            pointer-events: all;
        }

        .scroll-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(79, 70, 229, 0.5);
        }

        /* Particles Canvas */
        #particles-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.6;
        }

        /* Loading Animation */
        .page-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--dark);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.5s, visibility 0.5s;
        }

        .page-loader.hidden {
            opacity: 0;
            visibility: hidden;
        }

        .loader-spinner {
            width: 60px;
            height: 60px;
            border: 4px solid rgba(79, 70, 229, 0.1);
            border-top-color: var(--primary);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: var(--dark-secondary);
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-dark);
        }

        /* Light Theme Styles - Soft & Eye-Friendly */
        body.light-theme {
            color: #2D3748;
            background: #F7FAFC;
        }

        body.light-theme .bg-animated {
            background: linear-gradient(135deg, #F7FAFC 0%, #EDF2F7 50%, #E2E8F0 100%);
        }

        body.light-theme .bg-animated::before {
            background: radial-gradient(circle at 20% 50%, rgba(99, 102, 241, 0.08) 0%, transparent 50%),
                        radial-gradient(circle at 80% 80%, rgba(139, 92, 246, 0.08) 0%, transparent 50%),
                        radial-gradient(circle at 40% 20%, rgba(6, 182, 212, 0.05) 0%, transparent 50%);
        }

        body.light-theme .glass-card-modern {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(12px);
            border-color: rgba(79, 70, 229, 0.12);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        }

        body.light-theme .glass-card-modern:hover {
            background: rgba(255, 255, 255, 0.85);
            border-color: rgba(79, 70, 229, 0.25);
            box-shadow: 0 8px 30px rgba(79, 70, 229, 0.12);
        }

        body.light-theme .navbar-modern {
            background: rgba(255, 255, 255, 0.85) !important;
            backdrop-filter: blur(20px);
            border-color: rgba(79, 70, 229, 0.08);
        }

        body.light-theme .navbar-modern.scrolled {
            background: rgba(255, 255, 255, 0.95) !important;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        }

        body.light-theme .nav-link {
            color: #718096 !important;
        }

        body.light-theme .nav-link:hover,
        body.light-theme .nav-link.active {
            color: #2D3748 !important;
            background: rgba(79, 70, 229, 0.06);
        }

        body.light-theme .footer-modern {
            background: rgba(255, 255, 255, 0.7);
            border-color: rgba(79, 70, 229, 0.08);
        }

        body.light-theme h1,
        body.light-theme h2,
        body.light-theme h3,
        body.light-theme h4,
        body.light-theme h5,
        body.light-theme h6 {
            color: #1A202C;
        }

        body.light-theme .lead,
        body.light-theme p {
            color: #4A5568;
        }

        body.light-theme .text-secondary {
            color: #718096 !important;
        }

        body.light-theme .form-control-modern {
            background: rgba(247, 250, 252, 0.9);
            color: #2D3748;
            border-color: rgba(79, 70, 229, 0.15);
        }

        body.light-theme .form-control-modern::placeholder {
            color: #A0AEC0;
        }

        body.light-theme .form-control-modern:focus {
            background: rgba(255, 255, 255, 0.95);
            border-color: rgba(79, 70, 229, 0.35);
        }

        body.light-theme #particles-canvas {
            opacity: 0.2;
            filter: brightness(1.5);
        }

        body.light-theme .navbar-brand {
            color: #1A202C !important;
        }

        body.light-theme .social-link {
            background: rgba(237, 242, 247, 0.8);
            border-color: rgba(79, 70, 229, 0.12);
            color: #5A67D8;
        }

        body.light-theme .social-link:hover {
            background: linear-gradient(135deg, #4F46E5, #7C3AED);
            color: white;
            border-color: transparent;
        }

        body.light-theme .theme-toggle {
            background: rgba(237, 242, 247, 0.8);
            border-color: rgba(79, 70, 229, 0.12);
            color: #F59E0B;
        }

        body.light-theme .theme-toggle:hover {
            background: rgba(237, 242, 247, 1);
            border-color: rgba(79, 70, 229, 0.2);
        }

        body.light-theme .scroll-top {
            box-shadow: 0 4px 20px rgba(79, 70, 229, 0.25);
        }

        body.light-theme .btn-outline-modern {
            background: transparent;
            border-color: rgba(79, 70, 229, 0.3);
            color: #4F46E5;
        }

        body.light-theme .btn-outline-modern:hover {
            background: rgba(79, 70, 229, 0.08);
            border-color: #4F46E5;
        }

        /* Light theme badge adjustments */
        body.light-theme .badge {
            background: rgba(237, 242, 247, 0.8) !important;
            color: #5A67D8 !important;
            border-color: rgba(79, 70, 229, 0.15) !important;
        }

        /* Light theme stat cards */
        body.light-theme .stat-card h3,
        body.light-theme .gradient-text {
            background: linear-gradient(135deg, #5A67D8 0%, #9F7AEA 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Soft shadows for light mode */
        body.light-theme .glass-card-modern::before {
            opacity: 0;
        }

        /* Adjust code preview in light mode */
        body.light-theme pre {
            background: rgba(237, 242, 247, 0.6);
        }

        body.light-theme code {
            color: #2D3748 !important;
        }
    </style>
</head>
<body>
    <!-- Page Loader -->
    <div class="page-loader">
        <div class="loader-spinner"></div>
    </div>

    <!-- Animated Background -->
    <div class="bg-animated"></div>
    <canvas id="particles-canvas"></canvas>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-modern fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <div class="brand-icon">A</div>
                <span>ASHUTOSH</span>
            </a>
            
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('skills') ? 'active' : '' }}" href="{{ route('skills') }}">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('experience') ? 'active' : '' }}" href="{{ route('experience') }}">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}" href="{{ route('projects') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <div class="theme-toggle" id="themeToggle">
                            <i class="fas fa-moon"></i>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main style="padding-top: 80px;">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer-modern">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <h5 class="mb-2">Ashutosh Nandani</h5>
                    <p class="text-secondary mb-0">Crafting Digital Excellence with Laravel</p>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-center justify-content-md-end gap-3">
                        <a href="https://linkedin.com/in/ashutosh-nandani-a527b9156" class="social-link" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://github.com/Ashu-1997-Thakkar" class="social-link" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="mailto:ashnandani123@gmail.com" class="social-link">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4 pt-4" style="border-top: 1px solid rgba(79, 70, 229, 0.1);">
                <p class="text-secondary small mb-0">© {{ date('Y') }} Ashutosh Nandani. Built with Laravel 11 & ❤️</p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top -->
    <div class="scroll-top" id="scrollTop">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    
    <script>
        // Page Loader
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.querySelector('.page-loader').classList.add('hidden');
            }, 500);
        });

        // AOS Init
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
        
        // Navbar Scroll
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar-modern');
            const scrollTop = document.getElementById('scrollTop');
            
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
                scrollTop.classList.add('visible');
            } else {
                navbar.classList.remove('scrolled');
                scrollTop.classList.remove('visible');
            }
        });

        // Scroll to Top
        document.getElementById('scrollTop').addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Particles Animation
        const canvas = document.getElementById('particles-canvas');
        const ctx = canvas.getContext('2d');
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        const particles = [];
        const particleCount = 100;

        class Particle {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.vx = (Math.random() - 0.5) * 0.5;
                this.vy = (Math.random() - 0.5) * 0.5;
                this.radius = Math.random() * 2;
            }

            update() {
                this.x += this.vx;
                this.y += this.vy;

                if (this.x < 0 || this.x > canvas.width) this.vx = -this.vx;
                if (this.y < 0 || this.y > canvas.height) this.vy = -this.vy;
            }

            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                ctx.fillStyle = 'rgba(79, 70, 229, 0.5)';
                ctx.fill();
            }
        }

        for (let i = 0; i < particleCount; i++) {
            particles.push(new Particle());
        }

        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            
            particles.forEach(particle => {
                particle.update();
                particle.draw();
            });

            // Connect particles
            for (let i = 0; i < particles.length; i++) {
                for (let j = i + 1; j < particles.length; j++) {
                    const dx = particles[i].x - particles[j].x;
                    const dy = particles[i].y - particles[j].y;
                    const distance = Math.sqrt(dx * dx + dy * dy);

                    if (distance < 150) {
                        ctx.beginPath();
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.strokeStyle = `rgba(79, 70, 229, ${0.2 * (1 - distance / 150)})`;
                        ctx.lineWidth = 1;
                        ctx.stroke();
                    }
                }
            }

            requestAnimationFrame(animate);
        }

        animate();

        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        });

        // Theme Toggle Functionality
        const themeToggle = document.getElementById('themeToggle');
        const body = document.body;
        const icon = themeToggle.querySelector('i');
        const root = document.documentElement;

        // Check for saved theme preference or default to dark
        const currentTheme = localStorage.getItem('theme') || 'dark';
        
        if (currentTheme === 'light') {
            body.classList.add('light-theme');
            icon.classList.remove('fa-moon');
            icon.classList.add('fa-sun');
            applyLightTheme();
        }

        themeToggle.addEventListener('click', () => {
            body.classList.toggle('light-theme');
            
            if (body.classList.contains('light-theme')) {
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
                localStorage.setItem('theme', 'light');
                applyLightTheme();
            } else {
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
                localStorage.setItem('theme', 'dark');
                applyDarkTheme();
            }
        });

        function applyLightTheme() {
            root.style.setProperty('--dark', '#F7FAFC');
            root.style.setProperty('--dark-secondary', '#EDF2F7');
            root.style.setProperty('--text-primary', '#2D3748');
            root.style.setProperty('--text-secondary', '#718096');
            
            // Update background - Soft gradient
            document.querySelector('.bg-animated').style.background = 
                'linear-gradient(135deg, #F7FAFC 0%, #EDF2F7 50%, #E2E8F0 100%)';
            
            // Update cards - Softer white
            document.querySelectorAll('.glass-card-modern').forEach(card => {
                card.style.background = 'rgba(255, 255, 255, 0.75)';
                card.style.borderColor = 'rgba(79, 70, 229, 0.12)';
                card.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.04)';
            });
            
            // Update navbar - Soft white
            const navbar = document.querySelector('.navbar-modern');
            navbar.style.background = 'rgba(255, 255, 255, 0.85)';
            navbar.style.borderColor = 'rgba(79, 70, 229, 0.08)';
            navbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.03)';
        }

        function applyDarkTheme() {
            root.style.setProperty('--dark', '#0A0E27');
            root.style.setProperty('--dark-secondary', '#151934');
            root.style.setProperty('--text-primary', '#F9FAFB');
            root.style.setProperty('--text-secondary', '#9CA3AF');
            
            // Update background
            document.querySelector('.bg-animated').style.background = 
                'linear-gradient(135deg, #0A0E27 0%, #151934 50%, #1E1B4B 100%)';
            
            // Update cards
            document.querySelectorAll('.glass-card-modern').forEach(card => {
                card.style.background = 'rgba(21, 25, 52, 0.6)';
                card.style.borderColor = 'rgba(79, 70, 229, 0.2)';
            });
            
            // Update navbar
            document.querySelector('.navbar-modern').style.background = 'rgba(10, 14, 39, 0.8)';
            document.querySelector('.navbar-modern').style.borderColor = 'rgba(79, 70, 229, 0.1)';
        }
    </script>
    @stack('scripts')
</body>
</html>