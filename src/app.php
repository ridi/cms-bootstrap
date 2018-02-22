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

$app = new CmsApplication();

// Add some Silex service providers you need here.

$app['debug'] = $_ENV['DEBUG'];
$app['twig.path'] = __DIR__ . '/../view/';
return $app;
