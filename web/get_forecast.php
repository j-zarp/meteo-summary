<?php
#$url = "https://api.paraglidable.com/?key=dcd2368c5d56c848&format=JSON&version=1";
$url = "https://api.paraglidable.com/?key=39dc80657c8fe000&format=JSON&version=1";
$jsonData = file_get_contents($url);
echo $jsonData;
?>

