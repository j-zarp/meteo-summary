<?php
require_once __DIR__ . '/cache_helper.php';

$url = "https://api.paraglidable.com/?key=f2c79a68b6fe7830&format=JSON&version=1";
$jsonData = cached_fetch($url, 900, 'paraglidable_forecast');

header('Content-Type: application/json');
if ($jsonData !== false) {
    echo $jsonData;
} else {
    http_response_code(502);
    echo json_encode(['error' => 'Upstream unavailable']);
}
