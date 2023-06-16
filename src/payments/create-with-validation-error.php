<?php

$client = require_once __DIR__ . "/../sdk/create-client.php";

$payment = [];

$result = $client->payments()->create($payment);