<?php

$client = require_once __DIR__ . "/../sdk/create-client.php";

$result = $client->customers()->getOne("test-php-sdk-8e7e3622-b209-46ef-b353-ec568e893177");

echo "Result:\n";
echo json_encode($result, JSON_PRETTY_PRINT) . "\n";