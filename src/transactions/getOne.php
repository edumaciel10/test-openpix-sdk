<?php

$client = require_once __DIR__ . "/../sdk/create-client.php";

$result = $client->transactions()->getOne("E18236120202012032010s0133872GZA");

dumpCommentedVar($result, "result");