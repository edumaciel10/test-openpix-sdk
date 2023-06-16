<?php

use OpenPix\PhpSdk\Client;

require_once __DIR__ . "/../../vendor/autoload.php";
require_once __DIR__ . "/helpers.php";

return Client::create($argv[1] ?? getenv("APP_ID") ?? die("Run script with php " . $argv[0] . " <your app id here>.\n"));