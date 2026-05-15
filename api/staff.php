<?php
$pageTitle  = 'Library Staff';
$pageDescription = 'Meet the dedicated library team at [College Name] — our librarians and support staff committed to serving you.';
$activePage = 'about';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<!-- Page Hero -->
<section class="page-hero">
  <div class="container page-hero__content">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/library/index.php">Home</a><span class="sep">›</span>
      <a href="/library/about.php">About</a><span class="sep">›</span>
      <span class="current">Library Staff</span>
    </nav>
    <h1 data-reveal="up">Library Staff</h1>
    <p style="color:rgba(255,255,255,0.75); max-width:540px;" data-reveal="up" data-delay="0.1">
      Meet our dedicated team of library professionals committed to serving the academic community.
    </p>
  </div>
</section>

<!-- ══════════════════════════════════════
     CHIEF LIBRARIAN
════════════════════════════════════════ -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="section-label" data-reveal="fade">Leadership</div>
      <h2 class="section-title" data-reveal="up">Chief Librarian</h2>
      <div class="divider" data-reveal="scale"></div>
    </div>

    <div style="max-width:600px; margin:0 auto;" data-reveal="scale">
      <div style="background:var(--clr-surface); border:1px solid var(--clr-border); border-radius:var(--radius-xl); overflow:hidden; box-shadow:var(--shadow-xl);">
        <div style="height:8px; background:var(--grad-primary);"></div>
        <div style="display:flex; gap:2rem; padding:2rem; align-items:center; flex-wrap:wrap;">
          <div style="width:120px; height:120px; border-radius:50%; background:var(--grad-primary); display:flex; align-items:center; justify-content:center; font-size:3rem; flex-shrink:0; border:4px solid var(--clr-bg); box-shadow:var(--shadow-md);">👩‍💼</div>
          <div style="flex:1;">
            <div style="font-size:.7rem; font-weight:700; color:var(--clr-accent); text-transform:uppercase; letter-spacing:.1em; margin-bottom:.25rem;">Chief Librarian</div>
            <h2 style="font-size:1.75rem; color:var(--clr-dark); margin-bottom:.25rem;">[Librarian Name]</h2>
            <div style="font-size:.875rem; color:var(--clr-muted); margin-bottom:1rem;">M.L.I.Sc., SET | Government First Grade College</div>
            <p style="font-size:.875rem; color:var(--clr-text-mid); line-height:1.8;">
              [Librarian Name] has over [X] years of experience in academic library management. A postgraduate in Library and Information Science, they specialise in digital library management, e-resource administration, and information literacy programmes.
            </p>
            <div style="display:flex; gap:.75rem; margin-top:1.25rem; flex-wrap:wrap;">
              <a href="mailto:librarian@collegename.edu.in" class="staff-contact-link" title="Email"><i class="fas fa-envelope"></i></a>
              <a href="tel:+910000000000" class="staff-contact-link" title="Phone"><i class="fas fa-phone"></i></a>
              <div style="padding:.375rem .875rem; background:var(--clr-primary-pale); border-radius:99px; font-size:.7rem; font-weight:600; color:var(--clr-primary);">M.L.I.Sc.</div>
              <div style="padding:.375rem .875rem; background:rgba(0,172,193,.12); border-radius:99px; font-size:.7rem; font-weight:600; color:var(--clr-accent);">15+ Years Exp.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     STAFF TEAM
