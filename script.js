document.addEventListener('DOMContentLoaded', () => {
  const navItems = document.querySelectorAll('.dock-item');
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

  let currentSection = 'home';
  let isTransitioning = false;

  function loadSection(sectionName) {
    if (isTransitioning || sectionName === currentSection) return;
    isTransitioning = true;

    // Update Dock Active State
    navItems.forEach(item => {
      if (item.dataset.section === sectionName) {
        item.classList.add('active');
      } else {
        item.classList.remove('active');
      }
    });

    sectionContent.classList.add('hidden');

    // Raise overlay above clip-path during transition
    mainSection.classList.add('transitioning');

    // Start expanding clip path (Gold Circle)
    clipOverlay.classList.add('expanding');
    clipOverlay.classList.remove('shrinking');

    // Wait for cover
    setTimeout(() => {
      // Switch Content
      mainSection.className = 'main-section ' + sectionName + ' transitioning';
      sectionContent.innerHTML = templates[sectionName];
      currentSection = sectionName;
    }, 600);

    // Start shrinking clip path
    setTimeout(() => {
      clipOverlay.classList.remove('expanding');
      clipOverlay.classList.add('shrinking');
    }, 800);

    // Show Content
    setTimeout(() => {
      sectionContent.classList.remove('hidden');
    }, 900);

    // Cleanup
    setTimeout(() => {
      clipOverlay.classList.remove('shrinking');
      mainSection.classList.remove('transitioning');
      isTransitioning = false;
    }, 1600);
  }

  // Event Listeners
  navItems.forEach(item => {
    item.addEventListener('click', () => {
      const section = item.dataset.section;
      loadSection(section);
    });
  });

  // Initialize Home
  sectionContent.innerHTML = templates.home;
  mainSection.className = 'main-section home';
});