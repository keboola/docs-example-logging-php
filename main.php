<?php

require("vendor/autoload.php");

$transport = new Gelf\Transport\TcpTransport(getenv('KBC_LOGGER_ADDR'), getenv('KBC_LOGGER_PORT'));
$logger = new \Gelf\Logger($transport);

$logger->emergency("A sample emergency message", ["some" => ["structured" => "data"]]);
