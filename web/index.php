<!DOCTYPE html>
<html lang="fr">
<head>
  <title>BlueLift</title>

  <meta name="title" content="BlueLift">
  <meta name="description" content="Les infos essentielles météo pour préparer un vol en parapente en Suisse. Probabilités, carte synoptiques, vent, différence de pression, balise, DABS, etc.">
  <meta name="keywords" content="bluelift, meteo, parapente, carte, fronts, balises, vent, dabs, suisse, weather, paragliding, switzerland, wind, windy, meteoblue, map, mountain, montagne, rain, cloud, europe, vol libre, fsvl">
  <meta name="robots" content="index,follow">
  <meta name="msapplication-TileColor" content="#d6eaf8">
  <meta name="theme-color" content="#d6eaf8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script src="https://kit.fontawesome.com/e798f160a4.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" media="all" href="./assets/css/zephyr.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- Favicons for various platforms -->
  <link rel="shortcut icon" href="/favicon_io/favicon.ico?v=2">
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/favicon_io/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/favicon_io/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/favicon_io/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/favicon_io/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/favicon_io/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/favicon_io/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/favicon_io/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/favicon_io/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="/favicon_io/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="/favicon_io/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="/favicon_io/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="/favicon_io/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="/favicon_io/favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="&nbsp;"/>
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="/favicon_io/mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="/favicon_io/mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="/favicon_io/mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="/favicon_io/mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="/favicon_io/mstile-310x310.png" />
  <link rel="manifest" href="/favicon_io/manifest.json">

    <style>
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
    .red-text {
      color: #d73027;
    }
    .green-text {
      color: #1a9850;
    }
    .button1 {
      border: none;
      color: black;
      padding: 2px 2px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 20px;
      margin: 0px 0px;
      cursor: pointer;
    }
    .show-button {
      margin-top: 20px;
      text-align: center;
    }
    .hidden-row {
      display: none;
    }
    .pdf-container {
      width: 100%;
      max-width: 100%;
      height: 650px;
      overflow-y: auto;
      margin-bottom: 20px;
      padding: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      border: 1px solid #ccc;
      border-radius: 8px;
      background: #fff;
    }
    .pdf-page-canvas {
      width: 100% !important;
      height: auto !important;
      margin-bottom: 10px;
      display: block;
    }
    @media (max-width: 768px) {
      .pdf-container {
        height: 500px;
      }
    }
    @media (max-width: 480px) {
      .pdf-container {
        height: 400px;
      }
    }
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: #333;
      border-radius: 50%;
    }
    /* add side margins for smartphones to allow for easy scrolling */
    @media (max-width: 576px) {
      #page-content {
        padding-left: 5vw;
        padding-right: 5vw;
      }
    }
    /* Optionally, ensure iframes/images don't overflow */
    iframe, img, .pdf-container {
      width: 100% !important;
      max-width: 100%;
    }
    /* iframe design: the user has first to click on it to enable scrolling */
    .iframe-wrapper {
      position: relative;
    }

    .my-iframe {
      pointer-events: none; /* <- disables scrolling/touch */
    }

    .iframe-overlay {
      position: absolute;
      inset: 0;
      z-index: 10;
      cursor: pointer;       /* indicates “tap to activate” */
    }
     /* Icon link container */
     .icon-link-bl {
         display: flex;
         align-items: center;
         gap: 12px;
         text-decoration: none;
         color: #1e293b;
         padding: 16px 24px;
         border-radius: 20px;
         background: white;
         box-shadow: 0 2px 8px rgba(0,0,0,0.1);
         transition: all 0.2s ease;
         font-size: 20px;
         font-weight: 500;
         max-width: 300px;
     }

     /* Icon styling */
     .icon-link-bl i {
         font-size: 48px; /* Smaller, more balanced size */
         color: #3b82f6; /* Modern blue instead of lightblue */
         flex-shrink: 0;
         transition: transform 0.2s ease;
     }

     /* Hover and focus states */
     .icon-link-bl:hover {
         transform: translateY(-2px);
         box-shadow: 0 8px 24px rgba(0,0,0,0.15);
         color: #1e293b;
     }
     .icon-link-bl:hover i {
         transform: scale(1.1);
         color: #1d4ed8;
     }
     .icon-link-bl:focus {
         outline: 2px solid #3b82f6;
         outline-offset: 2px;
     }

     /* Responsive adjustments */
     @media (max-width: 480px) {
         .icon-link-bl { padding: 12px 16px; font-size: 14px; }
         .icon-link-bl i { font-size: 28px; }
     }
    </style>
  <!-- Matomo -->
  <script>
    var _paq = window._paq = window._paq || [];
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
      var u="//matomo.steambot.ch/";
      _paq.push(['setTrackerUrl', u+'matomo.php']);
      _paq.push(['setSiteId', '7']);
      var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
      g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
  </script>
  <!-- End Matomo Code -->
