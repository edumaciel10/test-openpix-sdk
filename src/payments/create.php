<?php

/** @var \OpenPix\PhpSdk\Client */
$client = require_once __DIR__ . "/../sdk/create-client.php";

$payment = [
    "value" => 100,
    "destinationAlias" => "c4249323-b4ca-43f2-8139-8232aab09b93",
    "comment" => "payment comment (php-sdk)",
    "correlationID" => "payment2",
];

$result = $client->payments()->create($payment);

dumpCommentedVar($result, "result");

echo "Request data:\n";
dumpData($payment);
