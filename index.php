<?php

// EXTERNAL API CALL TO GET DATA
$url = getenv('URL');

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);
curl_close($ch);

$users = json_decode($result, true);

// RETURN DATA WITH TIMESTAMP TO DETERMINE IF CACHED
$data = [
    'timestamp' => date('Y-m-d H:i:s', time()),
    'users' => $users,
];

echo json_encode($data);
