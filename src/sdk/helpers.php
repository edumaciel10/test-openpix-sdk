<?php

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

function dumpArray($array)
{
    echo json_encode($array, JSON_PRETTY_PRINT) . "\n";
}