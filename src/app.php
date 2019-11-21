<?php

use Ridibooks\Cms\Thrift\ThriftService;
use Ridibooks\Cms\CmsApplication;

$autoloader = require_once __DIR__ . "/../vendor/autoload.php";

// Load a env file.
if (is_readable(__DIR__ . '/../.env')) {
    $dotenv = new Dotenv\Dotenv(__DIR__, '/../.env');
    $dotenv->load();
}

$config = [
    'twig.path' => [__DIR__ . '/../view/'],
    'debug' => $_ENV['DEBUG'],
    'twig.globals' => [
        'STATIC_URL' => '/static',
        'BOWER_PATH' => '/static/bower_components',
    ],
    'thrift.rpc_url' => $_ENV['CMS_RPC_URL'],
    'thrift.rpc_secret' => $_ENV['CMS_RPC_SECRET'] ?? '',
    'auth.cf_access_domain' => $_ENV['CF_ACCESS_DOMAIN'] ?? '',
    'auth.cf_audience_tag' => $_ENV['CF_AUDIENCE_TAG'] ?? '',
    'auth.test_id' => $_ENV['CMS_TEST_ID'] ?? '',
];

$app = new CmsApplication($config);

// Add some Silex service providers you need here.
return $app;
