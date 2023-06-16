<?php

$client = require_once __DIR__ . "/../sdk/create-client.php";

$customer = [];

$result = $client->customers()->create($customer);