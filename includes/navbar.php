<?php
// navbar.php needs $activePage and BASE (from header.php → config.php)
if (!defined('BASE')) require_once __DIR__ . '/../config.php';
?>
<header class="site-header" role="banner">

  <!-- Accessibility Bar -->
  <div class="access-bar" role="toolbar" aria-label="Accessibility options">
    <div class="container access-bar__inner">
      <div class="access-bar__info">
        <span><i class="fas fa-phone-alt"></i> +91 00000 00000</span>
        <span><i class="fas fa-envelope"></i> library@collegename.edu.in</span>
        <span><i class="fas fa-clock"></i> Mon–Sat: 9:00 AM – 5:00 PM</span>
      </div>
      <div class="access-bar__controls">
        <button class="access-btn" id="font-decrease" aria-label="Decrease font size" title="Decrease font size">A A-</button>
        <button class="access-btn" id="font-reset"    aria-label="Reset font size"    title="Reset font size">A</button>
        <button class="access-btn" id="font-increase" aria-label="Increase font size" title="Increase font size">A A+</button>
        <button class="access-btn" id="contrast-toggle" aria-label="Toggle high contrast" title="High contrast">
          <i class="fas fa-circle-half-stroke"></i> Contrast
        </button>
        <button class="access-btn" id="screen-reader-toggle" aria-label="Screen reader mode" title="Screen reader mode">
          <i class="fas fa-universal-access"></i> Screen Reader
        </button>
      </div>
    </div>
  </div>

  <!-- Main Navbar -->
  <nav class="navbar" id="navbar" role="navigation" aria-label="Main navigation">
    <div class="container navbar__inner">

      <!-- Logo -->
      <a href="<?= BASE ?>/" class="nav-logo" aria-label="[College Name] Digital Library Home">
        <div class="nav-logo__icon" aria-hidden="true">📚</div>
        <div class="nav-logo__text">
          <span class="nav-logo__title">[College Name]</span>
          <span class="nav-logo__sub">Digital Library</span>
        </div>
      </a>

      <!-- Desktop Nav -->
      <ul class="nav-menu" id="nav-menu" role="menubar">
        <li role="none">
          <a href="<?= BASE ?>/" class="nav-link <?= ($activePage==='home') ? 'active':'' ?>" role="menuitem">Home</a>
        </li>

        <li class="has-dropdown" role="none">
          <a href="<?= BASE ?>/about.php" class="nav-link <?= ($activePage==='about') ? 'active':'' ?>" role="menuitem" aria-haspopup="true" aria-expanded="false">
            About <i class="fas fa-chevron-down nav-arrow" aria-hidden="true"></i>
          </a>
          <ul class="dropdown" role="menu" aria-label="About submenu">
            <li><a href="<?= BASE ?>/about.php" role="menuitem">About the Library</a></li>
            <li><a href="<?= BASE ?>/about.php#institution" role="menuitem">About the College</a></li>
            <li><a href="<?= BASE ?>/about.php#history" role="menuitem">Library History</a></li>
            <li><a href="<?= BASE ?>/staff.php" role="menuitem">Library Staff</a></li>
          </ul>
        </li>

        <li class="has-dropdown" role="none">
          <a href="<?= BASE ?>/collections.php" class="nav-link <?= ($activePage==='collections') ? 'active':'' ?>" role="menuitem" aria-haspopup="true" aria-expanded="false">
            Collections <i class="fas fa-chevron-down nav-arrow" aria-hidden="true"></i>
          </a>
          <ul class="dropdown" role="menu" aria-label="Collections submenu">
            <li><a href="<?= BASE ?>/collections.php#print" role="menuitem">Print Collection</a></li>
            <li><a href="<?= BASE ?>/collections.php#digital" role="menuitem">Digital Collection</a></li>
            <li><a href="<?= BASE ?>/collections.php#journals" role="menuitem">Journals & Periodicals</a></li>
            <li><a href="<?= BASE ?>/collections.php#eresources" role="menuitem">E-Resources</a></li>
          </ul>
        </li>

        <li class="has-dropdown" role="none">
          <a href="<?= BASE ?>/services.php" class="nav-link <?= ($activePage==='services') ? 'active':'' ?>" role="menuitem" aria-haspopup="true" aria-expanded="false">
            Services <i class="fas fa-chevron-down nav-arrow" aria-hidden="true"></i>
          </a>
          <ul class="dropdown" role="menu" aria-label="Services submenu">
            <li><a href="<?= BASE ?>/services.php#services" role="menuitem">Library Services</a></li>
            <li><a href="<?= BASE ?>/services.php#opac" role="menuitem">Web OPAC</a></li>
            <li><a href="<?= BASE ?>/services.php#digital" role="menuitem">Digital Resources</a></li>
          </ul>
        </li>

        <li role="none">
          <a href="<?= BASE ?>/facilities.php" class="nav-link <?= ($activePage==='facilities') ? 'active':'' ?>" role="menuitem">Facilities</a>
        </li>
        <li role="none">
          <a href="<?= BASE ?>/events.php" class="nav-link <?= ($activePage==='events') ? 'active':'' ?>" role="menuitem">Events</a>
        </li>
        <li role="none">
          <a href="<?= BASE ?>/gallery.php" class="nav-link <?= ($activePage==='gallery') ? 'active':'' ?>" role="menuitem">Gallery</a>
        </li>
      </ul>

      <!-- CTA -->
      <a href="<?= BASE ?>/contact.php" class="btn btn--primary nav-cta <?= ($activePage==='contact') ? 'active':'' ?>">
        <i class="fas fa-headset" aria-hidden="true"></i> Contact
      </a>

      <!-- Hamburger -->
      <button class="hamburger" id="hamburger" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="nav-menu">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </button>

    </div>
  </nav>
</header>
