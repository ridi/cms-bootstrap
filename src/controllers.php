
<?php

use Ridibooks\Cms\Auth\LoginService;
use Ridibooks\Cms\Example\Controller\MyController;
use Ridibooks\Cms\CmsApplication;
use Ridibooks\Cms\MiniRouter;
use Symfony\Component\HttpFoundation\Request;

// Check an auth.
$app->before(function (Request $request) {
    return MiniRouter::shouldRedirectForLogin($request);
});

$app->get('/example/home', function (CmsApplication $app) {
    return $app['twig']->render('home.twig', [
        'name' => LoginService::GetAdminID()
    ]);
});

$app->mount('/example', new MyController());
