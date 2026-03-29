<?php
// metar-proxy.php
$ids = implode(',', array_map('strtoupper', explode(',', $_GET['ids'] ?? '')));
if (!preg_match('/^[A-Z,]{4,}$/', $ids)) { http_response_code(400); exit; }

$url = "https://aviationweather.gov/api/data/metar?ids={$ids}&format=json";
$json = file_get_contents($url);

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Cache-Control: public, max-age=300'); // cache 5 min
echo $json;
?>
