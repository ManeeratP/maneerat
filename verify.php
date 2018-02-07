<?php
$access_token = 'SvTsx4nzd/sfZysAkm88JP974yDcu97VGdrBYlkGgujxjegnWDdcfumtSQvwgmg7kw2B2Z4cRV5G6ixEHjYHjbP9ojsh7Fe27ZOumXTqyKOkkNpUuuJXlywtOigEyeOTUI32YTzFh9KzVrMX4GoiIAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>