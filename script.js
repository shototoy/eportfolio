document.addEventListener('DOMContentLoaded', () => {
  const sidebar = document.getElementById('sidebar');
  const sidebarToggle = document.getElementById('sidebarToggle');
  const closeSidebar = document.getElementById('closeSidebar');
  const mainContent = document.querySelector('.main-content');
  const navLinks = document.querySelectorAll('.nav-link');

  // Check if we're on mobile
  function isMobile() {
    return window.innerWidth <= 768;
  }

  // Initialize sidebar state
  function initSidebar() {
    if (isMobile()) {
      sidebar.classList.add('hidden');
      sidebarToggle.classList.add('show');
      mainContent.classList.add('expanded');
    } else {
      sidebar.classList.remove('hidden');
      sidebarToggle.classList.remove('show');
      mainContent.classList.remove('expanded');
    }
  }

  // Toggle sidebar
  function toggleSidebar() {
    sidebar.classList.toggle('hidden');
    mainContent.classList.toggle('expanded');

    if (isMobile()) {
      sidebarToggle.classList.toggle('show');
    }
  }

  // Event listeners
  sidebarToggle.addEventListener('click', toggleSidebar);
  closeSidebar.addEventListener('click', toggleSidebar);

  // Smooth scroll to sections
  navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const targetId = link.getAttribute('href').substring(1);
      const targetSection = document.getElementById(targetId);

      if (targetSection) {
        targetSection.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });

        // Update active link
        navLinks.forEach(l => l.classList.remove('active'));
        link.classList.add('active');

        // Close sidebar on mobile after clicking
        if (isMobile()) {
          setTimeout(() => {
            sidebar.classList.add('hidden');
            sidebarToggle.classList.add('show');
          }, 300);
        }
      }
    });
  });

  // Update active link on scroll
  const sections = document.querySelectorAll('section');
  const observerOptions = {
    root: null,
    rootMargin: '-50% 0px -50% 0px',
    threshold: 0
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const id = entry.target.getAttribute('id');
        navLinks.forEach(link => {
          link.classList.remove('active');
          if (link.getAttribute('href') === `#${id}`) {
            link.classList.add('active');
          }
        });
      }
    });
  }, observerOptions);

  sections.forEach(section => {
    observer.observe(section);
  });

  // Initialize on load
  initSidebar();

  // Reinitialize on resize
  let resizeTimer;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      initSidebar();
    }, 250);
  });

  // Add scroll animations
  const animateOnScroll = () => {
    const elements = document.querySelectorAll('.about-card, .skill-card, .project-card, .reflection-card');

    const scrollObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '0';
          entry.target.style.transform = 'translateY(30px)';

          setTimeout(() => {
            entry.target.style.transition = 'all 0.6s ease';
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
          }, 100);

          scrollObserver.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1
    });

    elements.forEach(element => {
      scrollObserver.observe(element);
    });
  };

  animateOnScroll();

  // Add parallax effect to hero section
  const heroSection = document.querySelector('.hero-section');
  if (heroSection) {
    window.addEventListener('scroll', () => {
      const scrolled = window.pageYOffset;
      const parallax = scrolled * 0.5;
      heroSection.style.transform = `translateY(${parallax}px)`;
    });
  }

  // Add hover effect to cards
  const cards = document.querySelectorAll('.about-card, .skill-card, .project-card, .reflection-card');
  cards.forEach(card => {
    card.addEventListener('mouseenter', function () {
      this.style.transition = 'all 0.3s ease';
    });
  });

  // Prevent body scroll when sidebar is open on mobile
  if (isMobile()) {
    sidebar.addEventListener('transitionend', () => {
      if (!sidebar.classList.contains('hidden')) {
        document.body.style.overflow = 'hidden';
      } else {
        document.body.style.overflow = 'auto';
      }
    });
  }
});