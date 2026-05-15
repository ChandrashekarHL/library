/**
 * forms.js — Floating labels, validation, star rating, form submissions
 */

document.addEventListener('DOMContentLoaded', () => {
  initFloatingLabels();
  initStarRating();
  initQueryForm();
  initRecommendForm();
  initFeedbackForm();
  initNewsletter();
  initCategoryChips();
});

/* ─────────────────────────────────────────
   FLOATING LABELS
───────────────────────────────────────── */
function initFloatingLabels() {
  // Handle select elements (placeholder trick)
  document.querySelectorAll('.form-field select').forEach(select => {
    const label = select.nextElementSibling;
    const check = () => {
      if (select.value && select.value !== '') {
        label?.classList.add('floated');
      } else {
        label?.classList.remove('floated');
      }
    };
    select.addEventListener('change', check);
    check();
  });
}

/* ─────────────────────────────────────────
   CATEGORY CHIPS (Ask Librarian)
───────────────────────────────────────── */
function initCategoryChips() {
  const chips = document.querySelectorAll('.chip[data-category]');
  const hiddenInput = document.getElementById('query-category');

  chips.forEach(chip => {
    chip.addEventListener('click', () => {
      chips.forEach(c => c.classList.remove('active'));
      chip.classList.add('active');
      if (hiddenInput) hiddenInput.value = chip.getAttribute('data-category');
    });
  });
}

/* ─────────────────────────────────────────
   STAR RATING
───────────────────────────────────────── */
function initStarRating() {
  const ratingContainers = document.querySelectorAll('.star-rating');

  ratingContainers.forEach(container => {
    const stars      = container.querySelectorAll('.star-btn');
    const valueEl    = container.querySelector('.star-rating__value');
    const hiddenInput= container.querySelector('input[type="hidden"]');
    let selectedRating = 0;

    const ratingLabels = ['', 'Poor', 'Fair', 'Good', 'Very Good', 'Excellent'];

    stars.forEach((star, index) => {
      const value = index + 1;

      star.addEventListener('mouseenter', () => {
        stars.forEach((s, i) => s.classList.toggle('hovered', i <= index));
        if (valueEl) valueEl.textContent = ratingLabels[value];
      });

      star.addEventListener('mouseleave', () => {
        stars.forEach((s, i) => {
          s.classList.remove('hovered');
          s.classList.toggle('selected', i < selectedRating);
        });
        if (valueEl) valueEl.textContent = selectedRating > 0 ? ratingLabels[selectedRating] : '';
      });

      star.addEventListener('click', () => {
        selectedRating = value;
        stars.forEach((s, i) => s.classList.toggle('selected', i < value));
        if (hiddenInput) hiddenInput.value = value;
        if (valueEl) valueEl.textContent = ratingLabels[value];
      });
    });
  });
}

/* ─────────────────────────────────────────
   FORM VALIDATION HELPER
───────────────────────────────────────── */
function validateField(field) {
  const wrapper = field.closest('.form-field');
  const errorEl = wrapper?.querySelector('.field-error');
  let valid = true;
  let message = '';

  if (field.hasAttribute('required') && !field.value.trim()) {
    valid = false;
    message = 'This field is required.';
  } else if (field.type === 'email' && field.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(field.value)) {
    valid = false;
    message = 'Please enter a valid email address.';
  }

  if (wrapper) wrapper.classList.toggle('error', !valid);
  if (errorEl) errorEl.textContent = message;
  return valid;
}

function validateForm(form) {
  const fields = form.querySelectorAll('input[required], textarea[required], select[required]');
  let allValid = true;
  fields.forEach(field => {
    if (!validateField(field)) allValid = false;
  });
  return allValid;
}

/* ─────────────────────────────────────────
   ASK LIBRARIAN FORM
───────────────────────────────────────── */
function initQueryForm() {
  const form = document.getElementById('query-form');
  if (!form) return;

  // Live validation
  form.querySelectorAll('input, textarea, select').forEach(field => {
    field.addEventListener('blur', () => validateField(field));
    field.addEventListener('input', () => {
      if (field.closest('.form-field')?.classList.contains('error')) {
        validateField(field);
      }
    });
  });

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    if (!validateForm(form)) return;

    const btn = form.querySelector('[type="submit"]');
    const originalText = btn.innerHTML;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
    btn.disabled  = true;

    // Simulate async submission
    setTimeout(() => {
      btn.innerHTML = originalText;
      btn.disabled  = false;
      form.reset();
      // Reset chips
      form.querySelectorAll('.chip').forEach(c => c.classList.remove('active'));
      openModal(
        'Query Submitted!',
        'Thank you! Your query has been received. Our librarian will respond to your email within 24 working hours.',
        '📬'
      );
    }, 1500);
  });
}

/* ─────────────────────────────────────────
   BOOK RECOMMENDATION FORM
───────────────────────────────────────── */
function initRecommendForm() {
  const form = document.getElementById('recommend-form');
  if (!form) return;

  form.querySelectorAll('input, textarea, select').forEach(field => {
    field.addEventListener('blur', () => validateField(field));
  });

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    if (!validateForm(form)) return;

    const btn = form.querySelector('[type="submit"]');
    const originalText = btn.innerHTML;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
    btn.disabled  = true;

    setTimeout(() => {
      btn.innerHTML = originalText;
      btn.disabled  = false;
      form.reset();
      openModal(
        'Recommendation Received!',
        'Thank you for your recommendation! Our librarian will review it and consider it for the next acquisition cycle.',
        '📚'
      );
    }, 1500);
  });
}

/* ─────────────────────────────────────────
   FEEDBACK FORM
───────────────────────────────────────── */
function initFeedbackForm() {
  const form = document.getElementById('feedback-form');
  if (!form) return;

  form.querySelectorAll('input, textarea').forEach(field => {
    field.addEventListener('blur', () => validateField(field));
  });

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    if (!validateForm(form)) return;

    const ratingInput = form.querySelector('input[name="rating"]');
    if (!ratingInput?.value) {
      openModal('Please Rate Us', 'Kindly select a star rating before submitting your feedback.', '⭐');
      return;
    }

    const btn = form.querySelector('[type="submit"]');
    const originalText = btn.innerHTML;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
    btn.disabled  = true;

    setTimeout(() => {
      btn.innerHTML = originalText;
      btn.disabled  = false;
      form.reset();
      // Reset stars
      form.querySelectorAll('.star-btn').forEach(s => s.classList.remove('selected', 'hovered'));
      const val = form.querySelector('.star-rating__value');
      if (val) val.textContent = '';
      openModal(
        'Feedback Submitted!',
        'We truly appreciate your feedback. It helps us improve our library services.',
        '🌟'
      );
    }, 1500);
  });
}

/* ─────────────────────────────────────────
   NEWSLETTER
───────────────────────────────────────── */
function initNewsletter() {
  const form = document.getElementById('newsletter-form');
  if (!form) return;

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    const input = form.querySelector('input[type="email"]');
    if (!input?.value || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(input.value)) {
      input?.focus();
      return;
    }
    const btn = form.querySelector('button');
    btn.innerHTML = '✓ Subscribed!';
    btn.disabled  = true;
    input.value   = '';
    setTimeout(() => {
      btn.innerHTML = '<i class="fas fa-paper-plane"></i> Subscribe';
      btn.disabled  = false;
    }, 3000);
  });
}
