/**
 * AeroMFG AI - Master Navigation & Accessibility Controller
 * Fully accessible keyboard navigation, mobile hamburger drawer, and interactive states.
 */

document.addEventListener('DOMContentLoaded', () => {
  const navToggle = document.querySelector('.nav-toggle');
  const navMenu = document.querySelector('.nav-menu');
  const navLinks = document.querySelectorAll('.nav-link');

  // Set active link based on current page URL
  const currentPath = window.location.pathname.split('/').pop() || 'index.html';
  navLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPath || (currentPath === '' && href === 'index.html')) {
      link.classList.add('active');
      link.setAttribute('aria-current', 'page');
    } else {
      link.classList.remove('active');
      link.removeAttribute('aria-current');
    }
  });

  // Mobile Hamburger Toggle
  if (navToggle && navMenu) {
    const toggleMenu = (open) => {
      const isExpanded = open !== undefined ? open : navToggle.getAttribute('aria-expanded') === 'true';
      const newState = !isExpanded;
      navToggle.setAttribute('aria-expanded', String(newState));
      if (newState) {
        navMenu.classList.add('open');
      } else {
        navMenu.classList.remove('open');
      }
    };

    navToggle.addEventListener('click', () => {
      toggleMenu();
    });

    // Close when pressing Escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && navMenu.classList.contains('open')) {
        toggleMenu(false);
        navToggle.focus();
      }
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
      if (navMenu.classList.contains('open') && !navMenu.contains(e.target) && !navToggle.contains(e.target)) {
        toggleMenu(false);
      }
    });

    // Close on resize if enlarged beyond mobile breakpoint
    window.addEventListener('resize', () => {
      if (window.innerWidth > 768 && navMenu.classList.contains('open')) {
        toggleMenu(false);
      }
    });
  }

  // Handle contact form simulation if present
  const contactForm = document.querySelector('.contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const submitBtn = contactForm.querySelector('button[type="submit"]');
      if (submitBtn) {
        const originalText = submitBtn.textContent;
        submitBtn.disabled = true;
        submitBtn.textContent = 'Transmitting Inquiry...';
        setTimeout(() => {
          submitBtn.textContent = 'Inquiry Transmitted Successfully';
          submitBtn.style.backgroundColor = '#059669';
          const successNote = document.createElement('p');
          successNote.className = 'form-success-note';
          successNote.style.color = '#059669';
          successNote.style.fontWeight = '600';
          successNote.style.marginTop = '1rem';
          successNote.textContent = 'Thank you. An AeroMfg AI flight-systems engineer will review your facility specifications and contact you shortly.';
          contactForm.appendChild(successNote);
        }, 800);
      }
    });
  }
});
