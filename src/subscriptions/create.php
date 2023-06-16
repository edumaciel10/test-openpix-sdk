<?php

/** @var \OpenPix\PhpSdk\Client */
$client = require_once __DIR__ . "/../sdk/create-client.php";

$customer = [
    "name" => "Dan (php-sdk)",
    "taxID" => generateCPF(),
    "email" => "php-sdk0@example.com",
    "phone" => "5511999999999",
    "correlationID" => "test-php-sdk-" . generateUUID(),
];

// Criar o cliente da assinatura.
$client->customers()->create($customer);

$subscription = [
    "value" => 1000, // Valor da assinatura. R$ 10,00
    "customer" => $customer, // Especificar o cliente da assinatura

    // Dia do mês em que as cobranças serão geradas. Máximo de 27.
    // Padrão é 5.
    "dayGenerateCharge" => 5,
];

$result = $client->subscriptions()->create($subscription);

dumpCommentedVar($result, "result");

echo "Request data:\n";
dumpData($subscription);
