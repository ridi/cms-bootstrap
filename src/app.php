<?php

use Ridibooks\Cms\Thrift\ThriftService;
use Ridibooks\Cms\CmsApplication;

$autoloader = require_once __DIR__ . "/../vendor/autoload.php";

// Load a env file.
if (is_readable(__DIR__ . '/../.env')) {
    $dotenv = new Dotenv\Dotenv(__DIR__, '/../.env');
    $dotenv->load();
}

// Set rpc endpoint.
if (!empty($_ENV['CMS_RPC_URL'])) {
    ThriftService::setEndPoint($_ENV['CMS_RPC_URL']);
}

$config = [
    'twig.path' => [__DIR__ . '/../view/'],
    'debug' => $_ENV['DEBUG'],
    'twig.globals' => [
        'STATIC_URL' => '/static',
        'BOWER_PATH' => '/static/bower_components',
    ],
];

$app = new CmsApplication($config);

// Add some Silex service providers you need here.
return $app;
