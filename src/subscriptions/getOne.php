<?php

/** @var \OpenPix\PhpSdk\Client $client */
$client = require_once __DIR__ . "/../sdk/create-client.php";

$result = $client->subscriptions()->getOne("UGF5bWVudFN1YnNjcmlwdGlvbjo2NDhjYjBlODE3Y2QwNGYwMTMyNjYzMDQ=");

dumpCommentedVar($result, "result");