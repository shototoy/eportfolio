
 // Set current year
 const yearEl = document.getElementById('currentYear');
 if (yearEl) yearEl.textContent = new Date().getFullYear();

 // Enhanced Navigation Script
 (function() {
 const menuToggle = document.getElementById('menuToggle') || document.querySelector('.menu-toggle');
 const navMenu = document.getElementById('navMenu') || document.getElementById('navLinks') || document.querySelector('nav ul') || document.querySelector('.nav-links');
 const navbar = document.getElementById('navbar') || document.querySelector('nav');

 // Create overlay if it doesn't exist
 let overlay = document.querySelector('.nav-overlay');
 if (!overlay && navMenu) {
 overlay = document.createElement('div');
 overlay.className = 'nav-overlay';
 document.body.appendChild(overlay);
 }

 // Navbar scroll effect
 if (navbar) {
 let lastScroll = 0;
 window.addEventListener('scroll', () => {
 const currentScroll = window.pageYOffset;
 navbar.classList.toggle('scrolled', currentScroll > 50);
 lastScroll = currentScroll;
 }, { passive: true });
 }

 // Mobile menu toggle with accessibility
 if (menuToggle && navMenu) {
 menuToggle.addEventListener('click', (e) => {
 e.stopPropagation();
 const isActive = menuToggle.classList.toggle('active');
 navMenu.classList.toggle('active');
 if (overlay) overlay.classList.toggle('active');
 menuToggle.setAttribute('aria-expanded', isActive);
 document.body.style.overflow = isActive ? 'hidden' : ''
 });

 // Close menu when clicking links
 navMenu.querySelectorAll('a').forEach(link => {
 link.addEventListener('click', () => {
 menuToggle.classList.remove('active');
 navMenu.classList.remove('active');
 if (overlay) overlay.classList.remove('active');
 menuToggle.setAttribute('aria-expanded', 'false');
 document.body.style.overflow = ''
 })
 });

 // Close menu when clicking overlay
 if (overlay) {
 overlay.addEventListener('click', () => {
 menuToggle.classList.remove('active');
 navMenu.classList.remove('active');
 overlay.classList.remove('active');
 menuToggle.setAttribute('aria-expanded', 'false');
 document.body.style.overflow = ''
 });
 }

 // Close menu on escape key
 document.addEventListener('keydown', (e) => {
 if (e.key === 'Escape' && navMenu.classList.contains('active')) {
 menuToggle.classList.remove('active');
 navMenu.classList.remove('active');
 if (overlay) overlay.classList.remove('active');
 menuToggle.setAttribute('aria-expanded', 'false');
 document.body.style.overflow = '';
 menuToggle.focus();
 }
 });
 }

 // Active link highlighting on scroll
 const sections = document.querySelectorAll('section[id]');
 const navLinks = document.querySelectorAll('nav a[href^="#"]');

 if (sections.length && navLinks.length) {
 const observerOptions = {
 root: null,
 rootMargin: '-20% 0px -80% 0px',
 threshold: 0
 };

 const observer = new IntersectionObserver((entries) => {
 entries.forEach(entry => {
 if (entry.isIntersecting) {
 const id = entry.target.getAttribute('id');
 navLinks.forEach(link => {
 link.classList.toggle('active', link.getAttribute('href') === '#' + id)
 });
 }
 });
 }, observerOptions);

 sections.forEach(section => observer.observe(section));
 }
 })();

 // ========== ENHANCED NAVIGATION & BUTTONS ==========
 (function() {
 'use strict';

 // Smooth scroll for all anchor links
 document.querySelectorAll('a[href^="#"]').forEach(anchor => {
 anchor.addEventListener('click', function(e) {
 const href = this.getAttribute('href');
 if (href === '#' || href === '#!') return;

 const target = document.querySelector(href);
 if (target) {
 e.preventDefault();
 const navHeight = document.querySelector('nav')?.offsetHeight || 70;
 const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navHeight;

 window.scrollTo({
 top: targetPosition,
 behavior: 'smooth'
 });

 // Update URL without jumping
 history.pushState(null, null, href);
 }
 });
 });

 // Active navigation link on scroll
 const sections = document.querySelectorAll('section[id]');
 const navLinks = document.querySelectorAll('nav a[href^="#"]');

 function updateActiveLink() {
 const scrollPos = window.scrollY + 100;

 sections.forEach(section => {
 const sectionTop = section.offsetTop;
 const sectionHeight = section.offsetHeight;
 const sectionId = section.getAttribute('id');

 if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
 navLinks.forEach(link => {
 link.classList.remove('active');
 if (link.getAttribute('href') === '#' + sectionId) {
 link.classList.add('active');
 }
 });
 }
 });
 }

 window.addEventListener('scroll', updateActiveLink, { passive: true });
 updateActiveLink(); // Initial call

 // Button ripple effect
 document.querySelectorAll('.btn, .cta-btn, button[type="submit"]').forEach(btn => {
 btn.addEventListener('click', function(e) {
 const ripple = document.createElement('span');
 const rect = this.getBoundingClientRect();
 const size = Math.max(rect.width, rect.height);
 const x = e.clientX - rect.left - size / 2;
 const y = e.clientY - rect.top - size / 2;

 ripple.style.cssText = `
 position: absolute;
 width: ${size}px;
 height: ${size}px;
 left: ${x}px;
 top: ${y}px;
 background: rgba(255, 255, 255, 0.4);
 border-radius: 50%;
 transform: scale(0);
 animation: ripple-effect 0.6s ease-out;
 pointer-events: none;
 `;

 this.style.position = 'relative';
 this.style.overflow = 'hidden';
 this.appendChild(ripple);

 setTimeout(() => ripple.remove(), 600);
 });
 });

 // Add ripple animation keyframes
 if (!document.querySelector('#ripple-styles')) {
 const style = document.createElement('style');
 style.id = 'ripple-styles';
 style.textContent = `
 @keyframes ripple-effect {
 to { transform: scale(4); opacity: 0; }
 }
 `;
 document.head.appendChild(style);
 }

 // Mobile menu toggle enhancement
 const menuToggle = document.querySelector('.menu-toggle');
 const navMenu = document.querySelector('nav ul, nav .nav-links, .nav-list, .nav-menu');
 const navOverlay = document.querySelector('.nav-overlay');

 function closeMenu() {
 menuToggle?.classList.remove('active');
 navMenu?.classList.remove('active');
 navOverlay?.classList.remove('active');
 menuToggle?.setAttribute('aria-expanded', 'false');
 document.body.style.overflow = '';
 }

 function openMenu() {
 menuToggle?.classList.add('active');
 navMenu?.classList.add('active');
 navOverlay?.classList.add('active');
 menuToggle?.setAttribute('aria-expanded', 'true');
 document.body.style.overflow = 'hidden';
 }

 menuToggle?.addEventListener('click', function(e) {
 e.stopPropagation();
 navMenu?.classList.contains('active') ? closeMenu() : openMenu();
 });

 // Close menu on link click
 navMenu?.querySelectorAll('a').forEach(link => {
 link.addEventListener('click', closeMenu);
 });

 // Close on overlay click
 navOverlay?.addEventListener('click', closeMenu);

 // Close on escape key
 document.addEventListener('keydown', e => {
 if (e.key === 'Escape') closeMenu();
 });

 // Close on resize to desktop
 window.addEventListener('resize', () => {
 if (window.innerWidth > 768) closeMenu();
 });

 // Nav scroll effect
 const nav = document.querySelector('nav');
 let lastScroll = 0;

 window.addEventListener('scroll', () => {
 const currentScroll = window.pageYOffset;

 if (nav) {
 // Add scrolled class
 nav.classList.toggle('scrolled', currentScroll > 50);

 // Hide/show nav on scroll (optional)
 if (currentScroll > lastScroll && currentScroll > 300) {
 nav.style.transform = 'translateY(-100%)';
 } else {
 nav.style.transform = 'translateY(0)';
 }
 }

 lastScroll = currentScroll;
 }, { passive: true });

 // Form submission with loading state
 document.querySelectorAll('form').forEach(form => {
 form.addEventListener('submit', function(e) {
 const submitBtn = this.querySelector('[type="submit"]');
 if (submitBtn && !submitBtn.classList.contains('loading')) {
 submitBtn.classList.add('loading');
 submitBtn.dataset.originalText = submitBtn.textContent;
 submitBtn.textContent = 'Sending...';
 }
 });
 });

 // Keyboard navigation for buttons
 document.querySelectorAll('.btn, .cta-btn, .contact-link').forEach(btn => {
 btn.setAttribute('role', 'button');
 if (!btn.getAttribute('tabindex')) {
 btn.setAttribute('tabindex', '0');
 }

 btn.addEventListener('keydown', function(e) {
 if (e.key === 'Enter' || e.key === ' ') {
 e.preventDefault();
 this.click();
 }
 });
 });

 })();

