<?php

/** @var \OpenPix\PhpSdk\Client $client */
$client = require_once __DIR__ . "/../sdk/create-client.php";

$paginator = $client->transactions()->list([
    // Data de início usada na consulta. Em conformidade com RFC 3339. Opcional.
    // Exemplo: 2023-01-01T00:00:00Z
    "start" => (new DateTimeImmutable("2023-01-01", new DateTimeZone("UTC")))->format(DateTime::RFC3339),

    // Data de término usada na consulta. Em conformidade com RFC 3339. Opcional.
    // Exemplo: 2023-12-01T00:00:00Z
    "end" => (new DateTimeImmutable("2023-12-01", new DateTimeZone("UTC")))->format(DateTime::RFC3339),

    // Status da cobrança. Opcional.
    // Pode ser: "ACTIVE", "COMPLETED" ou "EXPIRED".
    "status" => "EXPIRED",
]);

$remainingTransactions = 10;

foreach ($paginator as $result) {
    foreach ($result["transactions"] as $key => $transaction) {
        dumpCommentedVar($transaction, "transactions[$key]");

        $remainingTransactions--;

        if ($remainingTransactions == 0) break 2;
    }
}