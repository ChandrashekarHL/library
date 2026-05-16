<?php
if (!defined('BASE')) require_once __DIR__ . '/../config.php';
?>
</main>

<footer class="site-footer" role="contentinfo">
  <div class="container">
    <div class="footer-grid">
      
      <!-- Brand Column -->
      <div class="footer-brand">
        <a href="<?= BASE ?>/" class="footer-logo">
          <i class="fas fa-book-open-reader"></i>
          <span>College Library</span>
        </a>
        <p class="footer-desc">
          Empowering your academic journey with comprehensive resources, modern facilities, and expert research support.
        </p>
        <div class="footer-social">
          <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>

      <!-- Links Column 1 -->
      <div class="footer-links">
        <h3 class="footer-heading">Quick Links</h3>
        <ul>
          <li><a href="<?= BASE ?>/">Home</a></li>
          <li><a href="<?= BASE ?>/about.php">About Us</a></li>
          <li><a href="<?= BASE ?>/services.php">Library Services</a></li>
          <li><a href="<?= BASE ?>/contact.php">Contact & Help</a></li>
        </ul>
      </div>

      <!-- Links Column 2 -->
      <div class="footer-links">
        <h3 class="footer-heading">Resources</h3>
        <ul>
          <li><a href="<?= BASE ?>/collections.php#digital">E-Databases</a></li>
          <li><a href="<?= BASE ?>/services.php#opac">Web OPAC</a></li>
          <li><a href="<?= BASE ?>/collections.php#print">Print Catalog</a></li>
          <li><a href="<?= BASE ?>/services.php#ndl">NDL India</a></li>
        </ul>
      </div>

      <!-- Contact Column -->
      <div class="footer-contact">
        <h3 class="footer-heading">Contact Us</h3>
        <ul class="contact-info">
          <li>
            <i class="fas fa-map-marker-alt"></i>
            <span>Library Building, Central Campus<br>City, State - 123456</span>
          </li>
          <li>
            <i class="fas fa-phone-alt"></i>
            <span>+91 00000 00000</span>
          </li>
          <li>
            <i class="fas fa-envelope"></i>
            <span>library@collegename.edu.in</span>
          </li>
          <li>
            <i class="fas fa-clock"></i>
            <span>Mon–Sat: 9:00 AM – 5:00 PM</span>
          </li>
        </ul>
      </div>

    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom">
      <div class="footer-copyright">
        &copy; <?= date('Y') ?> [College Name] Library. All rights reserved.
      </div>
      <div class="footer-legal">
        <a href="<?= BASE ?>/privacy.php">Privacy Policy</a>
        <a href="<?= BASE ?>/terms.php">Terms of Service</a>
      </div>
    </div>
  </div>
</footer>

<div id="page-loader" class="hidden">
  <div class="loader-ring" aria-hidden="true"></div>
</div>

<button id="back-to-top" aria-label="Back to top" title="Back to top">
  <i class="fas fa-chevron-up"></i>
</button>

<script src="<?= BASE ?>/js/main.js"></script>
<script src="<?= BASE ?>/js/navbar.js"></script>
<script src="<?= BASE ?>/js/animations.js"></script>
<script src="<?= BASE ?>/js/forms.js"></script>
<script src="<?= BASE ?>/js/gallery.js"></script>
</body>
</html>
