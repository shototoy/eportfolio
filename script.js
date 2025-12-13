const dockItems = document.querySelectorAll('.dock-item');
const sectionContent = document.getElementById('sectionContent');
const clipOverlay = document.getElementById('clipOverlay');

const templates = {
    home: 'homeTemplate',
    about: 'aboutTemplate',
    skills: 'skillsTemplate',
    projects: 'projectsTemplate',
    reflection: 'reflectionTemplate'
};

let slideInterval;
let currentSlide = 0;

function loadSection(sectionName) {
    clipOverlay.classList.add('active');

    setTimeout(() => {
        const templateId = templates[sectionName];
        const template = document.getElementById(templateId);

        if (template) {
            sectionContent.innerHTML = template.innerHTML;

            if (sectionName === 'projects') {
                initSlideshow();
            }
        }

        setTimeout(() => {
            clipOverlay.classList.remove('active');
        }, 150);
    }, 150);
}


function initSlideshow() {
    const slides = document.querySelectorAll('.slide');
    const indicators = document.querySelectorAll('.indicator');
    const prevBtn = document.querySelector('.slide-nav.prev');
    const nextBtn = document.querySelector('.slide-nav.next');

    if (!slides.length) return;

    if (slideInterval) {
        clearInterval(slideInterval);
    }

    currentSlide = 0;

    slideInterval = setInterval(() => {
        nextSlide();
    }, 2000);

    function nextSlide() {
        slides[currentSlide].classList.remove('active');
        indicators[currentSlide].classList.remove('active');
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.add('active');
        indicators[currentSlide].classList.add('active');
    }

    function prevSlide() {
        slides[currentSlide].classList.remove('active');
        indicators[currentSlide].classList.remove('active');
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        slides[currentSlide].classList.add('active');
        indicators[currentSlide].classList.add('active');
    }

    function goToSlide(index) {
        slides[currentSlide].classList.remove('active');
        indicators[currentSlide].classList.remove('active');
        currentSlide = index;
        slides[currentSlide].classList.add('active');
        indicators[currentSlide].classList.add('active');
    }

    function resetInterval() {
        clearInterval(slideInterval);
        slideInterval = setInterval(() => {
            nextSlide();
        }, 2000);
    }

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

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            goToSlide(index);
            resetInterval();
        });
    });

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

dockItems.forEach(item => {
    item.addEventListener('click', () => {
        dockItems.forEach(btn => btn.classList.remove('active'));

        item.classList.add('active');

        const section = item.getAttribute('data-section');

        loadSection(section);
    });
});

window.addEventListener('DOMContentLoaded', () => {
    loadSection('home');
});

document.documentElement.style.scrollBehavior = 'smooth';

let lastScrollTop = 0;
window.addEventListener('scroll', () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const dock = document.querySelector('.dock-container');

    if (scrollTop > lastScrollTop) {
        dock.style.transform = 'translateY(-50%) translateX(5px)';
    } else {
        dock.style.transform = 'translateY(-50%) translateX(0)';
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
}, false);

// Add hover effect to info cards


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
        const nextIndex = (currentIndex + 1) % sections.length;
        const nextButton = document.querySelector(`[data-section="${sections[nextIndex]}"]`);
        if (nextButton) nextButton.click();
    }

    if (touchEndX > touchStartX + swipeThreshold) {
        const prevIndex = (currentIndex - 1 + sections.length) % sections.length;
        const prevButton = document.querySelector(`[data-section="${sections[prevIndex]}"]`);
        if (prevButton) prevButton.click();
    }
}

let konamiCode = [];
const konamiSequence = ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'b', 'a'];

document.addEventListener('keydown', (e) => {
    konamiCode.push(e.key);
    konamiCode.splice(-konamiSequence.length - 1, konamiCode.length - konamiSequence.length);

    if (konamiCode.join('').includes(konamiSequence.join(''))) {
        document.body.style.animation = 'rainbow 2s linear infinite';
        setTimeout(() => {
            document.body.style.animation = '';
        }, 5000);
    }
});

const style = document.createElement('style');
style.textContent = `
    @keyframes rainbow {
        0% { filter: hue-rotate(0deg); }
        100% { filter: hue-rotate(360deg); }
    }
`;
document.head.appendChild(style);
