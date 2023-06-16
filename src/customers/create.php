<?php

$client = require_once __DIR__ . "/../sdk/create-client.php";

$customer = [
    "name" => "Dan",
    "taxID" => generateCPF(),
    "email" => "email0@example.com",
    "phone" => "5511999999999",
    "correlationID" => "test-php-sdk-" . generateUUID(),
];

$result = $client->customers()->create($customer);

echo "Result:\n";
echo json_encode($result, JSON_PRETTY_PRINT) . "\n";

echo "Request data:\n";
echo json_encode($customer, JSON_PRETTY_PRINT) . "\n";