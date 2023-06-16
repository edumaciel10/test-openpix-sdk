<?php

/** @var \OpenPix\PhpSdk\Client $client */
$client = require_once __DIR__ . "/../sdk/create-client.php";

$result = $client->payments()->getOne("payment2");

dumpCommentedVar($result, "result");