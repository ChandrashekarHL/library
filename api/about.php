<?php
$pageTitle       = 'About — Institution & Library';
$pageDescription = 'Learn about GFGC Kadugudi, our mission, vision, library history, and academic excellence spanning decades of quality education.';
$pageClass       = '';
$activePage      = 'about';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<!-- Page Hero -->
<section class="page-hero">
  <div class="container page-hero__content">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/library/index.php">Home</a>
      <span class="sep" aria-hidden="true">›</span>
      <span class="current">About</span>
    </nav>
    <h1 data-reveal="up">About Us</h1>
    <p style="color:rgba(255,255,255,0.75); max-width:540px;" data-reveal="up" data-delay="0.1">
      A proud heritage of academic excellence — know our institution, our library, and our commitment to knowledge.
    </p>
  </div>
</section>

<!-- ══════════════════════════════════════
     ABOUT INSTITUTION
════════════════════════════════════════ -->
<section class="section" id="institution">
  <div class="container">
    <div class="split-section">
      <div>
        <div class="section-label" data-reveal="fade">The Institution</div>
        <h2 data-reveal="up">About GFGC Kadugudi</h2>
        <p class="mt-md" data-reveal="up" data-delay="0.1">
          GFGC Kadugudi is a Government First Grade College established under the aegis of the Department of Collegiate Education, Government of [State]. Affiliated to [University Name], the college has been a beacon of quality education for students across the region.
        </p>
        <p class="mt-md" data-reveal="up" data-delay="0.15">
          The college offers undergraduate and postgraduate programmes across the Faculties of Arts, Science, and Commerce, with a strong emphasis on holistic student development, research culture, and community service.
        </p>
        <p class="mt-md" data-reveal="up" data-delay="0.2">
          Accredited by NAAC and affiliated to the regional university, the college maintains high academic standards and a vibrant campus life catering to thousands of students.
        </p>
        <div class="mt-xl" data-stagger="0.1" style="display:flex; gap:1rem; flex-wrap:wrap;">
          <div class="info-stat"><span class="info-stat__num" data-count="50" data-suffix="+">50+</span><span class="info-stat__label">Years of Excellence</span></div>
          <div class="info-stat"><span class="info-stat__num" data-count="3000" data-suffix="+">3000+</span><span class="info-stat__label">Students Enrolled</span></div>
          <div class="info-stat"><span class="info-stat__num" data-count="80" data-suffix="+">80+</span><span class="info-stat__label">Faculty Members</span></div>
        </div>
      </div>
      <div class="split-visual" data-reveal="right" style="font-size:5rem;">
        🏛️
        <div class="split-visual__overlay">
          <strong>NAAC Accredited</strong>
          <span>Government First Grade College</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     MISSION, VISION, OBJECTIVES
════════════════════════════════════════ -->
<section class="section section--alt">
  <div class="container">
    <div class="section-header">
      <div class="section-label" data-reveal="fade">Our Purpose</div>
      <h2 class="section-title" data-reveal="up">Mission, Vision &amp; Objectives</h2>
      <div class="divider" data-reveal="scale"></div>
    </div>

    <div class="grid-3" data-stagger="0.12">
      <div class="mv-card">
        <h3 class="mv-card__title"><i class="fas fa-bullseye"></i> Our Mission</h3>
        <p class="mv-card__text">
          To provide equitable access to quality information resources and services that support teaching, learning, and research — fostering a culture of intellectual curiosity and lifelong learning for all members of the academic community.
        </p>
      </div>
      <div class="mv-card accent">
        <h3 class="mv-card__title" style="color:var(--clr-dark)"><i class="fas fa-eye" style="color:var(--clr-accent)"></i> Our Vision</h3>
        <p class="mv-card__text">
          To be a dynamic, student-centred knowledge hub that leads digital transformation in academic libraries — connecting communities to information, inspiring innovation, and supporting excellence in education and research.
        </p>
      </div>
      <div class="mv-card">
        <h3 class="mv-card__title"><i class="fas fa-list-check"></i> Objectives</h3>
        <ul class="mv-card__list">
          <li>Maintain a comprehensive and up-to-date collection of print and digital resources</li>
          <li>Provide efficient, user-friendly library services and modern facilities</li>
          <li>Promote information literacy and research skills among students and faculty</li>
          <li>Support faculty research through specialised reference and documentation services</li>
          <li>Foster a love of reading and intellectual growth in the academic community</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     ABOUT LIBRARY
