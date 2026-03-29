<?php
$cfg = require __DIR__ . '/config.php';
require_once __DIR__ . '/cache_helper.php';

$url = "https://api.paraglidable.com/?key=" . urlencode($cfg['paraglidable_api_key']) . "&format=JSON&version=1";
$jsonData = cached_fetch($url, $cfg['cache_ttl_paraglidable'], 'paraglidable_forecast');

header('Content-Type: application/json');
if ($jsonData !== false) {
    echo $jsonData;
} else {
    http_response_code(502);
    echo json_encode(['error' => 'Upstream unavailable']);
}
