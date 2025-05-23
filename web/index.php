<!DOCTYPE html>
<html lang="fr">
<head>
  <title>
    Météo Summary
  </title>
  
  <meta name="title" content="Météo Summary">
  <meta name="description" content="Les infos essentielles météo pour préparer un vol en parapente en Suisse. Probabilités, carte synoptiques, vent, différence de pression, balise, DABS, etc.">
  <meta name="keywords" content="steambot, meteo, parapente, carte, fronts, balises, vent, dabs, suisse, weather, paragliding, switzerland, wind, windy, meteoblue, map, mountain, montagne, rain, cloud, europe, vol libre, fsvl">
  <meta name="robots" content="index,follow">
  <meta name="msapplication-TileColor" content="#fdca37">
  <meta name="theme-color" content="#fdca37">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script src="./assets/js/script.js"></script>
  <script src="https://kit.fontawesome.com/e798f160a4.js" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" media="all" href="./assets/css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

  <!-- headers for the favicon on various platforms -->
  <link rel="shortcut icon" href="./favicon_io/favicon.ico?v=2">
  <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io/favicon-16x16.png">
  <link rel="icon" type="image/png" href="./favicon_io/android-chrome-192x192.png?v=2" sizes="192x192">
  <link rel="icon" type="image/png" href="./favicon_io/android-chrome-512x512.png?v=2" sizes="512x512">
  <link rel="manifest" href="./favicon_io/manifest.json">
  
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
      _paq.push(['setSiteId', '1']);
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
              <h1>Météo Summary</h1>
            </div>
          </div>
        </div>
      </div>
      
      <div class="py-3 ">
        <div id="rendered-box-567" class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Les infos essentielles pour préparer une journée de vol<br></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div id="box_259" class="box  odd">
      <div class="py-3 ">
        <div id="rendered-box-259" class="container">
          <div class="row">
            <div class="col-md-6">
              <h3>Vent à Chalais 500 m.</h3>
              <div id="h1086"><iframe frameborder="0" marginheight="1" marginwidth="1" scrolling="no"  src="https://widget.holfuy.com/?station=1086&su=km/h&t=C&lang=fr&mode=average&avgrows=16" style="width:100%; height:180px;"></iframe></div>
              <h3>Vent à Ollon 420 m.</h3>
              <div id="h717"><iframe frameborder="0" marginheight="1" marginwidth="1" scrolling="no"  src="https://widget.holfuy.com/?station=717&su=km/h&t=C&lang=fr&mode=average&avgrows=16" style="width:100%; height:180px;"></iframe></div>
            </div>
            
            <div class="col-md-6">
              <h3>Vent au Crêt du Midi 2330 m.</h3>
              <div id="h927"><iframe frameborder="0" marginheight="1" marginwidth="1" scrolling="no"  src="https://widget.holfuy.com/?station=927&su=km/h&t=C&lang=fr&mode=average&avgrows=16" style="width:100%; height:180px;"></iframe></div>
              <h3>Vent à Vounetz 1620 m.</h3>
              <div id="h549"><iframe frameborder="0" marginheight="1" marginwidth="1" scrolling="no"  src="https://widget.holfuy.com/?station=549&su=km/h&t=C&lang=fr&mode=average&avgrows=16" style="width:100%; height:180px;"></iframe></div>
            </div>
            
            <div class="col-md-6">
              <h3>Vent au Suchet 1573 m.</h3>
              <div id="h1636"><iframe frameborder="0" marginheight="1" marginwidth="1" scrolling="no"  src="https://widget.holfuy.com/?station=1636&su=km/h&t=C&lang=fr&mode=average&avgrows=16" style="width:100%; height:180px;"></iframe></div>
            </div>
            <div class="col-md-6">
              <h3>Vent à Sonchaux 1421 m.</h3>
              <div id="h550"><iframe frameborder="0" marginheight="1" marginwidth="1" scrolling="no"  src="https://widget.holfuy.com/?station=690&su=km/h&t=C&lang=fr&mode=average&avgrows=16" style="width:100%; height:180px;"></iframe></div>
            </div>
            
            <div class="col-md-6">
              <p><a href="https://winds.mobi/stations/map?lat=46.4075639&lon=7.3924254&zoom=9" target="_blank"><button class="button1">&#x2794; Carte complète des mesures</button></a></p>
            </div>
            <div class="col-md-6">
              <p><a href="https://steambot.ch/meteo-summary/webcams/" target="_blank"><button class="button1">&#x2794; Lien vers les Webcams</button></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Winds moby refuse de s'ouvrir en mode carte et force la vue "list" dans l'iframe  -->
    <!--div id="box_155" class="box  odd">
      <div class="py-3 ">
        <div id="rendered-box-155" class="container">
          <div class="row" id="anchor">
            <div class="col-md-12" name="div-windsmobi">
              <h3>Vent</h3>
              <iframe width="100%" height="650" src="https://winds.mobi/stations/list?lat=46.4075639&lon=7.3924254" name="iframe-windsmobi" id=iframe-windsmobi></iframe><br>
              <a href="https://winds.mobi/stations/map?lat=46.4075639&lon=7.3924254&zoom=9" target="_blank">Winds.Mobi</a>
            </div>
          </div>
        </div>
      </div>
    </div-->
    
    <div id="box_155" class="box  odd">
      <div class="py-3 ">
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
                <button id="toggleButton">Plus de sites</button><br><br>
              </div>
              
              <iframe width="100%" height="650" src="https://paraglidable.com/?lat=46.391&lon=7.094&zoom=9" allowfullscreen="true"
              allow="geolocation" name="iframe-parag" id="iframe-parag"></iframe><br>
              <a href="https://paraglidable.com/?lat=46.391&lon=7.094&zoom=9" target="_blank">Paraglidable</a>
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
        // Format the dates as required
        $dayFormatted = $date->format('d.m.Y');
        $dayStr = $date->format('Ymd');
        $dayOfTheMonth = $date->format('d');
	      $timestr = sprintf("%02d", $time);
        $url = "https://cdn.knmi.nl/knmi/map/page/klimatologie/daggegevens/weerkaarten/analyse_{$dayStr}{$timestr}.gif?1234";
	      if (isValidUrl($url)) {
	          // return analyzed map
            $text = "Etat " . $dayFormatted . " " . $timestr . " UTC";
            return $url;
        }
        // there are no forecast for 06 UTC and 18 UTC, return instead the situation at 00 or 12 UTC
	      if ($time == 6 or $time == 18) {
	          $time -= 6;
            return getValidImageUrl($date, $time, $text);
	      }
	      // return forecast
        $text = "Prévision " . $dayFormatted . " " . $timestr . " UTC";
        return "https://cdn.knmi.nl/knmi/map/page/weer/waarschuwingen_verwachtingen/weerkaarten/PL{$dayOfTheMonth}{$timestr}_large.gif?1234";
    }
    // Return URLs and text labels for the most relevant synoptic maps
    function getImageUrls($date) {
	      $time2 = 18; // start looking at 18 UTC
        $url2 = getValidImageUrl($date, $time2, $text2);
	      $time1 = $time2 - 6;
        $url1 = getValidImageUrl($date, $time1, $text1);
        return array($url1, $url2, $text1, $text2);
    }
    // Get the current date and tomorrow's date
    $date_utc = new DateTime("now", new DateTimeZone("UTC"));
    $tomorrow = new DateTime('tomorrow', new DateTimeZone("UTC"));
    
    // Get the day of the month for tomorrow
    $tomorrowFormatted = $tomorrow->format('d.m.Y');
    $dayOfTheMonthForTomorrow = $tomorrow->format('d');
    
    // Update the links with the dynamic day of the month values
    $resToday = getImageUrls($date_utc);
    $linkTomorrow00 = "https://cdn.knmi.nl/knmi/map/page/weer/waarschuwingen_verwachtingen/weerkaarten/PL{$dayOfTheMonthForTomorrow}00_large.gif?1234";
    $linkTomorrow12 = "https://cdn.knmi.nl/knmi/map/page/weer/waarschuwingen_verwachtingen/weerkaarten/PL{$dayOfTheMonthForTomorrow}12_large.gif?1234";
    ?>
    
    <div id="box_154" class="box even">
      <div id="rendered-box-154" class="my-4 container">
        <div class="row">
          <div class="col-md-6 my-4">
            <h3><?php echo $resToday[2]; ?></h3>
            <img class="img-fluid" src="<?php echo $resToday[0]; ?>" >
          </div>
          <div class="col-md-6 my-4">
            <h3><?php echo $resToday[3]; ?></h3>
            <img class="img-fluid" src="<?php echo $resToday[1]; ?>" >
          </div>
          <div class="col-md-6 my-4">
            <h3>Prévision <?php echo $tomorrowFormatted; ?> 00h UTC</h3>
            <img class="img-fluid" src="<?php echo $linkTomorrow00; ?>" >
          </div>
          <div class="col-md-6 my-4">
            <h3>Prévision <?php echo $tomorrowFormatted; ?> 12h UTC</h3>
            <img class="img-fluid" src="<?php echo $linkTomorrow12; ?>" >
          </div>
          <!-- Deprecated meteocentrale diagrams  -->
          <!--div class="col-md-6 my-4">
            <h3>Prévisions du foehn</h3>
              <img src="https://www.meteocentrale.ch/uploads/pics/uwz-ch_foehn_fr.png?2817462" class="img-fluid">
            </a>
          </div>
          <div class="col-md-6 my-4">
            <h3>Prévisions de la bise</h3>
              <img src="https://www.meteocentrale.ch/uploads/pics/uwz-ch_bise_fr.png?2817462" class="img-fluid">
            </a>
          </div-->
          <div class="col-md-6 my-4">
            <h3>Prévisions du foehn</h3>
            <!--a href="<?php echo "https://profiwetter.ch/wind_foehn_ch_fr.png?t=" . time() ?>" target="_blank"-->
              <img src="<?php echo "https://profiwetter.ch/wind_foehn_ch_fr.png?t=" . time() ?>" class="img-fluid">
            </a>
          </div>
          <div class="col-md-6 my-4">
            <h3>Prévisions de la bise</h3>
            <!--a href="<?php echo "https://profiwetter.ch/wind_bise_fr.png?t=" . time() ?>" target="_blank"-->
              <img src="<?php echo "https://profiwetter.ch/wind_bise_fr.png?t=" . time() ?>" class="img-fluid">
            </a>
          </div>
          <div class="col-md-12">
            <h3>Pression et vents en Europe</h3>
            <iframe width="100%" height="650" src="https://embed.windy.com/embed2.html?lat=45.613&lon=9.406&detailLat=46.291&detailLon=7.539&width=650&height=650&zoom=2&level=surface&overlay=pressure&product=ecmwf&menu=&message=&marker=&calendar=now&pressure=true&type=map&location=coordinates&detail=&metricWind=default&metricTemp=default&radarRange=-1" allowfullscreen="true"
            allow="geolocation" frameborder="0"></iframe>
          </div>
        </div>
      </div>
    </div>
    
    <div id="box_158" class="box  odd">
      <div class="py-3 ">
        <div id="rendered-box-158" class="container">
          <div class="row">
            <div class="col-md-12">
              <h3>Vents en Suisse</h3>
              <iframe src="https://www.meteoblue.com/en/weather/maps/widget/charmey_switzerland_2661211?windAnimation=0&windAnimation=1&gust=0&gust=1&satellite=0&satellite=1&cloudsAndPrecipitation=0&cloudsAndPrecipitation=1&temperature=0&temperature=1&sunshine=0&sunshine=1&extremeForecastIndex=0&extremeForecastIndex=1&geoloc=fixed&tempunit=C&windunit=km%252Fh&lengthunit=metric&zoom=5&autowidth=auto#coords=8/46.423/7.648&map=windAnimation~rainbow~NEMS4~850%20mb~none"  frameborder="0" scrolling="NO" allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox" style="width: 100%; height: 720px"></iframe>
              <div><!-- DO NOT REMOVE THIS LINK --><a href="https://www.meteoblue.com/en/weather/maps/charmey_switzerland_2661211?utm_source=weather_widget&utm_medium=linkus&utm_content=map&utm_campaign=Weather%2BWidget" target="_blank" rel="noopener">meteoblue</a></div>
              <p>850 mb c'est environ 1500 m.<br>700 mb c'est environ 3000 m.<br>500 mb c'est environ 5500 m.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div id="box_159" class="box  odd">
      <div class="py-3 ">
        <div id="rendered-box-159" class="container">
          <div class="row" id="anchor159">
            <div class="col-md-12">
              <h3>XC-term ICON D2</h3>
              <iframe width="100%" height="650" src="https://xctherm.com/icon?lat=46.2505639&lon=7.3924254&zoom=9" allowfullscreen="true"
              allow="geolocation" name="iframe-xcterm" id=iframe-xcterm></iframe><br>
              <a href="https://xctherm.com/icon?lat=46.2505639&lon=7.3924254&zoom=9" target="_blank">XC Term</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div id="box_151" class="box  even">
      <div id="rendered-box-151" class="my-4 container">
        <div class="row">
          <div class="col-md-12 my-4">
            <h3>Image Satellite meteoblue</h3>
            <div class="stop-scrolling">
              <iframe src="https://www.meteoblue.com/fr/meteo/maps/widget/vercorin_suisse_2658166?windAnimation=0&gust=0&satellite=1&coronaWeatherScore=0&geoloc=fixed&tempunit=C&windunit=km%252Fh&lengthunit=metric&zoom=5&autowidth=auto" frameborder="0" scrolling="NO" allowtransparency="true"  style="width: 100%; height: 720px"></iframe>
            </div>
            <div><!-- DO NOT REMOVE THIS LINK --><a href="https://www.meteoblue.com/fr/meteo/webmap/beta/charmey_suisse_2661211?utm_source=weather_widget&utm_medium=linkus&utm_content=map&utm_campaign=Weather%2BWidget" target="_blank">meteoblue</a></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <img class="img-fluid" src="https://my.meteoblue.com/visimage/meteogram_web_hd?look=KILOMETER_PER_HOUR%2CCELSIUS%2CMILLIMETER&amp;apikey=5838a18e295d&amp;winddirection=3char&amp;temperature=C&amp;windspeed=kmh&amp;precipitationamount=mm&amp;city=Charmey&amp;iso2=ch&amp;lat=46.6196&amp;lon=7.16486&amp;asl=895&amp;tz=Europe%2FZurich&amp;lang=fr&amp;sig=e477e9b21e39f451d48c7e8ca9ef69f1" >
          </div>
          <div class="col-md-12">
            <img class="img-fluid" src="https://my.meteoblue.com/visimage/meteogram_web_hd?look=KILOMETER_PER_HOUR%2CCELSIUS%2CMILLIMETER&amp;apikey=5838a18e295d&amp;winddirection=3char&amp;temperature=C&amp;windspeed=kmh&amp;precipitationamount=mm&amp;city=Bex&amp;iso2=ch&amp;lat=46.2496&amp;lon=7.0098&amp;asl=421&amp;tz=Europe%2FZurich&amp;lang=fr&amp;sig=208862b9e08efcb4d575496047005de4" >
          </div>
          <div class="col-md-12">
            <img class="img-fluid" src="https://my.meteoblue.com/visimage/meteogram_web_hd?look=KILOMETER_PER_HOUR%2CCELSIUS%2CMILLIMETER&amp;apikey=5838a18e295d&amp;temperature=C&amp;windspeed=kmh&amp;precipitationamount=mm&amp;winddirection=3char&amp;city=Vercorin&amp;iso2=ch&amp;lat=46.256500&amp;lon=7.531040&amp;asl=1340&amp;tz=Europe%2FZurich&amp;lang=fr&amp;sig=106c5f8e751346e105fb75aabe45a2eb" >
          </div>
        </div>
      </div>
    </div>
    
    <div id="box_152" class="box  even">
      <div id="rendered-box-152" class="my-4 container">
        <div class="row">
          <div class="col-md-12 my-4">
            <h3>DABS (aujourd'hui)</h3>
            <div class="stop-scrolling">
              <iframe src="./assets/pdf/dabs_today.pdf?1234#toolbar=0" width="100%" height="650px" frameborder="0" scrolling="NO"> </iframe><br>
              <a href="https://www.skybriefing.com/fr/dabs" target="_blank">Skybriefing</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="box_153" class="box  even">
      <div id="rendered-box-153" class="my-4 container">
        <div class="row">
          <div class="col-md-12 my-4">
            <h3>DABS (demain)</h3>
            <div class="stop-scrolling">
              <iframe src="./assets/pdf/dabs_tomorrow.pdf?1234#toolbar=0" width="100%" height="650px" frameborder="0" scrolling="NO"> </iframe><br>
              <a href="https://www.skybriefing.com/fr/dabs" target="_blank">Skybriefing</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div id="box_157" class="box  even">
      <div id="rendered-box-157" class="my-4 container">
        <div class="row">
          <div class="col-md-12 my-4">
            <h3>Carte de vol à voile</h3>
            <div class="stop-scrolling">
              <!-- ref: https://www.geo.admin.ch/de/web-integration-iframe -->
              <!--iframe width="100%" height="600" frameborder='0' style='border:0' allow='geolocation' scrolling="no" data-src="//map.geo.admin.ch/?zoom=2.984824051441887&bgLayer=ch.swisstopo.pixelkarte-farbe&time_current=latest&lang=fr&topic=ech&layers=ch.bazl.segelflugkarte&E=2582968.49&N=1128202.41"></iframe-->
              <iframe src="https://map.geo.admin.ch/#/embed?lang=en&center=2587196.94,1144748.25&z=3.285&bgLayer=ch.swisstopo.pixelkarte-farbe&topic=ech&layers=ch.swisstopo.zeitreihen@year=1864,f;ch.bfs.gebaeude_wohnungs_register,f;ch.bav.haltestellen-oev,f;ch.swisstopo.swisstlm3d-wanderwege,f;ch.vbs.schiessanzeigen,f;ch.astra.wanderland-sperrungen_umleitungen,f;ch.bazl.segelflugkarte" style="border: 0;width: 100%;height: 650px;max-width: 100%;max-height: 100%;" allow="geolocation"></iframe>
              <br>
              <a href="https://map.geo.admin.ch/?zoom=2.984824051441887&bgLayer=ch.swisstopo.pixelkarte-farbe&time_current=latest&lang=fr&topic=ech&layers=ch.bazl.segelflugkarte&E=2582968.49&N=1128202.41" target="_blank">Map Geo Admin</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!------------------------------------------------------------------------------------------------------------------------------------ -->
    
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
                  <h3 class="mt-5 mt-md-0">SHV/FSVL Meteo - Login</h3>
                  <small><a href="https://www.meteo-fsvl.ch/system/login.html" class="thick_link text-dark stretched-link" target="_blank">https://www.meteo-fsvl.ch/s...</a></small>
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
                  <h3 class="mt-5 mt-md-0">meteo-parapente.com</h3>
                  <small><a href="https://meteo-parapente.com/" class="thick_link text-dark stretched-link" target="_blank">https://meteo-parapente.com/</a></small>
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
                  <h3 class="mt-5 mt-md-0">Hike &amp; Fly Planer - Calcule la distance de plané depuis un sommet</h3>
                  <small><a href="https://www.hikeandfly.org/" class="thick_link text-dark stretched-link" target="_blank">https://www.hikeandfly.org/</a></small>
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
                  <h3 class="mt-5 mt-md-0">Thermal KK7 - thermiques et routes</h3>
                  <small><a href="https://thermal.kk7.ch/#46.379,7.388,11" class="thick_link text-dark stretched-link" target="_blank">https://thermal.kk7.ch</a></small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="py-3 ">
      <div id="rendered-box-568" class="container">
        <div class="row">
          <div class="col-md-12">
            <p><b>Avec le résumé de tous ces points, cherche le danger de la journée.&nbsp;</b><br>Tu peux utiliser pour cela la <a href="https://www.meteo-fsvl.ch/assets/media/Downloads/Meteo/Strategie_de_decision_meteo.pdf" target="_blank">stratégie de décision météo de la FSVL.</a></p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="row justify-content-center">
        <footer class="col-md-9 pt-5 text-muted text-center text-small">
          <ul class="list-inline">
            <li> Inspiré de la <a href="https://www.twistair.ch/ecole-parapente/42-meteo-parapente-vercorin" target="_blank">page meteo de Twist'air</a> </li>
            <li class="list-inline-item">
              <script type="text/javascript">
              var user = "webmaster";
              var domain = "steambot.ch";
              document.write('© <!-- -->2025<!-- --> Steambot.ch  -  <a href="mailto:' + user + '@' + domain + '">' + 'contact</a>');
              </script>
            </li>
          </ul>
        </footer>
      </div>
    </div>
  </div>
  
  <script>
    // Function to fetch JSON data using PHP request
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
    
    // Function to create tables with the fetched data
    function createTables(data) {
      const today = getDateString(new Date());
      const tomorrow = getDateString(new Date(Date.now() + 86400000));
      
      const todayTable = createTableForDate(data[today]);
      const tomorrowTable = createTableForDate(data[tomorrow]);
      
      document.getElementById('todayForecastTable').innerHTML = todayTable;
      document.getElementById('tomorrowForecastTable').innerHTML = tomorrowTable;
    }
    
    // Function to get the color based on probability value
    function getColorByProbability(probability) {
      // Map the probability to a color scale
      const red = [215, 48, 39]; // RGB for dark red
      const green = [26, 152, 80]; // RGB for dark green
      
      const r = Math.round(red[0] + probability * (green[0] - red[0]));
      const g = Math.round(red[1] + probability * (green[1] - red[1]));
      const b = Math.round(red[2] + probability * (green[2] - red[2]));
      
      return `rgb(${r},${g},${b})`;
    }
    
    // Function to create a table for a given date
    function createTableForDate(entries, dateLabel) {
      if (!entries) return '';
      const sortedEntries = entries.sort((a, b) => b.forecast.fly - a.forecast.fly);
      let table = `<table class="forecast-table"><tr><th>Name</th><th>Fly Probability</th><th>XC Probability</th></tr>`;
        sortedEntries.forEach((entry, index) => {
          // Rename "Vercorin Village" to "Vercorin" and "Vounetz" to "Charmey"
          let name = entry.name;
          if (name === "Vercorin Village") {
            name = "Vercorin";
          } else if (name === "Lévanchy (Levanchy) Grandvillard") {
            name = "Grandvillard";
          } else if (name === "Verbier Les Ruinettes") {
            name = "Verbier";
          }
          const flyProbability = entry.forecast.fly;
          const flyColor = getColorByProbability(flyProbability);
          const xcProbability = entry.forecast.XC || 0;
          const xcColor = getColorByProbability(xcProbability);
          
          // Apply "hidden-row" class to rows beyond the first three
          const rowClass = index >= 4 ? "hidden-row initially-hidden" : "";
          
          table += `<tr class="${rowClass}"><td>${name}</td><td class="red-text" style="color:${flyColor};">${(flyProbability * 100).toFixed(2)}%</td><td class="green-text" style="color:${xcColor};">${(xcProbability * 100).toFixed(2)}%</td></tr>`;
        });
        table += '</table>';
        return table;
      }
      
      // Fetch data when the page loads
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
        root: null,
        rootMargin: "0px",
        threshold: 0.1 // Adjust this threshold as needed (0 to 1)
      });
      
      const lazyIframes = document.querySelectorAll("iframe[data-src]");
      lazyIframes.forEach(iframe => {
        iframeObserver.observe(iframe);
      });
    </script>
    
  </body>
</html>
