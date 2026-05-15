<?php
$pageTitle  = 'Photo Gallery';
$pageDescription = 'Browse [College Name] Library\'s photo gallery — reading rooms, events, facilities, and campus life.';
$activePage = 'gallery';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>
<link rel="stylesheet" href="/library/css/gallery.css">

<!-- Page Hero -->
<section class="page-hero">
  <div class="container page-hero__content">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/library/index.php">Home</a><span class="sep">›</span><span class="current">Gallery</span>
    </nav>
    <h1 data-reveal="up">Photo Gallery</h1>
    <p style="color:rgba(255,255,255,0.75); max-width:540px;" data-reveal="up" data-delay="0.1">
      A visual journey through our library spaces, events, and academic life.
    </p>
  </div>
</section>

<!-- ══════════════════════════════════════
     GALLERY
════════════════════════════════════════ -->
<section class="section">
  <div class="container">

    <!-- Filter Buttons -->
    <div class="gallery-filters" role="group" aria-label="Filter gallery by category">
      <button class="gallery-filter-btn active" data-filter="all">All Photos</button>
      <button class="gallery-filter-btn" data-filter="library">Library Interior</button>
      <button class="gallery-filter-btn" data-filter="events">Events</button>
      <button class="gallery-filter-btn" data-filter="facilities">Facilities</button>
      <button class="gallery-filter-btn" data-filter="activities">Activities</button>
    </div>

    <!-- Masonry Grid -->
    <div class="gallery-masonry" role="list">

      <?php
      $galleryItems = [
        ['icon'=>'📚','cat'=>'library',    'caption'=>'Main Reading Hall','tag'=>'Library Interior'],
        ['icon'=>'💻','cat'=>'facilities', 'caption'=>'Computer Lab','tag'=>'Facilities'],
        ['icon'=>'📖','cat'=>'library',    'caption'=>'Reference Section','tag'=>'Library Interior'],
        ['icon'=>'🎓','cat'=>'events',     'caption'=>'Library Orientation Day 2024','tag'=>'Events'],
        ['icon'=>'🔬','cat'=>'activities', 'caption'=>'Research Methodology Workshop','tag'=>'Activities'],
        ['icon'=>'📰','cat'=>'library',    'caption'=>'Periodicals Section','tag'=>'Library Interior'],
        ['icon'=>'🏆','cat'=>'events',     'caption'=>'Best Reader Award Ceremony','tag'=>'Events'],
        ['icon'=>'📋','cat'=>'facilities', 'caption'=>'Newspaper Reading Area','tag'=>'Facilities'],
        ['icon'=>'🌟','cat'=>'events',     'caption'=>'National Book Week 2024','tag'=>'Events'],
        ['icon'=>'📦','cat'=>'library',    'caption'=>'New Arrivals Display','tag'=>'Library Interior'],
        ['icon'=>'🎨','cat'=>'activities', 'caption'=>'Art & Culture Exhibition','tag'=>'Activities'],
        ['icon'=>'💡','cat'=>'facilities', 'caption'=>'Digital Resource Zone','tag'=>'Facilities'],
        ['icon'=>'🤝','cat'=>'events',     'caption'=>'Inter-Library Meet','tag'=>'Events'],
        ['icon'=>'📜','cat'=>'activities', 'caption'=>'Debate Competition 2024','tag'=>'Activities'],
        ['icon'=>'🏛️','cat'=>'library',   'caption'=>'Library Building Exterior','tag'=>'Library Interior'],
        ['icon'=>'📡','cat'=>'facilities', 'caption'=>'Wi-Fi Reading Zone','tag'=>'Facilities'],
      ];

      foreach ($galleryItems as $i => $item): ?>
        <div class="gallery-item" data-category="<?= $item['cat'] ?>"
             data-lightbox="true"
             data-caption="<?= htmlspecialchars($item['caption']) ?>"
             data-icon="<?= $item['icon'] ?>"
             role="listitem"
             tabindex="0"
             aria-label="Photo: <?= htmlspecialchars($item['caption']) ?>">
          <div class="gallery-placeholder"><?= $item['icon'] ?></div>
          <div class="gallery-overlay">
            <div class="gallery-overlay__icon" aria-hidden="true"><i class="fas fa-expand"></i></div>
            <div class="gallery-tag"><?= $item['tag'] ?></div>
            <div class="gallery-caption"><?= $item['caption'] ?></div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>

    <!-- Load More -->
    <div class="gallery-load-more" data-reveal="up">
      <button class="btn btn--outline" id="load-more-btn">
        <i class="fas fa-plus"></i> Load More Photos
      </button>
    </div>

  </div>
</section>

<!-- ══════════════════════════════════════
     LIGHTBOX
════════════════════════════════════════ -->
<div id="lightbox" class="lightbox" role="dialog" aria-modal="true" aria-label="Image viewer">
  <button id="lb-close" class="lightbox-close" aria-label="Close"><i class="fas fa-times"></i></button>
  <button id="lb-prev"  class="lightbox-nav lightbox-prev" aria-label="Previous image"><i class="fas fa-chevron-left"></i></button>
  <button id="lb-next"  class="lightbox-nav lightbox-next" aria-label="Next image"><i class="fas fa-chevron-right"></i></button>

  <div class="lightbox-inner">
    <div id="lb-content"></div>
  </div>

  <div class="lightbox-caption">
    <div id="lb-caption"></div>
    <div class="lightbox-counter" id="lb-counter"></div>
  </div>
</div>

<script src="/library/js/gallery.js"></script>

<?php require_once 'includes/footer.php'; ?>
