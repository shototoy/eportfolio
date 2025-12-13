// Get DOM elements
const dockItems = document.querySelectorAll('.dock-item');
const sectionContent = document.getElementById('sectionContent');
const clipOverlay = document.getElementById('clipOverlay');

// Template mapping
const templates = {
    home: 'homeTemplate',
    about: 'aboutTemplate',
    skills: 'skillsTemplate',
    projects: 'projectsTemplate',
    reflection: 'reflectionTemplate'
};

// Slideshow variables
let slideInterval;
let currentSlide = 0;

// Load section content
function loadSection(sectionName) {
    // Add clip overlay animation
    clipOverlay.classList.add('active');

    setTimeout(() => {
        // Get template
        const templateId = templates[sectionName];
        const template = document.getElementById(templateId);

        if (template) {
            // Inject content
            sectionContent.innerHTML = template.innerHTML;

            // Initialize slideshow if projects section
            if (sectionName === 'projects') {
                initSlideshow();
            }
        }

        // Remove clip overlay
        setTimeout(() => {
            clipOverlay.classList.remove('active');
        }, 150);
    }, 150);
}

// Slideshow functionality
function initSlideshow() {
    const slides = document.querySelectorAll('.slide');
    const indicators = document.querySelectorAll('.indicator');
    const prevBtn = document.querySelector('.slide-nav.prev');
    const nextBtn = document.querySelector('.slide-nav.next');

    if (!slides.length) return;

    // Clear any existing interval
    if (slideInterval) {
        clearInterval(slideInterval);
    }

    // Reset to first slide
    currentSlide = 0;

    // Auto-rotate every 2 seconds
    slideInterval = setInterval(() => {
        nextSlide();
    }, 2000);

    // Next slide function
    function nextSlide() {
        slides[currentSlide].classList.remove('active');
        indicators[currentSlide].classList.remove('active');
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.add('active');
        indicators[currentSlide].classList.add('active');
    }

    // Previous slide function
    function prevSlide() {
        slides[currentSlide].classList.remove('active');
        indicators[currentSlide].classList.remove('active');
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        slides[currentSlide].classList.add('active');
        indicators[currentSlide].classList.add('active');
    }

    // Go to specific slide
    function goToSlide(index) {
        slides[currentSlide].classList.remove('active');
        indicators[currentSlide].classList.remove('active');
        currentSlide = index;
        slides[currentSlide].classList.add('active');
        indicators[currentSlide].classList.add('active');
    }

    // Reset interval on manual navigation
    function resetInterval() {
        clearInterval(slideInterval);
        slideInterval = setInterval(() => {
            nextSlide();
        }, 2000);
    }

    // Button event listeners
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            nextSlide();
            resetInterval();
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            prevSlide();
            resetInterval();
        });
    }

    // Indicator event listeners
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            goToSlide(index);
            resetInterval();
        });
    });

    // Pause on hover
    const slideshow = document.querySelector('.activities-slideshow');
    if (slideshow) {
        slideshow.addEventListener('mouseenter', () => {
            clearInterval(slideInterval);
        });

        slideshow.addEventListener('mouseleave', () => {
            resetInterval();
        });
    }
}

// Handle dock item clicks
dockItems.forEach(item => {
    item.addEventListener('click', () => {
        // Remove active class from all items
        dockItems.forEach(btn => btn.classList.remove('active'));

        // Add active class to clicked item
        item.classList.add('active');

        // Get section name
        const section = item.getAttribute('data-section');

        // Load section
        loadSection(section);
    });
});

// Load home section by default
window.addEventListener('DOMContentLoaded', () => {
    loadSection('home');
});

// Add smooth scroll behavior
document.documentElement.style.scrollBehavior = 'smooth';

// Add parallax effect to dock on scroll
let lastScrollTop = 0;
window.addEventListener('scroll', () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const dock = document.querySelector('.dock-container');

    if (scrollTop > lastScrollTop) {
        // Scrolling down
        dock.style.transform = 'translateY(-50%) translateX(5px)';
    } else {
        // Scrolling up
        dock.style.transform = 'translateY(-50%) translateX(0)';
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
}, false);

// Add hover effect to info cards
document.addEventListener('DOMContentLoaded', () => {
    // Observe for dynamically added cards
    const observer = new MutationObserver(() => {
        const cards = document.querySelectorAll('.info-card');
        cards.forEach((card, index) => {
            card.style.animationDelay = `${index * 0.1}s`;
            card.style.animation = 'fadeIn 0.6s ease-out forwards';
        });
    });

    observer.observe(sectionContent, {
        childList: true,
        subtree: true
    });
});

// Add keyboard navigation
document.addEventListener('keydown', (e) => {
    const sections = ['home', 'about', 'skills', 'projects', 'reflection'];
    const activeItem = document.querySelector('.dock-item.active');
    const currentSection = activeItem ? activeItem.getAttribute('data-section') : 'home';
    const currentIndex = sections.indexOf(currentSection);

    if (e.key === 'ArrowDown' || e.key === 'ArrowRight') {
        e.preventDefault();
        const nextIndex = (currentIndex + 1) % sections.length;
        const nextButton = document.querySelector(`[data-section="${sections[nextIndex]}"]`);
        if (nextButton) nextButton.click();
    } else if (e.key === 'ArrowUp' || e.key === 'ArrowLeft') {
        e.preventDefault();
        const prevIndex = (currentIndex - 1 + sections.length) % sections.length;
        const prevButton = document.querySelector(`[data-section="${sections[prevIndex]}"]`);
        if (prevButton) prevButton.click();
    }
});

// Add touch swipe support for mobile
let touchStartX = 0;
let touchEndX = 0;

document.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].screenX;
}, false);

document.addEventListener('touchend', (e) => {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
}, false);

function handleSwipe() {
    const swipeThreshold = 50;
    const sections = ['home', 'about', 'skills', 'projects', 'reflection'];
    const activeItem = document.querySelector('.dock-item.active');
    const currentSection = activeItem ? activeItem.getAttribute('data-section') : 'home';
    const currentIndex = sections.indexOf(currentSection);

    if (touchEndX < touchStartX - swipeThreshold) {
        // Swipe left - next section
        const nextIndex = (currentIndex + 1) % sections.length;
        const nextButton = document.querySelector(`[data-section="${sections[nextIndex]}"]`);
        if (nextButton) nextButton.click();
    }

    if (touchEndX > touchStartX + swipeThreshold) {
        // Swipe right - previous section
        const prevIndex = (currentIndex - 1 + sections.length) % sections.length;
        const prevButton = document.querySelector(`[data-section="${sections[prevIndex]}"]`);
        if (prevButton) prevButton.click();
    }
}

// Add easter egg - Konami code
let konamiCode = [];
const konamiSequence = ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'b', 'a'];

document.addEventListener('keydown', (e) => {
    konamiCode.push(e.key);
    konamiCode.splice(-konamiSequence.length - 1, konamiCode.length - konamiSequence.length);

    if (konamiCode.join('').includes(konamiSequence.join(''))) {
        // Easter egg activated!
        document.body.style.animation = 'rainbow 2s linear infinite';
        setTimeout(() => {
            document.body.style.animation = '';
        }, 5000);
    }
});

// Add CSS for rainbow animation
const style = document.createElement('style');
style.textContent = `
    @keyframes rainbow {
        0% { filter: hue-rotate(0deg); }
        100% { filter: hue-rotate(360deg); }
    }
`;
document.head.appendChild(style);
