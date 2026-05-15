<?php
/**
 * config.php — Auto-detects base URL
 * Works on XAMPP (/library/) and Vercel (/)
 */
if (!defined('BASE')) {
    $scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/'));
    define('BASE', ($scriptDir === '/' || $scriptDir === '') ? '' : rtrim($scriptDir, '/'));
}
// Short alias for use in HTML
$b = BASE;
