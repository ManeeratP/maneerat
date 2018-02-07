<?php
$access_token = 'tJLXQAkwYgzEaXDrpAEZDeXxuABoZDDw2TXMHGfYr5Xa+k2zFzibRIZ4zTzp1lKrkw2B2Z4cRV5G6ixEHjYHjbP9ojsh7Fe27ZOumXTqyKPL/8l4CgR4YANmkY6eRY3HM724x+AdsC0USTI8oD+m7wdB04t89/1O/w1cDnyilFU=
=
';

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