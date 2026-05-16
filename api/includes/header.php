<?php
/**
 * header.php — Shared HTML <head> block
 * Variables needed before include:
 *   $pageTitle, $pageDescription, $pageClass, $activePage
 */
require_once __DIR__ . '/../config.php'; // api/includes/../config.php = api/config.php

if (!isset($pageTitle))       $pageTitle       = 'Digital Library Portal';
if (!isset($pageDescription)) $pageDescription = 'Smart Digital Library — Government First Grade College.';
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
  <meta name="author" content="GFGC Kadugudi Library">

  <!-- Open Graph -->
  <meta property="og:title"       content="<?= htmlspecialchars($pageTitle) ?> | GFGC Kadugudi Library">
  <meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
  <meta property="og:type"        content="website">

  <title><?= htmlspecialchars($pageTitle) ?> | GFGC Kadugudi Digital Library</title>

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="<?= BASE ?>/images/favicon.svg">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Core CSS -->
  <link rel="stylesheet" href="<?= BASE ?>/css/variables.css">
  <link rel="stylesheet" href="<?= BASE ?>/css/base.css">
  <link rel="stylesheet" href="<?= BASE ?>/css/navbar.css">
  <link rel="stylesheet" href="<?= BASE ?>/css/hero.css">
  <link rel="stylesheet" href="<?= BASE ?>/css/sections.css">
  <link rel="stylesheet" href="<?= BASE ?>/css/forms.css">
  <link rel="stylesheet" href="<?= BASE ?>/css/gallery.css">
  <link rel="stylesheet" href="<?= BASE ?>/css/footer.css">
  <link rel="stylesheet" href="<?= BASE ?>/css/animations.css">

  <!-- Critical: content always visible, no flash -->
  <style>
    .hero__badge,.hero__title,.hero__subtitle,
    .hero__actions,.hero__quick,.hero__scroll { opacity:1; }
    .hero__text,.hero__visual { opacity:1; transform:none; }
    #page-loader { opacity:0; visibility:hidden; pointer-events:none; }
  </style>
</head>
<body class="<?= htmlspecialchars($pageClass) ?>">

<!-- Back to Top -->
<button id="back-to-top" title="Back to top" aria-label="Back to top">
  <i class="fas fa-chevron-up"></i>
</button>

<!-- Success Modal -->
<div class="modal-overlay" id="success-modal" role="dialog" aria-modal="true" aria-labelledby="modal-title">
  <div class="modal-box">
    <button class="modal-close" id="modal-close-btn" aria-label="Close"><i class="fas fa-times"></i></button>
    <div class="modal-icon" id="modal-icon">✅</div>
    <h3 class="modal-title" id="modal-title">Submitted Successfully!</h3>
    <p class="modal-text" id="modal-text">Thank you for reaching out. Our team will get back to you within 24 hours.</p>
    <button class="btn btn--primary" onclick="closeModal()"><i class="fas fa-check"></i> Done</button>
  </div>
</div>

<!-- Nav Overlay -->
<div class="nav-overlay" id="nav-overlay"></div>
