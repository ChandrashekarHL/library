<?php
/**
 * navbar.php — Sticky Navigation with Accessibility Bar
 */
if (!isset($activePage)) $activePage = '';

$navLinks = [
  ['href' => '/library/index.php',       'label' => 'Home',        'id' => 'home',        'icon' => 'fa-house'],
  ['href' => '/library/about.php',       'label' => 'About',       'id' => 'about',       'icon' => 'fa-university',
   'dropdown' => [
     ['href' => '/library/about.php#institution', 'icon' => 'fa-landmark',      'label' => 'About Institution'],
     ['href' => '/library/about.php#library',     'icon' => 'fa-book-open',     'label' => 'About Library'],
     ['href' => '/library/about.php#history',     'icon' => 'fa-clock-rotate-left','label' => 'Library History'],
     ['href' => '/library/staff.php',             'icon' => 'fa-users',         'label' => 'Library Staff'],
   ]
  ],
  ['href' => '/library/collections.php', 'label' => 'Collections', 'id' => 'collections', 'icon' => 'fa-layer-group',
   'dropdown' => [
     ['href' => '/library/collections.php#print',   'icon' => 'fa-book',          'label' => 'Print Collection'],
     ['href' => '/library/collections.php#digital', 'icon' => 'fa-tablet-screen-button','label' => 'Digital Collection'],
     ['href' => '/library/collections.php#journals','icon' => 'fa-newspaper',     'label' => 'Journals & Periodicals'],
   ]
  ],
  ['href' => '/library/services.php',    'label' => 'Services',    'id' => 'services',    'icon' => 'fa-concierge-bell',
   'dropdown' => [
     ['href' => '/library/services.php#services',  'icon' => 'fa-hand-holding-heart','label' => 'Library Services'],
     ['href' => '/library/services.php#digital',   'icon' => 'fa-globe',            'label' => 'Digital Resources'],
     ['href' => '/library/services.php#opac',      'icon' => 'fa-search',           'label' => 'Web OPAC'],
   ]
  ],
  ['href' => '/library/facilities.php',  'label' => 'Facilities',  'id' => 'facilities',  'icon' => 'fa-building'],
  ['href' => '/library/events.php',      'label' => 'Events',      'id' => 'events',      'icon' => 'fa-calendar-days'],
  ['href' => '/library/gallery.php',     'label' => 'Gallery',     'id' => 'gallery',     'icon' => 'fa-images'],
  ['href' => '/library/contact.php',     'label' => 'Contact',     'id' => 'contact',     'icon' => 'fa-envelope', 'cta' => true],
];
?>

<!-- Accessibility Bar -->
<div id="access-bar" role="banner">
  <div class="container">
    <div class="access-info">
      <span><i class="fas fa-phone-alt"></i> +91 00000 00000</span>
      <span><i class="fas fa-envelope"></i> library@collegename.edu.in</span>
      <span><i class="fas fa-clock"></i> Mon–Sat: 9:00 AM – 5:00 PM</span>
    </div>
    <div class="access-controls" role="group" aria-label="Accessibility controls">
      <button class="access-btn" id="font-decrease" title="Decrease font size" aria-label="Decrease font size">
        <i class="fas fa-font"></i> A-
      </button>
      <button class="access-btn" id="font-reset" title="Reset font size" aria-label="Reset font size">A</button>
      <button class="access-btn" id="font-increase" title="Increase font size" aria-label="Increase font size">
        <i class="fas fa-font"></i> A+
      </button>
      <div class="access-sep" aria-hidden="true"></div>
      <button class="access-btn" id="contrast-toggle" title="Toggle high contrast" aria-label="Toggle high contrast mode">
        <i class="fas fa-circle-half-stroke"></i> Contrast
      </button>
      <div class="access-sep" aria-hidden="true"></div>
      <button class="access-btn" id="screen-reader-btn" title="Screen reader mode" aria-label="Screen reader mode">
        <i class="fas fa-ear-listen"></i> Screen Reader
      </button>
    </div>
  </div>
</div>

<!-- Main Navbar -->
<nav id="navbar" role="navigation" aria-label="Main navigation">
  <div class="container nav-inner">

    <!-- Logo -->
    <a href="/library/index.php" class="nav-logo" aria-label="[College Name] Digital Library Home">
      <div class="nav-logo__icon" aria-hidden="true">📚</div>
      <div class="nav-logo__text">
        <span class="nav-logo__title">[College Name]</span>
        <span class="nav-logo__sub">Digital Library</span>
      </div>
    </a>

    <!-- Mobile Toggle -->
    <button class="nav-toggle" id="nav-toggle" aria-expanded="false" aria-controls="nav-menu" aria-label="Toggle navigation">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </button>

    <!-- Nav Links -->
    <ul class="nav-menu" id="nav-menu" role="menubar">
      <?php foreach ($navLinks as $link): ?>
        <?php
          $hasDropdown = !empty($link['dropdown']);
          $isActive    = ($activePage === $link['id']);
          $isCta       = !empty($link['cta']);
        ?>
        <li class="nav-item <?= $hasDropdown ? 'has-dropdown' : '' ?>" role="none">
          <a href="<?= $link['href'] ?>"
             class="nav-link <?= $isActive ? 'active' : '' ?> <?= $isCta ? 'nav-cta' : '' ?>"
             role="menuitem"
             <?= $hasDropdown ? 'aria-haspopup="true" aria-expanded="false"' : '' ?>>
            <?= $link['label'] ?>
            <?php if ($hasDropdown): ?><i class="fas fa-chevron-down" aria-hidden="true"></i><?php endif; ?>
          </a>

          <?php if ($hasDropdown): ?>
            <ul class="dropdown-menu" role="menu" aria-label="<?= $link['label'] ?> submenu">
              <?php foreach ($link['dropdown'] as $drop): ?>
                <li role="none">
                  <a href="<?= $drop['href'] ?>" class="dropdown-link" role="menuitem">
                    <i class="fas <?= $drop['icon'] ?>" aria-hidden="true"></i>
                    <?= $drop['label'] ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</nav>
