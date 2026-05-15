<?php
$pageTitle  = 'Library Facilities';
$pageDescription = 'Explore [College Name] Library facilities — reading rooms, computer lab, digital zone, virtual tour, and interactive floor plan.';
$activePage = 'facilities';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<!-- Page Hero -->
<section class="page-hero">
  <div class="container page-hero__content">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/library/index.php">Home</a><span class="sep">›</span><span class="current">Facilities</span>
    </nav>
    <h1 data-reveal="up">Library Facilities</h1>
    <p style="color:rgba(255,255,255,0.75); max-width:540px;" data-reveal="up" data-delay="0.1">
      State-of-the-art infrastructure designed for productive learning and research.
    </p>
  </div>
</section>

<!-- ══════════════════════════════════════
     FACILITIES GRID
════════════════════════════════════════ -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="section-label" data-reveal="fade">Infrastructure</div>
      <h2 class="section-title" data-reveal="up">Our Facilities</h2>
      <div class="divider" data-reveal="scale"></div>
      <p class="section-subtitle" data-reveal="up" data-delay="0.2">
        Every space in our library is designed to inspire learning and support academic success.
      </p>
    </div>

    <div class="grid-3" data-stagger="0.1">
      <?php
      $facilities = [
        ['icon'=>'📖','title'=>'Reading Room','text'=>'Spacious, air-conditioned reading room with 200+ seating capacity. Quiet environment with individual study carrels and natural lighting designed for focused study.','features'=>['200+ seats','Air-conditioned','Individual carrels','Noise-free zone']],
        ['icon'=>'💻','title'=>'Computer Lab','text'=>'Dedicated computer lab with 25 high-speed internet-connected workstations exclusively for library research, OPAC access, and e-resource browsing.','features'=>['25 workstations','High-speed internet','OPAC terminals','Free printing']],
        ['icon'=>'📡','title'=>'Free Wi-Fi Zone','text'=>'Campus-wide Wi-Fi connectivity within the library premises, enabling students to access digital resources on their personal devices seamlessly.','features'=>['100 Mbps speed','Secure network','All areas covered','Guest access available']],
        ['icon'=>'🔬','title'=>'Digital Resource Centre','text'=>'Dedicated zone with curated access to national databases — NDL, ONOS, SWAYAM, NPTEL — with trained staff assistance for digital resource navigation.','features'=>['National databases','Expert assistance','E-learning access','Research support']],
        ['icon'=>'📰','title'=>'Newspaper & Periodical Section','text'=>'Daily newspapers in English and Kannada, plus 50+ magazine and journal titles, available in a dedicated reading area updated every morning.','features'=>['10+ daily newspapers','50+ magazines','Kannada resources','Current affairs section']],
        ['icon'=>'📋','title'=>'Reference Section','text'=>'Extensive reference collection including encyclopaedias, dictionaries, handbooks, maps, statistical abstracts, and government publications for in-depth research.','features'=>['5000+ reference volumes','Cannot be borrowed','Expert guidance','Open access']],
        ['icon'=>'🔒','title'=>'Rare Book Collection','text'=>'Climate-controlled vault housing rare, out-of-print, and heritage books of historical and academic significance. Access by special permission.','features'=>['200+ rare titles','Climate-controlled','Access by permission','Heritage preservation']],
        ['icon'=>'📦','title'=>'Issue & Return Counter','text'=>'Efficient barcode-based circulation desk with RFID technology for quick book issue, return, and renewal. Minimal waiting time assured.','features'=>['Barcode system','Quick processing','Renewal service','Lost item tracking']],
        ['icon'=>'♿','title'=>'Accessibility Features','text'=>'The library is wheelchair accessible with ramps, accessible seating, and screen reader workstations to ensure inclusive access for all users.','features'=>['Wheelchair ramp','Accessible seating','Screen reader stations','Large-print section']],
      ];
      foreach ($facilities as $f): ?>
        <div class="facility-card">
          <div class="facility-card__image"><?= $f['icon'] ?></div>
          <div class="facility-card__body">
            <h3 class="facility-card__title"><?= $f['title'] ?></h3>
            <p class="facility-card__text"><?= $f['text'] ?></p>
            <div class="facility-card__feature" style="flex-wrap:wrap; gap:.5rem; padding-top:.75rem; border-top:1px solid var(--clr-border); margin-top:.75rem;">
              <?php foreach ($f['features'] as $feat): ?>
                <span class="badge badge--primary" style="font-size:.65rem;">
                  <i class="fas fa-check" style="margin-right:4px;"></i><?= $feat ?>
                </span>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     VIRTUAL TOUR
