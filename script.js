document.addEventListener('DOMContentLoaded', () => {
  const navItems = document.querySelectorAll('.nav-item');
  const navCenter = document.querySelector('.nav-center');
  const clipOverlay = document.getElementById('clipOverlay');
  const mainSection = document.getElementById('mainSection');
  const sectionContent = document.getElementById('sectionContent');

  const templates = {
    home: document.getElementById('homeTemplate').innerHTML,
    about: document.getElementById('aboutTemplate').innerHTML,
    skills: document.getElementById('skillsTemplate').innerHTML,
    projects: document.getElementById('projectsTemplate').innerHTML,
    reflection: document.getElementById('reflectionTemplate').innerHTML
  };

  const gradients = {
    home: 'var(--gradient-1)',
    about: 'var(--gradient-2)',
    skills: 'var(--gradient-3)',
    projects: 'var(--gradient-4)',
    reflection: 'var(--gradient-5)'
  };

  let currentSection = 'home';
  let isTransitioning = false;

  function updateCenterButton(isHome) {
    if (isHome) {
      navCenter.style.transform = 'scale(1.05)';
      navCenter.querySelector('.profile-circle').style.boxShadow = '0 0 40px rgba(255, 107, 157, 0.8)';
    } else {
      navCenter.style.transform = 'scale(1)';
      navCenter.querySelector('.profile-circle').style.boxShadow = '0 0 30px rgba(255, 107, 157, 0.5)';
    }
  }

  function loadSection(sectionName) {
    if (isTransitioning || sectionName === currentSection) return;
    isTransitioning = true;

    updateCenterButton(sectionName === 'home');

    navItems.forEach(item => {
      if (item.dataset.section === sectionName) {
        item.classList.add('active');
      } else {
        item.classList.remove('active');
      }
    });

    sectionContent.classList.add('hidden');

    clipOverlay.classList.add('expanding');
    clipOverlay.classList.remove('shrinking');

    setTimeout(() => {
      mainSection.className = 'main-section ' + sectionName;
      sectionContent.innerHTML = templates[sectionName];
      currentSection = sectionName;
    }, 600);

    setTimeout(() => {
      clipOverlay.classList.remove('expanding');
      clipOverlay.classList.add('shrinking');
    }, 800);

    setTimeout(() => {
      sectionContent.classList.remove('hidden');
    }, 900);

    setTimeout(() => {
      clipOverlay.classList.remove('shrinking');
      isTransitioning = false;
    }, 1600);
  }

  navItems.forEach(item => {
    item.addEventListener('click', () => {
      const section = item.dataset.section;
      loadSection(section);
    });
  });

  navCenter.addEventListener('click', () => {
    loadSection('home');
  });

  // Auto-carousel functionality
  function initCarousels() {
    const carousels = document.querySelectorAll('.carousel-images');

    carousels.forEach(carousel => {
      const images = carousel.querySelectorAll('img');
      if (images.length <= 1) return;

      let currentIndex = 0;

      setInterval(() => {
        images[currentIndex].classList.remove('active');
        currentIndex = (currentIndex + 1) % images.length;
        images[currentIndex].classList.add('active');
      }, 3000);
    });
  }

  // Initialize home section on page load
  mainSection.className = 'main-section home';
  sectionContent.innerHTML = templates.home;
  updateCenterButton(true);

  // Initialize carousels when projects section is loaded
  const originalLoadSection = loadSection;
  function loadSectionWithCarousel(sectionName) {
    originalLoadSection(sectionName);
    if (sectionName === 'projects') {
      setTimeout(initCarousels, 1000);
    }
  }

  // Override loadSection calls
  navItems.forEach(item => {
    item.removeEventListener('click', () => { });
    item.addEventListener('click', () => {
      const section = item.dataset.section;
      loadSectionWithCarousel(section);
    });
  });
});