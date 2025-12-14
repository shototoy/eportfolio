document.addEventListener('DOMContentLoaded', () => {
    const navItems = document.querySelectorAll('.spine-item');
    const container = document.getElementById('mainSection');
    const content = document.getElementById('sectionContent');
    const clipOverlay = document.getElementById('clipOverlay');
    const welcomeOverlay = document.getElementById('welcomeOverlay');
    const navSpine = document.querySelector('.nav-spine');

    setTimeout(() => {
        if (welcomeOverlay) welcomeOverlay.classList.add('hidden');

        // Show Nav after overlay disappears (approx 1s delay)
        setTimeout(() => {
            if (navSpine) navSpine.classList.add('visible');

            // Auto click home slightly after nav appears
            setTimeout(() => {
                const homeItem = document.querySelector('.spine-item[data-section="home"]');
                if (homeItem) homeItem.click();
            }, 500);
        }, 1000);

    }, 3500);

    if (welcomeOverlay) {
        welcomeOverlay.addEventListener('click', () => {
            welcomeOverlay.classList.add('hidden');
            setTimeout(() => {
                if (navSpine) navSpine.classList.add('visible');
            }, 500);
        });
    }

    let currentSlide = 0;

    container.style.clipPath = 'circle(0% at 50% 50%)';
    setTimeout(() => loadSection('home'), 100);

    navItems.forEach(item => {
        item.addEventListener('click', (e) => {
            const section = item.getAttribute('data-section');
            handleNavigation(section, item);
        });
    });

    function handleNavigation(sectionName, activeItem) {
        const rect = activeItem.getBoundingClientRect();
        const centerX = rect.left + rect.width / 2;
        const centerY = rect.top + rect.height / 2;

        navItems.forEach(s => s.classList.remove('active'));
        if (activeItem) activeItem.classList.add('active');

        container.style.transition = 'clip-path 1s cubic-bezier(0.55, 0.055, 0.675, 0.19)';
        container.style.clipPath = `circle(0% at ${centerX}px ${centerY}px)`;
        container.classList.remove('active');

        setTimeout(() => {
            loadSection(sectionName);

            container.style.transition = 'clip-path 1.5s cubic-bezier(0.19, 1, 0.22, 1)';
            container.style.clipPath = `circle(150% at ${centerX}px ${centerY}px)`;
            container.classList.add('active');

        }, 1000);
    }

    function loadSection(sectionName) {
        const templateId = sectionName + 'Template';
        const template = document.getElementById(templateId);

        if (!template) {
            content.innerHTML = '<p>Section not found.</p>';
            return;
        }

        content.innerHTML = template.innerHTML;
        content.className = 'section-content';

        if (sectionName === 'gallery') {
            initSlideshow();
        }
    }

    function initSlideshow() {
        const slides = document.querySelectorAll('.slide');
        const indicators = document.querySelectorAll('.indicator');
        const prevBtn = document.querySelector('.slide-nav.prev');
        const nextBtn = document.querySelector('.slide-nav.next');

        if (slides.length === 0) return;

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
