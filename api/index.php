<?php
$pageTitle       = 'Home — Smart Digital Library';
$pageDescription = 'Welcome to [College Name] Digital Library — Your gateway to books, journals, e-resources, and modern academic library services.';
$pageClass       = '';
$activePage      = 'home';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<!-- ══════════════════════════════════════
     HERO SECTION
════════════════════════════════════════ -->
<section class="hero" id="hero" aria-label="Hero section">
  <div class="container">
    <!-- Left: Text -->
    <div class="hero__text">
      <div class="hero__badge" role="note" data-reveal="fade">
        Government First Grade College
      </div>

      <h1 class="hero__title" data-reveal="up" data-delay="0.1">
        Your Gateway to<br>
        <i>Infinite Knowledge</i>
      </h1>

      <p class="hero__subtitle" data-reveal="up" data-delay="0.2">
        A next-generation digital library empowering students, faculty, and researchers with premium academic resources, e-learning platforms, and modern library services.
      </p>

      <div class="hero__actions" data-reveal="up" data-delay="0.3">
        <a href="/library/collections.php" class="btn btn--primary">
          Explore Collections
        </a>
        <a href="/library/services.php#opac" class="btn btn--outline">
          Access Web OPAC
        </a>
      </div>

      <div class="hero__quick" data-reveal="fade" data-delay="0.4">
        <span class="hero__quick-label">Digital Access</span>
        <div class="hero__quick-links">
          <a href="/library/services.php#ndl" class="hero__quick-link">NDL India</a>
          <a href="/library/services.php#swayam" class="hero__quick-link">SWAYAM</a>
          <a href="/library/services.php#nptel" class="hero__quick-link">NPTEL</a>
          <a href="/library/services.php#onos" class="hero__quick-link">ONOS</a>
        </div>
      </div>
    </div>

    <!-- Right: Visual -->
    <div class="hero__visual" aria-hidden="true" data-reveal="fade" data-delay="0.2">
      <div class="hero__image-wrapper">
        <img src="<?= BASE ?>/images/hero-bg.jpg" alt="Library Archive Reading Room">
      </div>
      <div class="hero__image-caption" data-reveal="up" data-delay="0.5">
        <div class="caption-title">Main Reading Hall</div>
        <div class="caption-text">EST. 1990 — Central Campus</div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     COUNTERS
════════════════════════════════════════ -->
<section class="counters" aria-label="Library statistics">
  <div class="container">
    <div class="counter-item" data-reveal="up" data-delay="0">
      <span class="counter-number" data-count="25000" data-suffix="+">0<span class="counter-suffix">+</span></span>
      <span class="counter-label">Print Volumes</span>
    </div>
    <div class="counter-item" data-reveal="up" data-delay="0.1">
      <span class="counter-number" data-count="150" data-suffix="+">0<span class="counter-suffix">+</span></span>
      <span class="counter-label">Academic Journals</span>
    </div>
    <div class="counter-item" data-reveal="up" data-delay="0.2">
      <span class="counter-number" data-count="1000" data-suffix="+">0<span class="counter-suffix">+</span></span>
      <span class="counter-label">Digital Resources</span>
    </div>
    <div class="counter-item" data-reveal="up" data-delay="0.3">
      <span class="counter-number" data-count="5000" data-suffix="+">0<span class="counter-suffix">+</span></span>
      <span class="counter-label">Annual Scholars</span>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     ABOUT PREVIEW
════════════════════════════════════════ -->
<section class="section" id="about-preview">
  <div class="container">
    <div class="split-section">
      <div>
        <div class="section-label" data-reveal="fade"><span></span> About Our Library <span></span></div>
        <h2 data-reveal="up">A Legacy of Knowledge &amp; Innovation</h2>
        <p class="mt-md" data-reveal="up" data-delay="0.1">
          Established with a vision to foster academic excellence, [College Name]'s library is a modern knowledge hub equipped with extensive print and digital collections, state-of-the-art reading facilities, and cutting-edge digital services.
        </p>
        <p class="mt-md" data-reveal="up" data-delay="0.15">
          We are committed to supporting the learning, research, and intellectual growth of students, faculty, and the academic community through innovative and accessible library services.
        </p>
        <div class="grid-2" style="margin-top:2rem;" data-stagger="0.1">
          <div class="info-stat">
            <span class="info-stat__num" data-count="30" data-suffix="+">30+</span>
            <span class="info-stat__label">Years of Service</span>
          </div>
          <div class="info-stat">
            <span class="info-stat__num" data-count="200" data-suffix="+">200+</span>
            <span class="info-stat__label">Reading Seats</span>
          </div>
        </div>
        <div class="mt-xl" data-reveal="up" data-delay="0.3">
          <a href="/library/about.php" class="btn btn--primary">
            <i class="fas fa-arrow-right"></i> Learn More
          </a>
        </div>
      </div>
      <div class="split-visual" data-reveal="right">
        <i class="fas fa-university" aria-hidden="true"></i>
        <div class="split-visual__overlay">
          <strong>NAAC Accredited</strong>
          <span>Government First Grade College</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     QUICK ACCESS SERVICES
