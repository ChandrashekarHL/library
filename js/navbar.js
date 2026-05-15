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
  const navbar   = document.getElementById('navbar');
  const toggle   = document.getElementById('hamburger');        // matches navbar.php id="hamburger"
  const menu     = document.getElementById('nav-menu');         // matches navbar.php id="nav-menu"
  const overlay  = document.getElementById('nav-overlay');

  if (!navbar) return;

  /* ── Scroll: glassmorphism effect ── */
  const onScroll = () => navbar.classList.toggle('scrolled', window.scrollY > 60);
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  if (!toggle || !menu) return;

  /* ── Mobile toggle ── */
  const openMenu = () => {
    menu.classList.add('open');
    toggle.classList.add('open');
    overlay?.classList.add('active');
    toggle.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  };

  const closeMenu = () => {
    menu.classList.remove('open');
    toggle.classList.remove('open');
    overlay?.classList.remove('active');
    toggle.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  };

  toggle.addEventListener('click', () => {
    menu.classList.contains('open') ? closeMenu() : openMenu();
  });

  overlay?.addEventListener('click', closeMenu);

  /* ── Mobile Dropdowns (class="has-dropdown" in navbar.php) ── */
  const dropdownItems = menu.querySelectorAll('.has-dropdown');
  dropdownItems.forEach(item => {
    const link = item.querySelector('.nav-link');
    if (!link) return;
    link.addEventListener('click', (e) => {
      if (window.innerWidth <= 1024) {
        e.preventDefault();
        const isOpen = item.classList.contains('open');
        dropdownItems.forEach(d => {
          d.classList.remove('open');
          d.querySelector('.nav-link')?.setAttribute('aria-expanded', 'false');
        });
        if (!isOpen) {
          item.classList.add('open');
          link.setAttribute('aria-expanded', 'true');
        }
      }
    });
  });

  /* ── Resize / keyboard ── */
  window.addEventListener('resize', () => {
    if (window.innerWidth > 1024) {
      closeMenu();
      dropdownItems.forEach(d => d.classList.remove('open'));
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeMenu();
  });
}

/* ─────────────────────────────────────────
   ACCESSIBILITY BAR
───────────────────────────────────────── */
function initAccessibilityBar() {
  const fontSizes = ['font-sm', 'font-lg', 'font-xl'];
  let currentIdx  = -1;

  const applyFont = (idx) => {
    document.body.classList.remove(...fontSizes);
    if (idx >= 0 && idx < fontSizes.length) document.body.classList.add(fontSizes[idx]);
    currentIdx = idx;
    try { localStorage.setItem('lib-font-size', idx); } catch(e) {}
  };

  document.getElementById('font-decrease')?.addEventListener('click', () => applyFont(Math.max(-1, currentIdx - 1)));
  document.getElementById('font-reset')   ?.addEventListener('click', () => applyFont(-1));
  document.getElementById('font-increase')?.addEventListener('click', () => applyFont(Math.min(2, currentIdx + 1)));

  try {
    const saved = parseInt(localStorage.getItem('lib-font-size') ?? '-1');
    if (!isNaN(saved)) applyFont(saved);
  } catch(e) {}

  /* Contrast */
  const contrastBtn = document.getElementById('contrast-toggle');
  contrastBtn?.addEventListener('click', () => {
    const on = !document.body.classList.contains('contrast-mode');
    document.body.classList.toggle('contrast-mode', on);
    contrastBtn.classList.toggle('active', on);
    try { localStorage.setItem('lib-contrast', on ? '1' : '0'); } catch(e) {}
  });
  try {
    if (localStorage.getItem('lib-contrast') === '1') {
      document.body.classList.add('contrast-mode');
      document.getElementById('contrast-toggle')?.classList.add('active');
    }
  } catch(e) {}
}
