<?php
$pageTitle  = 'Events & Activities';
$pageDescription = 'Stay updated with [College Name] Library events, workshops, exhibitions, and activities throughout the academic year.';
$activePage = 'events';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<!-- Page Hero -->
<section class="page-hero">
  <div class="container page-hero__content">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/library/index.php">Home</a><span class="sep">›</span><span class="current">Events</span>
    </nav>
    <h1 data-reveal="up">Events &amp; Activities</h1>
    <p style="color:rgba(255,255,255,0.75); max-width:540px;" data-reveal="up" data-delay="0.1">
      Discover library events, workshops, exhibitions, and academic activities.
    </p>
  </div>
</section>

<!-- ══════════════════════════════════════
     UPCOMING EVENTS
════════════════════════════════════════ -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="section-label" data-reveal="fade">Coming Up</div>
      <h2 class="section-title" data-reveal="up">Upcoming Events</h2>
      <div class="divider" data-reveal="scale"></div>
    </div>

    <div class="grid-2" data-stagger="0.1">
      <?php
      $upcoming = [
        ['day'=>'20','month'=>'May','year'=>'2026','cat'=>'Workshop','catColor'=>'#00acc1','title'=>'Research Methodology Workshop','venue'=>'Seminar Hall, Block B','time'=>'10:00 AM – 1:00 PM','tags'=>['Open to All','PG Students','Faculty'],'text'=>'A comprehensive hands-on session covering academic research writing, citation tools (Mendeley/Zotero), and systematic literature review techniques. Certificates will be provided.','contact'=>'Register at Library Counter'],
        ['day'=>'25','month'=>'May','year'=>'2026','cat'=>'Orientation','catColor'=>'#3949ab','title'=>'Library Orientation for Freshers 2026','venue'=>'Library Hall, Ground Floor','time'=>'9:00 AM – 10:30 AM','tags'=>['First Year Students','Mandatory'],'text'=>'All newly enrolled students must attend this orientation session to understand library rules, OPAC usage, e-resource access, borrowing procedures, and membership registration.','contact'=>'Attendance mandatory'],
        ['day'=>'01','month'=>'Jun','year'=>'2026','cat'=>'Exhibition','catColor'=>'#0277bd','title'=>'National Book Week Exhibition','venue'=>'Main Library, All Floors','time'=>'All Day (9AM – 5PM)','tags'=>['All Welcome','Free Entry'],'text'=>'Celebrating the joy of reading and knowledge. Featuring displays of new acquisitions, rare books, student projects, and interactive reading activities for all library members.','contact'=>'Open to all'],
        ['day'=>'10','month'=>'Jun','year'=>'2026','cat'=>'Competition','catColor'=>'#7b1fa2','title'=>'Essay Writing Competition','venue'=>'Reading Room, 2nd Floor','time'=>'11:00 AM – 1:00 PM','tags'=>['Students Only','Prizes Await'],'text'=>'Annual inter-department essay writing competition on the theme "Digital Literacy in the Age of Artificial Intelligence." Winners receive book vouchers and certificates.','contact'=>'Register by June 5'],
      ];
      foreach ($upcoming as $ev): ?>
        <div class="event-card" style="background:var(--clr-surface); flex-direction:column; gap:0; padding:0; overflow:hidden;">
          <div style="background:var(--grad-primary); padding:1.5rem; display:flex; gap:1.5rem; align-items:center;">
            <div class="event-card__date" style="background:rgba(255,255,255,0.15); min-width:64px; border-radius:var(--radius-md); padding:.75rem;">
              <span class="event-date__day"><?= $ev['day'] ?></span>
              <span class="event-date__month"><?= $ev['month'] ?></span>
            </div>
            <div>
              <span style="background:rgba(255,255,255,0.2); padding:2px 12px; border-radius:99px; font-size:.7rem; font-weight:700; color:rgba(255,255,255,0.9); text-transform:uppercase; letter-spacing:.1em;"><?= $ev['cat'] ?></span>
              <h3 style="color:white; margin-top:.5rem; font-size:1.1rem;"><?= $ev['title'] ?></h3>
            </div>
          </div>
          <div class="event-card__body" style="padding:1.5rem;">
            <p class="event-card__text"><?= $ev['text'] ?></p>
            <div class="event-card__meta" style="margin-top:1rem; flex-wrap:wrap;">
              <span><i class="fas fa-map-marker-alt"></i><?= $ev['venue'] ?></span>
              <span><i class="fas fa-clock"></i><?= $ev['time'] ?></span>
            </div>
            <div style="display:flex; gap:.5rem; flex-wrap:wrap; margin-top:1rem;">
              <?php foreach ($ev['tags'] as $tag): ?>
                <span class="badge badge--primary"><?= $tag ?></span>
              <?php endforeach; ?>
            </div>
            <div style="margin-top:1.25rem; padding-top:1rem; border-top:1px solid var(--clr-border); font-size:.8rem; color:var(--clr-accent); display:flex; align-items:center; gap:.5rem;">
              <i class="fas fa-info-circle"></i> <?= $ev['contact'] ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     PAST EVENTS TIMELINE
