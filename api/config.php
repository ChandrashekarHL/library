<?php
/**
 * config.php — Auto-detects BASE URL
 * PHP files live in /api/ but assets (css/js) are at root.
 * Strips /api from path so BASE points to the project root.
 */
if (!defined('BASE')) {
    if (getenv('VERCEL') || getenv('VERCEL_ENV')) {
        // On Vercel: assets served from root
        define('BASE', '');
    } else {
        // On XAMPP: auto-detect, strip /api suffix
        $dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/'));
        $dir = preg_replace('#/api/?$#', '', $dir);
        define('BASE', ($dir === '/' || $dir === '') ? '' : rtrim($dir, '/'));
    }
}
