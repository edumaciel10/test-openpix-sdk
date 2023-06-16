<?php

/** @var \OpenPix\PhpSdk\Client */
$client = require_once __DIR__ . "/../sdk/create-client.php";

$paymentLinkID = "7777-6f71-427a-bf00-241681624586"; // ID do link de pagamento da cobrança.
$size = 1024; // Tamanho da imagem.

$result = $client->charges()->getQrCodeImageLink($paymentLinkID, $size);

dumpCommentedVar($result, "result");