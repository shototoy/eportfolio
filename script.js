document.addEventListener('DOMContentLoaded', () => {
  const navItems = document.querySelectorAll('.nav-item');
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

    navItems.forEach(item => {
      if (item.dataset.section === sectionName) {
        item.classList.add('active');
      } else {
        item.classList.remove('active');
      }
    });

    contentLeft.classList.add('animating');

    setTimeout(() => {
      contentLeft.innerHTML = templates[sectionName];
      contentLeft.scrollTop = 0;
    }, 100);

    setTimeout(() => {
      contentLeft.classList.remove('animating');
    }, 700);

    currentSection = sectionName;
  }

  navItems.forEach(item => {
    item.addEventListener('click', () => {
      const section = item.dataset.section;
      loadSection(section);
    });
  });

  contentLeft.innerHTML = templates.home;
});

