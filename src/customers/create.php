<?php

$client = require_once __DIR__ . "/../sdk/create-client.php";

$customer = [
    "name" => "PHP SDK",
    "taxID" => generateCPF(),
    "email" => "email0@example.com",
    "phone" => "5511999999999",
    "correlationID" => "test-php-sdk-" . generateUUID(),
];

$result = $client->customers()->create($customer);

echo "Result:\n";
dumpData($result);

echo "Request data:\n";
dumpData($customer);