</head>

<body>
  <div id="page-content" class="striped">

    <div class="py-3">
      <div id="rendered-box-567" class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Les infos essentielles pour ta journée de vol</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="box odd">
      <div class="py-3">
        <div id="rendered-box-159" class="container">
          <div class="row justify-content-around">
            <h3>Mesures actuelles</h3>
            <div class="col-sm-4">
              <p>
                <!--button class="button1">&#x2794; Carte winds.mobi</button-->
                <a href="https://winds.mobi/stations/map?lat=46.4075639&lon=7.3924254&zoom=9" 
                   target="_blank" class="icon-link-bl" aria-label="Open winds.mobi map">
                <i class="material-icons">air</i>
                Carte winds.mobi
                </a>
              </p>
            </div>
            <div class="col-sm-4">
              <p>
                <!--button class="button1">&#x2794; Etat des sites de vol (Webcams)</button-->
                <a href="https://bluelift.ch/webcams/" 
                   target="_blank" class="icon-link-bl" aria-label="View flight site webcams">
                <i class="material-icons">video_camera_back</i>
                Etat des sites de vol
                </a>
              </p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="iframe-wrapper">
              <div class="iframe-overlay">
              </div>
              <iframe src="https://breezedude.de/?lat=46.4316&lon=7.1299&z=8.0"
                    width="100%" height="600px" border=None
                    allow="geolocation" class="my-iframe">
              </iframe>
              <a href="https://breezedude.de/?lat=46.4316&lon=7.1299&z=8.0" target="_blank">Breezedude.de</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="box_155" class="box odd">
      <div class="py-3">
        <div id="rendered-box-155" class="container">
          <div class="row" id="anchor">
            <div class="col-md-12">
              <h3>Prédictions Paraglidable</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-sm">
              <p><b>Top sites aujourd'hui:</b></p>
              <div id="todayForecastTable"></div>
            </div>
            <div class="col-sm">
              <p><b>Top sites demain:</b></p>
              <div id="tomorrowForecastTable"></div>
            </div>
            <div class="col-md-12">
              <div class="show-button">
                <button id="toggleButton" class="button1">Plus de sites</button><br><br>
              </div>
              <div class="iframe-wrapper">
                <div class="iframe-overlay">
                </div>
                <iframe width="100%" height="650" src="https://paraglidable.com/?lat=46.391&lon=7.094&zoom=9"
                    allowfullscreen="true" allow="geolocation" name="iframe-parag" id="iframe-parag" class="my-iframe"></iframe>
                <br>
                <a href="https://paraglidable.com/?lat=46.391&lon=7.094&zoom=9" target="_blank">Paraglidable</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- === Bulletin météo Suisse === -->
    <?php
    // Fetch the versions JSON
    $versionsUrl = 'https://www.meteosuisse.admin.ch/product/output/versions.json';
    $versionsJson = file_get_contents($versionsUrl);
    $versions = json_decode($versionsJson, true);

    // Get tags
    $generalKey = 'generalsituation/text/fr';
    $regionalKey = 'weather-report/fr/west';

    $generalTag = $versions[$generalKey] ?? null;
    $regionalTag = $versions[$regionalKey] ?? null;

    $generalHtml = '';
    $regionalHtml = '';

    if ($generalTag) {
      $generalUrl = "https://www.meteosuisse.admin.ch/product/output/generalsituation/text/fr/version__{$generalTag}/textproduct_fr.xhtml";
      $generalHtml = "<h4>Situation Générale</h4>" . file_get_contents($generalUrl);
    }
    if ($regionalTag) {
      $regionalUrl = "https://www.meteosuisse.admin.ch/product/output/weather-report/fr/west/version__{$regionalTag}/textproduct_fr.xhtml";
      $regionalHtml = "<hr>" . file_get_contents($regionalUrl);
    }
    ?>

    <?php
    // Fetch the versions JSON again for region overview
    $versionsUrl = 'https://www.meteosuisse.admin.ch/product/output/versions.json';
    $versionsJson = file_get_contents($versionsUrl);
    $versions = json_decode($versionsJson, true);

    $key = 'weather-region-overview';
    $tag = $versions[$key] ?? null;

    $jsonUrl = '';
    if ($tag) {
      $jsonUrl = "https://www.meteosuisse.admin.ch/product/output/weather-region-overview/version__{$tag}/weatherOverviewForecast_fr.json";
    }

    $jsonData = file_get_contents($jsonUrl);
    if ($jsonData === false) {
      echo "<p>Failed to fetch weather data</p>";
    }
    $data = json_decode($jsonData, true);
    if ($data === null) {
      echo "<p>Failed to decode JSON</p>";
    }

    // Find the region "location_id_west"
    $regionData = null;
    foreach ($data['regions'] as $region) {
      if ($region['locationTitle'] === 'location_id_west') {
        $regionData = $region;
        break;
      }
    }
    if (!$regionData) {
      echo "<p>Region not found</p>";
    }
    $forecastDays = $regionData['days'] ?? [];
    $dayInfos = $data['dayInfos'] ?? [];
    ?>

    <div id="box_155" class="box odd">
      <div class="py-3">
        <div id="rendered-box-155" class="container">
          <div class="row" id="anchor">
            <div class="col-md-12">
              <h3>Bulletin (MétéoSuisse)</h3>
            </div>
          </div>
          <div class="container my-3">
            <!-- Classic row for large screens -->
            <div class="row text-center g-2 justify-content-center d-none d-lg-flex" id="weather-cards-row">
              <?php foreach ($forecastDays as $index => $forecast):
                $iconID = $forecast['iconId'] ?? null;
                $tempMin = $forecast['minTemperature'] ?? null;
                $tempMax = $forecast['maxTemperature'] ?? null;
                $dayName = $dayInfos[$index]['dayName'] ?? "Jour " . ($index + 1);

                // Translate German to French
                if ($dayName === 'Heute') {
                  $dayName = "Aujourd'hui";
                } elseif ($dayName === 'Morgen') {
                  $dayName = "Demain";
                }

                if ($iconID === null || $tempMin === null || $tempMax === null) {
                  continue;
                }

                $iconUrl = "https://www.meteosuisse.admin.ch/static/resources/weather-symbols/{$iconID}.svg";
              ?>
                <div class="col-lg-auto" style="width: 150px">
                  <div class="card weather-card-data">
                    <div class="card-body text-center">
                      <p class="card-title"><?= htmlspecialchars($dayName) ?></p>
                      <img src="<?= htmlspecialchars($iconUrl) ?>" alt="Weather icon" class="img-fluid my-1" style="max-height: 40px;">
                      <p class="card-text"><?= htmlspecialchars($tempMin) ?>°C | <?= htmlspecialchars($tempMax) ?>°C</p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>

            <!-- Carousel for mobile/tablet (visible only on md and below) -->
            <div id="weatherCarousel" class="carousel slide d-lg-none" data-bs-interval="false">
              <div class="carousel-inner" id="weather-carousel-inner">
                <!-- Slides will be injected here by JS -->
              </div>
              <!-- Carousel controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#weatherCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#weatherCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
              </button>
            </div>
            <!-- End Carousel -->
          </div>

          <div class="row">
            <div class="col-sm" id="content">
              <div id="preview">
                <?= $generalHtml ?>
              </div>
              <div id="fullText" style="display: none;">
                <?= $regionalHtml ?>
              </div>
                <div class="show-button">
                  <button id="showMoreBtn" class="button1" onclick="toggleText()">Afficher plus</button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    // Function to check if a URL points to a valid location on cdn.knmi.nl
    function isValidUrl($url) {
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_HEADER, 0);
      $data = curl_exec($ch);
      curl_close($ch);
      // the response contains an error message
      if (strpos($data, '<Code>NoSuchKey</Code>') !== false) {
        return false;
      }
      return true;
    }
    // Return a URL for an analyzed synoptic map, if it exists, otherwise return a URL for the forecast map
    function getValidImageUrl($date, &$time, &$text) {
      $dayFormatted = $date->format('d.m.Y');
      $dayStr = $date->format('Ymd');
      $dayOfTheMonth = $date->format('d');
      $timestr = sprintf("%02d", $time);
      $url = "https://cdn.knmi.nl/knmi/map/page/klimatologie/daggegevens/weerkaarten/analyse_{$dayStr}{$timestr}.gif?1234";
      if (isValidUrl($url)) {
        $text = "Etat " . $dayFormatted . " " . $timestr . " UTC";
        return $url;
      }
      // fallback for 06/18 UTC: return 00 or 12 UTC
      if ($time == 6 || $time == 18) {
        $time -= 6;
        return getValidImageUrl($date, $time, $text);
      }
      $text = "Prévision " . $dayFormatted . " " . $timestr . " UTC";
      return "https://cdn.knmi.nl/knmi/map/page/weer/waarschuwingen_verwachtingen/weerkaarten/PL{$dayOfTheMonth}{$timestr}_large.gif?1234";
    }
    function getImageUrls($date) {
      $time2 = 18;
      $url2 = getValidImageUrl($date, $time2, $text2);
      $time1 = $time2 - 6;
      $url1 = getValidImageUrl($date, $time1, $text1);
      return array($url1, $url2, $text1, $text2);
    }
    $date_utc = new DateTime("now", new DateTimeZone("UTC"));
    $tomorrow = new DateTime('tomorrow', new DateTimeZone("UTC"));
    $tomorrowFormatted = $tomorrow->format('d.m.Y');
    $dayOfTheMonthForTomorrow = $tomorrow->format('d');
    $resToday = getImageUrls($date_utc);
    $linkTomorrow00 = "https://cdn.knmi.nl/knmi/map/page/weer/waarschuwingen_verwachtingen/weerkaarten/PL{$dayOfTheMonthForTomorrow}00_large.gif?1234";
    $linkTomorrow12 = "https://cdn.knmi.nl/knmi/map/page/weer/waarschuwingen_verwachtingen/weerkaarten/PL{$dayOfTheMonthForTomorrow}12_large.gif?1234";
    ?>

    <div id="box_154" class="box even">
      <div id="rendered-box-154" class="my-4 container">
        <div class="row">
          <div class="col-md-6 my-4">
            <h4><?php echo $resToday[2]; ?></h4>
            <img class="img-fluid" src="<?php echo $resToday[0]; ?>" >
          </div>
          <div class="col-md-6 my-4">
            <h4><?php echo $resToday[3]; ?></h4>
            <img class="img-fluid" src="<?php echo $resToday[1]; ?>" >
          </div>
          <div class="col-md-6 my-4">
            <h4>Prévision <?php echo $tomorrowFormatted; ?> 00h UTC</h4>
            <img class="img-fluid" src="<?php echo $linkTomorrow00; ?>" >
          </div>
          <div class="col-md-6 my-4">
            <h4>Prévision <?php echo $tomorrowFormatted; ?> 12h UTC</h4>
            <img class="img-fluid" src="<?php echo $linkTomorrow12; ?>" >
          </div>
          <div class="col-md-6 my-4">
            <h4>Prévisions du foehn</h4>
            <img src="<?php echo "https://profiwetter.ch/wind_foehn_ch_fr.png?t=" . time() ?>" class="img-fluid">
          </div>
          <div class="col-md-6 my-4">
            <h4>Prévisions de la bise</h4>
            <img src="<?php echo "https://profiwetter.ch/wind_bise_fr.png?t=" . time() ?>" class="img-fluid">
          </div>
          <div class="col-md-12">
            <h3>Pression et vents en Europe</h3>
            <div class="iframe-wrapper">
              <div class="iframe-overlay">
              </div>
              <iframe width="100%" height="650" src="https://embed.windy.com/embed2.html?lat=45.613&lon=9.406&detailLat=46.291&detailLon=7.539&width=650&height=650&zoom=2&level=surface&overlay=pressure&product=ecmwf&menu=&message=&marker=&calendar=now&pressure=true&type=map&location=coordinates&detail=&metricWind=default&metricTemp=default&radarRange=-1"
                  allowfullscreen="true" allow="geolocation" frameborder="0" class="my-iframe"></iframe>
              <a href="https://www.windy.com/-Pressure-pressure?pressure,47.364,8.544,5,i:pressure" target="_blank">windy</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="box_158" class="box odd">
      <div class="py-3">
        <div id="rendered-box-158" class="container">
          <div class="row">
            <div class="col-md-12">
              <h3>Vents en Suisse</h3>
              <div class="iframe-wrapper">
                <div class="iframe-overlay">
                </div>
                <iframe src="https://www.meteoblue.com/en/weather/maps/widget/charmey_switzerland_2661211?windAnimation=0&windAnimation=1&gust=0&gust=1&satellite=0&satellite=1&cloudsAndPrecipitation=0&cloudsAndPrecipitation=1&temperature=0&temperature=1&sunshine=0&sunshine=1&extremeForecastIndex=0&extremeForecastIndex=1&geoloc=fixed&tempunit=C&windunit=km%252Fh&lengthunit=metric&zoom=5&autowidth=auto#coords=8/46.423/7.129&map=windAnimation~rainbow~NEMS4~850%20mb~none"
                    frameborder="0" scrolling="NO" allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox"
                    style="width: 100%; height: 720px" class="my-iframe"></iframe>
              </div>
              <div>
                <a href="https://www.meteoblue.com/en/weather/maps/charmey_switzerland_2661211?utm_source=weather_widget&utm_medium=linkus&utm_content=map&utm_campaign=Weather%2BWidget"
                  target="_blank" rel="noopener">meteoblue</a>
              </div>
              <p>850 mb c'est environ 1500 m.<br>700 mb c'est environ 3000 m.<br>500 mb c'est environ 5500 m.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="box_159" class="box odd">
      <div class="py-3">
        <div id="rendered-box-159" class="container">
          <div class="row" id="anchor159">
            <div class="col-md-12">
              <h3>XC-term ICON D2/CH1</h3>
              <div class="iframe-wrapper">
                <div class="iframe-overlay">
                </div>
                <iframe width="100%" height="650" src="https://xctherm.com/icon?lat=46.4505639&lon=6.9924254&zoom=9"
                    allowfullscreen="true" allow="geolocation" name="iframe-xcterm" id="iframe-xcterm" class="my-iframe"></iframe><br>
                <a href="https://xctherm.com/icon?lat=46.2505639&lon=7.3924254&zoom=9" target="_blank">XC Term</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="box_151" class="box even">
      <div id="rendered-box-151" class="my-4 container">
        <div class="row">
          <div class="col-md-12">
            <img class="img-fluid"
              src="https://my.meteoblue.com/visimage/meteogram_web_hd?look=KILOMETER_PER_HOUR%2CCELSIUS%2CMILLIMETER&amp;apikey=5838a18e295d&amp;winddirection=3char&amp;temperature=C&amp;windspeed=kmh&amp;precipitationamount=mm&amp;city=Charmey&amp;iso2=ch&amp;lat=46.6196&amp;lon=7.16486&amp;asl=895&amp;tz=Europe%2FZurich&amp;lang=fr&amp;sig=e477e9b21e39f451d48c7e8ca9ef69f1">
          </div>
          <div class="col-md-12">
            <img class="img-fluid"
              src="https://my.meteoblue.com/visimage/meteogram_web_hd?look=KILOMETER_PER_HOUR%2CCELSIUS%2CMILLIMETER&amp;apikey=5838a18e295d&amp;winddirection=3char&amp;temperature=C&amp;windspeed=kmh&amp;precipitationamount=mm&amp;city=Bex&amp;iso2=ch&amp;lat=46.2496&amp;lon=7.0098&amp;asl=421&amp;tz=Europe%2FZurich&amp;lang=fr&amp;sig=208862b9e08efcb4d575496047005de4">
          </div>
          <div class="col-md-12">
            <img class="img-fluid"
              src="https://my.meteoblue.com/visimage/meteogram_web_hd?look=KILOMETER_PER_HOUR%2CCELSIUS%2CMILLIMETER&amp;apikey=5838a18e295d&amp;temperature=C&amp;windspeed=kmh&amp;precipitationamount=mm&amp;winddirection=3char&amp;city=Vercorin&amp;iso2=ch&amp;lat=46.256500&amp;lon=7.531040&amp;asl=1340&amp;tz=Europe%2FZurich&amp;lang=fr&amp;sig=106c5f8e751346e105fb75aabe45a2eb">
          </div>
        </div>
      </div>
    </div>

    <div id="box_152" class="box even">
      <div id="rendered-box-152" class="my-4 container">
        <div class="row">
          <div class="col-md-12 my-4">
            <h3>DABS (aujourd'hui)</h3>
            <div id="dabs_today_container" class="pdf-container"></div>
            <a href="https://www.skybriefing.com/fr/dabs" target="_blank">Skybriefing</a>
          </div>
        </div>
      </div>
    </div>
    <div id="box_153" class="box even">
      <div id="rendered-box-153" class="my-4 container">
        <div class="row">
          <div class="col-md-12 my-4">
            <h3>DABS (demain)</h3>
            <div id="dabs_tomorrow_container" class="pdf-container"></div>
            <a href="https://www.skybriefing.com/fr/dabs" target="_blank">Skybriefing</a>
          </div>
        </div>
      </div>
    </div>

    <div id="box_157" class="box even">
      <div id="rendered-box-157" class="my-4 container">
        <div class="row">
          <div class="col-md-12 my-4">
            <h3>Carte de vol à voile</h3>
            <div class="iframe-wrapper">
              <div class="iframe-overlay">
              </div>
              <iframe src="https://map.geo.admin.ch/#/embed?lang=en&center=2587196.94,1144748.25&z=3.285&bgLayer=ch.swisstopo.pixelkarte-farbe&topic=ech&layers=ch.swisstopo.zeitreihen@year=1864,f;ch.bfs.gebaeude_wohnungs_register,f;ch.bav.haltestellen-oev,f;ch.swisstopo.swisstlm3d-wanderwege,f;ch.vbs.schiessanzeigen,f;ch.astra.wanderland-sperrungen_umleitungen,f;ch.bazl.segelflugkarte"
                    style="border: 0;width: 100%;height: 650px;max-width: 100%;max-height: 100%;" allow="geolocation" class="my-iframe"></iframe>
              <br>
              <a href="https://map.geo.admin.ch/?zoom=2.984824051441887&bgLayer=ch.swisstopo.pixelkarte-farbe&time_current=latest&lang=fr&topic=ech&layers=ch.bazl.segelflugkarte&E=2582968.49&N=1128202.41"
                  target="_blank">Map Geo Admin</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="box_164" class="box odd">
      <div id="rendered-box-165" class="container">
        <h2 class="">Autres liens utiles</h2>
        <div class="row row-cols-1 row-cols-md-2">
          <div class="col">
            <div class="mb-5 h-100">
              <div class="row">
                <div class="col-md-6 img-thingy-right">
                  <a href="https://www.meteo-fsvl.ch/system/login.html" target="_blank">
                    <img class="img-fluid" src="./assets/png/fsvl_meteo.png" >
                  </a>
                </div>
                <div class="col-md-5 offset-md-1">
                  <h4 class="mt-5 mt-md-0">SHV/FSVL Meteo - Login</h4>
                  <small>
                    <a href="https://www.meteo-fsvl.ch/system/login.html" class="thick_link text-dark" target="_blank">https://www.meteo-fsvl.ch/s...</a>
                  </small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="mb-5 h-100">
              <div class="row">
                <div class="col-md-6 img-thingy-right">
                  <a href="https://meteo-parapente.com/" target="_blank">
                    <img class="img-fluid" src="./assets/png/meteo_parapente.png" >
                  </a>
                </div>
                <div class="col-md-5 offset-md-1">
                  <h4 class="mt-5 mt-md-0">meteo-parapente.com</h4>
                  <small>
                    <a href="https://meteo-parapente.com/" class="thick_link text-dark" target="_blank">https://meteo-parapente.com/</a>
                  </small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2">
          <div class="col">
            <div class="mb-5 h-100">
              <div class="row">
                <div class="col-md-6 img-thingy-right">
                  <a href="https://flyxc.app/" target="_blank">
                    <img class="img-fluid" src="./assets/png/flyxc.png" >
                  </a>
                </div>
                <div class="col-md-5 offset-md-1">
                  <h4 class="mt-5 mt-md-0">Hike &amp; FlyXC - pour préparer un cross et exporter les balises</h4>
                  <small>
                    <a href="https://flyxc.app/" class="thick_link text-dark" target="_blank">https://flyxc.app/</a>
                  </small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="mb-5 h-100">
              <div class="row">
                <div class="col-md-6 img-thingy-right">
                  <a href="https://www.burnair.cloud/?layers=%2Cant%2Ctw&visibility=%2Cauto%2Con&base=bbt#10/46.5442/7.5510" target="_blank">
                    <img class="img-fluid" src="./assets/png/burnair.png" >
                  </a>
                </div>
                <div class="col-md-5 offset-md-1">
                  <h4 class="mt-5 mt-md-0">Burnair - cartes, prévisions, XC planning</h4>
                  <small>
                    <a href="https://www.burnair.cloud/?layers=%2Cant%2Ctw&visibility=%2Cauto%2Con&base=bbt#10/46.5442/7.5510" class="thick_link text-dark" target="_blank">https://www.burnair.cloud</a>
                  </small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2">
          <div class="col">
            <div class="mb-5 h-100">
              <div class="row">
                <div class="col-md-6 img-thingy-right">
                  <a href="https://www.hikeandfly.org/" target="_blank">
                    <img class="img-fluid" src="./assets/png/HF_planer.png" >
                  </a>
                </div>
                <div class="col-md-5 offset-md-1">
                  <h4 class="mt-5 mt-md-0">Hike &amp; Fly Planer - Calcule la distance de plané depuis un sommet</h4>
                  <small>
                    <a href="https://www.hikeandfly.org/" class="thick_link text-dark" target="_blank">https://www.hikeandfly.org/</a>
                  </small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="mb-5 h-100">
              <div class="row">
                <div class="col-md-6 img-thingy-right">
                  <a href="https://thermal.kk7.ch/#46.379,7.388,11" target="_blank">
                    <img class="img-fluid" src="./assets/png/thermal.kk7.ch.png" >
                  </a>
                </div>
                <div class="col-md-5 offset-md-1">
                  <h4 class="mt-5 mt-md-0">Thermal KK7 - thermiques et routes</h4>
                  <small>
                    <a href="https://thermal.kk7.ch/#46.379,7.388,11" class="thick_link text-dark" target="_blank">https://thermal.kk7.ch</a>
                  </small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="py-3">
      <div id="rendered-box-568" class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
              <b>Avec le résumé de tous ces points, cherche le danger de la journée.&nbsp;</b><br>
              Tu peux utiliser pour cela la
              <a href="https://www.meteo-fsvl.ch/assets/media/Downloads/Meteo/Strategie_de_decision_meteo.pdf" target="_blank">stratégie de décision météo de la FSVL.</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">
        <footer class="col-md-9 pt-5 text-muted text-center text-small">
          <ul class="list-inline">
            <li>
              Inspiré de la
              <a href="https://www.twistair.ch/ecole-parapente/42-meteo-parapente-vercorin" target="_blank">page meteo de Twist'air</a>
            </li>
            <li class="list-inline-item">
              <script type="text/javascript">
                var user = "webmaster";
                var domain = "bluelift.ch";
                document.write('© <!-- -->2025<!-- --> Bluelift.ch  -  <a href="mailto:' + user + '@' + domain + '">' + 'contact</a>');
              </script>
            </li>
          </ul>
        </footer>
      </div>
    </div>
  </div>

  <!-- JS for Forecasts, Carousels, PDF rendering, and UI interactions -->
  <script>
    // to allow scrolling on iframes after a click
    document.querySelectorAll('.iframe-wrapper').forEach(wrapper => {
      
      const iframe = wrapper.querySelector('.my-iframe');
      const overlay = wrapper.querySelector('.iframe-overlay');
    
      overlay.addEventListener('click', () => {
        iframe.style.pointerEvents = 'auto';  // enable interaction
        overlay.style.display = 'none';        // remove overlay
      });
      // Optional: disable iframe again when user scrolls away
      wrapper.addEventListener('mouseleave', () => {
        iframe.style.pointerEvents = 'none';
        overlay.style.display = 'block';
      });
    });

    function fetchForecastData() {
      fetch('get_forecast.php')
        .then(response => response.json())
        .then(data => createTables(data))
        .catch(error => console.error('Error fetching data:', error));
    }
    function getDateString(date) {
      const year = date.getFullYear().toString().padStart(4, '0');
      const month = (date.getMonth() + 1).toString().padStart(2, '0');
      const day = date.getDate().toString().padStart(2, '0');
      return `${year}-${month}-${day}`;
    }
    function createTables(data) {
      const today = getDateString(new Date());
      const tomorrow = getDateString(new Date(Date.now() + 86400000));
      const todayTable = createTableForDate(data[today]);
      const tomorrowTable = createTableForDate(data[tomorrow]);
      document.getElementById('todayForecastTable').innerHTML = todayTable;
      document.getElementById('tomorrowForecastTable').innerHTML = tomorrowTable;
    }
    function getColorByProbability(probability) {
      const red = [215, 48, 39];
      const green = [26, 152, 80];
      const r = Math.round(red[0] + probability * (green[0] - red[0]));
      const g = Math.round(red[1] + probability * (green[1] - red[1]));
      const b = Math.round(red[2] + probability * (green[2] - red[2]));
      return `rgb(${r},${g},${b})`;
    }
    function createTableForDate(entries) {
      if (!entries) return '';
      const sortedEntries = entries.sort((a, b) => b.forecast.fly - a.forecast.fly);
      let table = `<table class="forecast-table" style="width:100%"><tr><th>Name</th><th>Fly Probability</th><th>XC Probability</th></tr>`;
      sortedEntries.forEach((entry, index) => {
        let name = entry.name;
        if (name === "Vercorin Village") name = "Vercorin";
        else if (name === "Lévanchy (Levanchy) Grandvillard") name = "Grandvillard";
        else if (name === "Verbier Les Ruinettes") name = "Verbier";
        const flyProbability = entry.forecast.fly;
        const flyColor = getColorByProbability(flyProbability);
        const xcProbability = entry.forecast.XC || 0;
        const xcColor = getColorByProbability(xcProbability);
        const rowClass = index >= 4 ? "hidden-row initially-hidden" : "";
        table += `<tr class="${rowClass}"><td>${name}</td><td class="red-text" style="color:${flyColor};">${(flyProbability * 100).toFixed(2)}%</td><td class="green-text" style="color:${xcColor};">${(xcProbability * 100).toFixed(2)}%</td></tr>`;
      });
      table += '</table>';
      return table;
    }
    fetchForecastData();
    document.getElementById('toggleButton').addEventListener('click', function () {
      const hiddenRows = document.querySelectorAll('.initially-hidden');
      hiddenRows.forEach(row => row.classList.toggle('hidden-row'));
      this.textContent = this.textContent === 'Plus de sites' ? 'Moins de sites' : 'Plus de sites';
    });
  </script>

  <script>
    function lazyLoadIframe(entries, observer) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const iframe = entry.target;
          const src = iframe.getAttribute("data-src");
          if (src) {
            iframe.setAttribute("src", src);
            observer.unobserve(iframe);
          }
        }
      });
    }
    const iframeObserver = new IntersectionObserver(lazyLoadIframe, {
      root: null, rootMargin: "0px", threshold: 0.1
    });
    const lazyIframes = document.querySelectorAll("iframe[data-src]");
    lazyIframes.forEach(iframe => { iframeObserver.observe(iframe); });
  </script>

  <script>
    function toggleText() {
      const fullText = document.getElementById('fullText');
      const btn = document.getElementById('showMoreBtn');
      if (fullText.style.display === 'none') {
        fullText.style.display = 'block';
        btn.textContent = 'Afficher moins';
      } else {
        fullText.style.display = 'none';
        btn.textContent = 'Afficher plus';
      }
    }
  </script>

  <script src="//mozilla.github.io/pdf.js/build/pdf.mjs" type="module"></script>
  <script type="module">
    const { pdfjsLib } = globalThis;
    pdfjsLib.GlobalWorkerOptions.workerSrc = '//mozilla.github.io/pdf.js/build/pdf.worker.mjs';
    function renderPdfAllPages(pdfUrl, containerId) {
      const container = document.getElementById(containerId);
      if (!container) {
        console.error(`Container with ID "${containerId}" not found.`);
        return;
      }
      pdfjsLib.getDocument(pdfUrl).promise.then(pdf => {
        for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
          pdf.getPage(pageNum).then(page => {
            const scale = 1.5;
            const viewport = page.getViewport({ scale });
            const canvas = document.createElement('canvas');
            canvas.className = 'pdf-page-canvas';
            canvas.height = viewport.height;
            canvas.width = viewport.width;
            const context = canvas.getContext('2d');
            const renderContext = { canvasContext: context, viewport: viewport };
            page.render(renderContext);
            container.appendChild(canvas);
          });
        }
      }).catch(error => {
        console.error(`Error loading PDF: ${pdfUrl}`, error);
      });
    }
    renderPdfAllPages('https://bluelift.ch/assets/pdf/dabs_today.pdf', 'dabs_today_container');
    renderPdfAllPages('https://bluelift.ch/assets/pdf/dabs_tomorrow.pdf', 'dabs_tomorrow_container');
  </script>

  <!-- Bootstrap JS Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Carousel Card Grouping Script -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const cardColumns = Array.from(document.querySelectorAll('.weather-card-data')).map(card => card.parentElement.cloneNode(true));
      const carouselInner = document.getElementById('weather-carousel-inner');
      if (!carouselInner) return;
      function getCardsPerSlide() {
        if (window.innerWidth < 576) return 2;
        if (window.innerWidth < 992) return 3;
        return 4;
      }
      function buildCarouselSlides() {
        carouselInner.innerHTML = '';
        const cardsPerSlide = getCardsPerSlide();
        for (let i = 0; i < cardColumns.length; i += cardsPerSlide) {
          const slide = document.createElement('div');
          slide.className = 'carousel-item' + (i === 0 ? ' active' : '');
          const row = document.createElement('div');
          row.className = 'row justify-content-center g-2';
          for (let j = i; j < i + cardsPerSlide && j < cardColumns.length; j++) {
            const col = cardColumns[j].cloneNode(true);
            col.classList.remove('d-lg-flex');
            row.appendChild(col);
          }
          slide.appendChild(row);
          carouselInner.appendChild(slide);
        }
      }
      buildCarouselSlides();
      window.addEventListener('resize', buildCarouselSlides);
    });
  </script>
</body>
</html>
