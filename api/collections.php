<?php
$pageTitle       = 'Library Collections';
$pageDescription = 'Explore GFGC Kadugudi Library collections — print books, digital resources, journals, newspapers, periodicals, and e-resources.';
$activePage      = 'collections';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<!-- Page Hero -->
<section class="page-hero">
  <div class="container page-hero__content">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/library/index.php">Home</a><span class="sep">›</span>
      <span class="current">Collections</span>
    </nav>
    <h1 data-reveal="up">Library Collections</h1>
    <p style="color:rgba(255,255,255,0.75); max-width:540px;" data-reveal="up" data-delay="0.1">
      Discover our extensive range of print and digital holdings across all academic disciplines.
    </p>
  </div>
</section>

<!-- ══════════════════════════════════════
     PRINT COLLECTION
════════════════════════════════════════ -->
<section class="section" id="print">
  <div class="container">
    <div class="section-header">
      <div class="section-label" data-reveal="fade">Print Holdings</div>
      <h2 class="section-title" data-reveal="up">Print Collection</h2>
      <div class="divider" data-reveal="scale"></div>
      <p class="section-subtitle" data-reveal="up" data-delay="0.2">
        Over 25,000 carefully curated print titles spanning all academic disciplines.
      </p>
    </div>

    <div class="grid-3" data-stagger="0.1">
      <?php
      $printCollections = [
        ['emoji'=>'📚','title'=>'Textbooks & Course Books','count'=>'15,000+','text'=>'Prescribed and recommended textbooks for all undergraduate and postgraduate programmes across Arts, Science, and Commerce.'],
        ['emoji'=>'📖','title'=>'Reference Books','count'=>'5,000+','text'=>'Encyclopaedias, dictionaries, handbooks, atlases, year books, and subject-specific reference materials.'],
        ['emoji'=>'🎓','title'=>'Theses & Dissertations','count'=>'500+','text'=>'Collection of student and faculty dissertations, project reports, and research theses submitted to the university.'],
        ['emoji'=>'📜','title'=>'Rare Books & Special Collections','count'=>'200+','text'=>'Carefully preserved rare and out-of-print books of historical, literary, and academic significance.'],
        ['emoji'=>'📋','title'=>'Competitive Exam Books','count'=>'2,000+','text'=>'Study materials for UPSC, Karnataka PSI, KAS, KPSC, NDA, bank exams, and other competitive examinations.'],
        ['emoji'=>'🗂️','title'=>'Reports & Govt Documents','count'=>'800+','text'=>'Annual reports, government publications, census data, and official documents for research purposes.'],
      ];
      foreach ($printCollections as $c): ?>
        <div class="feature-card">
          <div class="feature-card__icon" aria-hidden="true" style="font-size:2rem;"><?= $c['emoji'] ?></div>
          <span class="badge badge--primary" style="margin-bottom:0.75rem;"><?= $c['count'] ?></span>
          <h3 class="feature-card__title"><?= $c['title'] ?></h3>
          <p class="feature-card__text"><?= $c['text'] ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     DIGITAL COLLECTION
════════════════════════════════════════ -->
<section class="section section--alt" id="digital">
  <div class="container">
    <div class="section-header">
      <div class="section-label" data-reveal="fade">Digital Holdings</div>
      <h2 class="section-title" data-reveal="up">Digital Collection</h2>
      <div class="divider" data-reveal="scale"></div>
      <p class="section-subtitle" data-reveal="up" data-delay="0.2">
        Thousands of digital resources accessible 24/7 from any internet-connected device.
      </p>
    </div>

    <div class="split-section">
      <div>
        <div class="grid-2" data-stagger="0.08">
          <?php
          $digital = [
            ['icon'=>'fa-file-pdf','title'=>'E-Books','text'=>'PDF and EPUB format e-books on all subjects, accessible via NDL India and institutional subscriptions.'],
            ['icon'=>'fa-graduation-cap','title'=>'E-Learning Content','text'=>'Video lectures, course material, and MOOC content from SWAYAM, NPTEL, and Coursera.'],
            ['icon'=>'fa-database','title'=>'Research Databases','text'=>'Access to academic databases for peer-reviewed articles and research papers.'],
            ['icon'=>'fa-film','title'=>'Multimedia Resources','text'=>'Audio-visual content, documentary films, and educational videos for classroom and self-study.'],
          ];
          foreach ($digital as $d): ?>
            <div class="service-card">
              <div class="service-card__icon"><i class="fas <?= $d['icon'] ?>"></i></div>
              <div>
                <h4 class="service-card__title"><?= $d['title'] ?></h4>
                <p class="service-card__text"><?= $d['text'] ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="split-visual" data-reveal="right" style="font-size:5rem; min-height:320px;">💻
        <div class="split-visual__overlay">
          <strong>1,000+ Digital Resources</strong>
          <span>Available 24/7</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     JOURNALS, NEWSPAPERS, PERIODICALS
