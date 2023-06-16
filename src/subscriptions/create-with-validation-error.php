<?php

$client = require_once __DIR__ . "/../sdk/create-client.php";

$subscription = [];

$result = $client->subscriptions()->create($subscription);

dumpCommentedVar($result, "result");