════════════════════════════════════════ -->
<section class="section section--alt">
  <div class="container">
    <div class="section-header">
      <div class="section-label" data-reveal="fade">Our Team</div>
      <h2 class="section-title" data-reveal="up">Library Staff Members</h2>
      <div class="divider" data-reveal="scale"></div>
      <p class="section-subtitle" data-reveal="up" data-delay="0.2">
        A dedicated team of professionals ensuring smooth library operations.
      </p>
    </div>

    <div class="grid-4" data-stagger="0.08">
      <?php
      $staff = [
        ['name'=>'[Staff Name 1]','role'=>'Assistant Librarian','icon'=>'👨‍💼','qual'=>'M.L.I.Sc.','exp'=>'8 Years','area'=>'Circulation & Issue Desk','email'=>'staff1@collegename.edu.in'],
        ['name'=>'[Staff Name 2]','role'=>'Library Assistant','icon'=>'👩‍💼','qual'=>'B.L.I.Sc.','exp'=>'5 Years','area'=>'Cataloguing & Classification','email'=>'staff2@collegename.edu.in'],
        ['name'=>'[Staff Name 3]','role'=>'Library Assistant','icon'=>'👨‍💼','qual'=>'B.L.I.Sc.','exp'=>'6 Years','area'=>'Reference & Digital Resources','email'=>'staff3@collegename.edu.in'],
        ['name'=>'[Staff Name 4]','role'=>'Data Entry Operator','icon'=>'👩‍💼','qual'=>'B.Com, DCA','exp'=>'4 Years','area'=>'OPAC & Database Management','email'=>'staff4@collegename.edu.in'],
        ['name'=>'[Staff Name 5]','role'=>'Library Attendant','icon'=>'👨‍💼','qual'=>'PUC','exp'=>'10 Years','area'=>'Book Maintenance & Shelving','email'=>''],
        ['name'=>'[Staff Name 6]','role'=>'Library Attendant','icon'=>'👩‍💼','qual'=>'SSLC','exp'=>'7 Years','area'=>'Reading Room Supervision','email'=>''],
        ['name'=>'[Staff Name 7]','role'=>'Peon / Support Staff','icon'=>'👨‍💼','qual'=>'SSLC','exp'=>'12 Years','area'=>'General Maintenance','email'=>''],
        ['name'=>'[Staff Name 8]','role'=>'IT Support','icon'=>'👨‍💻','qual'=>'B.E. (CS)','exp'=>'3 Years','area'=>'Digital Infrastructure & OPAC','email'=>'it@collegename.edu.in'],
      ];
      foreach ($staff as $s): ?>
        <div class="staff-card">
          <div class="staff-card__cover"></div>
          <div class="staff-card__avatar"><?= $s['icon'] ?></div>
          <div class="staff-card__body">
            <div class="staff-card__name"><?= $s['name'] ?></div>
            <div class="staff-card__role"><?= $s['role'] ?></div>
            <div class="staff-card__info" style="font-size:.8rem; line-height:1.8;">
              <div><i class="fas fa-graduation-cap" style="color:var(--clr-accent);margin-right:6px;"></i><?= $s['qual'] ?></div>
              <div><i class="fas fa-briefcase" style="color:var(--clr-accent);margin-right:6px;"></i><?= $s['exp'] ?> Experience</div>
              <div><i class="fas fa-book-open" style="color:var(--clr-accent);margin-right:6px;"></i><?= $s['area'] ?></div>
            </div>
            <div class="staff-card__contacts">
              <?php if ($s['email']): ?>
                <a href="mailto:<?= $s['email'] ?>" class="staff-contact-link" title="Email <?= $s['name'] ?>" aria-label="Email <?= $s['name'] ?>">
                  <i class="fas fa-envelope"></i>
                </a>
              <?php endif; ?>
              <a href="#" class="staff-contact-link" title="View profile" aria-label="View profile of <?= $s['name'] ?>">
                <i class="fas fa-user"></i>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     CONTACT THE TEAM
════════════════════════════════════════ -->
<section class="section section--dark" style="padding:3rem 0;">
  <div class="container text-center" data-reveal="scale">
    <h2 style="color:white; margin-bottom:.75rem;">Have a Question for the Team?</h2>
    <p style="color:rgba(255,255,255,0.7); margin-bottom:2rem; max-width:500px; margin-left:auto; margin-right:auto;">
      Reach out to us anytime during library working hours. We're happy to help!
    </p>
    <a href="/library/contact.php" class="btn btn--accent">
      <i class="fas fa-headset"></i> Ask the Librarian
    </a>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
