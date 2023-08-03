<?php
$url = "https://api.paraglidable.com/?key=dcd2368c5d56c848&format=JSON&version=1";
$jsonData = file_get_contents($url);
echo $jsonData;
?>

