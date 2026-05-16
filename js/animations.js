/**
 * animations.js
 * Strategy: IntersectionObserver (native, always works) + GSAP as progressive enhancement.
 * Content is ALWAYS visible. Animations are added on top, never block content.
 */

/* ══════════════════════════════════════════
   1. CSS REVEAL — IntersectionObserver (no CDN needed, always works)
══════════════════════════════════════════ */
(function initCSSReveal() {
  // Only hide elements when IntersectionObserver is available
  if (!('IntersectionObserver' in window)) return;

  const revealEls = document.querySelectorAll('[data-reveal]');
  const staggerEls = document.querySelectorAll('[data-stagger]');

  // Apply initial hidden state via JS (so without JS, content is visible)
  revealEls.forEach(el => {
    el.classList.add('will-reveal');
  });

  staggerEls.forEach(container => {
    Array.from(container.children).forEach(child => {
      child.classList.add('will-reveal-stagger');
    });
  });

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      observer.unobserve(entry.target);

      const delay = parseFloat(entry.target.getAttribute('data-delay') || '0');
      setTimeout(() => {
        entry.target.classList.add('revealed');
        entry.target.classList.remove('will-reveal', 'will-reveal-stagger');
      }, delay * 1000);
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -60px 0px' });

  revealEls.forEach(el => observer.observe(el));

  // Stagger: observe parent, reveal children with delay
  staggerEls.forEach(container => {
    const staggerTime = parseFloat(container.getAttribute('data-stagger') || '0.1');
    const staggerObs = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        staggerObs.unobserve(entry.target);
        Array.from(entry.target.children).forEach((child, i) => {
          setTimeout(() => {
            child.classList.add('revealed');
            child.classList.remove('will-reveal-stagger');
          }, i * staggerTime * 1000);
        });
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
    staggerObs.observe(container);
  });
})();

/* ══════════════════════════════════════════
   2. NATIVE COUNTER (always works)
══════════════════════════════════════════ */
(function initCounters() {
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

      function tick(now) {
        const progress = Math.min((now - start) / duration, 1);
        const eased    = 1 - Math.pow(1 - progress, 3); // ease-out cubic
        el.textContent = Math.ceil(target * eased).toLocaleString('en-IN') + suffix;
        if (progress < 1) requestAnimationFrame(tick);
        else el.textContent = target.toLocaleString('en-IN') + suffix;
      }
      requestAnimationFrame(tick);
    });
  }, { threshold: 0.3 });

  counters.forEach(el => observer.observe(el));
})();

/* ══════════════════════════════════════════
   3. GSAP PREMIUM LAYER (optional - loads only if CDN available)
   Adds parallax on top of native animations
══════════════════════════════════════════ */
window.addEventListener('load', function initGSAPLayer() {
  if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
    console.info('GSAP not available — native animations active.');
    return;
  }

  gsap.registerPlugin(ScrollTrigger);

  // Section divider scale animations
  document.querySelectorAll('.divider').forEach(el => {
    gsap.from(el, {
      scaleX: 0,
      duration: 0.8,
      ease: 'power2.out',
      scrollTrigger: { trigger: el, start: 'top 90%', once: true }
    });
  });
});
