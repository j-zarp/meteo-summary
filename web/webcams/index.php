<?php
// fetch latest webcam image from labellevue.ch (Mauborget)
function display_mauborget_image() {

    // 1. Grab the directory listing
    $listing = @file_get_contents('https://labellevue.ch/');
    if ($listing === false) {
        return("Could not fetch camera images list.");
    }
    
    // 2. Extract all filenames ending in _TIMING.jpg
    preg_match_all("/src='([^']+_TIMING\.jpg)'/", $listing, $m);
    $files = $m[1] ?? [];
    
    if (empty($files)) {
        return("No images found.");
    }
    // 3. Sort and pick the newest
    sort($files, SORT_STRING);
    $latest = end($files);
    
    // 4. Build full URL + cache-buster
    $imageUrl = $latest . '?_=' . time();
    return htmlspecialchars($imageUrl, ENT_QUOTES);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" name="description" content="">
  <title>
    Webcams sites de vol
  </title>
  
  <meta name="title" content="Webcams sites de vol">
  <meta name="description" content="Les infos essentielles météo pour préparer un vol en parapente. Probabilités, carte synoptiques, vent, différence de pression, balise, DABS, etc.">
  <meta name="keywords" content="bluelift, meteo, parapente, carte, fronts, balises, vent, dabs, suisse, weather, paragliding, switzerland, wind, windy, meteoblue">
  <meta name="robots" content="index,follow">
  <meta name="msapplication-TileColor" content="#fdca37">
  <meta name="theme-color" content="#fdca37">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script src="../web/assets/js/script.js"></script>
  <script src="https://kit.fontawesome.com/e798f160a4.js" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" media="all" href="../assets/css/zephyr.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

  <!-- headers for the favicon on various platforms -->
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
    .forecast-container {
      display: flex;
      justify-content: space-between;
    }
    .forecast-table {
      border-collapse: collapse;
      width: 100%;
      margin-bottom: 20px;
    }
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
  </style>
  <!-- Matomo -->
  <script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
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
    
    <div id="box_167" class="box  odd">
      <div class="py-3 ">
        <div id="rendered-box-167" class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>Webcams</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div id="box_259" class="box  odd">
      <div class="py-3 ">
        <div id="rendered-box-259" class="container">
          <div class="row">
            <div class="container-lg">
              <h3>Charmey</h3>
              <!--a name="windy-webcam-timelapse-player" data-id="1604579854" data-play="day" href="https://windy.com/webcams/1604579854" target="_blank">Val-de-Charmey: Vounetse</a><script async type="text/javascript" src="https://webcams.windy.com/webcams/public/embed/script/player.js"></script-->
            <img src="https://webcam.charmey.ch/image_2024.php?id=03" alt="Charmey vallée" width="100%">
            </div>
          </div>
          
          <div class="row">
            <div class="container-lg">
              <h3>Epagny</h3>
              <a name="windy-webcam-timelapse-player" data-id="1362152654" data-play="day" href="https://windy.com/webcams/1362152654" target="_blank">Epagny: Swisshelicopter - Gruyère</a><script async type="text/javascript" src="https://webcams.windy.com/webcams/public/embed/script/player.js"></script>
            </div>
          </div>
          
          <div class="row">
            <div class="container-lg">
              <h3>Rochers de Naye</h3>
              <a name="windy-webcam-timelapse-player" data-id="1697030033" data-play="day" href="https://windy.com/webcams/1697030033" target="_blank">Veytaux: Rochers de Naye</a><script async type="text/javascript" src="https://webcams.windy.com/webcams/public/embed/script/player.js"></script>
            </div>
          </div>
          
          <div class="row">
            <div class="container-lg">
              <h3>Les Diablerets</h3>
              <a name="windy-webcam-timelapse-player"  data-id="1697034263" data-play="day" data-loop="0" data-auto-play="0" data-force-full-screen-on-overlay-play="0" data-interactive="1" href="https://windy.com/webcams/1697034263" target="_blank">Ormont-Dessous: Les Diablerets - Meilleret</a><script async type="text/javascript" src="https://webcams.windy.com/webcams/public/embed/v2/script/player.js"></script>
            </div>
          </div>
          
          <div class="row">
            <div class="container-lg">
              <h3>Villars-sur-Ollon</h3>
              <a name="windy-webcam-timelapse-player"  data-id="1705420830" data-play="day" data-loop="0" data-auto-play="0" data-force-full-screen-on-overlay-play="0" data-interactive="1" href="https://windy.com/webcams/1705420830" target="_blank">Ollon: Villars - Chaux Ronde</a><script async type="text/javascript" src="https://webcams.windy.com/webcams/public/embed/v2/script/player.js"></script>
            </div>
          </div>
          
          <div class="row">
            <div class="container-lg">
              <h3>Vercorin</h3>
              <a name="windy-webcam-timelapse-player" data-id="1446542124" data-play="day" href="https://windy.com/webcams/1446542124" target="_blank">Vercorin: Crêt du Midi</a><script async type="text/javascript" src="https://webcams.windy.com/webcams/public/embed/script/player.js"></script>
            </div>
          </div>
          
          <div class="row">
            <div class="container-lg">
              <h3>Val de Bagnes</h3>
              <a name="windy-webcam-timelapse-player"  data-id="1697040458" data-play="day" data-loop="0" data-auto-play="0" data-force-full-screen-on-overlay-play="0" data-interactive="1" href="https://windy.com/webcams/1697040458" target="_blank">Val de Bagnes: Savoleyres</a><script async type="text/javascript" src="https://webcams.windy.com/webcams/public/embed/v2/script/player.js"></script>
            </div>
          </div>
          
          <div class="row">
            <div class="container-lg">
              <h3>Déco Sonchaux</h3>
              <a href="http://sonchaux-webcam.ch" target="_blank">
              <img src="https://images.weserv.nl/?url=http://sonchaux-webcam.ch/images/photo.jpg"
                   alt="Latest webcam snapshot" style="width:100%">
              </a>
            </div>
          </div>
          
          <div class="row">
            <div class="container-lg">
              <h3>Déco Mauborget</h3>
              <a href="https://labellevue.ch" target="_blank">
              <img src="<?= display_mauborget_image() ?>"
                   alt="Latest webcam snapshot" style="width:100%">
              </a>
            </div>
          </div>
          
          <div class="row">
            <div class="container-lg">
              <h3>Jougne: Métabief</h3>
              <a name="windy-webcam-timelapse-player" data-id="1462286125" data-play="day" href="https://windy.com/webcams/1462286125" target="_blank">Jougne: Métabief</a><script async type="text/javascript" src="https://webcams.windy.com/webcams/public/embed/script/player.js"></script>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="row justify-content-center">
        <footer class="col-md-9 pt-5 text-muted text-center text-small">
          <ul class="list-inline">
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
  
</body>
</html>

