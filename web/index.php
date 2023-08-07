<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" name="description" content="">
    <title>
        Meteo Summary
    </title>
    
    <meta name="title" content="Meteo Summary">
    <meta name="description" content="Toutes les infos météo pour préparer un vol en parapente. Carte des fronts, vent, différence de pression, balise.">
    <meta name="msapplication-TileColor" content="#fdca37">
    <meta name="theme-color" content="#fdca37">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="./assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/e798f160a4.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" media="all" href="./assets/css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
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
    </style>
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
                            <h2>Tout ce qu'il faut pour préparer ta journée de vol<br></h2>
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
                            <div id="1086"><iframe frameborder="0" marginheight="1" marginwidth="1" scrolling="no"  src="https://widget.holfuy.com/?station=1086&su=km/h&t=C&lang=fr&mode=average&avgrows=16" style="width:100%; height:180px;"></iframe></div>
                            <h3>Vent à Villy 420 m.</h3>
                            <div id="717"><iframe frameborder="0" marginheight="1" marginwidth="1" scrolling="no"  src="https://widget.holfuy.com/?station=717&su=km/h&t=C&lang=fr&mode=average&avgrows=16" style="width:100%; height:180px;"></iframe></div>
                        </div>
                        
                        <div class="col-md-6">
                            <h3>Vent au Crêt du Midi 2330 m.</h3>
                            <div id="927"><iframe frameborder="0" marginheight="1" marginwidth="1" scrolling="no"  src="https://widget.holfuy.com/?station=927&su=km/h&t=C&lang=fr&mode=average&avgrows=16" style="width:100%; height:180px;"></iframe></div>
                            <h3>Vent à Vounetz 1620 m.</h3>
                            <div id="549"><iframe frameborder="0" marginheight="1" marginwidth="1" scrolling="no"  src="https://widget.holfuy.com/?station=549&su=km/h&t=C&lang=fr&mode=average&avgrows=16" style="width:100%; height:180px;"></iframe></div>
                        </div>
                        
                        <div class="col-md-6">
                            <h3>Vent au Suchet 1573 m.</h3>
                            <div id="1636"><iframe frameborder="0" marginheight="1" marginwidth="1" scrolling="no"  src="https://widget.holfuy.com/?station=1636&su=km/h&t=C&lang=fr&mode=average&avgrows=16" style="width:100%; height:180px;"></iframe></div>
                        </div>
                        <div class="col-md-6">
                            <h3>Vent aux Rochers de Naye 2040 m.</h3>
                            <div id="550"><iframe frameborder="0" marginheight="1" marginwidth="1" scrolling="no"  src="https://widget.holfuy.com/?station=550&su=km/h&t=C&lang=fr&mode=average&avgrows=16" style="width:100%; height:180px;"></iframe></div>
                        </div>
                        
                        <div class="col-md-6">
                            <a href="https://winds.mobi/stations/map?lat=46.4075639&lon=7.3924254&zoom=9" target="_blank"><button class="button1">&#x2794; Carte complète des stations (Winds.Mobi)</button></a>
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
                            
                            <iframe width="100%" height="650" src="https://paraglidable.com/?lat=46.391&lon=7.094&zoom=9" allowfullscreen="true"
                            allow="geolocation" name="iframe-parag" id=iframe-parag></iframe><br>
                            <a href="https://paraglidable.com/?lat=46.391&lon=7.094&zoom=9" target="_blank">Paraglidable</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <?php
        // Get the current date and tomorrow's date
        $today = new DateTime();
        $tomorrow = new DateTime('tomorrow');
        
        // Format the dates as required (DD.MM.YYYY)
        $todayFormatted = $today->format('d.m.Y');
        $tomorrowFormatted = $tomorrow->format('d.m.Y');
        
        // Get the day of the month for today and tomorrow
        $dayOfTheMonth = $today->format('d');
        $dayOfTheMonthForTomorrow = $tomorrow->format('d');
        
        // Update the links with the dynamic day of the month values
        $linkToday12 = "https://cdn.knmi.nl/knmi/map/page/weer/waarschuwingen_verwachtingen/weerkaarten/AL{$dayOfTheMonth}12_large.gif";
        $linkToday18 = "https://cdn.knmi.nl/knmi/map/page/weer/waarschuwingen_verwachtingen/weerkaarten/AL{$dayOfTheMonth}18_large.gif";
        $linkTomorrow00 = "https://cdn.knmi.nl/knmi/map/page/weer/waarschuwingen_verwachtingen/weerkaarten/PL{$dayOfTheMonthForTomorrow}00_large.gif";
        $linkTomorrow12 = "https://cdn.knmi.nl/knmi/map/page/weer/waarschuwingen_verwachtingen/weerkaarten/PL{$dayOfTheMonthForTomorrow}12_large.gif";
        ?>
        
        <div id="box_154" class="box even">
            <div id="rendered-box-154" class="my-4 container">
                <div class="row">
                    <div class="col-md-6 my-4">
                        <h3>Etat <?php echo $todayFormatted; ?> 12h UTC</h3>
                        <img class="img-fluid" src="<?php echo $linkToday12; ?>" />
                    </div>
                    <div class="col-md-6 my-4">
                        <h3>Etat <?php echo $todayFormatted; ?> 18h UTC</h3>
                        <img class="img-fluid" src="<?php echo $linkToday18; ?>" />
                    </div>
                    <div class="col-md-6 my-4">
                        <h3>Prévision <?php echo $tomorrowFormatted; ?> 00h UTC</h3>
                        <img class="img-fluid" src="<?php echo $linkTomorrow00; ?>" />
                    </div>
                    <div class="col-md-6 my-4">
                        <h3>Prévision <?php echo $tomorrowFormatted; ?> 12h UTC</h3>
                        <img class="img-fluid" src="<?php echo $linkTomorrow12; ?>" />
                    </div>
                    <div class="col-md-6 my-4">
                        <h3>Prévisions du foehn</h3>
                        <a href="http://www.meteocentrale.ch/fr/meteo/foehn-et-bise/foehn.html" target="_new">
                            <img src="https://www.meteocentrale.ch/uploads/pics/uwz-ch_foehn_fr.png?2817462" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-6 my-4">
                        <h3>Prévisions de la bise</h3>
                        <a href="https://www.meteocentrale.ch/fr/meteo/foehn-et-bise/bise.html" target="_new">
                            <img src="https://www.meteocentrale.ch/uploads/pics/uwz-ch_bise_fr.png?2817462" class="img-fluid">
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
        
        
        <div id="box_155" class="box  odd">
            <div class="py-3 ">
                <div id="rendered-box-155" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Vents en Suisse</h3>
                            <iframe src="https://www.meteoblue.com/en/weather/maps/widget/charmey_switzerland_2661211?windAnimation=0&windAnimation=1&gust=0&gust=1&satellite=0&satellite=1&cloudsAndPrecipitation=0&cloudsAndPrecipitation=1&temperature=0&temperature=1&sunshine=0&sunshine=1&extremeForecastIndex=0&extremeForecastIndex=1&geoloc=fixed&tempunit=C&windunit=km%252Fh&lengthunit=metric&zoom=5&autowidth=auto#coords=8/46.423/7.648&map=windAnimation~rainbow~ICOND2~850%20mb~none"  frameborder="0" scrolling="NO" allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox" style="width: 100%; height: 720px"></iframe>
                            <div><!-- DO NOT REMOVE THIS LINK --><a href="https://www.meteoblue.com/en/weather/maps/charmey_switzerland_2661211?utm_source=weather_widget&utm_medium=linkus&utm_content=map&utm_campaign=Weather%2BWidget" target="_blank" rel="noopener">meteoblue</a></div>
                            <p>850 mb c'est environ 1500 m.<br>700 mb c'est environ 3000 m.<br>500 mb c'est environ 5500 m.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="box_155" class="box  odd">
            <div class="py-3 ">
                <div id="rendered-box-155" class="container">
                    <div class="row" id="anchor">
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
        
        <div id="box_158" class="box  even">
            <div id="rendered-box-158" class="my-4 container">
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
                        <img class="img-fluid" src="https://my.meteoblue.com/visimage/meteogram_web_hd?look=KILOMETER_PER_HOUR%2CCELSIUS%2CMILLIMETER&amp;apikey=5838a18e295d&amp;winddirection=3char&amp;temperature=C&amp;windspeed=kmh&amp;precipitationamount=mm&amp;city=Charmey&amp;iso2=ch&amp;lat=46.6196&amp;lon=7.16486&amp;asl=895&amp;tz=Europe%2FZurich&amp;lang=fr&amp;sig=e477e9b21e39f451d48c7e8ca9ef69f1" />
                    </div>
                    <div class="col-md-12">
                        <img class="img-fluid" src="https://my.meteoblue.com/visimage/meteogram_web_hd?look=KILOMETER_PER_HOUR%2CCELSIUS%2CMILLIMETER&amp;apikey=5838a18e295d&amp;winddirection=3char&amp;temperature=C&amp;windspeed=kmh&amp;precipitationamount=mm&amp;city=Bex&amp;iso2=ch&amp;lat=46.2496&amp;lon=7.0098&amp;asl=421&amp;tz=Europe%2FZurich&amp;lang=fr&amp;sig=208862b9e08efcb4d575496047005de4" />
                    </div>
                    <div class="col-md-12">
                        <img class="img-fluid" src="https://my.meteoblue.com/visimage/meteogram_web_hd?look=KILOMETER_PER_HOUR%2CCELSIUS%2CMILLIMETER&amp;apikey=5838a18e295d&amp;temperature=C&amp;windspeed=kmh&amp;precipitationamount=mm&amp;winddirection=3char&amp;city=Vercorin&amp;iso2=ch&amp;lat=46.256500&amp;lon=7.531040&amp;asl=1340&amp;tz=Europe%2FZurich&amp;lang=fr&amp;sig=106c5f8e751346e105fb75aabe45a2eb" />
                    </div>
                </div>
            </div>
        </div>
        
        <div id="box_158" class="box  even">
            <div id="rendered-box-158" class="my-4 container">
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
        <div id="box_155" class="box  even">
            <div id="rendered-box-158" class="my-4 container">
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
        
        <div id="box_155" class="box  even">
            <div id="rendered-box-158" class="my-4 container">
                <div class="row">
                    <div class="col-md-12 my-4">
                        <h3>Carte de vol à voile</h3>
                        <div class="stop-scrolling">
                            <iframe width="100%" height="600" frameborder='0' style='border:0' allow='geolocation' scrolling="no" src="//map.geo.admin.ch/?zoom=2.984824051441887&bgLayer=ch.swisstopo.pixelkarte-farbe&time_current=latest&lang=fr&topic=ech&layers=ch.bazl.segelflugkarte&E=2582968.49&N=1128202.41"></iframe><br>
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
                                        <img class="img-fluid" src="./assets/png/fsvl_meteo.png" />
                                    </a>
                                </div>
                                <div class="col-md-5 offset-md-1">
                                    <h3 class="mt-5 mt-md-0">SHV/FSVL Meteo - Login</h5>
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
                                            <img class="img-fluid" src="./assets/png/meteo_parapente.png" />
                                        </a>
                                    </div>
                                    <div class="col-md-5 offset-md-1">
                                        <h3 class="mt-5 mt-md-0">meteo-parapente.com</h5>
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
                                            <a href="https://soaringmeteo.org/soarWRF" target="_blank">
                                                <img class="img-fluid" src="./assets/png/soaring_meteo.png" />
                                            </a>
                                        </div>
                                        <div class="col-md-5 offset-md-1">
                                            <h3 class="mt-5 mt-md-0">Soaringmeteo - Météorologie pour pilotes de soaring</h5>
                                                <small><a href="https://soaringmeteo.org/soarWRF" class="thick_link text-dark stretched-link" target="_blank">https://soaringmeteo.org/so...</a></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-5 h-100">
                                        <div class="row">
                                            <div class="col-md-6 img-thingy-right">
                                                <a href="https://www.meteosuisse.admin.ch/services-et-publications/applications/radiosondages.html#tab=radio-soundings-emagram" target="_blank">
                                                    <img class="img-fluid" src="./assets/png/meteosuisse_radiosonsages.png" />
                                                </a>
                                            </div>
                                            <div class="col-md-5 offset-md-1">
                                                <h3 class="mt-5 mt-md-0">Radiosondages - MétéoSuisse</h5>
                                                    <small><a href="https://www.meteosuisse.admin.ch/services-et-publications/applications/radiosondages.html#tab=radio-soundings-emagram" class="thick_link text-dark stretched-link" target="_blank">https://www.meteosuisse.adm...</a></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="py-3 ">
            <div id="rendered-box-567" class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p><b>Avec le résumé de tous ces points, cherche le danger de la journée.&nbsp;</b></p>
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
                            © <!-- -->2023<!-- --> Steambot.ch  -  <a href="mailto:webmaster@steambot.ch">contact</a>
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
        function createTableForDate(entries) {
            if (!entries) return '';
            const sortedEntries = entries.sort((a, b) => b.forecast.fly - a.forecast.fly);
            let table = `<table class="forecast-table"><tr><th>Name</th><th>Fly Probability</th><th>XC Probability</th></tr>`;
                sortedEntries.forEach(entry => {
                    const flyProbability = entry.forecast.fly;
                    const flyColor = getColorByProbability(flyProbability);
                    const xcProbability = entry.forecast.XC || 0;
                    const xcColor = getColorByProbability(xcProbability);
                    table += `<tr><td>${entry.name}</td><td class="red-text" style="color:${flyColor};">${(flyProbability * 100).toFixed(2)}%</td><td class="green-text" style="color:${xcColor};">${(xcProbability * 100).toFixed(2)}%</td></tr>`;
                });
                table += '</table>';
                return table;
            }
            
            // Fetch data when the page loads
            fetchForecastData();
            
        </script>
        
    </body>
    </html>
    