document.addEventListener("DOMContentLoaded", function () {

    // Typed.js
    new Typed('#typed', {
        strings: [
            "PHP Developer",
            "Laravel Expert",
            "Full Stack Developer"
        ],
        typeSpeed: 60,
        backSpeed: 40,
        loop: true
    });

    // AOS
    AOS.init({
        duration: 1000,
        once: true
    });

    // Particles.js
    particlesJS("particles-js", {
        particles: {
            number: { value: 80 },
            color: { value: "#ffffff" },
            shape: { type: "circle" },
            opacity: { value: 0.5 },
            size: { value: 3 },
            move: { speed: 2 }
        },
        interactivity: {
            events: {
                onhover: { enable: true, mode: "repulse" }
            }
        }
    });

});
