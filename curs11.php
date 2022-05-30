<?php

// Create cURL resorce
$curl = curl_init();

// Set cURL options
curl_setopt($curl, CURLOPT_URL, 'https://www.google.com');

// Run cURL (execute http request)
curl_exec($curl);


// Close cURL resorce
curl_close($curl);
