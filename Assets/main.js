//Menu togle button
document.querySelector('.menu-toggle').addEventListener('click', function() {
  document.querySelector('.nav-menu').classList.toggle('active');
});

  /**
   * Sticky Header on Scroll
   */
  const selectHeader = document.querySelector('#header');
  if (selectHeader) {
    let headerOffset = selectHeader.offsetTop;
    let nextElement = selectHeader.nextElementSibling;

    const headerFixed = () => {
      if ((headerOffset - window.scrollY) <= 0) {
        selectHeader.classList.add('sticked');
        if (nextElement) nextElement.classList.add('sticked-header-offset');
      } else {
        selectHeader.classList.remove('sticked');
        if (nextElement) nextElement.classList.remove('sticked-header-offset');
      }
    }
    window.addEventListener('load', headerFixed);
    document.addEventListener('scroll', headerFixed);
  }

  /* Active Navigation" */
  document.addEventListener('DOMContentLoaded', function() {
    var currentPage = window.location.pathname.split("/").pop();
    var navLinks = document.querySelectorAll('.nav-links a');
    navLinks.forEach(function(link) {
      if (link.getAttribute('href') === currentPage) {
        link.classList.add('active');
        var dropdown = link.closest('.dropdown');
        if (dropdown) {
          dropdown.classList.add('active');
        }
      }
    });
  });
  
/* subtle fade-in effect for elements with the "fade-in" class */
document.addEventListener('DOMContentLoaded', function() {
  const fadeElements = document.querySelectorAll('.fade-in');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.animation = 'fadeIn 1s ease-in forwards';
      }
    });
  });

  fadeElements.forEach(element => {
    observer.observe(element);
  });
});
/* scroll-triggered animation */
document.addEventListener('DOMContentLoaded', function() {
  const fadeElements = document.querySelectorAll('.fade-in');
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
      }
    });
  }, {
    threshold: 0.1
  });

  fadeElements.forEach(element => {
    observer.observe(element);
  });
});

