<?php
$token = "26ea7b171ebc482b89102e2fd48e64a7";
$url = "https://api.instagram.com/v1/tags/ctpboston/media/recent?client_id=" . $token . "";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$result = curl_exec($ch);
curl_close($ch);
$result = json_decode($result);
?>
