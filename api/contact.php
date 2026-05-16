<?php
$pageTitle  = 'Contact — Ask Librarian & Feedback';
$pageDescription = 'Submit your library queries, book recommendations, and feedback to GFGC Kadugudi Library. Our librarian will respond within 24 hours.';
$activePage = 'contact';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>
<style>
.contact-hero { background: var(--grad-hero); }
.contact-layout { display: grid; grid-template-columns: 1fr 1fr; gap: var(--sp-3xl); }
.contact-info-card {
  background: var(--clr-surface); border: 1px solid var(--clr-border);
  border-radius: var(--radius-lg); padding: var(--sp-xl);
  display: flex; align-items: flex-start; gap: var(--sp-md);
}
.contact-info-card i { color: var(--clr-accent); font-size: 1.2rem; margin-top:3px; }
.contact-info-card h4 { font-size: var(--fs-sm); font-weight: var(--fw-bold); margin-bottom: 4px; }
.contact-info-card p  { font-size: var(--fs-sm); color: var(--clr-muted); }
@media(max-width:900px){.contact-layout{grid-template-columns:1fr;}}
</style>

<!-- Page Hero -->
<section class="page-hero">
  <div class="container page-hero__content">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/library/index.php">Home</a><span class="sep">›</span><span class="current">Contact</span>
    </nav>
    <h1 data-reveal="up">Ask the Librarian</h1>
    <p style="color:rgba(255,255,255,0.75); max-width:540px;" data-reveal="up" data-delay="0.1">
      Have a question? Need a book? Our librarian is here to help. Submit your query below.
    </p>
  </div>
</section>

<!-- ══════════════════════════════════════
     CONTACT INFO STRIP
════════════════════════════════════════ -->
<section style="padding:2rem 0; background:var(--clr-bg-alt); border-bottom:1px solid var(--clr-border);">
  <div class="container">
    <div class="grid-4" data-stagger="0.08">
      <div class="contact-info-card">
        <i class="fas fa-map-marker-alt"></i>
        <div><h4>Address</h4><p>GFGC Kadugudi, [City], [State]</p></div>
      </div>
      <div class="contact-info-card">
        <i class="fas fa-phone-alt"></i>
        <div><h4>Phone</h4><p>+91 00000 00000</p></div>
      </div>
      <div class="contact-info-card">
        <i class="fas fa-envelope"></i>
        <div><h4>Email</h4><p>library@collegename.edu.in</p></div>
      </div>
      <div class="contact-info-card">
        <i class="fas fa-clock"></i>
        <div><h4>Library Hours</h4><p>Mon–Fri: 9AM–5PM | Sat: 9AM–1PM</p></div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     ASK LIBRARIAN FORM
