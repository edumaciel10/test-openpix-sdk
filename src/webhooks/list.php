<?php

/** @var \OpenPix\PhpSdk\Client $client */
$client = require_once __DIR__ . "/../sdk/create-client.php";

$paginator = $client->webhooks()->list("https://example.com");

$remainingWebhooks = 10;

foreach ($paginator as $result) {
    foreach ($result["webhooks"] as $key => $webhook) {
        dumpCommentedVar($webhook, "webhooks[$key]");

        $remainingWebhooks--;

        if ($remainingWebhooks == 0) break 2;
    }
}
