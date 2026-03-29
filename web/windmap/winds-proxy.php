<?php
/**
 * winds-proxy.php
 * Same-origin reverse proxy for the winds.mobi API.
 *
 * Solves the mobile CORS / mixed-content issue: the browser fetches this
 * script (same origin as the page), and this script forwards the request
 * server-side to winds.mobi where CORS headers are not required.
 *
 * Expected call from JS:
 *   winds-proxy.php?path=stations%2F&within-pt1-lat=45&within-pt1-lon=6
 *
 * How it works:
 *   1. Read ?path= param  -> becomes the API endpoint path (e.g. "stations/")
 *   2. Remove ?path= from the query string
 *   3. Forward all remaining params to winds.mobi unchanged
 *   4. Stream the JSON response back to the browser
 */

define('WINDS_BASE', 'https://winds.mobi/api/2.3');
define('USER_AGENT', 'swiss-wind-map-embed/1.0');
define('CACHE_TTL',  60);   // seconds

// ── Validate path ────────────────────────────────────────────────────────────
$path = isset($_GET['path']) ? trim($_GET['path'], '/') : '';
$path_root = explode('/', $path)[0];
$allowed   = ['stations'];   // whitelist prevents open-proxy abuse

if (!in_array($path_root, $allowed, true)) {
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Invalid path: ' . htmlspecialchars($path)]);
    exit;
}

// ── Rebuild query string without 'path' ──────────────────────────────────────
// IMPORTANT: http_build_query() turns repeated keys= into keys[0]=, keys[1]=
// which winds.mobi does not understand. We must rebuild the raw query string
// from $_SERVER['QUERY_STRING'] instead, simply stripping the path= segment.
$raw = $_SERVER['QUERY_STRING'] ?? '';

// Remove path=<value> (and its trailing &) from the raw query string
$qs = preg_replace('/(?:^|&)path=[^&]*/', '', $raw);
$qs = ltrim($qs, '&');

// ── Upstream URL ─────────────────────────────────────────────────────────────
$upstream = WINDS_BASE . '/' . $path . '/' . ($qs !== '' ? '?' . $qs : '');

// ── Fetch ─────────────────────────────────────────────────────────────────────
$ctx  = stream_context_create([
    'http' => [
        'method'        => 'GET',
        'header'        => "User-Agent: " . USER_AGENT . "\r\n" .
                           "Accept: application/json\r\n",
        'timeout'       => 10,
        'ignore_errors' => true,
    ],
    'ssl' => [
        'verify_peer'      => true,
        'verify_peer_name' => true,
    ],
]);

$body = @file_get_contents($upstream, false, $ctx);

// ── Parse upstream HTTP status ────────────────────────────────────────────────
$status = 200;
if (!empty($http_response_header)) {
    foreach ($http_response_header as $h) {
        if (preg_match('#^HTTP/\S+\s+(\d{3})#', $h, $m)) {
            $status = (int) $m[1];
        }
    }
}

if ($body === false) {
    http_response_code(502);
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Upstream unreachable', 'url' => $upstream]);
    exit;
}

// ── Respond ───────────────────────────────────────────────────────────────────
http_response_code($status);
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Cache-Control: public, max-age=' . CACHE_TTL);
header('X-Upstream-URL: ' . $upstream);   // visible in DevTools Network tab
echo $body;
?>
