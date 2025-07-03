<?php
#$url = "https://api.paraglidable.com/?key=dcd2368c5d56c848&format=JSON&version=1";
$url = "https://api.paraglidable.com/?key=f2c79a68b6fe7830&format=JSON&version=1";
$jsonData = file_get_contents($url);
echo $jsonData;
?>
