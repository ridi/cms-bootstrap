
<?php

use Ridibooks\Cms\Example\Controller\MyController;
use Ridibooks\Cms\CmsApplication;
use Ridibooks\Cms\MiniRouter;
use Symfony\Component\HttpFoundation\Request;

// Check an auth.
$app->before(function (Request $request) {
    return MiniRouter::shouldRedirectForLogin($request);
});

$app->get('/example/php/home', function (CmsApplication $app) {
    return $app['twig']->render('home.twig', [
        'name' => $_SESSION['session_admin_id']
    ]);
});

$app->mount('/example/php', new MyController());