════════════════════════════════════════ -->
<section class="section" id="library">
  <div class="container">
    <div class="section-header">
      <div class="section-label" data-reveal="fade">The Library</div>
      <h2 class="section-title" data-reveal="up">About the Library</h2>
      <div class="divider" data-reveal="scale"></div>
      <p class="section-subtitle" data-reveal="up" data-delay="0.2">
        A modern knowledge centre serving students, faculty, and researchers.
      </p>
    </div>

    <div class="split-section reverse">
      <div class="split-visual" data-reveal="left" style="font-size:5rem;">📚</div>
      <div>
        <h3 data-reveal="up">A Centre of Academic Excellence</h3>
        <p class="mt-md" data-reveal="up" data-delay="0.1">
          The GFGC Kadugudi Library is one of the largest academic libraries in the region, spread across a dedicated building with modern infrastructure designed to support the academic needs of all students and faculty.
        </p>
        <p class="mt-md" data-reveal="up" data-delay="0.15">
          The library houses an extensive collection of textbooks, reference books, periodicals, theses, and digital resources. It subscribes to major national databases and provides access to platforms like NDL India, ONOS, SWAYAM, and NPTEL.
        </p>

        <div class="grid-2 mt-xl" data-stagger="0.08">
          <div class="service-card">
            <div class="service-card__icon"><i class="fas fa-search"></i></div>
            <div>
              <h4 class="service-card__title">Web OPAC</h4>
              <p class="service-card__text">Online Public Access Catalogue — search books and resources from any device.</p>
            </div>
          </div>
          <div class="service-card">
            <div class="service-card__icon"><i class="fas fa-wifi"></i></div>
            <div>
              <h4 class="service-card__title">Digital Access</h4>
              <p class="service-card__text">Free internet, e-resource terminals, and digital reading zones.</p>
            </div>
          </div>
          <div class="service-card">
            <div class="service-card__icon"><i class="fas fa-building"></i></div>
            <div>
              <h4 class="service-card__title">Reading Room</h4>
              <p class="service-card__text">200+ seating capacity with air-conditioned reading environment.</p>
            </div>
          </div>
          <div class="service-card">
            <div class="service-card__icon"><i class="fas fa-barcode"></i></div>
            <div>
              <h4 class="service-card__title">Automated System</h4>
              <p class="service-card__text">Barcode-based circulation system for efficient issue and return.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     LIBRARY STATISTICS
════════════════════════════════════════ -->
<section class="section section--dark" aria-label="Library statistics">
  <div class="container">
    <div class="section-header">
      <div class="section-label">Statistics</div>
      <h2 class="section-title">Library at a Glance</h2>
      <div class="divider"></div>
    </div>

    <div class="grid-4" data-stagger="0.1">
      <?php
      $stats = [
        ['icon'=>'fa-book',            'count'=>25000,  'suffix'=>'+', 'label'=>'Print Books'],
        ['icon'=>'fa-newspaper',       'count'=>150,    'suffix'=>'+', 'label'=>'Journals & Periodicals'],
        ['icon'=>'fa-tablet-screen-button','count'=>1000,'suffix'=>'+','label'=>'E-Resources'],
        ['icon'=>'fa-chair',           'count'=>200,    'suffix'=>'+', 'label'=>'Reading Seats'],
        ['icon'=>'fa-computer',        'count'=>20,     'suffix'=>'+', 'label'=>'Computer Terminals'],
        ['icon'=>'fa-calendar-check',  'count'=>30,     'suffix'=>'+', 'label'=>'Years of Service'],
        ['icon'=>'fa-users',           'count'=>5000,   'suffix'=>'+', 'label'=>'Annual Visitors'],
        ['icon'=>'fa-building-columns','count'=>1,      'suffix'=>'',  'label'=>'Dedicated Library Building'],
      ];
      foreach ($stats as $s): ?>
        <div class="counter-item" style="border:1px solid rgba(255,255,255,0.07); border-radius:var(--radius-lg);">
          <i class="fas <?= $s['icon'] ?> counter-icon"></i>
          <span class="counter-number" data-count="<?= $s['count'] ?>" data-suffix="<?= $s['suffix'] ?>">0</span>
          <span class="counter-label"><?= $s['label'] ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     LIBRARY HISTORY — TIMELINE
