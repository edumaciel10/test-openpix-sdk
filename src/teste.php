<?php

// requires autoload file
require_once __DIR__ . '/../vendor/autoload.php';

use OpenPix\PhpSdk\Client;

// creates a new client instance

$client = Client::create($argv[1]);

// generates a random uuid
function generateUUID() {
    if (function_exists('com_create_guid') === true) {
        return trim(com_create_guid(), '{}');
    }

    return sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff)
    );
}

function generateCPF() {
    $cpf = '';

    // Generate the first nine digits (random numbers)
    for ($i = 0; $i < 9; $i++) {
        $cpf .= mt_rand(0, 9);
    }

    // Calculate the first verification digit
    $sum = 0;
    for ($i = 0; $i < 9; $i++) {
        $sum += intval($cpf[$i]) * (10 - $i);
    }
    $digit1 = ($sum % 11 < 2) ? 0 : 11 - ($sum % 11);

    // Calculate the second verification digit
    $cpf .= $digit1;
    $sum = 0;
    for ($i = 0; $i < 10; $i++) {
        $sum += intval($cpf[$i]) * (11 - $i);
    }
    $digit2 = ($sum % 11 < 2) ? 0 : 11 - ($sum % 11);

    return $cpf . $digit2;
}

$cpf = generateCPF();

$customerData = [
    'name' => 'Eduzeraaa da SDK',
    'correlationID' => 'teste-customer-sdk-'.generateUUID(),
    'taxID' => $cpf,
];

// creates a new customer

try {
    $customer = $client->customers()->create($customerData);
    print_r($customer);


$uuid = 'teste-charge-sdk-'.generateUUID();

$chargeData = [
  'value' => 1000, // R$ 10,00
  'correlationID' => $uuid,
  'customer' => $customer,
];

// creates a new charge

$charge = $client->charges()->create($chargeData);

print_r($charge);

} catch (\Exception $e) {
    echo $e->getMessage();
}
