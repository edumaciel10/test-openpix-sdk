<?php

require_once __DIR__ . "/sdk/helpers.php";

$json = json_decode(<<<JSON
{
  "payment": {
    "value": 100,
    "status": "CONFIRMED",
    "destinationAlias": "c4249323-b4ca-43f2-8139-8232aab09b93",
    "comment": "payment comment",
    "correlationID": "payment1",
    "sourceAccountId": "my-source-account-id"
  },
  "transaction": {
    "value": 100,
    "endToEndId": "transaction-end-to-end-id",
    "time": "2023-03-20T13:14:17.000Z"
  },
  "destination": {
    "name": "Dan",
    "taxID": "31324227036",
    "pixKey": "c4249323-b4ca-43f2-8139-8232aab09b93",
    "bank": "A Bank",
    "branch": "1",
    "account": "123456"
  }
}
JSON, true);

dumpCommentedVar($json, "result");