════════════════════════════════════════ -->
<section class="section section--alt" id="quick-services">
  <div class="container">
    <div class="section-header">
      <div class="section-label" data-reveal="fade">Our Services</div>
      <h2 class="section-title" data-reveal="up">Everything You Need, All in One Place</h2>
      <div class="divider" data-reveal="scale"></div>
      <p class="section-subtitle" data-reveal="up" data-delay="0.2">
        From traditional book lending to cutting-edge digital resources — we've got you covered.
      </p>
    </div>

    <div class="grid-3" data-stagger="0.08">
      <?php
      $services = [
        ['icon'=>'fa-search',              'title'=>'Web OPAC',          'text'=>'Search our entire catalogue online — books, journals, and digital resources from anywhere, anytime.',             'link'=>'/library/services.php#opac'],
        ['icon'=>'fa-id-card',             'title'=>'Membership',        'text'=>'Easy library membership registration for students and faculty with instant access to all facilities.',          'link'=>'/library/services.php#services'],
        ['icon'=>'fa-book',                'title'=>'Book Lending',       'text'=>'Borrow from our vast print collection with flexible loan periods and easy renewal options.',                   'link'=>'/library/services.php#services'],
        ['icon'=>'fa-globe',               'title'=>'E-Resources',        'text'=>'Access NDL India, ONOS, SWAYAM, NPTEL, and thousands of open-access e-books and journals.',                   'link'=>'/library/services.php#digital'],
        ['icon'=>'fa-microscope',          'title'=>'Research Support',   'text'=>'Get assistance with literature searches, citation management, and research methodology from our experts.',     'link'=>'/library/services.php#services'],
        ['icon'=>'fa-headset',             'title'=>'Ask Librarian',      'text'=>'Submit your queries, book requests, or feedback. Our librarian will respond within 24 working hours.',         'link'=>'/library/contact.php'],
      ];
      foreach ($services as $s): ?>
        <div class="feature-card" tabindex="0" role="article">
          <div class="feature-card__icon" aria-hidden="true"><i class="fas <?= $s['icon'] ?>"></i></div>
          <h3 class="feature-card__title"><?= $s['title'] ?></h3>
          <p class="feature-card__text"><?= $s['text'] ?></p>
          <a href="<?= $s['link'] ?>" class="feature-card__link">Learn More <i class="fas fa-arrow-right"></i></a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     DIGITAL RESOURCES PREVIEW
════════════════════════════════════════ -->
<section class="section section--dark" id="digital-preview">
  <div class="container">
    <div class="section-header">
      <div class="section-label" data-reveal="fade">Digital Access</div>
      <h2 class="section-title" data-reveal="up">World-Class Digital Resources</h2>
      <div class="divider" data-reveal="scale"></div>
      <p class="section-subtitle" data-reveal="up" data-delay="0.2">
        Free access to premium national databases and open educational resources.
      </p>
    </div>

    <div class="grid-4" data-stagger="0.08">
      <?php
      $resources = [
        ['abbr'=>'NDL',    'name'=>'NDL India',    'text'=>'National Digital Library — millions of academic resources.',    'icon'=>'📖', 'link'=>'https://ndl.iitkgp.ac.in/'],
        ['abbr'=>'ONOS',   'name'=>'ONOS Portal',  'text'=>'One Nation One Subscription — premium journal access.',         'icon'=>'📰', 'link'=>'https://onlinelibrary.wiley.com/'],
        ['abbr'=>'SW',     'name'=>'SWAYAM',        'text'=>'Free online courses from India\'s top universities.',          'icon'=>'🎓', 'link'=>'https://swayam.gov.in/'],
        ['abbr'=>'NPTEL',  'name'=>'NPTEL',         'text'=>'Quality engineering and science course content from IITs.',    'icon'=>'🔬', 'link'=>'https://nptel.ac.in/'],
      ];
      foreach ($resources as $r): ?>
        <div class="resource-card" tabindex="0" role="article">
          <div class="resource-card__logo"><?= $r['icon'] ?></div>
          <div class="resource-card__name"><?= $r['name'] ?></div>
          <div class="resource-card__desc"><?= $r['text'] ?></div>
          <a href="<?= $r['link'] ?>" target="_blank" rel="noopener" class="resource-card__link">
            Access Now <i class="fas fa-external-link-alt"></i>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-xl" data-reveal="up">
      <a href="/library/services.php#digital" class="btn btn--outline-white">
        <i class="fas fa-th-large"></i> View All Resources
      </a>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     COLLECTIONS PREVIEW
