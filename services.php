<?php
$pageTitle  = 'Library Services & Digital Resources';
$pageDescription = 'Explore library services — membership, book lending, OPAC, e-learning, digital resources including NDL, ONOS, SWAYAM, and NPTEL.';
$activePage = 'services';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<!-- Page Hero -->
<section class="page-hero">
  <div class="container page-hero__content">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/library/index.php">Home</a><span class="sep">›</span><span class="current">Services</span>
    </nav>
    <h1 data-reveal="up">Services &amp; Resources</h1>
    <p style="color:rgba(255,255,255,0.75); max-width:540px;" data-reveal="up" data-delay="0.1">
      Comprehensive library services designed to empower students, faculty, and researchers.
    </p>
  </div>
</section>

<!-- ══════════════════════════════════════
     LIBRARY SERVICES
════════════════════════════════════════ -->
<section class="section" id="services">
  <div class="container">
    <div class="section-header">
      <div class="section-label" data-reveal="fade">What We Offer</div>
      <h2 class="section-title" data-reveal="up">Library Services</h2>
      <div class="divider" data-reveal="scale"></div>
      <p class="section-subtitle" data-reveal="up" data-delay="0.2">
        From membership to research support — our services are designed around your academic needs.
      </p>
    </div>

    <div class="grid-3" data-stagger="0.08">
      <?php
      $services = [
        ['icon'=>'fa-id-card','title'=>'Library Membership','text'=>'All enrolled students and teaching staff are eligible for free library membership. Membership provides borrowing privileges, reading room access, and digital resource access. Application forms available at the library counter.'],
        ['icon'=>'fa-book-reader','title'=>'Book Lending Service','text'=>'Members can borrow up to 3 books for 14 days. Faculty may borrow up to 10 books for 30 days. Easy renewal process available at the counter or online via OPAC. Late fees apply for overdue books.'],
        ['icon'=>'fa-question-circle','title'=>'Reference Service','text'=>'Our experienced librarian provides personalised reference assistance — helping you find the right resources for your studies and research. Walk-in or email queries welcome.'],
        ['icon'=>'fa-search','title'=>'Web OPAC Service','text'=>'Our Online Public Access Catalogue enables 24/7 catalogue search, availability check, book reservations, and renewal from any device. Accessible on campus and remotely.'],
        ['icon'=>'fa-microscope','title'=>'Research Support','text'=>'Support for literature searches, bibliographic services, citation management (Mendeley/Zotero), and research methodology guidance for PG students and faculty researchers.'],
        ['icon'=>'fa-laptop-code','title'=>'E-Learning Access','text'=>'Free access to SWAYAM, NPTEL, NDL India, and ONOS portal through library terminals. Students can access thousands of courses and study materials free of charge.'],
        ['icon'=>'fa-copy','title'=>'Photocopy & Print','text'=>'Photocopy and printing facility available at nominal charges for library materials. Digital scanning of select resources also available for research purposes.'],
        ['icon'=>'fa-chalkboard-teacher','title'=>'Library Orientation','text'=>'Regular orientation sessions for new students on library usage, OPAC navigation, digital resource access, and information literacy skills development.'],
        ['icon'=>'fa-bookmark','title'=>'Document Delivery','text'=>'Inter-library loan and document delivery services for articles and materials not available in the local collection — facilitated through INFLIBNET.'],
      ];
      foreach ($services as $s): ?>
        <div class="feature-card">
          <div class="feature-card__icon"><i class="fas <?= $s['icon'] ?>"></i></div>
          <h3 class="feature-card__title"><?= $s['title'] ?></h3>
          <p class="feature-card__text"><?= $s['text'] ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     BORROWING RULES
════════════════════════════════════════ -->
<section class="section section--alt">
  <div class="container">
    <div class="section-header">
      <div class="section-label" data-reveal="fade">Rules</div>
      <h2 class="section-title" data-reveal="up">Borrowing &amp; Membership Rules</h2>
      <div class="divider" data-reveal="scale"></div>
    </div>

    <div class="grid-3" data-stagger="0.1">
      <div class="mv-card">
        <h3 class="mv-card__title"><i class="fas fa-user-graduate"></i> Students</h3>
        <ul class="mv-card__list">
          <li>Maximum 3 books at a time</li>
          <li>Loan period: 14 days</li>
          <li>Renewal: up to 2 times</li>
          <li>Fine: ₹1 per day per book (after due date)</li>
          <li>Lost book: cost of book + ₹50 penalty</li>
        </ul>
      </div>
      <div class="mv-card accent">
        <h3 class="mv-card__title"><i class="fas fa-chalkboard-teacher"></i> Faculty</h3>
        <ul class="mv-card__list">
          <li>Maximum 10 books at a time</li>
          <li>Loan period: 30 days</li>
          <li>Renewal: up to 3 times</li>
          <li>Fine: ₹0.50 per day per book</li>
          <li>Priority access to new acquisitions</li>
        </ul>
      </div>
      <div class="mv-card">
        <h3 class="mv-card__title"><i class="fas fa-exclamation-circle"></i> General Rules</h3>
        <ul class="mv-card__list">
          <li>Library card mandatory for entry</li>
          <li>No food or beverages in the library</li>
          <li>Maintain silence in reading room</li>
          <li>Mobile phones on silent mode</li>
          <li>No marking or writing in books</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     WEB OPAC
