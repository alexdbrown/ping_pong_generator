<?php

    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/PingPongGenerator.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'

    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');

    });

    $app->get("/view_ping_pong", function() use ($app) {
        $my_pingPongGenerator = new PingPongGenerator;
        $ping_pong_array = $my_pingPongGenerator->generatePingPongArray($_GET['number']);
        return $app['twig']->render('results.html.twig', array('result' => $ping_pong_array));

    });

    return $app;

    ?>