════════════════════════════════════════ -->
<section class="section" id="collections-preview">
  <div class="container">
    <div class="section-header">
      <div class="section-label" data-reveal="fade">Our Collections</div>
      <h2 class="section-title" data-reveal="up">Explore Our Rich Library Holdings</h2>
      <div class="divider" data-reveal="scale"></div>
      <p class="section-subtitle" data-reveal="up" data-delay="0.2">
        Thousands of titles spanning all disciplines — print, digital, and beyond.
      </p>
    </div>

    <div class="grid-4" data-stagger="0.1">
      <?php
      $collections = [
        ['icon'=>'📚', 'title'=>'Print Books',       'badge'=>'25,000+', 'text'=>'General, reference, textbooks across all disciplines.',       'color'=>'#1a237e'],
        ['icon'=>'💻', 'title'=>'Digital Collection', 'badge'=>'1,000+',  'text'=>'E-books, digital theses, multimedia content.',               'color'=>'#00acc1'],
        ['icon'=>'📰', 'title'=>'Journals',           'badge'=>'150+',    'text'=>'National and international research journals.',               'color'=>'#283593'],
        ['icon'=>'📋', 'title'=>'Newspapers',         'badge'=>'10+',     'text'=>'Daily national and regional newspapers.',                     'color'=>'#0277bd'],
      ];
      foreach ($collections as $c): ?>
        <div class="collection-card" tabindex="0" role="article">
          <div class="collection-card__cover" style="background:linear-gradient(135deg,<?=$c['color']?>dd,<?=$c['color']?>88);">
            <span style="position:relative;z-index:1;font-size:3.5rem;"><?= $c['icon'] ?></span>
          </div>
          <div class="collection-card__body">
            <span class="collection-card__badge"><?= $c['badge'] ?></span>
            <h3 class="collection-card__title"><?= $c['title'] ?></h3>
            <p class="collection-card__text"><?= $c['text'] ?></p>
            <div class="collection-card__count">
              <i class="fas fa-arrow-right"></i>
              <a href="/library/collections.php" style="color:inherit;text-decoration:none;">Browse Collection</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     EVENTS PREVIEW
════════════════════════════════════════ -->
<section class="section section--alt" id="events-preview">
  <div class="container">
    <div class="section-header">
      <div class="section-label" data-reveal="fade">Events &amp; Activities</div>
      <h2 class="section-title" data-reveal="up">Latest Library Events</h2>
      <div class="divider" data-reveal="scale"></div>
    </div>

    <div class="grid-3" data-stagger="0.1">
      <?php
      $events = [
        ['day'=>'20','month'=>'May','cat'=>'Workshop','title'=>'Research Methodology Workshop','venue'=>'Seminar Hall','time'=>'10:00 AM – 1:00 PM','text'=>'A hands-on session on academic research writing, citation tools, and literature review techniques.'],
        ['day'=>'25','month'=>'May','cat'=>'Orientation','title'=>'Library Orientation for Freshers','venue'=>'Library Hall','time'=>'9:00 AM – 10:30 AM','text'=>'Introduction to library resources, OPAC, e-databases, and membership procedures for new students.'],
        ['day'=>'01','month'=>'Jun','cat'=>'Exhibition','title'=>'National Book Week Exhibition','venue'=>'Main Library','time'=>'All Day','text'=>'Celebrating the joy of reading with an exhibition of rare books, journals, and academic publications.'],
      ];
      foreach ($events as $e): ?>
        <div class="event-card" tabindex="0" role="article">
          <div class="event-card__date">
            <span class="event-date__day"><?= $e['day'] ?></span>
            <span class="event-date__month"><?= $e['month'] ?></span>
          </div>
          <div class="event-card__body">
            <div class="event-card__category"><?= $e['cat'] ?></div>
            <h3 class="event-card__title"><?= $e['title'] ?></h3>
            <p class="event-card__text"><?= $e['text'] ?></p>
            <div class="event-card__meta">
              <span><i class="fas fa-map-marker-alt"></i><?= $e['venue'] ?></span>
              <span><i class="fas fa-clock"></i><?= $e['time'] ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-xl" data-reveal="up">
      <a href="/library/events.php" class="btn btn--primary">
        <i class="fas fa-calendar-days"></i> View All Events
      </a>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     CTA BANNER
════════════════════════════════════════ -->
<section class="section section--dark" style="padding:4rem 0;">
  <div class="container text-center" data-reveal="scale">
    <h2 style="color:white; margin-bottom:1rem;">Have a Query? We're Here to Help!</h2>
    <p style="color:rgba(255,255,255,0.7); margin-bottom:2rem; max-width:500px; margin-left:auto; margin-right:auto;">
      Our librarian is ready to assist you with book requests, memberships, research queries, and more.
    </p>
    <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
      <a href="/library/contact.php" class="btn btn--accent">
        <i class="fas fa-headset"></i> Ask Librarian
      </a>
      <a href="/library/contact.php#recommend" class="btn btn--outline-white">
        <i class="fas fa-plus-circle"></i> Recommend a Book
      </a>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
