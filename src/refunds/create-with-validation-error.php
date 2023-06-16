<?php

$client = require_once __DIR__ . "/../sdk/create-client.php";

$refund = [];

$result = $client->refunds()->create($refund);