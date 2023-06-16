<?php

/** @var \OpenPix\PhpSdk\Client */
$client = require_once __DIR__ . "/../sdk/create-client.php";

$webhook = [
    "webhook" => [
        "name" => "webhookName (php-sdk)",
        "event" => "OPENPIX:CHARGE_CREATED",
        "url" => "https://example.com",
        "authorization" => "openpix-php-sdk",
        "isActive" => true,
    ],
];

$result = $client->webhooks()->create($webhook);

dumpCommentedVar($result, "result");

echo "Request data:\n";
dumpData($webhook);
