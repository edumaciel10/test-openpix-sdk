<?php

require_once __DIR__ . "/sdk/helpers.php";

$json = json_decode(<<<JSON
{
  "webhook": {
    "id": "V2ViaG9vazo2MDNlYmUxZWRlYjkzNWU4NmQyMmNmMTg=",
    "name": "webhookName",
    "url": "https://mycompany.com.br/webhook",
    "authorization": "openpix",
    "isActive": true,
    "event": "OPENPIX:TRANSACTION_RECEIVED",
    "createdAt": "2021-03-02T22:29:10.720Z",
    "updatedAt": "2021-03-02T22:29:10.720Z"
  }
}
JSON, true);

dumpCommentedVar($json, "result");