// ========== SCROLL ANIMATION SYSTEM ==========
(function() {
    'use strict';
    
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const fadeObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                // Stagger animation delay
                setTimeout(() => {
                    entry.target.classList.add('animate-in');
                }, index * 50);
                fadeObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observe all elements with animation classes
    document.querySelectorAll('.fade-element, .card, .skill-item, .project-card, .skill-card, .timeline-item, .gradient-card, section:not(.hero)').forEach(el => {
        if (!el.classList.contains('fade-element') && !el.classList.contains('animate-in')) {
            el.classList.add('fade-element');
        }
        fadeObserver.observe(el);
    });
    
    // Stagger animations for grid items
    document.querySelectorAll('.cards-grid > *, .skills-grid > *, .projects-grid > *').forEach((el, index) => {
        el.classList.add('stagger-item');
        el.style.transitionDelay = `${index * 0.1}s`;
        fadeObserver.observe(el);
    });
})();

// ========== SCROLL PROGRESS BAR ==========
(function() {
    let progressBar = document.querySelector('.scroll-progress');
    
    if (!progressBar) {
        progressBar = document.createElement('div');
        progressBar.className = 'scroll-progress';
        progressBar.setAttribute('role', 'progressbar');
        progressBar.setAttribute('aria-label', 'Reading progress');
        document.body.prepend(progressBar);
    }
    
    function updateScrollProgress() {
        const windowHeight = window.innerHeight;
        const documentHeight = document.documentElement.scrollHeight - windowHeight;
        const scrolled = window.pageYOffset;
        const progress = (scrolled / documentHeight) * 100;
        
        progressBar.style.width = progress + '%';
        progressBar.setAttribute('aria-valuenow', Math.round(progress));
    }
    
    window.addEventListener('scroll', updateScrollProgress, { passive: true });
    updateScrollProgress();
})();

