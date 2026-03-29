<?php
/**
 * Simple file-based cache for HTTP responses.
 *
 * Cached files are stored in the ./cache/ directory with a configurable TTL.
 * This avoids repeated upstream API calls on every page load.
 */

define('CACHE_DIR', __DIR__ . '/cache/');

/**
 * Fetch a URL with file-based caching.
 *
 * @param string $url       The URL to fetch.
 * @param int    $ttl       Cache lifetime in seconds (default: 900 = 15 min).
 * @param string $cache_key Optional custom cache key. Defaults to md5 of the URL.
 * @return string|false     The response body, or false on failure.
 */
function cached_fetch(string $url, int $ttl = 900, string $cache_key = ''): string|false
{
    if ($cache_key === '') {
        $cache_key = md5($url);
    }
    $cache_file = CACHE_DIR . $cache_key . '.cache';

    // Return cached data if fresh
    if (file_exists($cache_file) && (time() - filemtime($cache_file)) < $ttl) {
        return file_get_contents($cache_file);
    }

    // Fetch fresh data
    $data = @file_get_contents($url);
    if ($data === false) {
        // On failure, return stale cache if available (better than nothing)
        if (file_exists($cache_file)) {
            return file_get_contents($cache_file);
        }
        return false;
    }

    // Write to cache (atomic write to avoid partial reads)
    $tmp = $cache_file . '.tmp';
    if (file_put_contents($tmp, $data) !== false) {
        rename($tmp, $cache_file);
    }

    return $data;
}
