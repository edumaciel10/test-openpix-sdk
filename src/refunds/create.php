<?php

/** @var \OpenPix\PhpSdk\Client */
$client = require_once __DIR__ . "/../sdk/create-client.php";

$refund = [
    "transactionEndToEndId" => "9134e286-6f71-427a-bf00-241681624586",
    "correlationID" => "9134e286-6f71-427a-bf00-241681624586",
    "value" => 100,
    "comment" => "Comentário do reembolso",
];

$result = $client->refunds()->create($refund);

dumpCommentedVar($result, "result");

echo "Request data:\n";
dumpData($refund);