════════════════════════════════════════ -->
<section class="section" id="ask">
  <div class="container">
    <div class="contact-layout">

      <!-- Form -->
      <div data-reveal="left">
        <div class="section-label" style="justify-content:flex-start;">Query Form</div>
        <h2 style="margin-bottom:1.5rem;">Submit Your Query</h2>
        <p style="color:var(--clr-muted); margin-bottom:2rem;">
          Not an AI chatbot — this is a direct query system to our library helpdesk. We'll respond within 24 working hours.
        </p>

        <!-- Category Chips -->
        <div style="margin-bottom:1rem;">
          <p style="font-size:.875rem; color:var(--clr-muted); margin-bottom:.75rem; font-weight:600;">Select Query Category:</p>
          <div class="category-chips" role="group" aria-label="Query category">
            <button type="button" class="chip" data-category="Book Request"><i class="fas fa-book"></i> Book Request</button>
            <button type="button" class="chip" data-category="Membership"><i class="fas fa-id-card"></i> Membership</button>
            <button type="button" class="chip" data-category="Technical Issue"><i class="fas fa-wrench"></i> Technical Issue</button>
            <button type="button" class="chip" data-category="Journal Request"><i class="fas fa-newspaper"></i> Journal Request</button>
            <button type="button" class="chip active" data-category="General Query"><i class="fas fa-question-circle"></i> General Query</button>
            <button type="button" class="chip" data-category="Feedback"><i class="fas fa-star"></i> Feedback</button>
          </div>
        </div>

        <form id="query-form" class="form-card" novalidate>
          <input type="hidden" id="query-category" name="category" value="General Query">

          <div class="form-group half-group">
            <div class="form-field">
              <input type="text" id="q-name" name="name" required placeholder=" " autocomplete="name">
              <label for="q-name">Full Name <span class="required">*</span></label>
              <span class="field-error" role="alert"></span>
            </div>
            <div class="form-field">
              <input type="email" id="q-email" name="email" required placeholder=" " autocomplete="email">
              <label for="q-email">Email Address <span class="required">*</span></label>
              <span class="field-error" role="alert"></span>
            </div>
          </div>

          <div class="form-group">
            <div class="form-field">
              <input type="text" id="q-roll" name="roll" placeholder=" ">
              <label for="q-roll">Roll No. / Staff ID (Optional)</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-field">
              <input type="text" id="q-subject" name="subject" required placeholder=" ">
              <label for="q-subject">Subject / Query Title <span class="required">*</span></label>
              <span class="field-error" role="alert"></span>
            </div>
          </div>

          <div class="form-group">
            <div class="form-field textarea">
              <textarea id="q-message" name="message" required placeholder=" " rows="5"></textarea>
              <label for="q-message">Your Message / Query <span class="required">*</span></label>
              <span class="field-error" role="alert"></span>
            </div>
          </div>

          <div class="form-submit">
            <button type="submit" class="btn btn--primary" id="query-submit-btn">
              <i class="fas fa-paper-plane"></i> Submit Query
            </button>
            <span class="form-note">Responses within 24 working hours</span>
          </div>
        </form>
      </div>

      <!-- Info Panel -->
      <div data-reveal="right">
        <div class="section-label" style="justify-content:flex-start;">Quick Info</div>
        <h2 style="margin-bottom:1.5rem;">Frequently Asked</h2>

        <?php
        $faqs = [
          ['q'=>'How do I get a library membership?','a'=>'Visit the library counter with your college ID card and admission receipt. Fill the membership form and collect your library card same day.'],
          ['q'=>'How many books can I borrow?','a'=>'Students can borrow up to 3 books for 14 days. Faculty may borrow up to 10 books for 30 days. Renewal is available at the counter or via OPAC.'],
          ['q'=>'Can I access e-resources from home?','a'=>'NDL India and SWAYAM are accessible from any device with internet. ONOS resources may require on-campus access or VPN. Contact us for details.'],
          ['q'=>'How do I reserve a book that is currently issued?','a'=>'You can place a reservation request via Web OPAC or at the library counter. You will be notified when the book is returned.'],
          ['q'=>'What is the fine for overdue books?','a'=>'Students: ₹1 per day per book. Faculty: ₹0.50 per day. Fines must be cleared before borrowing new books.'],
          ['q'=>'Does the library have Wi-Fi?','a'=>'Yes, free Wi-Fi is available in the library reading room and computer lab for all registered library members.'],
        ];
        foreach ($faqs as $faq): ?>
          <details style="margin-bottom:1rem; background:var(--clr-surface); border:1px solid var(--clr-border); border-radius:var(--radius-md); overflow:hidden;">
            <summary style="padding:1rem 1.25rem; cursor:pointer; font-weight:600; color:var(--clr-dark); font-size:.9rem; list-style:none; display:flex; align-items:center; justify-content:space-between;">
              <?= $faq['q'] ?>
              <i class="fas fa-chevron-down" style="flex-shrink:0; color:var(--clr-accent); font-size:.75rem; transition:transform .3s;"></i>
            </summary>
            <div style="padding:.75rem 1.25rem 1.25rem; font-size:.875rem; color:var(--clr-muted); line-height:1.8; border-top:1px solid var(--clr-border);">
              <?= $faq['a'] ?>
            </div>
          </details>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     BOOK RECOMMENDATION FORM
