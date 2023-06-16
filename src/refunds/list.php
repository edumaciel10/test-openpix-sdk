<?php

/** @var \OpenPix\PhpSdk\Client $client */
$client = require_once __DIR__ . "/../sdk/create-client.php";

$paginator = $client->refunds()->list();

$remainingRefunds = 10;

foreach ($paginator as $result) {
    foreach ($result["refunds"] as $key => $refund) {
        dumpCommentedVar($refund, "refunds[$key]");

        $remainingRefunds--;

        if ($remainingRefunds == 0) break 2;
    }
}
