<?php
/**
 * header.php — Shared HTML <head> block
 * Include at the top of every page.
 * 
 * Required variables (set before include):
 *   $pageTitle       string   <title> content
 *   $pageDescription string   meta description
 *   $pageClass       string   (optional) extra body class
 *   $activePage      string   current page slug (for nav highlight)
 */

if (!isset($pageTitle))       $pageTitle       = 'Digital Library Portal';
if (!isset($pageDescription)) $pageDescription = 'Smart Digital Library — Government First Grade College. Access books, journals, e-resources, and digital services.';
if (!isset($pageClass))       $pageClass       = '';
if (!isset($activePage))      $activePage      = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
  <meta name="keywords" content="digital library, government college library, OPAC, e-resources, NDL, ONOS, academic library">
  <meta name="robots" content="index, follow">
  <meta name="author" content="[College Name] Library">

  <!-- Open Graph -->
  <meta property="og:title"       content="<?= htmlspecialchars($pageTitle) ?> | [College Name] Library">
  <meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
  <meta property="og:type"        content="website">
  <meta property="og:image"       content="/library/images/og-image.jpg">

  <title><?= htmlspecialchars($pageTitle) ?> | [College Name] Digital Library</title>

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="/library/images/favicon.svg">

  <!-- Google Fonts: Poppins + Inter + Outfit -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Core CSS -->
  <link rel="stylesheet" href="/library/css/variables.css">
  <link rel="stylesheet" href="/library/css/base.css">
  <link rel="stylesheet" href="/library/css/navbar.css">
  <link rel="stylesheet" href="/library/css/hero.css">
  <link rel="stylesheet" href="/library/css/sections.css">
  <link rel="stylesheet" href="/library/css/forms.css">
  <link rel="stylesheet" href="/library/css/gallery.css">
  <link rel="stylesheet" href="/library/css/footer.css">
  <link rel="stylesheet" href="/library/css/animations.css">
  <!-- Critical inline CSS: all content visible immediately, no flash of invisible content -->
  <style>
    /* Hero always visible */
    .hero__badge, .hero__title, .hero__subtitle,
    .hero__actions, .hero__quick, .hero__scroll { opacity: 1; }
    /* Hero containers use transition-based entrance via JS class */
    .hero__text, .hero__visual { opacity: 1; transform: none; }
    /* Loader hides immediately after DOM */
    #page-loader { opacity: 0; visibility: hidden; pointer-events: none; }
  </style>
</head>
<body class="<?= htmlspecialchars($pageClass) ?>">

<!-- Page Loader -->
<div id="page-loader" role="progressbar" aria-label="Loading page...">
  <div class="loader-ring"></div>
</div>

<!-- Back to Top Button -->
<button id="back-to-top" title="Back to top" aria-label="Back to top">
  <i class="fas fa-chevron-up"></i>
</button>

<!-- Success Modal (shared) -->
<div class="modal-overlay" id="success-modal" role="dialog" aria-modal="true" aria-labelledby="modal-title">
  <div class="modal-box">
    <button class="modal-close" id="modal-close-btn" aria-label="Close">
      <i class="fas fa-times"></i>
    </button>
    <div class="modal-icon" id="modal-icon">✅</div>
    <h3 class="modal-title" id="modal-title">Submitted Successfully!</h3>
    <p class="modal-text" id="modal-text">
      Thank you for reaching out. Our team will get back to you within 24 hours.
    </p>
    <button class="btn btn--primary" onclick="closeModal()">
      <i class="fas fa-check"></i> Done
    </button>
  </div>
</div>

<!-- Nav Overlay -->
<div class="nav-overlay" id="nav-overlay"></div>
