<?php
/**
 * config.php — Robust BASE URL detection
 * Works on Vercel (root /) and XAMPP subdirectory (/library/)
 */
if (!defined('BASE')) {

    $host       = $_SERVER['HTTP_HOST'] ?? '';
    $scriptName = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '/index.php');

    // ── Vercel detection (multiple signals) ──────────────────────
    $isVercel = !empty(getenv('VERCEL'))
             || !empty(getenv('VERCEL_ENV'))
             || !empty(getenv('VERCEL_URL'))
             || strpos($host, 'vercel.app') !== false
             || strpos($host, 'vercel-dns.com') !== false;

    if ($isVercel) {
        define('BASE', '');

    } else {
        // ── Local / shared hosting: auto-detect from SCRIPT_NAME ─
        $dir = dirname($scriptName);                      // e.g. /library/api
        $dir = preg_replace('#/api/?$#', '', $dir);       // strip trailing /api
        $dir = rtrim($dir, '/');
        define('BASE', ($dir === '' || $dir === '.') ? '' : $dir);
    }
}
