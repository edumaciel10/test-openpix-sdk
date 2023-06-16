<?php

/** @var \OpenPix\PhpSdk\Client $client */
$client = require_once __DIR__ . "/../sdk/create-client.php";

$result = $client->charges()->delete("test-php-sdk-charge-f258aa9a-0edd-41af-bf13-b70e91370137");

dumpCommentedVar($result, "result");