════════════════════════════════════════ -->
<section class="section" id="history">
  <div class="container container--narrow">
    <div class="section-header">
      <div class="section-label" data-reveal="fade">Our Journey</div>
      <h2 class="section-title" data-reveal="up">Library History Timeline</h2>
      <div class="divider" data-reveal="scale"></div>
    </div>

    <div class="timeline">
      <?php
      $timeline = [
        ['year'=>'1975','title'=>'Library Founded','text'=>'The library was established along with the college, starting with a modest collection of textbooks and reference materials to serve the founding batch of students.'],
        ['year'=>'1990','title'=>'Collection Expansion','text'=>'The library collection was significantly expanded with grants from UGC, adding thousands of new titles across all academic disciplines offered by the college.'],
        ['year'=>'2000','title'=>'Computerisation',  'text'=>'The library was fully computerised with a dedicated Library Management Software, enabling efficient catalogue management and circulation services.'],
        ['year'=>'2008','title'=>'OPAC Introduction', 'text'=>'Web OPAC was introduced, allowing students and faculty to search the library catalogue online from any internet-connected device on campus.'],
        ['year'=>'2015','title'=>'Digital Resource Access','text'=>'Subscribed to NDL India and other national digital databases, providing students access to thousands of e-books, research papers, and academic journals.'],
        ['year'=>'2020','title'=>'ONOS &amp; E-Learning Platforms','text'=>'Joined the One Nation One Subscription programme and integrated SWAYAM, NPTEL, and other e-learning platforms for students and faculty.'],
        ['year'=>'2024','title'=>'Smart Digital Library Portal','text'=>'Launched this Smart Digital Library Portal — a fully integrated, mobile-responsive platform for accessing all library resources and services digitally.'],
      ];
      foreach ($timeline as $item): ?>
        <div class="timeline-item">
          <div class="timeline-year"><?= $item['year'] ?></div>
          <h3 class="timeline-title"><?= $item['title'] ?></h3>
          <p class="timeline-text"><?= $item['text'] ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     OPAC INFORMATION
════════════════════════════════════════ -->
<section class="section section--alt">
  <div class="container">
    <div class="split-section">
      <div>
        <div class="section-label" data-reveal="fade">Digital Tool</div>
        <h2 data-reveal="up">Web OPAC — Online Catalogue</h2>
        <p class="mt-md" data-reveal="up" data-delay="0.1">
          The Online Public Access Catalogue (OPAC) is our digital library catalogue that allows you to search, locate, and request books and materials from the library's entire collection — anytime, from anywhere.
        </p>
        <ul style="margin-top:1.5rem;" class="mv-card__list" data-stagger="0.08">
          <li>Search by title, author, subject, or ISBN</li>
          <li>Check real-time availability of books</li>
          <li>View your issued books and due dates</li>
          <li>Place book reservation requests online</li>
          <li>Renew books digitally (up to 2 times)</li>
          <li>Access subject-wise browsing</li>
        </ul>
        <div class="mt-xl" data-reveal="up" data-delay="0.3">
          <a href="/library/services.php#opac" class="btn btn--primary">
            <i class="fas fa-search"></i> Access OPAC
          </a>
        </div>
      </div>
      <div class="split-visual" data-reveal="right" style="font-size:5rem;">🔍</div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