════════════════════════════════════════ -->
<section class="section section--alt">
  <div class="container">
    <div class="section-header">
      <div class="section-label" data-reveal="fade">Archive</div>
      <h2 class="section-title" data-reveal="up">Past Events Timeline</h2>
      <div class="divider" data-reveal="scale"></div>
    </div>

    <div class="container container--narrow">
      <div class="timeline">
        <?php
        $past = [
          ['year'=>'March 2026','title'=>'World Book Day Celebration','text'=>'Celebrated World Book Day with a book fair, quiz competition, reading marathon, and author interaction session. Over 300 students participated.'],
          ['year'=>'Jan 2026','title'=>'Digital Literacy Week','text'=>'Week-long programme on digital literacy — workshops on internet research skills, citation management, plagiarism awareness, and e-resource utilisation.'],
          ['year'=>'Nov 2025','title'=>'Bibliotheca Inter-College Quiz','text'=>'Successfully hosted the inter-college library quiz competition with teams from 12 colleges. Our team bagged the second position.'],
          ['year'=>'Sep 2025','title'=>'New Arrivals Exhibition & Launch','text'=>'Launched 500+ newly acquired books with a formal exhibition. Faculty and students browsed new titles, and 120 books were issued on the same day.'],
          ['year'=>'Jul 2025','title'=>'INFLIBNET Awareness Programme','text'=>'Awareness session on INFLIBNET services — Shodhganga, e-Shodhsindhu, and e-PG Pathshala — conducted for PG students and research scholars.'],
          ['year'=>'Apr 2025','title'=>'National Science Day Exhibition','text'=>'Displayed science books, research journals, and posters curated by students to mark National Science Day. 200+ visitors attended over two days.'],
        ];
        foreach ($past as $p): ?>
          <div class="timeline-item">
            <div class="timeline-year"><?= $p['year'] ?></div>
            <h3 class="timeline-title"><?= $p['title'] ?></h3>
            <p class="timeline-text"><?= $p['text'] ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     HIGHLIGHTS STATS
════════════════════════════════════════ -->
<section class="section section--dark">
  <div class="container">
    <div class="section-header">
      <div class="section-label">Annual Highlights</div>
      <h2 class="section-title">Events at a Glance</h2>
    </div>
    <div class="grid-4" data-stagger="0.08">
      <div class="counter-item"><i class="fas fa-calendar-check counter-icon"></i><span class="counter-number" data-count="24" data-suffix="+">0</span><span class="counter-label">Events per Year</span></div>
      <div class="counter-item"><i class="fas fa-users counter-icon"></i><span class="counter-number" data-count="2000" data-suffix="+">0</span><span class="counter-label">Participants Annually</span></div>
      <div class="counter-item"><i class="fas fa-trophy counter-icon"></i><span class="counter-number" data-count="15" data-suffix="+">0</span><span class="counter-label">Awards Won</span></div>
      <div class="counter-item"><i class="fas fa-chalkboard-teacher counter-icon"></i><span class="counter-number" data-count="12" data-suffix="+">0</span><span class="counter-label">Expert Workshops</span></div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
