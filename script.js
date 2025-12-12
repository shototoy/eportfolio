document.addEventListener('DOMContentLoaded', () => {
  const contentLeft = document.getElementById('contentLeft');

  const templates = {
    home: document.getElementById('homeTemplate').innerHTML,
    about: document.getElementById('aboutTemplate').innerHTML,
    skills: document.getElementById('skillsTemplate').innerHTML,
    reflection: document.getElementById('reflectionTemplate').innerHTML
  };

  let currentSection = 'home';

  function loadSection(sectionName) {
    if (sectionName === currentSection) return;

    contentLeft.classList.add('animating');

    setTimeout(() => {
      contentLeft.innerHTML = templates[sectionName];
      contentLeft.scrollTop = 0;
    }, 100);

    setTimeout(() => {
      contentLeft.classList.remove('animating');
    }, 1200);

    currentSection = sectionName;
  }

  // Initialize with home content
  contentLeft.innerHTML = templates.home;

  // Add event listeners for nav words in text portrait
  document.addEventListener('click', (e) => {
    if (e.target.classList.contains('nav-word')) {
      const section = e.target.dataset.section;
      loadSection(section);
    }
  });
});
