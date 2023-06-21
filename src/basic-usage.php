<?php

/** @var \OpenPix\PhpSdk\Client */
$client = require_once __DIR__ . "/sdk/create-client.php";

// Create a customer.
$customer = [
    "name" => "Dan PHP-SDK",
    "taxID" => generateCPF(),
    "email" => "email0@example.com",
    "phone" => "5511999999999",
    "correlationID" => "test-php-sdk-" . generateUUID(),
];

$client->customers()->create($customer);

// Create a charge using above customer.
$charge = [
    // Charge value. 
    "value" => 1000, // (R$ 10,00)

    // Your correlation ID to keep track of this charge
    "correlationID" => "test-php-sdk-charge-" . generateUUID(),
    
    // Charge customer.
    "customer" => $customer,
];

$result = $client->charges()->create($charge);

// Get the generated dynamic BR code to be rendered as a QR Code. 
echo $result["brCode"] . "\n";

dumpCommentedVar($result, "result");

echo "Request data:\n";
dumpData($charge);
