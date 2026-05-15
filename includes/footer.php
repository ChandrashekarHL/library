<?php
/**
 * footer.php — Shared institutional footer
 */
?>

<footer class="site-footer" role="contentinfo">

  <!-- Newsletter Banner -->
  <div class="footer-top-banner">
    <div class="container">
      <div class="footer-newsletter">
        <h3><i class="fas fa-bell" style="margin-right:8px;"></i>Stay Updated</h3>
        <p>Subscribe for new arrivals, events, and digital resource updates</p>
      </div>
      <form class="footer-newsletter-form" id="newsletter-form" novalidate>
        <input type="email" id="newsletter-email" placeholder="Enter your email address" aria-label="Email address for newsletter">
        <button type="submit" class="btn btn--outline-white">
          <i class="fas fa-paper-plane"></i> Subscribe
        </button>
      </form>
    </div>
  </div>

  <!-- Main Footer -->
  <div class="footer-main">
    <div class="container">

      <!-- Brand Column -->
      <div class="footer-brand">
        <a href="/library/index.php" class="nav-logo">
          <div class="nav-logo__icon">📚</div>
          <div class="nav-logo__text">
            <span class="nav-logo__title">[College Name]</span>
            <span class="nav-logo__sub">Digital Library</span>
          </div>
        </a>
        <p>Empowering knowledge and academic excellence through modern digital library services. Your gateway to a world of learning.</p>
        <div class="footer-social" role="list" aria-label="Social media links">
          <a href="#" class="social-link" title="Facebook" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-link" title="Twitter/X" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
          <a href="#" class="social-link" title="YouTube" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
          <a href="#" class="social-link" title="LinkedIn" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="social-link" title="Instagram" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="footer-badges">
          <span class="accred-badge">NAAC Accredited</span>
          <span class="accred-badge">UGC Approved</span>
          <span class="accred-badge">NDL Member</span>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul class="footer-links">
          <li><a href="/library/index.php">Home</a></li>
          <li><a href="/library/about.php">About Library</a></li>
          <li><a href="/library/collections.php">Collections</a></li>
          <li><a href="/library/services.php">Services</a></li>
          <li><a href="/library/facilities.php">Facilities</a></li>
          <li><a href="/library/events.php">Events</a></li>
          <li><a href="/library/gallery.php">Photo Gallery</a></li>
          <li><a href="/library/contact.php">Ask Librarian</a></li>
        </ul>
      </div>

      <!-- Services -->
      <div class="footer-col">
        <h4>Resources</h4>
        <ul class="footer-links">
          <li><a href="/library/services.php#opac">Web OPAC</a></li>
          <li><a href="/library/services.php#digital">E-Resources</a></li>
          <li><a href="/library/services.php#ndl">NDL India</a></li>
          <li><a href="/library/services.php#onos">ONOS Portal</a></li>
          <li><a href="/library/services.php#swayam">SWAYAM</a></li>
          <li><a href="/library/services.php#nptel">NPTEL</a></li>
          <li><a href="/library/contact.php#recommend">Book Request</a></li>
          <li><a href="/library/contact.php#feedback">Feedback</a></li>
        </ul>
      </div>

      <!-- Contact + Hours -->
      <div class="footer-col">
        <h4>Contact Us</h4>
        <ul class="footer-contact-list">
          <li>
            <i class="fas fa-map-marker-alt"></i>
            <span>[College Name], [City], [State] – 000 000</span>
          </li>
          <li>
            <i class="fas fa-phone-alt"></i>
            <span>+91 00000 00000</span>
          </li>
          <li>
            <i class="fas fa-envelope"></i>
            <span>library@collegename.edu.in</span>
          </li>
        </ul>

        <h4 style="margin-top:1.5rem;">Library Hours</h4>
        <ul class="footer-hours">
          <li><span class="day">Mon – Fri</span><span class="time">9:00 AM – 5:00 PM</span></li>
          <li><span class="day">Saturday</span><span class="time">9:00 AM – 1:00 PM</span></li>
          <li><span class="day">Sunday</span><span class="closed">Closed</span></li>
          <li><span class="day">Holidays</span><span class="closed">Closed</span></li>
        </ul>
      </div>

    </div>
  </div>

  <!-- Map Section -->
  <div class="footer-map">
    <div class="container">
      <div class="footer-map-embed">
        <!-- Replace with actual Google Maps embed URL -->
        <div class="footer-map-placeholder">
          <i class="fas fa-map-location-dot"></i>
          <span>Google Maps — Location will be embedded here</span>
        </div>
      </div>
      <div class="footer-map-info">
        <h4><i class="fas fa-location-dot" style="color:var(--clr-accent);margin-right:8px;"></i>Find Us</h4>
        <p>[College Name] is located in [City], [State]. Our library is situated in the main academic block, easily accessible from the main gate.</p>
        <p><strong>Landmark:</strong> Near [Landmark], [City]</p>
        <a href="https://maps.google.com" target="_blank" rel="noopener" class="footer-directions">
          <i class="fas fa-route"></i> Get Directions <i class="fas fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="footer-bottom">
    <div class="container">
      <p class="footer-copyright">
        &copy; <?= date('Y') ?> <a href="/library/index.php">[College Name] Digital Library</a>. All rights reserved. | Designed with <span style="color:#ef5350;">♥</span> for Academic Excellence.
      </p>
      <ul class="footer-bottom-links">
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Use</a></li>
        <li><a href="#">Accessibility</a></li>
        <li><a href="#">Sitemap</a></li>
      </ul>
    </div>
  </div>

</footer>


<!-- Core JS (no CDN dependency — works fully offline) -->
<script src="/library/js/main.js"></script>
<script src="/library/js/navbar.js"></script>
<script src="/library/js/animations.js"></script>
<script src="/library/js/forms.js"></script>

<!-- GSAP (optional — progressive enhancement for parallax only) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" crossorigin="anonymous" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" crossorigin="anonymous" defer></script>

</body>
</html>
