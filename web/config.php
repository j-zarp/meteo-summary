<?php
/**
 * BlueLift — Site Configuration
 *
 * Central place to tune all admin-configurable parameters.
 * Edit values here rather than searching through index.php.
 */

return [
    // -------------------------------------------------------------------------
    // Site metadata
    // -------------------------------------------------------------------------
    'site_name'  => 'BlueLift',
    'site_url'   => 'https://bluelift.ch',
    'timezone'   => 'Europe/Zurich',

    // -------------------------------------------------------------------------
    // Default map center (Western Switzerland)
    // -------------------------------------------------------------------------
    'default_lat'  => 46.44,
    'default_lon'  => 7.40,
    'default_zoom' => 7.35,

    // -------------------------------------------------------------------------
    // Windmap (embedded iframe)
    // -------------------------------------------------------------------------
    'windmap_lat'  => 46.44,
    'windmap_lon'  => 7.40,
    'windmap_zoom' => 7.35,

    // -------------------------------------------------------------------------
    // Winds.mobi link
    // -------------------------------------------------------------------------
    'windsmobi_lat'  => 46.4075639,
    'windsmobi_lon'  => 7.3924254,
    'windsmobi_zoom' => 9,

    // -------------------------------------------------------------------------
    // Paraglidable
    // -------------------------------------------------------------------------
    'paraglidable_lat'  => 46.391,
    'paraglidable_lon'  => 7.094,
    'paraglidable_zoom' => 9,
    'paraglidable_api_key' => 'f2c79a68b6fe7830',

    // -------------------------------------------------------------------------
    // XC-Therm
    // -------------------------------------------------------------------------
    'xctherm_lat'  => 46.4505639,
    'xctherm_lon'  => 6.9924254,
    'xctherm_zoom' => 9,

    // -------------------------------------------------------------------------
    // MeteoSuisse
    // -------------------------------------------------------------------------
    'meteosuisse_region_key'  => 'location_id_west',
    'meteosuisse_region_name' => 'Région Ouest',
    'meteosuisse_language'    => 'fr',

    // -------------------------------------------------------------------------
    // Meteoblue wind map
    // -------------------------------------------------------------------------
    'meteoblue_widget_location' => 'charmey_switzerland_2661211',

    // -------------------------------------------------------------------------
    // Meteograms — list of locations to show
    // Each entry: [city, iso2, lat, lon, asl (m), signature]
    // -------------------------------------------------------------------------
    'meteograms' => [
        [
            'city' => 'Charmey',
            'iso2' => 'ch',
            'lat'  => 46.6196,
            'lon'  => 7.16486,
            'asl'  => 895,
            'sig'  => 'e477e9b21e39f451d48c7e8ca9ef69f1',
        ],
        [
            'city' => 'Bex',
            'iso2' => 'ch',
            'lat'  => 46.2496,
            'lon'  => 7.0098,
            'asl'  => 421,
            'sig'  => '208862b9e08efcb4d575496047005de4',
        ],
        [
            'city' => 'Vercorin',
            'iso2' => 'ch',
            'lat'  => 46.256500,
            'lon'  => 7.531040,
            'asl'  => 1340,
            'sig'  => '106c5f8e751346e105fb75aabe45a2eb',
        ],
    ],

    // -------------------------------------------------------------------------
    // Meteoblue API key (for meteogram images)
    // -------------------------------------------------------------------------
    'meteoblue_apikey' => '5838a18e295d',

    // -------------------------------------------------------------------------
    // DABS PDF paths (relative to web root)
    // -------------------------------------------------------------------------
    'dabs_today_pdf'    => '/assets/pdf/dabs_today.pdf',
    'dabs_tomorrow_pdf' => '/assets/pdf/dabs_tomorrow.pdf',

    // -------------------------------------------------------------------------
    // Cache TTL (seconds)
    // -------------------------------------------------------------------------
    'cache_ttl_versions'  => 300,   // MeteoSuisse versions.json — 5 min
    'cache_ttl_forecast'  => 900,   // Weather data — 15 min
    'cache_ttl_paraglidable' => 900, // Paraglidable API — 15 min

    // -------------------------------------------------------------------------
    // Matomo analytics
    // -------------------------------------------------------------------------
    'matomo_url'     => '//matomo.steambot.ch/',
    'matomo_site_id' => '7',
];
