<?php

require_once __DIR__ . "/sdk/helpers.php";

$json = json_decode(<<<JSON
{
  "transaction": {
    "customer": {
      "name": "Dan",
      "email": "email0@example.com",
      "phone": "5511999999999",
      "taxID": {
        "taxID": "31324227036",
        "type": "BR:CPF"
      },
      "correlationID": "9134e286-6f71-427a-bf00-241681624586"
    },
    "payer": {
      "name": "Dan",
      "email": "email0@example.com",
      "phone": "5511999999999",
      "taxID": {
        "taxID": "31324227036",
        "type": "BR:CPF"
      },
      "correlationID": "9134e286-6f71-427a-bf00-241681624586"
    },
    "charge": {
      "status": "ACTIVE",
      "customer": "603f81fcc6bccc24326ffb43",
      "correlationID": "9134e286-6f71-427a-bf00-241681624586",
      "createdAt": "2021-03-03T12:33:00.546Z",
      "updatedAt": "2021-03-03T12:33:00.546Z"
    },
    "withdraw": {
      "value": 100,
      "time": "2021-03-03T12:33:00.536Z",
      "infoPagador": "payer info 1",
      "endToEndId": "E18236120202012032010s01345689XBY",
      "createdAt": "2021-03-03T12:33:00.546Z"
    },
    "infoPagador": "payer info 0",
    "value": 100,
    "time": "2021-03-03T12:33:00.536Z",
    "transactionID": "transactionID",
    "type": "PAYMENT",
    "endToEndId": "E18236120202012032010s0133872GZA",
    "globalID": "UGl4VHJhbnNhY3Rpb246NzE5MWYxYjAyMDQ2YmY1ZjUzZGNmYTBi"
  }
}
JSON, true);

dumpCommentedVar($json, "result");