// ========== BACK TO TOP BUTTON ==========
(function() {
    let backToTop = document.querySelector('.back-to-top');
    
    if (!backToTop) {
        backToTop = document.createElement('button');
        backToTop.className = 'back-to-top';
        backToTop.innerHTML = '<i class="fas fa-arrow-up" aria-hidden="true"></i>';
        backToTop.setAttribute('aria-label', 'Back to top');
        backToTop.setAttribute('type', 'button');
        document.body.appendChild(backToTop);
    }
    
    function toggleBackToTop() {
        if (window.pageYOffset > 300) {
            backToTop.classList.add('visible');
        } else {
            backToTop.classList.remove('visible');
        }
    }
    
    backToTop.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    window.addEventListener('scroll', toggleBackToTop, { passive: true });
    toggleBackToTop();
})();

// ========== SMOOTH SCROLL WITH EASING ==========
(function() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#' || href === '#!') return;
            
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                const navHeight = document.querySelector('nav, header')?.offsetHeight || 80;
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
                
                // Update URL without jumping
                if (history.pushState) {
                    history.pushState(null, null, href);
                }
                
                // Focus management for accessibility
                target.setAttribute('tabindex', '-1');
                target.focus({ preventScroll: true });
            }
        });
    });
})();

// ========== ACTIVE NAVIGATION HIGHLIGHTING ==========
(function() {
    const sections = document.querySelectorAll('section[id], section[data-section]');
    const navLinks = document.querySelectorAll('nav a[href^="#"]');
    
    if (sections.length && navLinks.length) {
        function updateActiveNav() {
            const scrollPos = window.pageYOffset + 150;
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                const sectionId = section.id || section.getAttribute('data-section');
                
                if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        const linkHref = link.getAttribute('href');
                        if (linkHref === '#' + sectionId) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        }
        
        window.addEventListener('scroll', updateActiveNav, { passive: true });
        updateActiveNav();
    }
})();

// ========== IMAGE LAZY LOADING WITH BLUR-UP ==========
(function() {
    const images = document.querySelectorAll('img[loading="lazy"]');
    
    images.forEach(img => {
        img.addEventListener('load', function() {
            this.classList.add('loaded');
        });
        
        // If already loaded (cached)
        if (img.complete) {
            img.classList.add('loaded');
        }
    });
})();

