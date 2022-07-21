<?php

/* ROOTING MAP*/

$uri = $_SERVER['REQUEST_URI'];
require_once '../vendor/altorouter/altorouter/AltoRouter.php';
$router = new AltoRouter();

$router->map('GET', '/', 'home');


$match = $router->match();

if (is_array($match)) {

    $params = $match['params'];

    if ($match['target'] === 'home') {
        include '../src/View/elements/header.php';
        include '../src/View/elements/jumbotron.php';
        include '../src/View/elements/afterjumbo.php';
        include '../src/View/elements/section3.php';
        include '../src/View/elements/toolbox.php';
        include '../src/View/elements/section5.php';
        include '../src/View/elements/projects.php';
        include '../src/View/elements/section6.php';
        include '../src/View/elements/footer.php';
    }

} else {
    include '../src/View/elements/404.php';
}