════════════════════════════════════════ -->
<section class="section section--alt" id="recommend">
  <div class="container">
    <div class="section-header">
      <div class="section-label" data-reveal="fade">Suggest a Title</div>
      <h2 class="section-title" data-reveal="up">Recommend a Book or Journal</h2>
      <div class="divider" data-reveal="scale"></div>
      <p class="section-subtitle" data-reveal="up" data-delay="0.2">
        Help us improve our collection! Recommend books or journals you'd like us to acquire.
      </p>
    </div>

    <form id="recommend-form" class="form-card" style="max-width:700px; margin:0 auto;" data-reveal="up" novalidate>

      <div class="form-group half-group">
        <div class="form-field">
          <input type="text" id="rec-name" name="recommender_name" required placeholder=" " autocomplete="name">
          <label for="rec-name">Your Name <span class="required">*</span></label>
          <span class="field-error" role="alert"></span>
        </div>
        <div class="form-field">
          <input type="email" id="rec-email" name="recommender_email" required placeholder=" " autocomplete="email">
          <label for="rec-email">Your Email <span class="required">*</span></label>
          <span class="field-error" role="alert"></span>
        </div>
      </div>

      <div class="form-group half-group">
        <div class="form-field">
          <input type="text" id="rec-title" name="book_title" required placeholder=" ">
          <label for="rec-title">Book / Journal Title <span class="required">*</span></label>
          <span class="field-error" role="alert"></span>
        </div>
        <div class="form-field">
          <input type="text" id="rec-author" name="author" required placeholder=" ">
          <label for="rec-author">Author / Publisher <span class="required">*</span></label>
          <span class="field-error" role="alert"></span>
        </div>
      </div>

      <div class="form-group half-group">
        <div class="form-field">
          <input type="text" id="rec-edition" name="edition" placeholder=" ">
          <label for="rec-edition">Edition / Year (Optional)</label>
        </div>
        <div class="form-field">
          <select id="rec-category" name="category">
            <option value="">-- Select Category --</option>
            <option>Science & Technology</option>
            <option>Commerce & Management</option>
            <option>Arts & Humanities</option>
            <option>Social Science</option>
            <option>Language & Literature</option>
            <option>Competitive Exams</option>
            <option>Reference & General</option>
            <option>Journal / Periodical</option>
          </select>
          <label for="rec-category">Category</label>
        </div>
      </div>

      <div class="form-group">
        <div class="form-field textarea">
          <textarea id="rec-reason" name="reason" required placeholder=" " rows="4"></textarea>
          <label for="rec-reason">Why do you recommend this? <span class="required">*</span></label>
          <span class="field-error" role="alert"></span>
        </div>
      </div>

      <div class="form-submit">
        <button type="submit" class="btn btn--primary" id="rec-submit-btn">
          <i class="fas fa-plus-circle"></i> Submit Recommendation
        </button>
        <span class="form-note">Recommendations reviewed monthly</span>
      </div>
    </form>
  </div>
</section>

<!-- ══════════════════════════════════════
     FEEDBACK FORM
════════════════════════════════════════ -->
<section class="section" id="feedback">
  <div class="container">
    <div class="section-header">
      <div class="section-label" data-reveal="fade">Your Voice Matters</div>
      <h2 class="section-title" data-reveal="up">Library Feedback</h2>
      <div class="divider" data-reveal="scale"></div>
      <p class="section-subtitle" data-reveal="up" data-delay="0.2">
        Share your experience and help us serve you better.
      </p>
    </div>

    <form id="feedback-form" class="form-card" style="max-width:680px; margin:0 auto;" data-reveal="up" novalidate>

      <!-- Star Rating -->
      <div style="margin-bottom:1.5rem;">
        <p style="font-size:.875rem; font-weight:600; color:var(--clr-dark); margin-bottom:.75rem;">Overall Rating <span style="color:#ef5350;">*</span></p>
        <div class="star-rating" role="group" aria-label="Rate the library">
          <span class="star-rating__label">Tap to rate:</span>
          <button type="button" class="star-btn" data-value="1" aria-label="1 star — Poor">★</button>
          <button type="button" class="star-btn" data-value="2" aria-label="2 stars — Fair">★</button>
          <button type="button" class="star-btn" data-value="3" aria-label="3 stars — Good">★</button>
          <button type="button" class="star-btn" data-value="4" aria-label="4 stars — Very Good">★</button>
          <button type="button" class="star-btn" data-value="5" aria-label="5 stars — Excellent">★</button>
          <span class="star-rating__value"></span>
          <input type="hidden" name="rating" value="">
        </div>
      </div>

      <div class="form-group half-group">
        <div class="form-field">
          <input type="text" id="fb-name" name="name" required placeholder=" " autocomplete="name">
          <label for="fb-name">Your Name <span class="required">*</span></label>
          <span class="field-error" role="alert"></span>
        </div>
        <div class="form-field">
          <select id="fb-type" name="user_type" required>
            <option value="">-- You are a --</option>
            <option>Student</option>
            <option>Faculty</option>
            <option>Research Scholar</option>
            <option>Staff</option>
            <option>Visitor</option>
          </select>
          <label for="fb-type">User Type <span class="required">*</span></label>
          <span class="field-error" role="alert"></span>
        </div>
      </div>

      <div class="form-group">
        <div class="form-field textarea">
          <textarea id="fb-comments" name="comments" required placeholder=" " rows="5"></textarea>
          <label for="fb-comments">Your Feedback / Suggestions <span class="required">*</span></label>
          <span class="field-error" role="alert"></span>
        </div>
      </div>

      <div class="form-submit">
        <button type="submit" class="btn btn--primary" id="fb-submit-btn">
          <i class="fas fa-star"></i> Submit Feedback
        </button>
        <span class="form-note">Anonymous submission available — email is optional</span>
      </div>
    </form>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