// ========== BUTTON RIPPLE EFFECT ==========
(function() {
    document.querySelectorAll('.btn, .cta-btn, button[type="submit"]').forEach(btn => {
        btn.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                left: ${x}px;
                top: ${y}px;
                background: rgba(255, 255, 255, 0.5);
                border-radius: 50%;
                transform: scale(0);
                animation: ripple-animation 0.6s ease-out;
                pointer-events: none;
            `;
            
            this.style.position = this.style.position || 'relative';
            this.style.overflow = 'hidden';
            this.appendChild(ripple);
            
            setTimeout(() => ripple.remove(), 600);
        });
    });
    
    // Add ripple animation if not exists
    if (!document.querySelector('#ripple-animation-style')) {
        const style = document.createElement('style');
        style.id = 'ripple-animation-style';
        style.textContent = `
            @keyframes ripple-animation {
                to { transform: scale(4); opacity: 0; }
            }
        `;
        document.head.appendChild(style);
    }
})();

// ========== MAGNETIC CURSOR EFFECT (Desktop Only) ==========
(function() {
    if (window.innerWidth > 768) {
        const magneticElements = document.querySelectorAll('.btn, .social-link, .project-link, .nav-cta');
        
        magneticElements.forEach(el => {
            el.addEventListener('mousemove', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                
                this.style.transform = `translate(${x * 0.3}px, ${y * 0.3}px)`;
            });
            
            el.addEventListener('mouseleave', function() {
                this.style.transform = 'translate(0, 0)';
            });
        });
    }
})();

// ========== PARALLAX SCROLLING ==========
(function() {
    const parallaxElements = document.querySelectorAll('.hero, .parallax-section');
    
    function updateParallax() {
        const scrolled = window.pageYOffset;
        
        parallaxElements.forEach((el, index) => {
            if (el.getBoundingClientRect().top < window.innerHeight) {
                const speed = 0.5;
                const yPos = -(scrolled * speed);
                el.style.transform = `translateY(${yPos}px)`;
            }
        });
    }
    
    if (parallaxElements.length && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        window.addEventListener('scroll', () => {
            window.requestAnimationFrame(updateParallax);
        }, { passive: true });
    }
})();

// ========== FORM VALIDATION ANIMATIONS ==========
(function() {
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        const inputs = form.querySelectorAll('input, textarea, select');
        
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.value && !this.checkValidity()) {
                    this.classList.add('error');
                } else {
                    this.classList.remove('error');
                }
            });
            
            input.addEventListener('input', function() {
                if (this.classList.contains('error') && this.checkValidity()) {
                    this.classList.remove('error');
                }
            });
        });
        
        form.addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('[type="submit"]');
            if (submitBtn && !submitBtn.classList.contains('loading')) {
                submitBtn.classList.add('loading');
                submitBtn.disabled = true;
                
                // Remove loading state after 3 seconds (adjust based on actual form handling)
                setTimeout(() => {
                    submitBtn.classList.remove('loading');
                    submitBtn.disabled = false;
                }, 3000);
            }
        });
    });
})();

// ========== KEYBOARD NAVIGATION ENHANCEMENT ==========
(function() {
    // Close modals/menus on Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            // Close mobile menu
            const menuToggle = document.querySelector('.menu-toggle');
            const navMenu = document.querySelector('nav ul, nav .nav-links');
            const overlay = document.querySelector('.nav-overlay');
            
            if (navMenu && navMenu.classList.contains('active')) {
                menuToggle?.classList.remove('active');
                navMenu.classList.remove('active');
                overlay?.classList.remove('active');
                document.body.style.overflow = '';
            }
        }
    });
    
    // Tab trapping in mobile menu
    const navMenu = document.querySelector('nav ul, nav .nav-links');
    if (navMenu) {
        navMenu.addEventListener('keydown', function(e) {
            if (e.key === 'Tab' && this.classList.contains('active')) {
                const focusableElements = this.querySelectorAll('a, button, [tabindex]:not([tabindex="-1"])');
                const firstElement = focusableElements[0];
                const lastElement = focusableElements[focusableElements.length - 1];
                
                if (e.shiftKey && document.activeElement === firstElement) {
                    lastElement.focus();
                    e.preventDefault();
                } else if (!e.shiftKey && document.activeElement === lastElement) {
                    firstElement.focus();
                    e.preventDefault();
                }
            }
        });
    }
})();

// ========== DEBOUNCED RESIZE HANDLER ==========
(function() {
    let resizeTimeout;
    
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(function() {
            // Close mobile menu on resize to desktop
            if (window.innerWidth > 768) {
                const menuToggle = document.querySelector('.menu-toggle');
                const navMenu = document.querySelector('nav ul, nav .nav-links');
                const overlay = document.querySelector('.nav-overlay');
                
                menuToggle?.classList.remove('active');
                navMenu?.classList.remove('active');
                overlay?.classList.remove('active');
                document.body.style.overflow = '';
            }
        }, 250);
    });
})();

// ========== ERROR HANDLING ==========
window.addEventListener('error', function(e) {
    console.error('JavaScript Error:', e.error);
}, true);

