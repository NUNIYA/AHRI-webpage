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


// JavaScript to change header background on scroll
window.addEventListener('scroll', function() {
  var header = document.querySelector('.custom-header');
  if (window.scrollY > 50) { // Adjust scroll distance to trigger the effect
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});

document.addEventListener('DOMContentLoaded', () => {
  const infoBoxes = document.querySelectorAll('.info-box');
  const modals = document.querySelectorAll('.modal');
  const closeButtons = document.querySelectorAll('.close');

  infoBoxes.forEach(infoBox => {
      infoBox.addEventListener('click', () => {
          const target = document.querySelector(infoBox.getAttribute('data-target'));
          target.style.display = 'block';
      });
  });

  closeButtons.forEach(button => {
      button.addEventListener('click', () => {
          button.closest('.modal').style.display = 'none';
      });
  });

  window.addEventListener('click', (event) => {
      if (event.target.classList.contains('modal')) {
          event.target.style.display = 'none';
      }
  });

  // Puzzle assembly effect on scroll
  const handleScroll = () => {
      const windowHeight = window.innerHeight;
      infoBoxes.forEach(box => {
          const boxTop = box.getBoundingClientRect().top;
          if (boxTop < windowHeight - 100) { // Trigger animation when in view
              box.classList.add('animate');
          }
      });
  };

  handleScroll();

  window.addEventListener('scroll', handleScroll);
});


$(document).ready(function() {
  $('.icon-container').on('click', function() {
      var title = $(this).data('title');
      var description = $(this).data('description');

      $('#descriptionModalLabel').text(title);
      $('#descriptionText').text(description);

      $('#descriptionModal').modal('show');
  });

  AOS.init(); // Initialize AOS (Animate On Scroll) library
});

document.querySelectorAll('.icon-container').forEach(function(element) {
  element.addEventListener('click', function(event) {

      const title = this.getAttribute('data-title');
      const description = this.getAttribute('data-description');

      let dropdown = document.createElement('div');
      dropdown.classList.add('custom-dropdown');
      
      dropdown.innerHTML = `
          <div class="dropdown-card">
              <h5>${title}</h5>
              <p>${description}</p>
          </div>
      `;

      let existingDropdown = document.querySelector('.custom-dropdown');
      if (existingDropdown) {
          existingDropdown.remove();
      }

      document.body.appendChild(dropdown);

      const rect = this.getBoundingClientRect();

      const topPosition = window.scrollY + rect.bottom;
      const leftPosition = window.scrollX + rect.left;

      dropdown.style.position = 'absolute';
      dropdown.style.top = `${topPosition}px`;
      dropdown.style.left = `${leftPosition}px`;
  });
});

document.addEventListener('click', function(event) {
  let dropdown = document.querySelector('.custom-dropdown');
  if (dropdown && !event.target.closest('.icon-container')) {
      dropdown.remove();
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
        var parentDropdown = activeLink.closest('.dropdown-content');
        if (parentDropdown) {
            var dropdownParent = parentDropdown.closest('.dropdown');
            if (dropdownParent) {
                dropdownParent.querySelector('a').classList.add('active');
                var grandParentDropdown = dropdownParent.closest('.dropdown-content');
                if (grandParentDropdown) {
                    var grandParent = grandParentDropdown.closest('.dropdown');
                    if (grandParent) {
                        grandParent.querySelector('a').classList.add('active');
                    }
                }
            }
        }
        var topDropdown = activeLink.closest('.dropdown');
        if (topDropdown) {
            topDropdown.querySelector('a').classList.add('active');
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

// for programs page
let items = document.querySelectorAll('.slider .item');
    let next = document.getElementById('next');
    let prev = document.getElementById('prev');
    
    let active = 3;
    function loadShow(){
        let stt = 0;
        items[active].style.transform = `none`;
        items[active].style.zIndex = 1;
        items[active].style.filter = 'none';
        items[active].style.opacity = 1;
        for(var i = active + 1; i < items.length; i++){
            stt++;
            items[i].style.transform = `translateX(${120*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(-1deg)`;
            items[i].style.zIndex = -stt;
            items[i].style.filter = 'blur(5px)';
            items[i].style.opacity = stt > 2 ? 0 : 0.6;
        }
        stt = 0;
        for(var i = active - 1; i >= 0; i--){
            stt++;
            items[i].style.transform = `translateX(${-120*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(1deg)`;
            items[i].style.zIndex = -stt;
            items[i].style.filter = 'blur(5px)';
            items[i].style.opacity = stt > 2 ? 0 : 0.6;
        }
    }
    loadShow();
    next.onclick = function(){
      active = (active + 1) % items.length; 
      loadShow();
    }
    prev.onclick = function(){
      active = (active - 1 + items.length) % items.length; 
      loadShow();
    }

    setInterval(function() {
      next.click(); 
  }, 3000); 


    
  