/**
 * AeroMFG AI - Master Navigation & Accessibility Controller
 * Fully accessible keyboard navigation, mobile hamburger drawer, and interactive states.
 * Compatible with both WordPress dynamic routing and static HTML setups.
 */

document.addEventListener('DOMContentLoaded', () => {
  const navToggle = document.querySelector('.nav-toggle');
  const navMenu = document.querySelector('.nav-menu');
  const navLinks = document.querySelectorAll('.nav-link');

  // Normalize path for active link detection (handles /about/, /about.html, etc.)
  const rawPath = window.location.pathname.replace(/\/+$/, '') || '/';
  const cleanPath = rawPath.split('/').pop() || '';

  navLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (!href) return;

    try {
      const linkUrl = new URL(href, window.location.origin);
      const linkPath = linkUrl.pathname.replace(/\/+$/, '') || '/';
      const linkSlug = linkPath.split('/').pop() || '';

      const isMatch = (linkPath === rawPath) || (linkSlug && linkSlug === cleanPath) || (rawPath === '/' && (linkPath === '/' || linkSlug === 'index.html'));

      if (isMatch) {
        link.classList.add('active');
        link.setAttribute('aria-current', 'page');
      }
    } catch (e) {
      // Fallback relative comparison
      if (href === cleanPath || href === rawPath) {
        link.classList.add('active');
        link.setAttribute('aria-current', 'page');
      }
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

    navToggle.addEventListener('click', (e) => {
      e.stopPropagation();
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

  // Handle contact form simulation on client-side demo
  const contactForm = document.querySelector('.contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      const submitBtn = contactForm.querySelector('button[type="submit"]');
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.textContent = 'Transmitting Inquiry...';
        setTimeout(() => {
          submitBtn.textContent = 'Inquiry Transmitted Successfully';
          submitBtn.style.backgroundColor = '#059669';
          
          let successNote = contactForm.querySelector('.form-success-note');
          if (!successNote) {
            successNote = document.createElement('p');
            successNote.className = 'form-success-note';
            successNote.style.color = '#059669';
            successNote.style.fontWeight = '600';
            successNote.style.marginTop = '1rem';
            successNote.textContent = 'Thank you. An AeroMFG AI flight-systems engineer will review your facility specifications and contact you shortly.';
            contactForm.appendChild(successNote);
          }
        }, 800);
      }
    });
  }
});
