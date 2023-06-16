<?php

require_once __DIR__ . "/sdk/helpers.php";

$json = json_decode(<<<JSON
{
  "pixTransactionRefund": {
    "value": 100,
    "correlationID": "7777-6f71-427a-bf00-241681624586",
    "refundId": "11bf5b37e0b842e08dcfdc8c4aefc000",
    "returnIdentification": "D09089356202108032000a543e325902",
    "comment": "Comentário do reembolso"
  }
}
JSON, true);

dumpCommentedVar($json, "result");
