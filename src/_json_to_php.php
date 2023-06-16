<?php

require_once __DIR__ . "/sdk/helpers.php";

$json = json_decode(<<<JSON
{
  "subscription": {
    "globalID": "UGF5bWVudFN1YnNjcmlwdGlvbjo2M2UzYjJiNzczZDNkOTNiY2RkMzI5OTM=",
    "customer": {
      "name": "Dan",
      "email": "email0@example.com",
      "phone": "5511999999999",
      "taxID": {
        "taxID": "31324227036",
        "type": "BR:CPF"
      }
    },
    "value": 100,
    "dayGenerateCharge": 5
  }
}
JSON, true);

dumpCommentedVar($json, "result");