════════════════════════════════════════ -->
<section class="section" id="opac">
  <div class="container">
    <div class="split-section">
      <div class="split-visual" data-reveal="left" style="font-size:5rem;min-height:360px;">🔍
        <div class="split-visual__overlay">
          <strong>Web OPAC</strong>
          <span>Available 24/7</span>
        </div>
      </div>
      <div>
        <div class="section-label" data-reveal="fade">Online Catalogue</div>
        <h2 data-reveal="up">Web OPAC</h2>
        <p class="mt-md" data-reveal="up" data-delay="0.1">
          Our Web-based Online Public Access Catalogue (OPAC) enables you to search, browse, and manage library resources online — from any device, anywhere, anytime.
        </p>
        <div style="margin-top:1.5rem;" data-stagger="0.1">
          <?php $opacFeatures = ['Search by title, author, subject, or keyword','Check real-time book availability','Place book reservation requests','View and renew your issued books','Browse new arrivals and featured collections','Access subject-specific resource lists'];
          foreach ($opacFeatures as $f): ?>
            <div style="display:flex;align-items:center;gap:.75rem;padding:.5rem 0;font-size:.9rem;color:var(--clr-text-mid);">
              <i class="fas fa-check-circle" style="color:var(--clr-accent);flex-shrink:0;"></i><?= $f ?>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="mt-xl" data-reveal="up" data-delay="0.3">
          <a href="#" class="btn btn--primary" target="_blank">
            <i class="fas fa-external-link-alt"></i> Launch OPAC
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     DIGITAL RESOURCES
════════════════════════════════════════ -->
<section class="section section--dark" id="digital">
  <div class="container">
    <div class="section-header">
      <div class="section-label">Digital Access</div>
      <h2 class="section-title">Digital Resources</h2>
      <div class="divider"></div>
      <p class="section-subtitle">World-class digital platforms, freely accessible to all registered students and faculty.</p>
    </div>

    <div class="grid-4" data-stagger="0.08">
      <?php
      $dRes = [
        ['id'=>'ndl',   'icon'=>'📖','name'=>'NDL India',   'full'=>'National Digital Library of India','desc'=>'6.5 crore+ learning objects — books, papers, videos across all levels of education.','link'=>'https://ndl.iitkgp.ac.in/','tag'=>'Free Access'],
        ['id'=>'onos',  'icon'=>'📰','name'=>'ONOS Portal', 'full'=>'One Nation One Subscription','desc'=>'Premium research journals from Elsevier, Springer, Wiley, and more — fully subsidised.','link'=>'#','tag'=>'Govt. Initiative'],
        ['id'=>'swayam','icon'=>'🎓','name'=>'SWAYAM',       'full'=>'Study Webs of Active Learning for Young Aspiring Minds','desc'=>'Free MOOCs from India\'s best universities — earn credits.','link'=>'https://swayam.gov.in/','tag'=>'Free Courses'],
        ['id'=>'nptel', 'icon'=>'🔬','name'=>'NPTEL',        'full'=>'National Programme on Technology Enhanced Learning','desc'=>'Video lectures from IITs and IISc on engineering, science, management.','link'=>'https://nptel.ac.in/','tag'=>'IIT Content'],
        ['id'=>'shodhganga','icon'=>'📜','name'=>'Shodhganga','full'=>'INFLIBNET Centre','desc'=>'Repository of 5 lakh+ Indian doctoral theses freely accessible online.','link'=>'https://shodhganga.inflibnet.ac.in/','tag'=>'Research'],
        ['id'=>'epathshala','icon'=>'💡','name'=>'e-PG Pathshala','full'=>'Postgraduate e-Content','desc'=>'High-quality PG-level curriculum content in 70+ disciplines.','link'=>'https://epgp.inflibnet.ac.in/','tag'=>'PG Level'],
        ['id'=>'vikaspedia','icon'=>'🌿','name'=>'Vikaspedia','full'=>'Development Information Portal','desc'=>'Government-supported portal covering agriculture, health, education, and social welfare.','link'=>'https://vikaspedia.in/','tag'=>'Govt. Portal'],
        ['id'=>'doaj',  'icon'=>'🌐','name'=>'DOAJ','full'=>'Directory of Open Access Journals','desc'=>'17,000+ peer-reviewed open-access journals in all fields of science and scholarship.','link'=>'https://doaj.org/','tag'=>'Open Access'],
      ];
      foreach ($dRes as $r): ?>
        <div class="resource-card" id="<?= $r['id'] ?>" style="background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.1);" tabindex="0">
          <div class="resource-card__logo"><?= $r['icon'] ?></div>
          <div class="resource-card__name" style="color:var(--clr-white);"><?= $r['name'] ?></div>
          <div class="resource-card__full" style="color:rgba(255,255,255,0.45); font-size:.7rem; margin-bottom:.5rem;"><?= $r['full'] ?></div>
          <span class="badge badge--accent" style="margin-bottom:.75rem;"><?= $r['tag'] ?></span>
          <div class="resource-card__desc" style="color:rgba(255,255,255,0.65);"><?= $r['desc'] ?></div>
          <a href="<?= $r['link'] ?>" target="_blank" rel="noopener" class="resource-card__link">
            Access <i class="fas fa-external-link-alt"></i>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
