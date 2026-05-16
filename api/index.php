<?php
$pageTitle       = 'Home — Smart Digital Library';
$pageDescription = 'Access millions of resources, book study rooms, and explore the modern campus library.';
$pageClass       = '';
$activePage      = 'home';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<!-- ══════════════════════════════════════
     HERO SECTION (Discovery Search)
════════════════════════════════════════ -->
<section class="hero" id="hero" aria-label="Hero section">
  <div class="hero-bg-pattern"></div>
  <div class="container hero__inner">
    <div class="hero__badge" data-reveal="fade">
      <span class="pulse-dot"></span> GFGC Kadugudi Library
    </div>
    
    <h1 class="hero__title" data-reveal="up" data-delay="0.1">
      Discover millions of <br><span>academic resources.</span>
    </h1>
    
    <p class="hero__subtitle" data-reveal="up" data-delay="0.2">
      Government First Grade College, Kadugudi started in the year 2009 with the ambition of upgrading the Education level of the underprivileged class of people. The library is where students can get the opportunity to read and get knowledge through reading materials that they cannot get in the classroom.
    </p>

    <!-- Massive OPAC Search Bar -->
    <div class="hero-search" data-reveal="scale" data-delay="0.3">
      <form action="/library/services.php" method="GET" class="hero-search__form">
        <div class="hero-search__icon"><i class="fas fa-search"></i></div>
        <input type="text" name="q" placeholder="Search books, articles, authors, or keywords..." aria-label="Search catalog" required>
        <button type="submit" class="btn btn--primary hero-search__btn">Search</button>
      </form>
    </div>

    <div class="hero__quick" data-reveal="fade" data-delay="0.4">
      <span class="hero__quick-label">Popular Resources:</span>
      <div class="hero__quick-links">
        <a href="/library/services.php#ndl" class="hero__quick-link">NDL India</a>
        <a href="/library/services.php#swayam" class="hero__quick-link">SWAYAM</a>
        <a href="/library/services.php#proquest" class="hero__quick-link">ProQuest</a>
        <a href="/library/services.php#jstor" class="hero__quick-link">JSTOR</a>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     COUNTERS
════════════════════════════════════════ -->
<section class="counters" aria-label="Library statistics">
  <div class="container">
    <div class="counters-grid">
      <div class="counter-card" data-reveal="up" data-delay="0">
        <div class="counter-icon"><i class="fas fa-book"></i></div>
        <div class="counter-data">
          <span class="counter-number" data-count="25000" data-suffix="+">0</span>
          <span class="counter-label">Print Volumes</span>
        </div>
      </div>
      <div class="counter-card" data-reveal="up" data-delay="0.1">
        <div class="counter-icon" style="color: #3B82F6; background: #EFF6FF;"><i class="fas fa-database"></i></div>
        <div class="counter-data">
          <span class="counter-number" data-count="1000" data-suffix="+">0</span>
          <span class="counter-label">E-Resources</span>
        </div>
      </div>
      <div class="counter-card" data-reveal="up" data-delay="0.2">
        <div class="counter-icon" style="color: #F59E0B; background: #FEF3C7;"><i class="fas fa-newspaper"></i></div>
        <div class="counter-data">
          <span class="counter-number" data-count="150" data-suffix="+">0</span>
          <span class="counter-label">Journals</span>
        </div>
      </div>
      <div class="counter-card" data-reveal="up" data-delay="0.3">
        <div class="counter-icon" style="color: #10B981; background: #D1FAE5;"><i class="fas fa-users"></i></div>
        <div class="counter-data">
          <span class="counter-number" data-count="5000" data-suffix="+">0</span>
          <span class="counter-label">Active Users</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     BENTO BOX PREVIEW (Collections & Features)
════════════════════════════════════════ -->
<section class="section section--alt" id="features">
  <div class="container">
    <div class="section-header text-center" style="margin: 0 auto var(--sp-3xl);">
      <div class="section-label" data-reveal="fade">Library Services</div>
      <h2 class="section-title" data-reveal="up">Everything you need to succeed.</h2>
      <p class="section-subtitle" style="margin: 0 auto;" data-reveal="up" data-delay="0.1">
        A modern environment designed for focus, collaboration, and discovery.
      </p>
    </div>

    <!-- Asymmetrical Bento Grid -->
    <div class="bento-grid" data-stagger="0.1">
      
      <!-- Large Feature Card -->
      <div class="card bento-card bento-card--large" tabindex="0">
        <div class="bento-card__icon"><i class="fas fa-laptop-code"></i></div>
        <h3>Digital Access 24/7</h3>
        <p>Access our massive database of e-books, digital theses, and academic journals from anywhere, on any device.</p>
        <a href="/library/collections.php#digital" class="btn btn--outline mt-md">Browse E-Resources</a>
      </div>

      <!-- Medium Feature Card 1 -->
      <div class="card bento-card bento-card--medium" tabindex="0" style="background: var(--clr-primary); color: white;">
        <div class="bento-card__icon" style="color: var(--clr-accent-light);"><i class="fas fa-book-open"></i></div>
        <h3 style="color: white;">Extensive Print Catalog</h3>
        <p style="color: rgba(255,255,255,0.8);">Over 25,000 physical volumes spanning all academic disciplines, fully cataloged and searchable.</p>
      </div>

      <!-- Medium Feature Card 2 -->
      <div class="card bento-card bento-card--medium" tabindex="0">
        <div class="bento-card__icon" style="color: #F59E0B; background: #FEF3C7;"><i class="fas fa-door-open"></i></div>
        <h3>Study Rooms</h3>
        <p>Book private or group study spaces equipped with modern collaboration tools and high-speed Wi-Fi.</p>
      </div>

      <!-- Wide Feature Card -->
      <div class="card bento-card bento-card--wide" tabindex="0">
        <div class="bento-card__content">
          <h3>Need research assistance?</h3>
          <p>Our dedicated librarians are available to help you navigate databases, cite sources, and find the exact materials you need.</p>
          <a href="/library/contact.php" class="btn btn--primary mt-sm">Chat with a Librarian</a>
        </div>
        <div class="bento-card__visual">
          <i class="fas fa-headset"></i>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
