<?php

/** @var \OpenPix\PhpSdk\Client $client */
$client = require_once __DIR__ . "/../sdk/create-client.php";

$paginator = $client->customers()->list();

$remainingCustomers = 10;

foreach ($paginator as $result) {
    foreach ($result["customers"] as $customer) {
        dumpArray($customer);

        $remainingCustomers--;

        if ($remainingCustomers == 0) break 2;
    }
}