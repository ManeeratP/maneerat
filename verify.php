<?php
$access_token = Ehn3yoyNXL38qDYJ3dvIoOYLY3JTiJ4t52KhbqWEv/NY44uFEeklU38krlEpKBQokw2B2Z4cRV5G6ixEHjYHjbP9ojsh7Fe27ZOumXTqyKOs/VzZE78U6xeEnEw8jFd0xRApwKtUk0cYwCuoZS7LigdB04t89/1O/w1cDnyilFU=
;

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