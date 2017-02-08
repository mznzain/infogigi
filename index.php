<?php
require __DIR__ . '/vendor/autoload.php';

$configs =  [
    'settings' => ['displayErrorDetails' => true],
];

$app = new Slim\App($configs);

$app->run();