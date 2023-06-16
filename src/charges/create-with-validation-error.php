<?php

$client = require_once __DIR__ . "/../sdk/create-client.php";

$charge = [];

$result = $client->charges()->create($charge);