════════════════════════════════════════ -->
<section class="section" id="journals">
  <div class="container">
    <div class="section-header">
      <div class="section-label" data-reveal="fade">Serials</div>
      <h2 class="section-title" data-reveal="up">Journals, Newspapers &amp; Periodicals</h2>
      <div class="divider" data-reveal="scale"></div>
    </div>

    <div class="grid-3" data-stagger="0.1">
      <div class="feature-card">
        <div class="feature-card__icon">📰</div>
        <span class="badge badge--accent" style="margin-bottom:.75rem;">150+ Titles</span>
        <h3 class="feature-card__title">Research Journals</h3>
        <p class="feature-card__text">National and international peer-reviewed journals in Science, Commerce, Arts, and Social Sciences. Both print and online subscriptions.</p>
        <ul style="margin-top:1rem; font-size:.875rem; color:var(--clr-muted); line-height:2;">
          <li>► Current Science</li><li>► Indian Journal of Pure and Applied Mathematics</li>
          <li>► Journal of Commerce &amp; Accounting Research</li><li>► And many more...</li>
        </ul>
      </div>
      <div class="feature-card">
        <div class="feature-card__icon">🗞️</div>
        <span class="badge badge--accent" style="margin-bottom:.75rem;">10+ Newspapers</span>
        <h3 class="feature-card__title">Daily Newspapers</h3>
        <p class="feature-card__text">National and regional newspapers available in English and Kannada to keep students updated with current affairs for competitive exams.</p>
        <ul style="margin-top:1rem; font-size:.875rem; color:var(--clr-muted); line-height:2;">
          <li>► The Hindu</li><li>► Deccan Herald</li>
          <li>► Prajavani (Kannada)</li><li>► Vijaya Karnataka (Kannada)</li>
          <li>► Times of India</li><li>► Financial Express</li>
        </ul>
      </div>
      <div class="feature-card">
        <div class="feature-card__icon">📑</div>
        <span class="badge badge--primary" style="margin-bottom:.75rem;">50+ Titles</span>
        <h3 class="feature-card__title">Magazines &amp; Periodicals</h3>
        <p class="feature-card__text">Popular science, business, current affairs, and academic magazines for enriching general knowledge and subject expertise.</p>
        <ul style="margin-top:1rem; font-size:.875rem; color:var(--clr-muted); line-height:2;">
          <li>► Frontline</li><li>► Science Reporter</li>
          <li>► Yojana &amp; Kurukshetra</li><li>► Economic &amp; Political Weekly</li>
          <li>► Down to Earth</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     E-RESOURCES
════════════════════════════════════════ -->
<section class="section section--dark" id="eresources">
  <div class="container">
    <div class="section-header">
      <div class="section-label">E-Resources</div>
      <h2 class="section-title">National Digital Platforms</h2>
      <div class="divider"></div>
      <p class="section-subtitle">
        Free access to world-class digital resources through national government initiatives.
      </p>
    </div>

    <div class="grid-4" data-stagger="0.08">
      <?php
      $eresources = [
        ['abbr'=>'NDL','full'=>'National Digital Library','icon'=>'📖','desc'=>'Over 6.5 crore learning resources — books, articles, videos across disciplines.','link'=>'https://ndl.iitkgp.ac.in/'],
        ['abbr'=>'ONOS','full'=>'One Nation One Subscription','icon'=>'📰','desc'=>'Access to premium research journals from major international publishers.','link'=>'#'],
        ['abbr'=>'SWAYAM','full'=>'Study Webs of Active Learning','icon'=>'🎓','desc'=>'Free online courses from IITs, NITs, IIMs, and central universities.','link'=>'https://swayam.gov.in/'],
        ['abbr'=>'NPTEL','full'=>'National Programme on Technology Enhanced Learning','icon'=>'🔬','desc'=>'Engineering, science, and management courses from IITs and IISc.','link'=>'https://nptel.ac.in/'],
        ['abbr'=>'Shodhganga','full'=>'UGC Theses Repository','icon'=>'📜','desc'=>'Repository of Indian doctoral theses — over 5 lakh theses available freely.','link'=>'https://shodhganga.inflibnet.ac.in/'],
        ['abbr'=>'e-PG Pathshala','full'=>'e-PG Pathshala','icon'=>'💡','desc'=>'Postgraduate e-content in 70+ disciplines developed by subject experts.','link'=>'https://epgp.inflibnet.ac.in/'],
        ['abbr'=>'Open AIRE','full'=>'Open Access Resources','icon'=>'🌐','desc'=>'Freely accessible open-access journals, papers, and research data.','link'=>'https://www.openaire.eu/'],
        ['abbr'=>'DOAJ','full'=>'Directory of Open Access Journals','icon'=>'📋','desc'=>'Curated online directory providing access to high-quality open-access journals.','link'=>'https://doaj.org/'],
      ];
      foreach ($eresources as $r): ?>
        <div class="resource-card" style="background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.1);">
          <div class="resource-card__logo"><?= $r['icon'] ?></div>
          <div class="resource-card__name" style="color:var(--clr-white);"><?= $r['abbr'] ?></div>
          <div class="resource-card__full" style="color:rgba(255,255,255,0.5);"><?= $r['full'] ?></div>
          <div class="resource-card__desc" style="color:rgba(255,255,255,0.65);"><?= $r['desc'] ?></div>
          <a href="<?= $r['link'] ?>" target="_blank" rel="noopener" class="resource-card__link">
            Access <i class="fas fa-external-link-alt"></i>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
