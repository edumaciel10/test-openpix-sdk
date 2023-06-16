<?php

/** @var \OpenPix\PhpSdk\Client $client */
$client = require_once __DIR__ . "/../sdk/create-client.php";

$paginator = $client->payments()->list();

$remainingPayments = 10;

foreach ($paginator as $result) {
    foreach ($result["payments"] as $key => $payment) {
        dumpCommentedVar($payment, "payments[$key]");

        $remainingPayments--;

        if ($remainingPayments == 0) break 2;
    }
}