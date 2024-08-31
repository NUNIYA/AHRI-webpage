//Menu togle button
document.querySelector('.menu-toggle').addEventListener('click', function() {
  // Toggle the 'active' class on the menu
  const navMenu = document.querySelector('.nav-menu');
  const overlay = document.querySelector('.overlay');
  navMenu.classList.toggle('active');
  overlay.classList.toggle('active');
  
  // If the menu is active, disable scrolling
  if (navMenu.classList.contains('active')) {
      document.body.style.overflow = 'hidden';
  } else {
      // If the menu is not active, re-enable scrolling
      document.body.style.overflow = '';
  }
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


document.addEventListener('scroll', function() {
  var header = document.getElementById('header-diff');
  if (window.scrollY > 50) { // Adjust this value as needed
    header.classList.add('sticked');
  } else {
    header.classList.remove('sticked');
  }
});


  /* Active Navigation" */
  document.addEventListener('DOMContentLoaded', function() {
    var currentPage = window.location.pathname.split("/").pop().toLowerCase();
    var navLinks = document.querySelectorAll('.nav-links a');
    navLinks.forEach(function(link) {
      link.classList.remove('active');
    });
    var homeLink = document.querySelector('.nav-links a[href="index.html"]');
    var activeLink = null;
    navLinks.forEach(function(link) {
      var linkHref = link.getAttribute('href').toLowerCase();
      if (linkHref === currentPage) {
        activeLink = link;
      }
    });
    if (!activeLink || currentPage === "" || currentPage === "index.html") {
      activeLink = homeLink;
    }
    if (activeLink) {
      activeLink.classList.add('active');
      var dropdown = activeLink.closest('.dropdown');
      if (dropdown) {
        dropdown.classList.add('active');
      }
    }
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

