<?php

/** @var \OpenPix\PhpSdk\Client $client */
$client = require_once __DIR__ . "/../sdk/create-client.php";

$result = $client->refunds()->getOne("Q2hhcmdlOjYwM2U3NDlhNDI1NjAyYmJiZjRlN2JlZA==");

dumpCommentedVar($result, "result");