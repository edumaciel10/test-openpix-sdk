<?php

/** @var \OpenPix\PhpSdk\Client */
$client = require_once __DIR__ . "/../sdk/create-client.php";

$customer = [
    "name" => "Dan",
    "taxID" => generateCPF(),
    "email" => "email0@example.com",
    "phone" => "5511999999999",
    "correlationID" => "test-php-sdk-" . generateUUID(),
];

$client->customers()->create($customer);

$charge = [
    "value" => 1000, // Valor da cobrança. R$ 10,00
    "correlationID" => "test-php-sdk-charge-" . generateUUID(),
    "customer" => $customer, // Especificar o cliente da cobrança
];

$result = $client->charges()->create($charge);

dumpCommentedVar($result, "result");

echo "Request data:\n";
dumpData($charge);
