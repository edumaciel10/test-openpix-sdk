<?php

$client = require_once __DIR__ . "/../sdk/create-client.php";

$result = $client->charges()->getOne("99469e5860384912927fa75bc976609a");

dumpCommentedVar($result, "result");