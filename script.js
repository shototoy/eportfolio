document.addEventListener('DOMContentLoaded', () => {
  const menuToggle = document.querySelector('.menu-toggle');
  const navLinks = document.querySelector('.nav-links');
  const links = document.querySelectorAll('.nav-links li a');
  const mainWrapper = document.querySelector('.main-wrapper');

  if (menuToggle) {
    menuToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      menuToggle.classList.toggle('active');

      const bars = menuToggle.querySelectorAll('.bar');
      if (navLinks.classList.contains('active')) {
        bars[0].style.transform = 'rotate(45deg) translate(5px, 6px)';
        bars[1].style.opacity = '0';
        bars[2].style.transform = 'rotate(-45deg) translate(5px, -6px)';
      } else {
        bars.forEach(bar => bar.style.transform = 'none');
        bars[1].style.opacity = '1';
      }
    });
  }

  links.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const targetId = link.getAttribute('href').substring(1);
      const targetSection = document.getElementById(targetId);

      if (targetSection) {
        targetSection.scrollIntoView({ behavior: 'smooth', block: 'start', inline: 'start' });
      }

      navLinks.classList.remove('active');
      if (menuToggle) {
        menuToggle.classList.remove('active');
        const bars = menuToggle.querySelectorAll('.bar');
        bars.forEach(bar => bar.style.transform = 'none');
        bars[1].style.opacity = '1';
      }
    });
  });

  const sections = document.querySelectorAll('section, header');
  const navLi = document.querySelectorAll('.nav-links li a');

  mainWrapper.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(section => {
      const sectionLeft = section.offsetLeft;
      const sectionWidth = section.clientWidth;
      if (mainWrapper.scrollLeft >= (sectionLeft - sectionWidth / 3)) {
        current = section.getAttribute('id');
      }
    });

    navLi.forEach(a => {
      a.classList.remove('active');
      if (a.getAttribute('href').includes(current)) {
        a.classList.add('active');
      }
    });
  });
});