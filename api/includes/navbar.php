<?php
if (!defined('BASE')) require_once __DIR__ . '/../config.php';
?>
<header class="site-header" id="navbar" role="banner">

  <!-- Minimal Access Bar -->
  <div class="access-bar" role="toolbar" aria-label="Accessibility options">
    <div class="container access-bar__inner">
      <div class="access-bar__info">
        <span><i class="fas fa-phone-alt"></i> +91 00000 00000</span>
        <span><i class="fas fa-envelope"></i> library@collegename.edu.in</span>
      </div>
      <div class="access-bar__controls">
        <button class="access-btn" id="font-decrease" aria-label="Decrease font size" title="Decrease font size">A-</button>
        <button class="access-btn" id="font-reset"    aria-label="Reset font size"    title="Reset font size">A</button>
        <button class="access-btn" id="font-increase" aria-label="Increase font size" title="Increase font size">A+</button>
        <button class="access-btn" id="contrast-toggle" aria-label="Toggle high contrast" title="High contrast">
          <i class="fas fa-circle-half-stroke"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Main Navbar -->
  <div class="navbar-main">
    <div class="container navbar-main__inner">
      
      <!-- Mobile Toggle -->
      <button class="hamburger" id="hamburger" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="nav-menu">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </button>

      <!-- Logo -->
      <a href="<?= BASE ?>/" class="nav-logo" aria-label="[College Name] Library Home">
        <div class="nav-logo__icon" aria-hidden="true">
          <i class="fas fa-book-open-reader"></i>
        </div>
        <div class="nav-logo__text">
          <span class="nav-logo__title">College Library</span>
        </div>
      </a>

      <!-- Center Links -->
      <nav class="nav-menu-container" role="navigation" aria-label="Main navigation">
        <ul class="nav-menu" id="nav-menu" role="menubar">
          <li role="none">
            <a href="<?= BASE ?>/" class="nav-link <?= ($activePage==='home') ? 'active':'' ?>" role="menuitem">Home</a>
          </li>

          <li class="has-dropdown" role="none">
            <a href="<?= BASE ?>/about.php" class="nav-link <?= ($activePage==='about') ? 'active':'' ?>" role="menuitem" aria-haspopup="true" aria-expanded="false">
              About <i class="fas fa-chevron-down nav-arrow" aria-hidden="true"></i>
            </a>
            <ul class="dropdown" role="menu" aria-label="About submenu">
              <li><a href="<?= BASE ?>/about.php" role="menuitem">Library Overview</a></li>
              <li><a href="<?= BASE ?>/staff.php" role="menuitem">Staff Directory</a></li>
            </ul>
          </li>

          <li class="has-dropdown" role="none">
            <a href="<?= BASE ?>/collections.php" class="nav-link <?= ($activePage==='collections') ? 'active':'' ?>" role="menuitem" aria-haspopup="true" aria-expanded="false">
              Collections <i class="fas fa-chevron-down nav-arrow" aria-hidden="true"></i>
            </a>
            <ul class="dropdown" role="menu" aria-label="Collections submenu">
              <li><a href="<?= BASE ?>/collections.php#digital" role="menuitem">E-Resources</a></li>
              <li><a href="<?= BASE ?>/collections.php#print" role="menuitem">Print Catalog</a></li>
            </ul>
          </li>

          <li role="none">
            <a href="<?= BASE ?>/services.php" class="nav-link <?= ($activePage==='services') ? 'active':'' ?>" role="menuitem">Services</a>
          </li>
        </ul>
      </nav>

      <!-- Right Actions -->
      <div class="navbar-actions">
        <a href="<?= BASE ?>/login.php" class="btn btn--outline">Login</a>
        <a href="<?= BASE ?>/contact.php" class="btn btn--primary">Ask Us</a>
      </div>

    </div>
  </div>

</header>
