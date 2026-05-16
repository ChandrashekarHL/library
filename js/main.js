/**
 * main.js — Core initializer (no Lenis dependency)
 * Native smooth scroll + robust page loader + modal helpers
 */

document.addEventListener('DOMContentLoaded', () => {
  hideLoader();
  initLenis();
  initBackToTop();
  initModalHandlers();
  initCountersNative();  // Native counter fallback (no GSAP needed)
});

/* ─────────────────────────────────────────
   LENIS SMOOTH SCROLL (Editorial Premium Feel)
───────────────────────────────────────── */
function initLenis() {
  if (typeof Lenis !== 'undefined') {
    const lenis = new Lenis({
      duration: 1.5,
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // smooth ease out
      direction: 'vertical',
      gestureDirection: 'vertical',
      smooth: true,
      mouseMultiplier: 1,
      smoothTouch: false,
      touchMultiplier: 2,
    });

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // Make it available globally if GSAP needs it
    window.lenis = lenis;
  }
}

/* ─────────────────────────────────────────
   PAGE LOADER — hide fast
───────────────────────────────────────── */
function hideLoader() {
  const loader = document.getElementById('page-loader');
  if (!loader) return;

  const hide = () => loader.classList.add('hidden');

  // Hide as soon as DOM is ready (fast)
  hide();

  // Belt-and-suspenders: also hide on window load
  window.addEventListener('load', hide);
}

/* ─────────────────────────────────────────
   BACK TO TOP
───────────────────────────────────────── */
function initBackToTop() {
  const btn = document.getElementById('back-to-top');
  if (!btn) return;

  window.addEventListener('scroll', () => {
    btn.classList.toggle('visible', window.scrollY > 400);
  }, { passive: true });

  btn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}

/* ─────────────────────────────────────────
   NATIVE COUNTER ANIMATION
   (Works without GSAP — uses IntersectionObserver)
───────────────────────────────────────── */
function initCountersNative() {
  const counters = document.querySelectorAll('[data-count]');
  if (!counters.length) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      observer.unobserve(entry.target);

      const el       = entry.target;
      const target   = parseInt(el.getAttribute('data-count')) || 0;
      const suffix   = el.getAttribute('data-suffix') || '';
      const duration = parseFloat(el.getAttribute('data-count-duration') || '2') * 1000;
      const start    = performance.now();

      // Skip if GSAP will handle it (animation.js adds 'gsap-counters' class)
      if (document.documentElement.classList.contains('gsap-ready')) return;

      function update(now) {
        const elapsed  = now - start;
        const progress = Math.min(elapsed / duration, 1);
        // Ease out quad
        const eased    = 1 - Math.pow(1 - progress, 3);
        el.textContent = Math.ceil(target * eased).toLocaleString('en-IN') + suffix;
        if (progress < 1) requestAnimationFrame(update);
      }
      requestAnimationFrame(update);
    });
  }, { threshold: 0.3 });

  counters.forEach(el => observer.observe(el));
}

/* ─────────────────────────────────────────
   MODAL HELPERS
───────────────────────────────────────── */
function initModalHandlers() {
  const overlay = document.getElementById('success-modal');
  const closeBtn = document.getElementById('modal-close-btn');

  overlay?.addEventListener('click', (e) => {
    if (e.target === overlay) closeModal();
  });
  closeBtn?.addEventListener('click', closeModal);
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeModal();
  });
}

function openModal(title, text, icon = '✅') {
  const modal  = document.getElementById('success-modal');
  const mTitle = document.getElementById('modal-title');
  const mText  = document.getElementById('modal-text');
  const mIcon  = document.getElementById('modal-icon');

  if (mTitle) mTitle.textContent = title;
  if (mText)  mText.textContent  = text;
  if (mIcon)  mIcon.textContent  = icon;

  modal?.classList.add('active');
  document.body.style.overflow = 'hidden';
}

function closeModal() {
  const modal = document.getElementById('success-modal');
  modal?.classList.remove('active');
  document.body.style.overflow = '';
}

// Expose globally for inline onclick
window.openModal  = openModal;
window.closeModal = closeModal;
