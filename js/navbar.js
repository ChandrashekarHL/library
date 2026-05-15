/**
 * navbar.js — Mobile menu, scroll effects, accessibility controls
 */

document.addEventListener('DOMContentLoaded', () => {
  initNavbar();
  initAccessibilityBar();
});

/* ─────────────────────────────────────────
   NAVBAR
───────────────────────────────────────── */
function initNavbar() {
  const navbar  = document.getElementById('navbar');
  const toggle  = document.getElementById('nav-toggle');
  const menu    = document.getElementById('nav-menu');
  const overlay = document.getElementById('nav-overlay');

  if (!navbar || !toggle || !menu) return;

  /* ── Scroll: add .scrolled class ── */
  const onScroll = () => {
    if (window.scrollY > 60) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  };
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll(); // run immediately

  /* ── Mobile toggle ── */
  const openMenu = () => {
    menu.classList.add('open');
    toggle.classList.add('open');
    overlay.classList.add('active');
    toggle.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  };

  const closeMenu = () => {
    menu.classList.remove('open');
    toggle.classList.remove('open');
    overlay.classList.remove('active');
    toggle.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  };

  toggle.addEventListener('click', () => {
    if (menu.classList.contains('open')) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  overlay.addEventListener('click', closeMenu);

  /* ── Mobile Dropdowns ── */
  const dropdownItems = menu.querySelectorAll('.has-dropdown');
  dropdownItems.forEach(item => {
    const link = item.querySelector('.nav-link');
    link.addEventListener('click', (e) => {
      if (window.innerWidth <= 1024) {
        e.preventDefault();
        const isOpen = item.classList.contains('open');
        // Close all
        dropdownItems.forEach(d => d.classList.remove('open'));
        if (!isOpen) {
          item.classList.add('open');
          link.setAttribute('aria-expanded', 'true');
        } else {
          link.setAttribute('aria-expanded', 'false');
        }
      }
    });
  });

  /* ── Close menu on resize ── */
  window.addEventListener('resize', () => {
    if (window.innerWidth > 1024) {
      closeMenu();
      dropdownItems.forEach(d => d.classList.remove('open'));
    }
  });

  /* ── Close menu on nav link click (non-dropdown) ── */
  menu.querySelectorAll('.nav-link:not(.has-dropdown > .nav-link)').forEach(link => {
    link.addEventListener('click', closeMenu);
  });

  /* ── Keyboard navigation ── */
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && menu.classList.contains('open')) {
      closeMenu();
      toggle.focus();
    }
  });
}

/* ─────────────────────────────────────────
   ACCESSIBILITY BAR
───────────────────────────────────────── */
function initAccessibilityBar() {
  // Font size control
  const fontSizes = ['font-sm', 'font-lg', 'font-xl'];
  const fontBtns  = {
    decrease : document.getElementById('font-decrease'),
    reset    : document.getElementById('font-reset'),
    increase : document.getElementById('font-increase'),
  };

  let currentFontIndex = -1; // -1 = default

  const applyFont = (index) => {
    // Remove all font classes
    document.body.classList.remove(...fontSizes);
    if (index >= 0 && index < fontSizes.length) {
      document.body.classList.add(fontSizes[index]);
    }
    currentFontIndex = index;
    // Save
    try { localStorage.setItem('lib-font-size', index); } catch(e) {}
  };

  fontBtns.decrease?.addEventListener('click', () => {
    applyFont(Math.max(-1, currentFontIndex - 1));
  });
  fontBtns.reset?.addEventListener('click', () => {
    applyFont(-1);
  });
  fontBtns.increase?.addEventListener('click', () => {
    applyFont(Math.min(fontSizes.length - 1, currentFontIndex + 1));
  });

  // Restore saved font size
  try {
    const saved = parseInt(localStorage.getItem('lib-font-size') ?? '-1');
    if (!isNaN(saved)) applyFont(saved);
  } catch(e) {}

  // ── Contrast Mode ──
  const contrastBtn = document.getElementById('contrast-toggle');

  const toggleContrast = (on) => {
    document.body.classList.toggle('contrast-mode', on);
    contrastBtn?.classList.toggle('active', on);
    try { localStorage.setItem('lib-contrast', on ? '1' : '0'); } catch(e) {}
  };

  contrastBtn?.addEventListener('click', () => {
    toggleContrast(!document.body.classList.contains('contrast-mode'));
  });

  // Restore saved contrast
  try {
    if (localStorage.getItem('lib-contrast') === '1') toggleContrast(true);
  } catch(e) {}

  // ── Screen Reader button ──
  const srBtn = document.getElementById('screen-reader-btn');
  srBtn?.addEventListener('click', () => {
    // Visual feedback — in production this would trigger an SR-compatible mode
    srBtn.textContent = '✓ SR Mode';
    srBtn.classList.add('active');
    // Announce to actual screen readers
    const announcer = document.createElement('div');
    announcer.setAttribute('aria-live', 'polite');
    announcer.setAttribute('aria-atomic', 'true');
    announcer.className = 'sr-only';
    announcer.textContent = 'Screen reader mode activated. All interactive elements are keyboard accessible.';
    document.body.appendChild(announcer);
    setTimeout(() => announcer.remove(), 3000);
  });
}
