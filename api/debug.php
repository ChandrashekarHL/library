<?php
// Debug page — visit /api/debug.php on Vercel to check paths
require_once __DIR__ . '/config.php';
header('Content-Type: text/plain');
echo "BASE          = '" . BASE . "'\n";
echo "SCRIPT_NAME   = " . ($_SERVER['SCRIPT_NAME'] ?? 'n/a') . "\n";
echo "HTTP_HOST     = " . ($_SERVER['HTTP_HOST'] ?? 'n/a') . "\n";
echo "VERCEL env    = " . (getenv('VERCEL') ?: 'not set') . "\n";
echo "VERCEL_ENV    = " . (getenv('VERCEL_ENV') ?: 'not set') . "\n";
echo "VERCEL_URL    = " . (getenv('VERCEL_URL') ?: 'not set') . "\n";
echo "\nCSS path would be: " . BASE . "/css/variables.css\n";
echo "JS path would be:  " . BASE . "/js/main.js\n";
