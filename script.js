document.addEventListener('DOMContentLoaded', () => {
    const navShards = document.querySelectorAll('.nav-shard');
    const container = document.getElementById('mainSection');
    const content = document.getElementById('sectionContent');
    const clipOverlay = document.getElementById('clipOverlay');

    // State
    let currentSlide = 0;

    // Initialize
    // converting clip-path of container for initial state
    container.style.clipPath = 'circle(0% at 50% 50%)';
    setTimeout(() => loadSection('home'), 100); // Small delay to ensure CSS is ready

    // Navigation Events
    navShards.forEach(shard => {
        shard.addEventListener('click', (e) => {
            const section = shard.getAttribute('data-section');
            handleNavigation(section, shard);
        });
    });

    function handleNavigation(sectionName, activeShard) {
        // 1. Get coordinates of the clicked shard to start animation from there
        const rect = activeShard.getBoundingClientRect();
        const centerX = rect.left + rect.width / 2;
        const centerY = rect.top + rect.height / 2;

        // 2. Active State Logic (Highlighting)
        navShards.forEach(s => s.classList.remove('active'));
        if (activeShard) activeShard.classList.add('active');

        // 3. Close the current view (Collapse to center or previous origin? Let's collapse to new origin for speed)
        // Transition: collapse fast
        container.style.transition = 'clip-path 0.4s cubic-bezier(0.55, 0.055, 0.675, 0.19)';
        container.style.clipPath = `circle(0% at ${centerX}px ${centerY}px)`;
        container.classList.remove('active');

        // 4. Wait for collapse, then swap content and expand
        setTimeout(() => {
            loadSection(sectionName);

            // Prepare for expansion
            // We keep the origin at the shard, but expand to cover the whole screen (150% is safe)
            container.style.transition = 'clip-path 0.8s cubic-bezier(0.19, 1, 0.22, 1)';
            container.style.clipPath = `circle(150% at ${centerX}px ${centerY}px)`;
            container.classList.add('active');

        }, 400); // Wait 400ms matching the transition
    }

    function loadSection(sectionName) {
        const templateId = sectionName + 'Template';
        const template = document.getElementById(templateId);

        if (!template) {
            content.innerHTML = '<p>Section not found.</p>';
            return;
        }

        // Inject Content
        content.innerHTML = template.innerHTML;
        content.className = 'section-content'; // Removed fade-in

        // Post-Load Initializations
        if (sectionName === 'projects') {
            initSlideshow();
        }
    }

    // Slideshow Logic
    function initSlideshow() {
        const slides = document.querySelectorAll('.slide');
        const indicators = document.querySelectorAll('.indicator');
        const prevBtn = document.querySelector('.slide-nav.prev');
        const nextBtn = document.querySelector('.slide-nav.next');

        if (slides.length === 0) return;

        // Reset state
        currentSlide = 0;
        updateSlides(slides, indicators);

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                updateSlides(slides, indicators);
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                currentSlide = (currentSlide + 1) % slides.length;
                updateSlides(slides, indicators);
            });
        }

        // Indicator clicks
        indicators.forEach(ind => {
            ind.addEventListener('click', () => {
                const index = parseInt(ind.getAttribute('data-slide'));
                currentSlide = index;
                updateSlides(slides, indicators);
            });
        });
    }

    function updateSlides(slides, indicators) {
        slides.forEach((slide, index) => {
            if (index === currentSlide) {
                slide.classList.add('active');
            } else {
                slide.classList.remove('active');
            }
        });

        indicators.forEach((ind, index) => {
            if (index === currentSlide) {
                ind.classList.add('active');
            } else {
                ind.classList.remove('active');
            }
        });
    }
});