════════════════════════════════════════ -->
<section class="section section--alt" id="virtual-tour">
  <div class="container">
    <div class="section-header">
      <div class="section-label" data-reveal="fade">Coming Soon</div>
      <h2 class="section-title" data-reveal="up">Virtual Tour</h2>
      <div class="divider" data-reveal="scale"></div>
      <p class="section-subtitle" data-reveal="up" data-delay="0.2">
        Take an immersive 360° virtual tour of our library — explore every floor from your device.
      </p>
    </div>

    <div class="virtual-tour-card" data-reveal="scale">
      <div class="tour-icon">🏛️</div>
      <h3 class="tour-title">360° Virtual Library Tour</h3>
      <p class="tour-text">
        Our interactive 360° virtual tour is coming soon. You'll be able to explore the reading room, computer lab, reference section, and all library floors in an immersive virtual environment.
      </p>
      <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
        <button class="btn btn--accent" onclick="openModal('Virtual Tour','Our 360° Virtual Tour will be launched soon! Stay tuned.','🏛️')">
          <i class="fas fa-vr-cardboard"></i> Preview Tour (Coming Soon)
        </button>
        <a href="/library/gallery.php" class="btn btn--outline-white">
          <i class="fas fa-images"></i> View Photo Gallery
        </a>
      </div>

      <!-- Placeholder preview grid -->
      <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:1rem; margin-top:2rem; max-width:600px;">
        <?php
        $tourPreviews = ['📚 Reading Room','💻 Computer Lab','📖 Reference Section','📰 Periodical Area','🔬 Digital Zone','🏛️ Library Entrance'];
        foreach ($tourPreviews as $room): ?>
          <div style="background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.15); border-radius:var(--radius-md); padding:1rem; font-size:.75rem; color:rgba(255,255,255,0.7); text-align:center; cursor:pointer; transition:all .3s;" onmouseover="this.style.background='rgba(255,255,255,0.15)'" onmouseout="this.style.background='rgba(255,255,255,0.08)'">
            <?= $room ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     FLOOR PLAN
