<?php



$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => 'http://tools.local/posted.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => ['password' => 'xxxxxxx'],
]);

$response = curl_exec($ch);
curl_close($ch);