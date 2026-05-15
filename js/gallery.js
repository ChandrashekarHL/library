/**
 * gallery.js — Masonry layout + Lightbox
 */

document.addEventListener('DOMContentLoaded', () => {
  initGalleryFilters();
  initLightbox();
});

/* ─────────────────────────────────────────
   GALLERY FILTERS
───────────────────────────────────────── */
function initGalleryFilters() {
  const filterBtns = document.querySelectorAll('.gallery-filter-btn');
  const items      = document.querySelectorAll('.gallery-item');

  if (!filterBtns.length || !items.length) return;

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      // Update active state
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.getAttribute('data-filter');

      items.forEach(item => {
        const category = item.getAttribute('data-category') || 'all';
        const show     = filter === 'all' || category === filter;

        if (typeof gsap !== 'undefined') {
          if (show) {
            gsap.to(item, { opacity: 1, scale: 1, duration: 0.4, ease: 'power2.out', display: 'block' });
          } else {
            gsap.to(item, { opacity: 0, scale: 0.9, duration: 0.3, ease: 'power2.in',
              onComplete: () => { item.style.display = 'none'; }
            });
          }
        } else {
          item.style.display = show ? 'block' : 'none';
        }
      });
    });
  });
}

/* ─────────────────────────────────────────
   LIGHTBOX
───────────────────────────────────────── */
function initLightbox() {
  const lightbox   = document.getElementById('lightbox');
  const lbClose    = document.getElementById('lb-close');
  const lbPrev     = document.getElementById('lb-prev');
  const lbNext     = document.getElementById('lb-next');
  const lbCaption  = document.getElementById('lb-caption');
  const lbCounter  = document.getElementById('lb-counter');
  const lbContent  = document.getElementById('lb-content');

  if (!lightbox) return;

  const items = [...document.querySelectorAll('.gallery-item[data-lightbox]')];
  let currentIndex = 0;

  const open = (index) => {
    currentIndex = index;
    const item = items[index];
    if (!item) return;

    // Update content
    const img     = item.querySelector('img');
    const caption = item.getAttribute('data-caption') || '';
    const icon    = item.getAttribute('data-icon') || '🖼️';

    if (lbContent) {
      if (img) {
        lbContent.innerHTML = `<img src="${img.src}" alt="${img.alt}" class="lightbox-img">`;
      } else {
        lbContent.innerHTML = `<div class="lightbox-placeholder">${icon}</div>`;
      }
    }

    if (lbCaption) lbCaption.textContent = caption;
    if (lbCounter) lbCounter.textContent = `${index + 1} / ${items.length}`;

    lightbox.classList.add('active');
    document.body.style.overflow = 'hidden';
  };

  const close = () => {
    lightbox.classList.remove('active');
    document.body.style.overflow = '';
  };

  const prev = () => {
    open((currentIndex - 1 + items.length) % items.length);
  };

  const next = () => {
    open((currentIndex + 1) % items.length);
  };

  // Attach click handlers to gallery items
  items.forEach((item, index) => {
    item.addEventListener('click', () => open(index));
  });

  // Controls
  lbClose?.addEventListener('click', close);
  lbPrev?.addEventListener('click', prev);
  lbNext?.addEventListener('click', next);

  // Overlay click to close
  lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) close();
  });

  // Keyboard navigation
  document.addEventListener('keydown', (e) => {
    if (!lightbox.classList.contains('active')) return;
    switch(e.key) {
      case 'Escape':    close(); break;
      case 'ArrowLeft': prev();  break;
      case 'ArrowRight':next();  break;
    }
  });

  // Touch swipe
  let touchStartX = 0;
  lightbox.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].screenX;
  }, { passive: true });
  lightbox.addEventListener('touchend', (e) => {
    const delta = e.changedTouches[0].screenX - touchStartX;
    if (Math.abs(delta) > 50) {
      delta < 0 ? next() : prev();
    }
  }, { passive: true });
}