════════════════════════════════════════ -->
<section class="section" id="floor-plan">
  <div class="container">
    <div class="section-header">
      <div class="section-label" data-reveal="fade">Navigation</div>
      <h2 class="section-title" data-reveal="up">Library Floor Plan</h2>
      <div class="divider" data-reveal="scale"></div>
      <p class="section-subtitle" data-reveal="up" data-delay="0.2">
        Interactive floor map — hover over hotspots to find each section.
      </p>
    </div>

    <div class="floor-plan-container" data-reveal="scale">
      <!-- Floor tabs -->
      <div style="display:flex; gap:.5rem; margin-bottom:1.5rem; flex-wrap:wrap;">
        <?php foreach (['Ground Floor','First Floor','Second Floor'] as $fi => $floor): ?>
          <button onclick="showFloor(<?= $fi ?>)" id="floor-tab-<?= $fi ?>"
            class="btn <?= $fi===0 ? 'btn--primary' : 'btn--outline' ?>"
            style="padding:.5rem 1rem; font-size:.8rem;">
            <?= $floor ?>
          </button>
        <?php endforeach; ?>
      </div>

      <!-- SVG Floor Plan Placeholder -->
      <div id="floor-display" style="position:relative; background:var(--clr-bg-alt); border:2px dashed var(--clr-border); border-radius:var(--radius-lg); min-height:400px; display:flex; align-items:center; justify-content:center; overflow:hidden;">

        <!-- Floor layout SVG -->
        <svg viewBox="0 0 800 400" class="floor-plan-svg" aria-label="Library floor plan" role="img">
          <!-- Outer walls -->
          <rect x="20" y="20" width="760" height="360" rx="8" fill="#f0f4ff" stroke="#3949ab" stroke-width="3"/>

          <!-- Rooms - Ground Floor -->
          <rect x="40" y="40" width="180" height="150" rx="4" fill="#c5cae9" stroke="#3949ab" stroke-width="1.5" opacity="0.8"/>
          <text x="130" y="120" text-anchor="middle" font-size="12" fill="#1a237e" font-family="Poppins,sans-serif" font-weight="600">📚 Main Collection</text>

          <rect x="240" y="40" width="160" height="150" rx="4" fill="#b3e5fc" stroke="#0288d1" stroke-width="1.5" opacity="0.8"/>
          <text x="320" y="120" text-anchor="middle" font-size="12" fill="#01579b" font-family="Poppins,sans-serif" font-weight="600">🖥️ Computer Lab</text>

          <rect x="420" y="40" width="160" height="150" rx="4" fill="#c8e6c9" stroke="#388e3c" stroke-width="1.5" opacity="0.8"/>
          <text x="500" y="120" text-anchor="middle" font-size="12" fill="#1b5e20" font-family="Poppins,sans-serif" font-weight="600">📖 Reading Room</text>

          <rect x="600" y="40" width="160" height="150" rx="4" fill="#f8bbd0" stroke="#c2185b" stroke-width="1.5" opacity="0.8"/>
          <text x="680" y="120" text-anchor="middle" font-size="12" fill="#880e4f" font-family="Poppins,sans-serif" font-weight="600">📰 Periodicals</text>

          <rect x="40" y="220" width="250" height="140" rx="4" fill="#fff9c4" stroke="#f57f17" stroke-width="1.5" opacity="0.8"/>
          <text x="165" y="295" text-anchor="middle" font-size="12" fill="#e65100" font-family="Poppins,sans-serif" font-weight="600">🔬 Reference Section</text>

          <rect x="310" y="220" width="180" height="140" rx="4" fill="#e1bee7" stroke="#7b1fa2" stroke-width="1.5" opacity="0.8"/>
          <text x="400" y="295" text-anchor="middle" font-size="12" fill="#4a148c" font-family="Poppins,sans-serif" font-weight="600">💡 Digital Zone</text>

          <rect x="510" y="220" width="130" height="140" rx="4" fill="#d7ccc8" stroke="#5d4037" stroke-width="1.5" opacity="0.8"/>
          <text x="575" y="285" text-anchor="middle" font-size="11" fill="#3e2723" font-family="Poppins,sans-serif" font-weight="600">🚪 Issue Counter</text>

          <rect x="660" y="220" width="100" height="140" rx="4" fill="#cfd8dc" stroke="#455a64" stroke-width="1.5" opacity="0.8"/>
          <text x="710" y="285" text-anchor="middle" font-size="11" fill="#263238" font-family="Poppins,sans-serif" font-weight="600">🚻 Amenities</text>

          <!-- Entry arrow -->
          <path d="M 400 395 L 400 375 L 390 380 M 400 375 L 410 380" stroke="#1a237e" stroke-width="2" fill="none"/>
          <text x="400" y="398" text-anchor="middle" font-size="10" fill="#1a237e" font-family="Poppins,sans-serif">MAIN ENTRANCE</text>
        </svg>

        <!-- Hotspots (positioned absolutely over SVG) -->
        <?php
        $hotspots = [
          ['x'=>'17%','y'=>'30%','label'=>'Main Book Collection','color'=>'var(--clr-primary)'],
          ['x'=>'40%','y'=>'30%','label'=>'Computer Lab','color'=>'#0288d1'],
          ['x'=>'62%','y'=>'30%','label'=>'Reading Room','color'=>'#388e3c'],
          ['x'=>'84%','y'=>'30%','label'=>'Periodicals','color'=>'#c2185b'],
          ['x'=>'22%','y'=>'72%','label'=>'Reference Section','color'=>'#f57f17'],
          ['x'=>'50%','y'=>'72%','label'=>'Digital Resource Zone','color'=>'#7b1fa2'],
          ['x'=>'69%','y'=>'72%','label'=>'Issue/Return Counter','color'=>'var(--clr-dark)'],
        ];
        foreach ($hotspots as $h): ?>
          <div class="hotspot" style="left:<?= $h['x'] ?>; top:<?= $h['y'] ?>; background:<?= $h['color'] ?>; transform:translate(-50%,-50%);" title="<?= $h['label'] ?>" tabindex="0" role="button" aria-label="<?= $h['label'] ?>">
            <i class="fas fa-info" style="font-size:.6rem;"></i>
            <div class="hotspot-tooltip"><?= $h['label'] ?></div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Legend -->
      <div style="display:flex; gap:1rem; margin-top:1rem; flex-wrap:wrap; font-size:.8rem; color:var(--clr-muted);">
        <span><span style="display:inline-block;width:12px;height:12px;background:var(--clr-primary);border-radius:50%;margin-right:4px;"></span> Collections</span>
        <span><span style="display:inline-block;width:12px;height:12px;background:#0288d1;border-radius:50%;margin-right:4px;"></span> Technology</span>
        <span><span style="display:inline-block;width:12px;height:12px;background:#388e3c;border-radius:50%;margin-right:4px;"></span> Reading Areas</span>
        <span><span style="display:inline-block;width:12px;height:12px;background:#7b1fa2;border-radius:50%;margin-right:4px;"></span> Digital Resources</span>
        <span>● = Interactive Hotspot (hover for info)</span>
      </div>
    </div>
  </div>
</section>

<script>
function showFloor(index) {
  document.querySelectorAll('[id^="floor-tab-"]').forEach((tab, i) => {
    if (i === index) {
      tab.className = tab.className.replace('btn--outline','btn--primary');
    } else {
      tab.className = tab.className.replace('btn--primary','btn--outline');
    }
  });
  // In production: show/hide different floor SVGs
  if (index > 0) {
    openModal('Floor Plan', `Floor ${index + 1} detailed layout will be available soon. Contact the library for a physical map.`, '🗺️');
  }
}
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
