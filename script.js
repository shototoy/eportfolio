const yearEl = document.getElementById('currentYear');
if (yearEl) yearEl.textContent = new Date().getFullYear();

(function() {
  const menuToggle = document.getElementById('menuToggle') || document.querySelector('.menu-toggle');
  const navMenu = document.getElementById('navMenu') || document.getElementById('navLinks') || document.querySelector('nav ul') || document.querySelector('.nav-links');
  const navbar = document.getElementById('navbar') || document.querySelector('nav');

  let overlay = document.querySelector('.nav-overlay');
  if (!overlay && navMenu) {
    overlay = document.createElement('div');
    overlay.className = 'nav-overlay';
    document.body.appendChild(overlay);
  }

  if (navbar) {
    window.addEventListener('scroll', () => {
      navbar.classList.toggle('scrolled', window.pageYOffset > 50);
      navbar.style.transform = window.pageYOffset > 300 ? 'translateY(-100%)' : 'translateY(0)';
    }, { passive: true });
  }

  function closeMenu() {
    menuToggle?.classList.remove('active');
    navMenu?.classList.remove('active');
    overlay?.classList.remove('active');
    menuToggle?.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }

  if (menuToggle && navMenu) {
    menuToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      const isActive = menuToggle.classList.toggle('active');
      navMenu.classList.toggle('active');
      overlay?.classList.toggle('active');
      menuToggle.setAttribute('aria-expanded', isActive);
      document.body.style.overflow = isActive ? 'hidden' : '';
    });

    navMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', closeMenu);
    });

    overlay?.addEventListener('click', closeMenu);

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && navMenu.classList.contains('active')) {
        closeMenu();
        menuToggle.focus();
      }
    });
  }

  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('nav a[href^="#"]');

  if (sections.length && navLinks.length) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const id = entry.target.id;
          navLinks.forEach(link => {
            link.classList.toggle('active', link.getAttribute('href') === '#' + id);
          });
        }
      });
    }, { rootMargin: '-20% 0px -80% 0px' });

    sections.forEach(section => observer.observe(section));
  }

  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const href = this.getAttribute('href');
      if (href === '#' || href === '#!') return;

      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        const navHeight = document.querySelector('nav')?.offsetHeight || 70;
        const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navHeight;

        window.scrollTo({ top: targetPosition, behavior: 'smooth' });
        history.pushState(null, null, href);
        target.setAttribute('tabindex', '-1');
        target.focus({ preventScroll: true });
      }
    });
  });

  window.addEventListener('resize', () => {
    if (window.innerWidth > 768) closeMenu();
  });
})();

(function() {
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const fadeObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.classList.add('animate-in');
        }, index * 50);
        fadeObserver.unobserve(entry.target);
      }
    });
  }, observerOptions);

  document.querySelectorAll('.fade-element, .card, .skill-item, .project-card, .skill-card, .timeline-item, .gradient-card, section:not(.hero)').forEach(el => {
    if (!el.classList.contains('fade-element') && !el.classList.contains('animate-in')) {
      el.classList.add('fade-element');
    }
    fadeObserver.observe(el);
  });

  document.querySelectorAll('.cards-grid > *, .skills-grid > *, .projects-grid > *').forEach((el, index) => {
    el.classList.add('stagger-item');
    el.style.transitionDelay = `${index * 0.1}s`;
    fadeObserver.observe(el);
  });
})();

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
    const documentHeight = document.documentElement.scrollHeight - window.innerHeight;
    const progress = (window.pageYOffset / documentHeight) * 100;
    progressBar.style.width = progress + '%';
    progressBar.setAttribute('aria-valuenow', Math.round(progress));
  }

  window.addEventListener('scroll', updateScrollProgress, { passive: true });
  updateScrollProgress();
})();

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
    backToTop.classList.toggle('visible', window.pageYOffset > 300);
  }

  backToTop.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  window.addEventListener('scroll', toggleBackToTop, { passive: true });
  toggleBackToTop();
})();

document.querySelectorAll('img[loading="lazy"]').forEach(img => {
  img.addEventListener('load', function() {
    this.classList.add('loaded');
  });
  if (img.complete) img.classList.add('loaded');
});

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

if (!document.querySelector('#ripple-animation-style')) {
  const style = document.createElement('style');
  style.id = 'ripple-animation-style';
  style.textContent = '@keyframes ripple-animation { to { transform: scale(4); opacity: 0; } }';
  document.head.appendChild(style);
}

if (window.innerWidth > 768) {
  document.querySelectorAll('.btn, .social-link, .project-link, .nav-cta').forEach(el => {
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

(function() {
  const parallaxElements = document.querySelectorAll('.hero, .parallax-section');

  if (parallaxElements.length && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    window.addEventListener('scroll', () => {
      window.requestAnimationFrame(() => {
        const scrolled = window.pageYOffset;
        parallaxElements.forEach(el => {
          if (el.getBoundingClientRect().top < window.innerHeight) {
            el.style.transform = `translateY(${-(scrolled * 0.5)}px)`;
          }
        });
      });
    }, { passive: true });
  }
})();

document.querySelectorAll('form').forEach(form => {
  const inputs = form.querySelectorAll('input, textarea, select');

  inputs.forEach(input => {
    input.addEventListener('blur', function() {
      this.classList.toggle('error', this.value && !this.checkValidity());
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

      setTimeout(() => {
        submitBtn.classList.remove('loading');
        submitBtn.disabled = false;
      }, 3000);
    }
  });
});

document.querySelectorAll('.btn, .cta-btn, .contact-link').forEach(btn => {
  btn.setAttribute('role', 'button');
  if (!btn.getAttribute('tabindex')) btn.setAttribute('tabindex', '0');

  btn.addEventListener('keydown', function(e) {
    if (e.key === 'Enter' || e.key === ' ') {
      e.preventDefault();
      this.click();
    }
  });
});

window.addEventListener('error', function(e) {
  console.error('JavaScript Error:', e.error);
}, true);