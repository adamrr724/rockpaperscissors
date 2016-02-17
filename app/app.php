<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    	'twig.path' => __DIR__.'/../views'
    ));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get('/results', function() use ($app) {
        $Game = new RockPaperScissors();
        $result = $Game->playGame($_GET['player1'], $_GET['player2']);
        return $app['twig']->render('results.html.twig', array('results' => $result));
    });

    return $app;
?>
