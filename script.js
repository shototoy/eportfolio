document.addEventListener('DOMContentLoaded', () => {
  const sidebar = document.getElementById('sidebar');
  const sidebarToggle = document.getElementById('sidebarToggle');
  const closeSidebar = document.getElementById('closeSidebar');
  const navLinks = document.querySelectorAll('.nav-link');

  function toggleSidebar() {
    sidebar.classList.toggle('show');
  }

  sidebarToggle.addEventListener('click', toggleSidebar);
  closeSidebar.addEventListener('click', toggleSidebar);

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

        navLinks.forEach(l => l.classList.remove('active'));
        link.classList.add('active');

        if (window.innerWidth <= 768) {
          setTimeout(() => {
            sidebar.classList.remove('show');
          }, 300);
        }
      }
    });
  });

  const sections = document.querySelectorAll('section');
  const observerOptions = {
    root: null,
    rootMargin: '-20% 0px -20% 0px',
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

  const cards = document.querySelectorAll('.about-card, .skill-card, .project-card, .reflection-card');

  const cardObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.animationPlayState = 'running';
      }
    });
  }, {
    threshold: 0.1
  });

  cards.forEach(card => {
    cardObserver.observe(card);
  });

  document.querySelectorAll('.welcome-card, .about-card, .skill-card, .project-card, .reflection-card').forEach(card => {
    card.addEventListener('mouseenter', function (e) {
      const rect = this.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;

      const centerX = rect.width / 2;
      const centerY = rect.height / 2;

      const rotateX = (y - centerY) / 20;
      const rotateY = (centerX - x) / 20;

      this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-12px)`;
    });

    card.addEventListener('mousemove', function (e) {
      const rect = this.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;

      const centerX = rect.width / 2;
      const centerY = rect.height / 2;

      const rotateX = (y - centerY) / 20;
      const rotateY = (centerX - x) / 20;

      this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-12px)`;
    });

    card.addEventListener('mouseleave', function () {
      this.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateY(0)';
    });
  });

  const skillIcons = document.querySelectorAll('.skill-icon, .card-icon, .reflection-icon');
  skillIcons.forEach(icon => {
    icon.addEventListener('mouseenter', function () {
      this.style.animation = 'pulse 0.6s ease-in-out';
    });

    icon.addEventListener('animationend', function () {
      this.style.animation = '';
    });
  });
});

const style = document.createElement('style');
style.textContent = `
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.15); }
    }
`;
document.head.appendChild(style);