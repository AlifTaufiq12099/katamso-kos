<?php

/**
 * Vercel Serverless Entry Point
 */

$storagePath = '/tmp/storage';

if (!is_dir($storagePath)) {
    mkdir($storagePath, 0777, true);
    mkdir($storagePath.'/framework/cache/data', 0777, true);
    mkdir($storagePath.'/framework/sessions', 0777, true);
    mkdir($storagePath.'/framework/views', 0777, true);
    mkdir($storagePath.'/logs', 0777, true);
    mkdir($storagePath.'/bootstrap/cache', 0777, true);
}

// Teruskan request ke aplikasi Laravel utama
require __DIR__ . '/../public/index.php';
