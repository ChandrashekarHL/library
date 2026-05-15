<?php
if (!defined('BASE')) {
    // __DIR__ = /var/task/api (Vercel) or C:/xampp/htdocs/library/api (XAMPP)
    // Project root is one level above /api/
    $apiDir     = rtrim(str_replace('\\', '/', __DIR__), '/');
    $projectDir = dirname($apiDir);
    $docRoot    = rtrim(str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT'] ?? ''), '/');

    if ($docRoot !== '' && strpos($projectDir, $docRoot) === 0) {
        $base = substr($projectDir, strlen($docRoot));
        define('BASE', rtrim(str_replace('\\','/',$base), '/'));
    } else {
        define('BASE', ''); // Vercel or undetectable — assume root
    }
}
