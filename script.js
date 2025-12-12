document.addEventListener('DOMContentLoaded', () => {
  const navItems = document.querySelectorAll('.nav-item');
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

  function loadSection(sectionName) {
    if (sectionName === currentSection) return;

    navItems.forEach(item => {
      if (item.dataset.section === sectionName) {
        item.classList.add('active');
      } else {
        item.classList.remove('active');
      }
    });

    mainSection.className = 'main-section ' + sectionName;
    sectionContent.innerHTML = templates[sectionName];
    currentSection = sectionName;
  }

  navItems.forEach(item => {
    item.addEventListener('click', () => {
      const section = item.dataset.section;
      loadSection(section);
    });
  });

  sectionContent.innerHTML = templates.home;
  mainSection.className = 'main-section home';
});
